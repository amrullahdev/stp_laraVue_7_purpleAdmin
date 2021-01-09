<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table="t_transaksi";
    public $primaryKey='kd_transaksi';
    public $keyType="string";


    protected $fillable=[
    	'kd_transaksi',
    	'fk_kd_user',
    	'status',
    	'img_bukti',
    	'img_buktimetode',
    	'total_berat',
    	'kurir',
    	'biaya_kirim',
    	'estimasi',
    ];
    
    public function get_table_itemDibeli()
    {
        return $this->hasMany('App\Model\Item_dibeli','fk_kd_transaksi','kd_transaksi')
            ->join('m_produk','m_produk.kd_produk','t_item_dibeli.fk_kd_produk')
            ->select('m_produk.nama','m_produk.berat','t_item_dibeli.*');
    }

    public function get_tb_bio()
    {
        return $this->hasOne('App\Model\Bio','fk_kd_user','fk_kd_user');
    }
}
