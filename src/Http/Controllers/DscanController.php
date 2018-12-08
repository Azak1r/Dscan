<?php

namespace Azak1r\Dscan\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Azak1r\Dscan\Models\Dscan;
use Carbon\Carbon;

class DscanController extends Controller
{
    public function create()
    {
    	return view('Dscan::newScan');
    }

    public function store()
    {
    	// Fix the $ships array

    	$ship_classes = array();
        $ship_types = array();
        $ship_names = array();
        $ship_total = 0;

        $dscan = explode("\n", str_replace("\r", "", request('scan')));
        foreach ($dscan as $ship) {
        	$tmp = explode("\t", $ship);
        	$shipName = $tmp[1];

        	if (array_key_exists($shipName, $ships))
        	{
    			$ship_total++;
                // Create ship type if it doesn't exist                    
                if (array_key_exists($ships[$shipName][0], $ship_types))
                {
                   // Increment it
                   $ship_types[$ships[$shipName][0]]++;                        
                }
                else
                {
                    $ship_types[$ships[$shipName][0]] = 1;                        
                }
                 
                // Create class if it doesn't exist            
                if (array_key_exists($ships[$shipName][1], $ship_classes))
                {
                   // Increment it
                   $ship_classes[$ships[$shipName][1]]++;                     
                }
                else
                {
                    $ship_classes[$ships[$shipName][1]] = 1;                        
                }
                
                // Create name if it doesn't exist            
                if (array_key_exists($shipName, $ship_names))
                {
                   // Increment it
                   $ship_names[$shipName]++;
                }
                else
                {
                    $ship_names[$shipName] = 1;
                }
        	}
        }

        if ($ship_total <= 0)
        {
            die("You must have at least one ship on DScan.");
        }

        // Sort the ship arrays
		ksort($ship_names);
		ksort($ship_types);
		ksort($ship_classes);
        
        // Convert ship arrays to JSON
        $ship_names_json = json_encode($ship_names);
        $ship_types_json = json_encode($ship_types);
        $ship_classes_json = json_encode($ship_classes);

        // Create the unique ID
    	$sid = uniqid("", true);

    	// Start inserting the Data
    	$scan = new Dscan;

    	$scan->reportedAt = Carbon::now();
    	$scan->ship_classes = $ship_classes;
    	$scan->ship_names = $ship_names;
    	$scan->ship_total = $ship_total;
    	$scan->ship_types = $ship_types;
    	$scan->sid = $sid;

    	$scan->save();
    }

    public function show($id)
    {
    	return view('Dscan::viewScan');
    }
}
