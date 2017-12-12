<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Friend;
use App\User;

class FindController extends Controller{

	public function findFriends(){
		$friends = User::where('country',1)->paginate(25);
		$friends1 = Friend::where('fr1','<>',1)->where('fr2', '<>', 1)->get();

		return view('find', compact('friends'));
	}

}
