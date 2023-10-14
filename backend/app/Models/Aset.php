<?php

namespace App\Models;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;
use Iluminate\Support\Facades\Hash;
class Aset extends Model implements AuthenticatableContract, AuthorizableContract
{
    protected $guarded = [];
    use Authenticatable, Authorizable, HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }
}