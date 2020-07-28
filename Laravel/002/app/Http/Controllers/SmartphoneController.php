<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Smartphone;

class SmartphoneController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
        $this->model = new Smartphone();
    }

    public function index()
    {
    	$smartphones = $this->model->all();
    	return view('smartphone.index', compact('smartphones'));
    }

    public function create()
    {
    	return view('smartphone.create');
    }

    public function store(Request $request)
    {
    	$gadget = new $this->model;
    	$gadget->name = $request->name;
    	$gadget->price = $request->price;
    	$gadget->stock = $request->stock;
    	$gadget->save();

    	return redirect('smartphones');
    }

    public function edit($id)
    {
        $smartphone = $this->model->find($id);

        return view('smartphone.edit', compact('smartphone'));
    }

    public function update(Request $request, $id)
    {
        $gadget = $this->model->find($id);
        $gadget->name = $request->name;
        $gadget->price = $request->price;
        $gadget->stock = $request->stock;
        $gadget->save();

        return redirect('smartphones');
    }

    public function delete($id)
    {
        Smartphone::find($id)->delete();

        return redirect('smartphones');
    }
}