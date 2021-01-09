<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Bio extends Model
{
    protected $table="m_bio";
    public $primaryKey="fk_kd_user";
    public $keyType="string";

    protected $filable=[
    	'alamat',
    	'rtrw',
        'email',
        'no_hp1',
        'no_hp2',
        'kelamin',
    	'kelurahan',
    	'kecamatan',
    	'lainya',
        'fk_kd_user',
    	'kota',
    	'city_id',
    	'province_id',
    	'provinsi',
    ];
}
