<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{

	protected $table="m_kategori";
	public $primaryKey="kd_kategori";
	public $keyType="string";

    protected $fillable=[
    	'kd_kategori',
    	'nama',
    ];
}
