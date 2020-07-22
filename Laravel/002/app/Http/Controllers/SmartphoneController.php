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
}