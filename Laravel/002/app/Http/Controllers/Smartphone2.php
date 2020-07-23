<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Smartphone;
use App\Model\SmartphoneController;

class Smartphone2 extends Controller
{
	public function create()
	{
		return view('smartphone2.create');
	}

	public function store(Request $request)
	{
		$phone = new smartphone();
		$phone->name = $request->name;
		$phone->price = $request->price;
		$phone->stock = $request->stock;
		$phone->save();

		return redirect('smartphone');
	}
}
