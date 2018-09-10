<?php

namespace Rentalbro\Models\Mysql;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Tymon\JWTAuth\Contracts\JWTSubject;


class UserEcommerce extends Model implements Authenticatable, JWTSubject
{
	use SoftDeletes;
	use AuthenticableTrait;

    protected $table = 'user_ecommerce';
    protected $primaryKey = 'id';
    public function getJWTIdentifier()
	{
		return $this->getKey();
	}

	public function getJWTCustomClaims()
	{
		return [];
	}

    protected $fillable = [
        'name', 'email',
    ];

    protected $hidden = [
        'password',
    ];

    public function shop()
    {
    	return $this->hasOne('Akhamatvarokah\Rentbro\Models\Mysql\Shop', 'user_ecommerce_id', 'id');
    }

    public function vendor()
    {
        return $this->hasMany('Akhamatvarokah\Rentbro\Models\Mysql\Vendor', 'user_ecommerce_id', 'id');
    }
}