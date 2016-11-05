<?php

namespace App;

// use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Auth\Passwords\CanResetPassword;
// use Illuminate\Foundation\Auth\Access\Authorizable;
// use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
// use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
// use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

// implements AuthenticatableContract, AuthorizableContract, CanResetPasswordContract

class Order extends Model
{
    // use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'orders';

    protected $fillable = ['id'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    // protected $hidden = ['password', 'remember_token'];


    // public static rentPrice()
    // {
    //
    // }

    public function items()
    {
        return $this->belongsToMany('App\Item', 'order_items', 'order_id', 'item_id');
    }

    public function total()
    {
        $items = $this->items;
        $total_price = 0;
        foreach ($items as $item) {
            $total_price += $item->price;
        }
        $this->total_price = $total_price;
        return $total_price;
    }

}
