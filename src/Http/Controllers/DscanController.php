<?php

namespace Azak1r\Dscan\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DscanController extends Controller
{
    public function newScan()
    {
    	return view('Dscan::newScan');
    }
}
