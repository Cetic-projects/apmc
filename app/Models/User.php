<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable , HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name','last_name', 'city_id', 'email', 'password', 'phone', 'address'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /*
    |------------------------------------------------------------------------------------
    | Validations
    |------------------------------------------------------------------------------------
    */
    public static function rules($update = false, $id = null)
    {
        $common = [
            'email'      =>"required|email|unique:users,email,$id",
            'first_name' =>"required|string|min:4",
            'last_name'  =>"required|string|min:4",
            'phone'      =>'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'address'    =>'nullable|string',
            'password'   =>'nullable|confirmed',
        ];

        if ($update) {
            return $common;
        }

        return array_merge($common, [
            'email'    => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /*
    |------------------------------------------------------------------------------------
    | Attributes
    |------------------------------------------------------------------------------------
    */
    public function getAvatarAttribute($value)
    {
        if (!$value) {
            return 'https://www.gravatar.com/avatar/' . md5($this->email) . '?s=200&d=mm';
        }

        return config('variables.avatar.public').$value;
    }
    public function setAvatarAttribute($photo)
    {
        $this->attributes['avatar'] = move_file($photo, 'avatar');
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
        return $this->hasMany(Message::class,'from_user_id','to_user_id');
    }
    public function posts(){
        return $this->hasMany(Post::class);
    }
    public function city(){
        return $this->belongsTo(City::class);
    }
}
