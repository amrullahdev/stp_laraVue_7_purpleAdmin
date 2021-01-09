<?php

namespace App;

use App\Model\Admin;

class rootConfig 
{
	public $DEVELOPER_MODE=false;
	public $RJO='ce416f2d7e90b0f167037149f5bc1680';
	public $RJO_BASE='https://api.rajaongkir.com/starter';

	public function adminLogin()
	{
		return Admin::where('fk_kd_user',auth('api')->user()->kd_user)->first();
	}

	public function userLogin()
	{
		return auth('api')->user()->kd_user;
	}

	public function df200()
	{
		return ['hasil'=>200,'text'=>'Proses berhasil di lakukan'];
	}

}
