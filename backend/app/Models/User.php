<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;
use iluminate\Support\Facades\Hash;

class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable, HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    public function hasRole($role)
    {
        return $this->roles === $role;
    }
    protected $table = 'users';
    protected $fillable = [
        'name', 
        'email',
        'phone_number',
        'roles',
       ];
       public static function rules($id = null)
       {
           return [
               'email' => 'required|email|unique:users,email,' . $id,
           ];
       }

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var string[]
     */
    protected $hidden = [
        'password','api_token'
    ];
    public function customer(){
        return $this->hasMany(Customer::class);
    }
}
