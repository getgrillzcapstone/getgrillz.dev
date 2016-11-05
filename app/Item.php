<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Item extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'items';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];


    public function manufacturer()
    {
        return $this->hasOne('App\Manufacturer','id','manufacturer_id');
    }

    public function order()
    {
        return $this->belongsToMany('App\Order', 'order_items', 'item_id', 'order_id');
    }

    public function item_category()
    {
        return $this->hasOne('App\ItemCategory','id','item_category_id');
    }

    public function rentPrice()
    {
        $rent_price = (($this->price / $this->item_category->divisor) + $this->item_category->base_cost);
        // $rent_price = round($rent_price, 2);
        $rent_price = number_format((float)$rent_price, 2, '.', '');
        return $rent_price;
    }
}
