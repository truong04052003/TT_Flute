<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PHPOpenSourceSaver\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Customer extends Authenticatable implements JWTSubject
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'phone',

    ];
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
    public function scopeIDCustomer($query, $request)
    {
        if (isset($request['idcustomer'])) {
            return $query->where('id', 'LIKE', '%' . $request['idcustomer'] . '%');
        }
        return $query;
    }
    public function scopeNameCustomer($query, $request)
    {
        if (isset($request['namecustomer'])) {
            return  $query->where('name', 'LIKE', '%' . $request['namecustomer'] . '%');
        }
        return $query;
    }
    public function scopeAddressCustomer($query, $request)
    {
        if (isset($request['addresscustomer'])) {
            return $query->where('address', 'LIKE', '%' . $request['addresscustomer'] . '%');
        }
        return $query;
    }
    public function scopeEmailCustomer($query, $request)
    {
        if (isset($request['emailcustomer'])) {
            return $query->where('email', 'LIKE', '%' . $request['emailcustomer'] . '%');
        }
        return $query;
    }
    public function scopePhoneCustomer($query, $request)
    {
        if (isset($request['phonecustomer'])) {
            return $query->where('phone', 'LIKE', '%' . $request['phonecustomer'] . '%');
        }
        return $query;
    }
  
}
