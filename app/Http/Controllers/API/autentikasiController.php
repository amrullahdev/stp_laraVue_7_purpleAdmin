<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Repositories\autentikasiRepos;
use Illuminate\Http\Request;
use App\User;

class autentikasiController extends Controller
{
    private $autentikasiRepos;

    public function __construct(autentikasiRepos $autentikasiRepos)
    {
    	$this->autentikasiRepos=$autentikasiRepos;
    }

    public function validasiInput($request)
    {
    	$this->validate($request,[
			'nama'=>'required',
			'email'=>'required',
			'username'=>'required|unique:users|alpha',
			'password'=>'required',
    	]);
    }

    public function store(Request $request)
    {
    	$this->validasiInput($request);
    	return $this->autentikasiRepos->registrasiAutentikasi($request);
    }

    public function index()
    {
        $this->authorize('admin');
        return User::get();
    }
}
