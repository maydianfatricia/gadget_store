<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    public function pesanan_detail() 
	{
	     return $this->hasMany('App\PesananDetail','pesanan_id', 'id');
	}
}
