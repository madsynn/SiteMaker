<?php




     dd($request->productFeature);
     dd($product->features());
     dd($product->features);
        dd($product->prices());

     0 => "feature_name"
       1 => "useicon"
       2 => "icon"
       3 => "created_at"
       4 => "updated_at"

if(!empty($request->features())){
 var_dump($product->features());
}

     if ($request->has('productFeatures')){
         print_r("it has productFeatures");
     }
        $price = Input::get('price');


     //dd($request->all());
     if (!empty($request->productFeatures))
     {
         //$useicon = Input::get('useicon');

         foreach ($request->productFeatures as $productFeature)
         {
             $useicon = Input::get('useicon');
             $productFeature  = new ProductFeature(Input::all());
             // $productFeature['feature_name'] = $request->input('feature_name');
             $productFeature['feature_name'] = $request->input('feature_name');
             $productFeature->product_id = $product->id;
             $productFeature->useicon = $useicon;
//               $productFeature->icon = $request->input('icon');
//
             $product->productFeatures()->save($productFeature);
         }
     }

     if(!empty($request->feature_name)){
         foreach($request->feature_name as $feature){
             $productFeature =  ProductFeature::create([
                 'product_id' => $product->id,
                 'feature_name' => $feature[2],
                 'useicon' => $feature[3],
                 'icon' => $feature[4]
                 ]);
         }
     }


$productPrice = new App\Models\Price();
$product = new App\Models\Product([
    'name' => 'grace frame',
    'details' => 'Lorem ipsum dolor',
    'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
    ]);

$product->prices()->save($productPrice);

    public function setPricesAttributes($prices)
    {
        $this->attributes['product_id'] = $product->id;
        $this->attributes['price'] = $price;
        $this->attributes['model'] = $model;
        $this->attributes['sku'] = $sku;
        $this->attributes['upc'] = $upc;
        $this->attributes['alt_details'] = $alt_details;
        $this->attributes['title'] = $title;
      }


        'prices[title]' => 'string',
        'prices[price]' => 'string',
        'prices[model]' => 'string',
        'prices[sku]' => 'string',
        'prices[upc]' => 'string',
        'prices[quantity]' => 'number',






 public function input($key = null, $default = null)
 {
     $input = $this->getInputSource()->all();

     return data_get($input, $key, $default);
 }


// The price will be saved to the database:
$product = new App\Models\Product(['price' => 5000]);
$product->save();
// The price will NOT be saved to the database:
$product = new App\Models\Product;
$product->price = 1000; // Circumventing Eloquent's magic because $price is public
$product->save();

$product = new App\Models\Product(['name' => 'grace frame', 'details' => 'Lorem ipsum dolor', 'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.']); $product->save();
$product->save();


$productPrice = new App\Models\Price(['product_id' => $product->id, 'price' => 5000, 'quantity' => 19, 'model' => 'PO10-1']);
$product->prices()->save($productPrice);
$productPrice = new App\Models\Price(['product_id' => $product->id, 'price' => 1500, 'quantity' => 27, 'model' => 'PO10-2']);
$product->prices()->save($productPrice);
$productPrice = new App\Models\Price(['product_id' => $product->id, 'price' => 4532, 'quantity' => 160, 'model' => 'PO10-3']);
$product->prices()->save($productPrice);



// $product->prices() = new App\Models\Price(['price' => 5000]);
// $product->prices()->save($product->prices);
// The price will NOT be saved to the database:
$product = new App\Models\Price;
$product->price = 1000; // Circumventing Eloquent's magic because $price is public
$product->save();



    class Price
    {
        private $amount;
        public static function fromAmount($amount)
        {
                if(!is_int($amount))
                {
                    throw new \InvalidArgumentException('Amount must be an integer');
                }
            $price = new static;
            $price->amount = $amount;
            return $price;
        }

        public function getAmount()
        {
            return $this->amount;
        }

        public function add(Price $other)
        {
            return Price::fromAmount($this->amount + $other->amount);
        }
    }





$parentKey = $parent->getKey();

$parentKeyName = $parent->relation()->getForeignKey();

$except = [
  $this->getKeyName(),
  $this->getCreatedAtColumn(),
  $this->getUpdatedAtColumn()
];

$newModels = [];

foreach ($models as $model)
{
  $attributes = $model->getAttributes();

  $attributes[$parentKeyName] = $parentKey;

  $newModels[] = array_except($attributes, $except);
}

$table = $parent->relation()->getRelated()->getTable();

DB::table($table)->insert($newModels);








     product_id: 26,
     price: 4532,
     quantity: 160,
     model: "PO10-3",
     updated_at: "2016-09-22 21:49:28",
     created_at: "2016-09-22 21:49:28",
     id: 6,
     product: App\Models\Product {#1217
       id: 26,
       status: null,
       office_status: null,
       availability: "Available",
       slug: "grace-frame",
       ispromo: 0,
       is_published: 1,
       name: "grace frame",
       subtitle: null,
       manufacturer: "The Grace Company",
       details: "Lorem ipsum dolor",
       description: "Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
       price_heading: null,
       features_heading: null,
       additional_heading: null,
       reviews_heading: null,
       thumbnail: null,
       thumbnail2: null,
       photo_album: null,
       pubished_at: "0000-00-00 00:00:00",
       video_url: null,
       meta_title: null,
       meta_description: null,
       meta_keywords: null,
       facebook_title: null,
       google_plus_title: null,
       twitter_title: null,
       lang: "",
       created_at: "2016-09-22 21:46:58",
       updated_at: "2016-09-22 21:49:28",
       deleted_at: null,







        dd($request->input());

     $product = new Product();
     $product->category_id = $request->category_id;
     $product->name = $request->name;
     $product->prices->price = $request->price;
     $product->prices()->save($product);

     $product->push();


     $prices = new Price();
     $product->images()->save($image);



     if ($request->has('prices')){
         foreach ($request->prices as $pricing) {
             if (!empty($pricing['name'])) {
                 $price = Price::create([
                     'product_id' => $product->id,
                     'title' => $pricing['title'],
                     'price' => $pricing['price'],
                     'model' => $pricing['model'],
                     'sku' => $pricing['sku'],
                     'upc' => $pricing['upc'],
                     'quantity' => $pricing['quantity'],
                     'alt_details' => $pricing['alt_details']

                 ]);
//
             }
         }
     }
//dd(Input::all());
        //$product->prices->price = Input::get('price');
    //  $product_description = Input::get('description');

     $price = new App\Models\Price(['message' => 'A new comment.']);

     $post = App\Post::find(1);

     $post->comments()->save($comment);

     $item= Item::where('name', $result->name)->firstOrFail();
     $variant = $item->variants()->where('text', $result->variant)->get();
     $variant->price = $result->price;
     $item->save();

     $variant = $item->variants()->where('text', $result->variant)->update(['price' => $price]);

     $product->variants()->delete();



     for ($i = 0; $i < count($request->get('text')); $i++) {
         if ($request->get('text')[$i] != "") { // it's not a blank variant
             $variantsDb[] = new ProductVariant([
                 'price' => $request->get('price')[$i],
                 'text' => $request->get('text')[$i]]);
         }
     }
     $product->variants()->saveMany($variantsDb);


     $pricesToDb = [];
//        foreach ($request->get('prices[]') as $price) {
     foreach ($request->prices as $price) {
         $pricesToDb = new Price([
             ['product_id' => $product->id,
                 'price' => 5000,
                 'quantity' => 19,
                 'model' => 'PO10-1'
             ]
         ]);
     }
     $product->images()->saveMany($imagesDb);

     if ($product->prices->count() > 0){}

//        $product = Product::firstOrCreate(['name' => $data[0], 'seo_name' => $seo_name]);
//
//
     if ($request->has('prices')){

         $pricesToDb = [];
         foreach($request->prices as $data){

             $product_prices_id    = $product->id;
             $product_prices_title = Input::get('title');
             $product_prices_price = Input::get('price');
             $product_prices_model = Input::get('model');
             $product_prices_sku   = Input::get('sku');
             $product_prices_upc   = Input::get('upc');
             $product_prices_quantity = Input::get('quantity');
             $product_prices_alt_details = Input::get('alt_details');

             $pricesToDb = new Price([
                 ['product_id' => $product->id,
                     'price' => 5000,
                     'quantity' => 19,
                     'model' => 'PO10-1'
                 ]
             ]);
         }
         $product->images()->saveMany($imagesDb);

     }


     for ($i = 0; $i < count($request->get('text')); $i++) {
         if ($request->get('text')[$i] != "") { // it's not a blank variant
             $variantsDb[] = new ProductVariant([
                 'price' => $request->get('price')[$i],
                 'text' => $request->get('text')[$i]]);
         }
     }
     $product->variants()->saveMany($variantsDb);


     if ($request->has('prices'))
     {
         foreach ($request->prices as $pricing)
         {

             $product_prices_id = $product->id;
             $product_prices_title = Input::get('title');
             $product_prices_price = Input::get('price');
             $product_prices_model = Input::get('model');
             $product_prices_sku = Input::get('sku');
             $product_prices_upc = Input::get('upc');
             $product_prices_quantity = Input::get('quantity');
             $product_prices_alt_details = Input::get('alt_details');

                 $product_id = DB::table('prices')->insertGetId([
                     'product_id' => $product_prices_id,
                     'title' => $product_prices_title,
                     'price' => $product_prices_price,
                     'model' => $product_prices_model,
                     'sku' => $product_prices_sku,
                     'upc' => $product_prices_upc,
                     'quantity' => $product_prices_quantity,
                     'alt_details' =>$product_prices_alt_details
                 ]);
         }
     }

if(empty($product))
        {}


     $post->comments()->saveMany([
         new App\Comment(['message' => 'A new comment.']),
         new App\Comment(['message' => 'Another comment.']),
     ]);

     dd($request->productFeature);
     dd($product->features());
     dd($product->features);
        dd($product->prices());

     0 => "feature_name"
       1 => "useicon"
       2 => "icon"
       3 => "created_at"
       4 => "updated_at"

if(!empty($request->features())){
 var_dump($product->features());
}

     if ($request->has('productFeatures')){
         print_r("it has productFeatures");
     }
        $price = Input::get('price');


     //dd($request->all());
     if (!empty($request->productFeatures))
     {
         //$useicon = Input::get('useicon');

         foreach ($request->productFeatures as $productFeature)
         {
             $useicon = Input::get('useicon');
             $productFeature  = new ProductFeature(Input::all());
             // $productFeature['feature_name'] = $request->input('feature_name');
             $productFeature['feature_name'] = $request->input('feature_name');
             $productFeature->product_id = $product->id;
             $productFeature->useicon = $useicon;
//               $productFeature->icon = $request->input('icon');
//
             $product->productFeatures()->save($productFeature);
         }
     }

     if(!empty($request->feature_name)){
         foreach($request->feature_name as $feature){
             $productFeature =  ProductFeature::create([
                 'product_id' => $product->id,
                 'feature_name' => $feature[2],
                 'useicon' => $feature[3],
                 'icon' => $feature[4]
                 ]);
         }
     }
