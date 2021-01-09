<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Troli extends Model
{
    protected $table='t_cart';
    public $primaryKey="kd_cart";
    public $keyType="string";

    protected $fillable=[
    	'fk_kd_user',
    	'fk_kd_produk',
        'kd_cart',
    	'jumlah',
    ];

    public function get_table_produk()
    {
    	return $this->hasOne('App\Model\Produk','kd_produk','fk_kd_produk');
    }
}
