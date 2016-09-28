<?php

namespace App\Models;


//use Illuminate\Container\Container;
//use Illuminate\Support\Collection;
//use Illuminate\Support\Facades\Session;
//use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;


//use App\Models\User;
//use App\Models\Category;
//use App\Models\AlbumPhoto;
//use App\Models\CategoryProduct;
//use App\Models\Option;
//use App\Models\OptionValue;
//use App\Models\OrderProduct;
//use App\Models\Price;
//use App\Models\Product;
//use App\Models\ProductVariant;
//use App\Models\ProductFeature;


use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;


/**
 * @Bind("products")
 */
class Product extends Model implements SluggableInterface
{

    use SluggableTrait;

    /**
     * @var string
     */
    protected $table = 'products';
    protected $guarded = ['id'];

	public $prices;



    /**
     * @var array
     */
  protected $fillable = ['id', 'slug', 'ispromo', 'is_published', 'name', 'subtitle', 'details',
    'description', 'status', 'thumbnail', 'thumbnail2', 'thumbnail3', 'photo_album', 'pubished_at', 'video_url', 'lang',
    'manufacturer', 'category_id', 'meta_title', 'meta_description', 'facebook_title', 'google_plus_title', 'twitter_title', 'office_status', 'availability', 'price',
    'quantity', 'sku', 'upc', 'moel', 'features_heading', 'price_heading', 'review_heading', 'additional_heading', 'meta_keywords'];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
  protected $casts = [
    'ispromo' => 'boolean',
    'is_published' => 'boolean',
    'availability' => 'string',
    'manufacturer' => 'string',
    'status' => 'string',
    'office_status' => 'string',
    'price' => 'string',
    'quantity' => 'string',
    'model' => 'string',
    'sku' => 'string',
    'upc' => 'string',
    'name' => 'string',
    'subtitle' => 'string',
    'description' => 'string',
    'category' => 'string',
    'meta_title' => 'string',
    'meta_description' => 'string',
    'meta_keywords' => 'string',
    'facebook_title' => 'string',
    'google_plus_title' => 'string',
    'twitter_title' => 'string',
    'video_url' => 'string',
    'tracking' => 'string',
    'datalayer' => 'string',
    'price_heading'  => 'string',
    'features_heading'  => 'string',
    'review_heading'  => 'string',
    'additional_heading' => 'string'
  ];


	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public static $rules = [

		'name' => 'required',
		'slug' => 'required'
	];



	/**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['pubished_at', 'deleted_at'];

    /**
     * @var array
     */
    protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug'
    ];

	/**
	 * Configure the Model
	 **/
	public function model()
	{
		return Product::class;
	}

  public function getPriceAttribute($price)
  {
    return '$'. number_format($price, 2, '.', '');
  }



    // public function setUrlAttribute($value)
    // {
    //     $this->attributes['url'] = $value;
    // }

    // public function getUrlAttribute()
    // {
    //     return 'shop/' . $this->attributes['slug'];
    // }


 /**
  * Relationship with the  model.
  *
  * @author    Phillip Madsen
  * @return    \Illuminate\Database\Eloquent\Relations\HasMany
  */
	public function relatedProducts()
	{
		return $this->hasMany(RelatedProduct::class);
	}



  /**
  * Relationship with the  model.
  *
  * @author    Phillip Madsen
  * @return    \Illuminate\Database\Eloquent\Relations\BelongsToMany
  */
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_product');
    }

  /**
  * Relationship with the  model.
  *
  * @author    Phillip Madsen
  * @return    \Illuminate\Database\Eloquent\Relations\BelongsToMany
  */
    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

 /**
  * Relationship with the  model.
  *
  * @author    Phillip Madsen
  * @return    \Illuminate\Database\Eloquent\Relations\BelongsToMany
  */
    public function carts()
    {
        return $this->belongsToMany(Cart::class);
    }

 /**
  * Relationship with the  model.
  *
  * @author    Phillip Madsen
  * @return    \Illuminate\Database\Eloquent\Relations\HasMany
  */
    public function photos()
    {
        return $this->hasMany(AlbumPhoto::class);
    }

 /**
  * Relationship with the  model.
  *
  * @author    Phillip Madsen
  * @return    \Illuminate\Database\Eloquent\Relations\HasMany
  */
    public function options()
    {
        return $this->hasMany(Option::class);
    }


// /**
//  * Relationship with the  model.
//  *
//  * @author    Phillip Madsen
//  * @return    \Illuminate\Database\Eloquent\Relations\HasMany
//  */
//    public function productPrice()
//    {
//      return $this->hasMany(Price::class);
//    }

// /**
//  * Relationship with the  model.
//  *
//  * @author    Phillip Madsen
//  * @return    \Illuminate\Database\Eloquent\Relations\HasMany
//  */
//    public function prices()
//    {
//    	return $this->hasMany(Price::class);
//    }


 /**
  * Relationship with the  model.
  *
  * @author    Phillip Madsen
  * @return    \Illuminate\Database\Eloquent\Relations\HasOne
  */
    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id', 'title');
    }

//  /**
//  * Relationship with the  model.
//  *
//  * @author    Phillip Madsen
//  * @return    \Illuminate\Database\Eloquent\Relations\HasMany
//  */
//    public function promos()
//    {
//        return $this->hasMany(Promo::class);
//    }

  /**
  * Relationship with the  model.
  *
  * @author    Phillip Madsen
  * @return    \Illuminate\Database\Eloquent\Relations\HasMany
  */
    public function productVariants()
    {
        return $this->hasMany(ProductVariant::class);
    }

  /**
  * Relationship with the  model.
  *
  * @author    Phillip Madsen
  * @return    \Illuminate\Database\Eloquent\Relations\HasMany
  */
    public function productFeatures()
    {
        return $this->hasMany(ProductFeature::class);
    }

 /**
  * Relationship with the  model.
  *
  * @author    Phillip Madsen
  * @return    \Illuminate\Database\Eloquent\Relations\HasMany
  */
    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }

 /**
  * Relationship with the  model.
  *
  * @author    Phillip Madsen
  * @return    \Illuminate\Database\Eloquent\Relations\HasMany
  */
    public function features()
    {
        return $this->hasMany(ProductFeature::class);
    }




}
