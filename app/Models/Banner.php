<?php

namespace App\Models;

use App\Traits\Dates;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Banner extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia,Dates;


    protected $fillable = [
        'name','is_active', 'position', 'nb_shows', 'nb_clics','end_date','start_date'

    ];

    /*
    |------------------------------------------------------------------------------------
    | Validations
    |------------------------------------------------------------------------------------
    */
    public static function rules($update = false, $id=null)
    {
        return [
            'name' => 'required',
            'is_active' => 'boolean',
            'position' =>"nullable",
            'nb_shows' =>"nullable|integer",
            'nb_clics' =>"nullable|integer",
            'start_date'=>'required|date|after:now',
            'end_date' => 'required|date|after:start_date'
        ];
    }

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */
    public function positions(){
        return $this->belongsToMany(Position::class,'banner_positions');
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
}
