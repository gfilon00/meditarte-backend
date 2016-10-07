<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends BaseController
{
    //

	public function login (Request $request){
		$username = $request->input('username');
		$password = $request->input('password');
		
		$user =  DB::select('SELECT Username, Password FROM Admin a WHERE a.Username = ?', [$username]);
		if ($user && Hash::check($password, $user[0]->Password)){
			return json_encode(['success'=>true]);
		}
		return json_encode(['success'=>false]);
	}

}