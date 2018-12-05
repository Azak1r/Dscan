<?php

namespace Azak1r\Dscan;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DscanController extends Controller
{
    public function index()
    {
    	return view('dscan::index');
    }
}
