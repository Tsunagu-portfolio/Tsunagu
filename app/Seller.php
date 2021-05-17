<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $guarded = [
        'id'
    ];
    protected $table = 'm_sellers';

    public function product()
    {
        return $this->hasMany('App\Product');
    }

    public function seller_favorite()
    {
        return $this->hasMany('App\SellerFavorite');
    }
}
