<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Smartphone;
use App\Model\Vendor;

class VendorController extends Controller
{
    function __construct()
    {
        $this->model = new Vendor();
    }

    public function index()
    {
    	$vendors = $this->model->all();

    	return view('vendor.index', compact('vendors'));
    }

    public function create()
    {
        $smartphones = Smartphone::all();

    	return view('vendor.create', compact('smartphones'));
    }

    public function store(Request $request)
    {
    	$this->model->create($request->all());

    	return redirect('vendors');
    }

    public function edit($id)
    {
        $vendor = $this->model->find($id);

        return view('vendor.edit', compact('vendor'));
    }

    public function update(Request $request, $id)
    {
        $this->model->find($id)->update($request->all());

        return redirect('vendors');
    }

    public function delete($id)
    {
        $this->model->find($id)->delete();

        return redirect('vendors');
    }
}