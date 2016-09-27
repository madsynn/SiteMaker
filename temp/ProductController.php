<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Section;
use App\Models\Category;
use App\Models\AlbumPhoto;
use App\Models\CategoryProduct;
use App\Models\Option;
use App\Models\OptionValue;
use App\Models\OrderProduct;

use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\ProductFeature;
use Input;
use File;
use Redirect;
use DB;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App;
use Session;
use \Illuminate\Database\Eloquent\Collection;
use App\Ecommerce\helperFunctions;
use Symfony\Component\VarDumper\Dumper\DataDumperInterface;

/**
 * @Controller(domain="grace.reset")
 *
 */

class ProductController extends Controller
{
	public function __construct()
	{

		$this->middleware('sentinel.auth', ['except' => [
			'index',
			'show',
			'search'
		]]);
	}



	public function index()
	{
		// $products = Product::orderBy('name', 'asc')->take(6)->get();

		$new_products = Product::orderBy('created_at', 'desc')->take(12)->get();
		$get_best_sellers = OrderProduct::select('product_id', \DB::raw('COUNT(product_id) as count'))->groupBy('product_id')->orderBy('count', 'desc')->take(8)->get();
		$best_sellers = [];
		foreach($get_best_sellers as $product){
			$best_sellers[] = $product->product;
		}
		//helperFunctions::getPageInfo($sections,$cart,$total);
		return view('frontend.shop.index', compact('new_products', 'best_sellers', 'sections', 'cart', 'total'));
	}

	public function show($id, $slug = null)
	{
		$product = Product::findBySlugOrIdOrFail($id);

		//$product_categories = $product->categories()->lists('id')->toArray();

		// dd($product, $product->features, $product->categories, $product->prices, $product->options, $product->variants);
		$similair = Category::find($product_categories[array_rand($product_categories)])->products()->whereNotIn('id', [$id])->orderByRaw('RAND()')->take(6)->get();

		return view('frontend.shop.product', compact('sections', 'product', 'similair', 'cart', 'total'));
	}

	public function store(Request $request)
	{
		/**
		 * Validate the submitted Data
		 */
		$this->validate($request, [
		'name' => 'required'
			//'manufacturer' => 'required',
			//'price' => 'required',
			//'details' => 'required',
			//'quantity' => 'required',
			//'categories' => 'required',
			//'thumbnail' => 'required|image',
		]);

		if ($request->hasFile('album')) {
			foreach ($request->album as $photo) {
				if ($photo && strpos($photo->getMimeType(), 'image') === false) {
					return \Redirect()->back();
				}
			}
		}

		/**
		 * Upload a new thumbnail
		 */


		$dest = "content/images/";
		$name = str_random(11)."_".$request->file('thumbnail')->getClientOriginalName();
		$request->file('thumbnail')->move($dest, $name);
		$product = $request->all();
		$product['thumbnail'] = "/".$dest.$name;


		//		$dest = "remove/";
//		$name  = str_random(11) . '_' . $request->file('thumbnail')->getClientOriginalName();
//		$request->file('thumbnail')->move($dest, $name);
//		$name2 = str_random(11) . '_' . $request->file('thumbnail2')->getClientOriginalName();
//		$request->file('thumbnail2')->move($dest, $name2);
//		$name3  = str_random(11) . '_' . $request->file('thumbnail3')->getClientOriginalName();
//		$request->file('thumbnail3')->move($dest, $name3);
//
//	$product = $request->all();

//		$product['thumbnail'] = '/' . $dest . $name;
//		$product['thumbnail2'] = '/' . $dest . $name2;
//		$product['thumbnail3'] = '/' . $dest . $name3;





		$product = Product::create($product);


		/**
		 * Upload Album Photos
		 */
		if ($request->hasFile('album')) {
			foreach ($request->album as $photo) {
				if ($photo) {
					$name = str_random(11)."_".$photo->getClientOriginalName();
					$photo->move($dest, $name);
					AlbumPhoto::create([
						'product_id' => $product->id,
						'photo_src' => "/".$dest.$name
					]);
				}
			}
		}


		/**
		 * Linking the categories to the product
		 */

		foreach ($request->categories as $category_id) {
			CategoryProduct::create(['category_id' => $category_id, 'product_id' => $product->id]);
		}


		/**
		 * Linking the options to the product
		 */

		if ($request->has('options')){
			foreach ($request->options as $option_details) {
				if (!empty($option_details['name']) && !empty($option_details['values'][0]) ) {
					$option = Option::create([
						'name' => $option_details['name'],
						'product_id' => $product->id
					]);
					foreach ($option_details['values'] as $value) {
						OptionValue::create([
							'value' => $value,
							'option_id' => $option->id
						]);
					}
				}
			}
		}

		if(!empty($request->attribute_name)){
			foreach($request->attribute_name as $key => $item){
				$productVariant = new ProductVariant();
				$productVariant->attribute_name = $item;
				$productVariant->product_attribute_value = $request->product_attribute_value[$key];
				$product->productVariants()->save($productVariant);
			}
		}

		if(!empty($request->feature_name)){
			foreach($request->feature_name as $feature){
				$productFeature = new ProductFeature();
				$productFeature->feature_name = $feature;
				$product->productFeatures()->save($productFeature);

			}
		}


		//FlashAlert()->success('Success!', 'The Product Was Successfully Added');

		return \Redirect(getLang() . '/admin/products');
	}

	public function edit(Request $request, $id)
	{
		$product = Product::find($id);
		/**
		 * Validate the submitted Data
		 */
		$this->validate($request, [
			//'name' => 'required',
//			'manufacturer' => 'required',
//			'price' => 'required',
//			'details' => 'required',
//			'quantity' => 'required',
//			'categories' => 'required',
//			'thumbnail' => 'image',
		]);
		if ($request->hasFile('album')) {
			foreach ($request->album as $photo) {
				if ($photo && strpos($photo->getMimeType(), 'image') === false) {
					return \Redirect()->back();
				}
			}
		}

		/**
		 * Remove the old categories from the pivot table and maintain the reused ones
		 */
		$added_categories = [];
		foreach ($product->categories as $category) {
			if (!in_array($category->id, $request->categories)) {
				CategoryProduct::whereProduct_id($product->id)->whereCategory_id($category->id)->delete();
			} else {
				$added_categories[] = $category->id;
			}
		}

		/**
		 * Link the new categories to the pivot table
		 */
		foreach ($request->categories as $category_id) {
			if (!in_array($category_id, $added_categories)) {
				CategoryProduct::create(['category_id' => $category_id, 'product_id' => $product->id]);
			}
		}

		$info = $request->all();

		/**
		 * Upload a new thumbnail and delete the old one
		 */
		$dest = "content/images/";
		if ($request->file('thumbnail')) {
			File::delete(public_path().$product->thumbnail);
			$name = str_random(11)."_".$request->file('thumbnail')->getClientOriginalName();
			$request->file('thumbnail')->move($dest, $name);
			$info['thumbnail'] = "/".$dest.$name;
		}
		/**
		 * Upload Album Photos
		 */
		if ($request->hasFile('album')) {
			foreach ($request->album as $photo) {
				if ($photo) {
					$name = str_random(11)."_".$photo->getClientOriginalName();
					$photo->move($dest, $name);
					AlbumPhoto::create([
						'product_id' => $product->id,
						'photo_src' => "/".$dest.$name
					]);
				}
			}
		}

		$product->update($info);

		/**
		 * Linking the options to the product
		 */

		if ($request->has('options')){
			foreach ($request->options as $option_details) {
				if (!empty($option_details['name']) && !empty($option_details['values']['name'][0]) ) {
					if (isset($option_details['id']))
					{
						$size = count($option_details['values']['id']);
						Option::find($option_details['id'])->update(['name' => $option_details['name']]);
						foreach ($option_details['values']['name'] as $key => $value) {
							if ($key < $size)
							{
								OptionValue::find($option_details['values']['id'][$key])->update(['value' => $value]);
							}
							else
							{
								OptionValue::create([
									'value' => $value,
									'option_id' => $option_details['id']
								]);
							}
						}
					}
					else
					{
						$option = Option::create([
							'name' => $option_details['name'],
							'product_id' => $product->id
						]);
						foreach ($option_details['values']['name'] as $value) {
							if (!empty($value)) {
								OptionValue::create([
									'value' => $value,
									'option_id' => $option->id
								]);
							}
						}
					}
				}
			}
		}



		return \Redirect()->back()->with([
			'flash_message' => 'Product Successfully Modified'
		]);
	}

	public function delete($id)
	{
		$product = Product::find($id);

		/**
		 * Remove the product , all its linked categories and delete the thumbnail
		 */
		File::delete(public_path().$product->thumbnail);
		CategoryProduct::whereProduct_id($id)->delete();
		$product->delete();
		return \Redirect::back();
	}

	public function deletePhoto($id, $photo_id)
	{
		$photo = AlbumPhoto::find($photo_id);
		File::delete(public_path().$photo->photo_src);
		AlbumPhoto::destroy($photo_id);
		return \Redirect()->back();
	}

	public function deleteOption($id)
	{
		Option::destroy($id);
		return \Redirect()->back();
	}

	public function deleteOptionValue($id)
	{
		OptionValue::destroy($id);
		return \Redirect()->back();
	}

//	public function search(Request $request)
//	{
//		if (strtoupper($request->sort) == 'NEWEST') {
//			$products = Product::where('name', 'like', '%'.$request->q.'%')->orderBy('created_at', 'desc')->paginate(40);
//		} elseif (strtoupper($request->sort) == 'HIGHEST') {
//			$products = Product::where('name', 'like', '%'.$request->q.'%')->orderBy('price', 'desc')->paginate(40);
//		} elseif (strtoupper($request->sort) == 'LOWEST') {
//			$products = Product::where('name', 'like', '%'.$request->q.'%')->orderBy('price', 'asc')->paginate(40);
//		} else {
//			$products = Product::where('name', 'like', '%'.$request->q.'%')->paginate(40);
//		}
//		helperFunctions::getPageInfo($sections,$cart,$total);
//		$query = $request->q;
//		return view('site.search', compact('sections', 'cart', 'total', 'products', 'query'));
//	}

	public function input($key = null, $default = null)
	{
		$input = $this->getInputSource()->all();

		return data_get($input, $key, $default);
	}

	/**
	 * @param $id
	 *
	 * @return mixed
	 */
	public function togglePublish($id)
	{
		$product = Product::find($id);

		$product->is_published = ($product->is_published) ? false : true;
		$product->save();

		return Response::json(array('result' => 'success', 'changed' => ($product->is_published) ? 1 : 0));
	}



//	public function getTest()
//	{
////		$products = Product::all()->toArray();
//		$products = Product::orderBy('created_at', 'desc')->get();
//		return view('frontend.shop.testindex');
//	}


}
