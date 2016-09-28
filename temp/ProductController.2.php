<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use DB;
use Input;
use Hash;
use Validator;
use Auth;


class ProductController extends BaseController
{

    public function dropDown()
    {
        if(Auth::user()->role=='Administrator' || Auth::user()->role=='Manager' )
        {
        $categories = DB::table('parent_categories')->get();
        $subcategories = DB::table('sub_categories')->get();


        return view('/create_product', ['categories' => $categories, 'subcategories' => $subcategories]);
        }
        else
        {

            return redirect('/administrator/orders');


        }

    }


    public function store(Request $request)
    {

        if(env('WRITE_ACCESS')==false)
        {
            \Session::flash('success-msg', 'Disabled In Demo');

            return redirect()->back();
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'category' => 'required',
            'subcategory' => 'required',
            'price' => 'required',
            'offer_price' => 'required',
            'image' => 'required',
            'status' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/administrator/create_product')
                ->withErrors($validator)
                ->withInput();
        }

        $product_name = Input::get('name');
        $product_category = Input::get('category');
        $product_subcategory = Input::get('subcategory');
        $product_price = Input::get('price');
        $product_status = Input::get('status');
        $product_offer_price = Input::get('offer_price');
        $destinationPath = public_path('assets/img');

        $product_description = Input::get('description');

        foreach ($request->file('image') as $file) {
            $rules = array('file' => 'required|image'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
            $validator = Validator::make(array('file' => $file), $rules);
            if (!$validator->passes()) {
                return redirect('/administrator/create_product')
                    ->withErrors($validator)
                    ->withInput();
            }
        }

        $product_id = DB::table('products')->insertGetId(
            ['name' => $product_name, 'category' => $product_category, 'subcategory' => $product_subcategory, 'price' => $product_price, 'offer_price' => $product_offer_price, 'status' => $product_status, 'description' => $product_description]
        );

        foreach ($request->file('image') as $file) {

            $extension = $file->getClientOriginalExtension();
            $name = uniqid() . '_img.' . $extension;
            $file->move($destinationPath, $name);
            $filename = '/assets/img/' . $name;
            DB::table('product_images')->insert(
                ['product_id' => $product_id, 'image' => $filename]
            );

        }

        \Session::flash('success-msg', 'Successfully Added');

        return redirect('/administrator/create_product');

    }

    public function show()
    {
        if(Auth::user()->role=='Administrator' || Auth::user()->role=='Manager' )
        {
        $products = DB::table('products')->get();

        foreach ($products as $product) {
            $product_images = DB::table('product_images')
                ->where('product_id', $product->id)
                ->get();

            $product->images = $product_images;
        }


        return view('products', ['products' => $products]);
        }
        else
        {

            return redirect('/administrator/orders');


        }


    }

    public function edit($id)
    {
        if(Auth::user()->role=='Administrator' || Auth::user()->role=='Manager' )
        {
        $products = DB::table('products')->where('id', '=', $id)->first();
        $subcategories = DB::table('sub_categories')->get();
        $categories = DB::table('parent_categories')->get();


        return view('edit_product', ['product' => $products, 'categories' => $categories, 'subcategories' => $subcategories]);
        }
        else
        {

            return redirect('/administrator/orders');


        }

    }

    public function update($id, Request $request)
    {
        if(env('WRITE_ACCESS')==false)
        {
            \Session::flash('success-msg', 'Disabled In Demo');

            return redirect()->back();
        }
        $validator = Validator::make(Input::all(), [
            'name' => 'required',
            'category' => 'required',
            'subcategory' => 'required',
            'price' => 'required',
            'offer_price' => 'required',
            'status' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/administrator/edit_product/' . $id)
                ->withErrors($validator)
                ->withInput();
        }

        $product_name = Input::get('name');
        $product_category = Input::get('category');
        $product_subcategory = Input::get('subcategory');
        $product_price = Input::get('price');
        $product_status = Input::get('status');
        $product_offer_price = Input::get('offer_price');
        $image = $request->file('image','null');
        $product_description = Input::get('description');
        $destinationPath = public_path('assets/img');


        DB::table('products')->where('id', $id)->update(
            ['name' => $product_name, 'category' => $product_category, 'subcategory' => $product_subcategory, 'price' => $product_price, 'offer_price' => $product_offer_price, 'status' => $product_status, 'description' => $product_description]
        );

     if($image[0] != null) {
    DB::table('product_images')->where('product_id', '=', $id)->delete();
    foreach ($request->file('image') as $file) {


        $extension = $file->getClientOriginalExtension();
        $name = uniqid() . '_img.' . $extension;
        $file->move($destinationPath, $name);
        $filename = '/assets/img/' . $name;
        DB::table('product_images')->insert(
            ['product_id' => $id, 'image' => $filename]
        );

    }
}
        \Session::flash('success-msg', 'Successfully Edited');
        return redirect()->back();

    }

    public function delete($id)
    {
        if(env('WRITE_ACCESS')==false)
        {
            \Session::flash('success-msg', 'Disabled In Demo');

            return redirect()->back();
        }
        if(Auth::user()->role=='Administrator' || Auth::user()->role=='Manager' )
        {
        DB::table('products')->where('id', '=', $id)->delete();

        DB::table('product_images')->where('product_id', '=', $id)->delete();


        return redirect('/administrator/products');
        }
        else
        {

            return redirect('/administrator/orders');


        }


    }
}

