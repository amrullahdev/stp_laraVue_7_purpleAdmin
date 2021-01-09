<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table="m_produk";
    public $primaryKey="kd_produk";
    public $keyType="string";

    protected $fillable=[
    	'kd_produk',
    	'fk_kd_kategori',
    	'fk_kd_admin',
    	'nama',
    	'deskripsi',
    	'img_1',
    	'img_2',
    	'img_3',
    	'created_at',
    	'updated_at',
    	'stok',
    	'harga',
    	'berat',
    ];

    public function tb_kategori()
    {
        return $this->hasOne('App\Model\Kategori' ,'kd_kategori','fk_kd_kategori');
    }
}
