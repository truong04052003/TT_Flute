<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'phone',
        'image',
        'gender',
        'group_id',
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
    public function groups()
    {
        return $this->belongsTo(Group::class, 'group_id', 'id')->withTrashed();
    }
    public function scopeNameuser($query, $request)
    {
        if (isset($request['nameuser'])) {
            return  $query->where('name', 'LIKE', '%' . $request['nameuser'] . '%');
        }
        return $query;
    }
    public function scopePhoneuser($query, $request)
    {
        if (isset($request['phoneuser'])) {
            return $query->where('phone', 'LIKE', '%' . $request['phoneuser'] . '%');
        }
        return $query;
    }
    public function scopeGroupuser($query, $request)
    {
        if (isset($request['groupuser'])) {
            return $query->where('group_id', 'LIKE', '%' . $request['groupuser'] . '%');
        }
        return $query;
    }
    public function scopeIduser($query, $request)
    {
        if (isset($request['iduser'])) {
            return $query->where('id', 'LIKE', '%' . $request['iduser'] . '%');
        }
        return $query;
    }
}
