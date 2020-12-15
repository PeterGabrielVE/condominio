<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_Status extends Model
{

    protected $table = 'users_status';
    protected $fillable = ['id', 'name','description','created_at','updated_at'];
    
}
