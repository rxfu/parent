<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreParentRequest;
use App\Parents;
use Auth;

class HomeController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index() {
		$types = [
			'1-居民身份证',
			'6-香港特区护照/身份证明',
			'7-澳门特区护照/身份证明',
			'8-台湾居民来往大陆通行证',
			'9-境外永久居住证',
			'A-护照',
			'C-港澳台居民居住证',
		];

		return view('home', compact('types'));
	}

	public function parent(StoreParentRequest $request) {
		if ($request->isMethod('put')) {
			$student = Parents::whereXh(Auth::user()->username)->firstOrFail();
			$student->fill($request->all());
			$student->save();
		}

		return redirect('home');
	}
}
