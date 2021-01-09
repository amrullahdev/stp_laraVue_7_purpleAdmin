<?php 

namespace App\Repositories;

use App\User;
use Illuminate\Support\Facades\Hash;

class autentikasiRepos
{
	public function registrasiAutentikasi($request)
	{
		$data=$request->all();
		$data['kd_user'] = '001_'.substr(rand(0,99999)+time(), 0,10);
		$data['password']=Hash::make($data['password']);
		User::create($data);
	}
}