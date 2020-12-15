<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone1','phone2','profile_id', 'status_id', 'created_at', 'updated_at','created_by'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profiles()
    {
        return $this->belongsTo('App\Users_Profiles','profile_id', 'id');
    }

    public function status()
    {
        return $this->belongsTo('App\Users_Status','status_id', 'id');
    }

    public function providers()
    {
        return $this->hasMany('App\Provider');
    }

    public function office()
    {
        return $this->hasOne('App\Office');
    }

    public function garage()
    {
        return $this->hasOne('App\Garage');
    }

    public function rol()
    {
        return $this->belongsTo('App\Role');
    }


    public function log()
    {
        return $this->belongsTo('App\User');
    }

    public function addresses()
    {
        return $this->hasMany('App\Address');
    }

    public function hasRole($role)
    {

        return $this->rol()->where('name', $role)->first() ? true : false;
    }

    public function isAdmin()
    {

        return $this->hasRole('admin') ? true : false;
    }
    
    public function addDefaultFields()
    {
        $this->rol_id = 1;
        $this->locale = "es";
        $this->save();

        return $this->api_token;
    }
}
