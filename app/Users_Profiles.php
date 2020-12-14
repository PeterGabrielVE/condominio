<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_Profiles extends Model
{

    protected $table = 'users_profiles';
    protected $fillable = ['id', 'name','description','created_at','updated_at'];
    
}
