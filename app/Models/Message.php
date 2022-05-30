<?php

namespace App\Models;

use App\Traits\Dates;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory,Dates;

    protected $fillable = [];

    /*
    |------------------------------------------------------------------------------------
    | Validations
    |------------------------------------------------------------------------------------
    */
    public static function rules($update = false, $id=null)
    {
        return [
            'subject' => 'required|string',
            'message' => 'required|string',
            'is-read' =>"nullable|boolean",        ];
    }

    /*
    |------------------------------------------------------------------------------------
    | Relations
    |------------------------------------------------------------------------------------
    */


    public function post(){
        return $this->belongsTo(Post::class);
    }
    public function from()
    {
        return $this->belongsTo(User::class, 'from_user_id')->withDefault();
    }
    public function to()
    {
        return $this->belongsTo(User::class, 'to_user_id')->withDefault();
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
