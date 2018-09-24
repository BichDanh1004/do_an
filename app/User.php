<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends Model implements Authenticatable
{   
    use AuthenticableTrait;
    protected $table="users";
    protected $primaryKey= "id_user";
    
    public function roles(){
        return $this->belongsToMany('App\Role','role_user','id_user','id_role');
    }
    
    public function cart(){
        return $this->hasOne('App\Cart','id_customer','id_user');
    }
}
