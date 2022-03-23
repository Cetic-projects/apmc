<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id', 'currency_id', 'title', 'description', 'price', 'is_featured' ,'is_negociable',
        'export_price', 'promotional_price', 'begin_promotional_date', 'end_promotional_date', 'slug',
        'nb_stars', 'video_url' ,'tags'
    ];

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
}
