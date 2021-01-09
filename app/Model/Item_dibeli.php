<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Item_dibeli extends Model
{
    protected $table="t_item_dibeli";
	public $primaryKey="kd_dibeli";
	public $keyType="string";

	protected $fillable=[
    	'kd_dibeli',
    	'fk_kd_user',
    	'fk_kd_produk',
    	'jumlah',
    	'harga',
    	'total',
    	'fk_kd_transaksi',
    ];


    public function get_table_produk()
    {
        return $this->hasOne('App\Model\Produk','kd_produk','fk_kd_produk');
    }
}
