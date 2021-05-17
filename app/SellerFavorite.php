<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SellerFavorite extends Model
{
    public function m_user()
    {
        return $this->belongsTo('App\MUser', 'seller_id');
    }
}
