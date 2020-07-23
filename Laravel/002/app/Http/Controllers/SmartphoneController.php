<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Smartphone;

class SmartphoneController extends Controller
{
    public function index()
    {
    	$smartphones = Smartphone::all();
    	return view('smartphone.index', compact('smartphones'));
    }

    public function create()
    {
    	return view('smartphone.create');
    }

    public function store(Request $request)
    {
    	$gadget = new smartphone();
    	$gadget->name = $request->name;
    	$gadget->price = $request->price;
    	$gadget->stock = $request->stock;
    	$gadget->save();

    	return redirect('smartphone');
    }
}