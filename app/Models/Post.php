<?php

namespace App\Models;

use App\Models\Scopes\AmountScope;
use App\Traits\Dates;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Post extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia,Dates;


    protected $fillable = [
        'category_id', 'currency_id', 'title', 'description', 'price', 'is_featured' ,'is_negociable',
        'export_price', 'promotional_price', 'begin_promotional_date', 'end_promotional_date', 'slug',
        'nb_stars', 'video_url' ,'tags'
    ];
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new AmountScope);
    }


    /*
    |------------------------------------------------------------------------------------
    | Validations
    |------------------------------------------------------------------------------------
    */
    public static function rules($update = false, $id=null)
    {
        return [
            'category_id' => 'required',
            'title' => 'required',
            'description' =>"required",
            'price' =>"required|integer",
            'is_featured'  =>"nullable|boolean",
            'is_negociable'      =>"nullable|boolean",
            'export_price'    =>'nullable|integer',
            'promotional_price'   =>'nullable|integer',
            'begin_promotional_date'   =>'nullable|date',
            'end_promotional_date'   =>'nullable|date|after:begin_promotional_date',
            'slug'   =>'nullable',
            'nb_stars'   =>'nullable|integer',
            'video_url'   =>'nullable|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
            'tags'   =>'nullable',



        ];
    }

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function reviews(){
        return $this->hasMany(Review::class);
    }
    public function messages(){
        return $this->hasMany(Message::class);
    }
    public function unites(){
        return $this->belongsToMany(Unite::class,'unite_post');
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function currency(){
        return $this->belongsTo(Currency::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public  function orders()
    {
        return $this->hasMany(Order::class);
    }
    /*
    |------------------------------------------------------------------------------------
    | Scopes
    |------------------------------------------------------------------------------------
    */

    /*
    |------------------------------------------------------------------------------------
    | Attributes
    |------------------------------------------------------------------------------------
    */
    public function getImageAttribute()
    {
        return $this->getFirstMediaUrl('posts');
    }
    protected function beginPromotionalDate(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => date("Y-M-D",strtotime($value)),
        );
    }
    protected function endPromotionalDate(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => date("Y-M-D",strtotime($value)),
        );
    }

    protected function isNegociable(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value==0 ? false :true,
        );
    }

    protected function rating(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->reviews()->where('rating','!=',0)->avg('rating'),
        );
    }

    protected function numberOfSales(): Attribute
    {
        return Attribute::make(
            get: fn ($value) =>!$this->orders()->exists()?0: $this->orders()->where('status',"Delivered")->sum('amount'),
        );
    }
    protected function salesPercentage(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => !$this->orders()->exists()?0:($this->orders()->where('status',"Delivered")->sum('amount')*100)/($this->orders()->sum('amount')+$this->amount),
        );
    }

}

