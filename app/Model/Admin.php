<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table="admin";
    public $primarKey="kd_admin";
    public $keyType="string";

    protected $filable=[
    	'kd_admin',
    	'fk_kd_user',
    	'alamat',
    ];
}
