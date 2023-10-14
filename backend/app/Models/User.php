<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;
use Iluminate\Support\Facades\Hash;

class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable, HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name', 
        'email',
        'phone_number',
        'roles',
        'api_token',
       ];
    public function hasRole($role)
    {
        return $this->roles === $role;
    }


    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var string[]
     */
    protected $hidden = [
        'password','api_token'
    ];
    public function buldings(){
        return $this->hasMany(Building::class);
    }
    public function customers(){
        return $this->hasMany(Customer::class);
    }
    public function property(){
        return $this->hasMany(Property::class);
    }
}
