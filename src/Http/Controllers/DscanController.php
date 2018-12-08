<?php

namespace Azak1r\Dscan\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Azak1r\Dscan\Models\Dscan;
use Azak1r\Dscan\Models\DScanData;
use Carbon\Carbon;

class DscanController extends Controller
{
    public function create()
    {
    	return view('Dscan::newScan');
    }

    public function store()
    {

    	function rnatsort(&$a){
		    natsort($a);
		    $a = array_reverse($a, true);
		}

    	//include(app_path() . '/Tools/Static_data.php');
    	//$ships = DScanData::all();
    	//$ships = json_decode($ships, true);

    	$ships = array('Bantam' => array('Frigate', 'Tackle'), 'Griffin' => array('Frigate', 'EWAR'), 'Kikimore' => array('Triglavian Destroyer', 'DPS'), 'Procurer' => array('Mining Barge', 'Miner'), 'Vehement' => array('Dreadnought', 'Capital'), 'Heron' => array('Frigate', 'Tackle'), 'Buzzard' => array('Covert Ops', 'Prober'), 'Rook' => array('Combat Recon', 'EWAR'), 'Wreathe' => array('Industrial', 'Hauler'), 'Hydra' => array('Cov. Ops. Triglavian Frig', 'DPS'), 'Nemesis' => array('S. Bomber', 'Bomber'), 'Loggerhead' => array('Force Auxillary', 'Cap Logi'), 'Sabre' => array('Interdictor', 'Bubbler'), 'Rupture' => array('Cruiser', 'Cruiser'), 'Iteron Mark V' => array('Industrial', 'Hauler'), 'Raven' => array('Battleship', 'DPS'), 'Augoror Navy Issue' => array('Cruiser', 'Cruiser'), 'Slasher' => array('Frigate', 'Tackle'), 'Apocalypse' => array('Battleship', 'DPS'), 'Enyo' => array('Assault Frig.', 'Tackle'), 'Charon' => array('Freighter', 'Freighter'), 'Stratios' => array('Cov. op. Cruiser', 'DPS'), 'Panther' => array('Black Ops', 'Black Ops'), 'Gila' => array('Cruiser', 'DPS'), 'Hulk' => array('Exhumer', 'Miner'), 'Porpoise' => array('Ind. Cmd.', 'Ind. Cmd.'), 'Vengeance' => array('Assault Frig.', 'Tackle'), 'Dominix Navy Issue' => array('Battleship', 'DPS'), 'Basilisk' => array('Logistics', 'Logistics'), 'Manticore' => array('S. Bomber', 'Bomber'), 'Crane' => array('Blockade Run.', 'Cloaky Hauler'), 'Kryos' => array('Industrial', 'Hauler'), 'Megathron Navy Issue' => array('Battleship', 'DPS'), 'Dominix' => array('Battleship', 'DPS'), 'Anshar' => array('Jump Freighter', 'Jump Freighter'), 'Skiff' => array('Exhumer', 'Miner'), 'Pilgrim' => array('Force Recon', 'Support'), 'Maelstrom' => array('Battleship', 'DPS'), 'Komodo' => array('Titan', 'Supercap'), 'Tayra' => array('Industrial', 'Hauler'), 'Drake' => array('Battlecruiser', 'DPS'), 'Impel' => array('Transport', 'T2 Non Cloaky Hauler'), 'Kirin' => array('Logi Frig', 'Logistics'), 'Abaddon' => array('Battleship', 'DPS'), 'Vexor Navy Issue' => array('Cruiser', 'DPS'), 'Wolf' => array('Assault Frig.', 'Tackle'), 'Ishkur' => array('Assault Frig.', 'Tackle'), 'Blackbird' => array('Cruiser', 'EWAR'), 'Executioner' => array('Frigate', 'Tackle'), 'Stork' => array('Command Destroyer', 'Jumper'), 'Nereus' => array('Industrial', 'Hauler'), 'Oneiros' => array('Logistics', 'Logistics'), 'Rodiva' => array('Triglavian Logi', 'Logistics'), 'Reaper' => array('Frigate', 'Trash'), 'Purifier' => array('S. Bomber', 'Bomber'), 'Tormentor' => array('Frigate', 'Tackle'), 'Echelon' => array('Frigate', 'Trash'), 'Armageddon Navy Issue' => array('Battleship', 'DPS'), 'Stiletto' => array('Interceptor', 'Tackle'), 'Scythe Fleet Issue' => array('Cruiser', 'Cruiser'), 'Arazu' => array('Force Recon', 'Heavy Tackle'), 'Damnation' => array('Cmd. Ship', 'Booster'), 'Exequror' => array('Cruiser', 'T1 Logi'), 'Sentinel' => array('EWAR Frig.', 'Neuts'), 'Ark' => array('Jump Freighter', 'Jump Freighter'), 'Jackdaw' => array('T3 Destroyer', 'DPS'), 'Tempest' => array('Battleship', 'DPS'), 'Badger' => array('Industrial', 'Hauler'), 'Golem' => array('Marauder', 'DPS'), 'Punisher' => array('Frigate', 'Tackle'), 'Curse' => array('Combat Recon', 'Neuts'), 'Incursus' => array('Frigate', 'Tackle'), 'Scimitar' => array('Logistics', 'Logistics'), 'Magus' => array('Command Destroyer', 'Jumper'), 'Endurance' => array('Cov. Mining Frig', 'Mining'), 'Exequror Navy Issue' => array('Cruiser', 'T1 Logi'), 'Claymore' => array('Cmd. Ship', 'Booster'), 'Anathema' => array('Covert Ops', 'Prober'), 'Osprey Navy Issue' => array('Cruiser', 'DPS'), 'Vanquisher' => array('Titan', 'Supercap'), 'Orthrus' => array('Cruiser', 'DPS'), 'Adrestia' => array('Cruiser', 'DPS'), 'Zealot' => array('H.A. Cruiser', 'DPS'), 'Ares' => array('Interceptor', 'Tackle'), 'Occator' => array('Transport', 'T2 Non Cloaky Hauler'), 'Kitsune' => array('EWAR Frig.', 'EWAR'), 'Cyclone' => array('Battlecruiser', 'DPS'), 'Jaguar' => array('Assault Frig.', 'Tackle'), 'Caracal' => array('Cruiser', 'DPS'), 'Vexor' => array('Cruiser', 'DPS'), 'Vedmak' => array('Triglavian Cruiser', 'DPS'), 'Cerberus' => array('H.A. Cruiser', 'DPS'), 'Nightmare' => array('Battleship', 'DPS'), 'Helios' => array('Covert Ops', 'Prober'), 'Nighthawk' => array('Cmd. Ship', 'DPS'), 'Paladin' => array('Marauder', 'DPS'), 'Rorqual' => array('Cap. Ind.', 'Capital'), 'Broadsword' => array('Hictor', 'Bubbler'), 'Vendetta' => array('Supercarrier', 'Supercap'), 'Zephyr' => array('Shuttle', 'Trash'), 'Machariel' => array('Battleship', 'DPS'), 'Revelation' => array('Dreadnought', 'Capital'), 'Proteus' => array('Strat. Cruiser', 'Heavy Tackle'), 'Vigilant' => array('Cruiser', 'DPS'), 'Omen Navy Issue' => array('Cruiser', 'DPS'), 'Huginn' => array('Combat Recon', 'Heavy Tackle'), 'Epithal' => array('Industrial', 'Hauler'), 'Crucifier' => array('Frigate', 'Tackle'), 'Caracal Navy Issue' => array('Cruiser', 'DPS'), 'Augoror' => array('Cruiser', 'T1 Logi'), 'Ferox' => array('Battlecruiser', 'DPS'), 'Retribution' => array('Assault Frig.', 'Tackle'), 'Bowhead' => array('Freighter', 'Freighter'), 'Naga' => array('Battlecruiser', 'DPS'), 'Rokh' => array('Battleship', 'DPS'), 'Worm' => array('Frigate', 'Tackle'), 'Bustard' => array('Transport', 'T2 Non Cloaky Hauler'), 'Mackinaw' => array('Exhumer', 'Miner'), 'Coercer' => array('Destroyer', 'Tackle'), 'Redeemer' => array('Black Ops', 'Black Ops'), 'Damavik' => array('Triglavian Frigate', 'DPS'), 'Caiman' => array('Dreadnought', 'Capital'), 'Hyperion' => array('Battleship', 'DPS'), 'Marshal' => array('Battleship', 'DPS'), 'Cruor' => array('Frigate', 'Tackle'), 'Apocalypse Navy Issue' => array('Battleship', 'DPS'), 'Eos' => array('Cmd. Ship', 'Booster'), 'Hound' => array('S. Bomber', 'Bomber'), 'Bhaalgorn' => array('Battleship', 'DPS'), 'Talos' => array('Battlecruiser', 'DPS'), 'Eris' => array('Interdictor', 'Bubbler'), 'Minokawa' => array('Force Auxillary', 'Cap Logi'), 'Lachesis' => array('Combat Recon', 'Heavy Tackle'), 'Kestrel' => array('Frigate', 'Tackle'), 'Ishtar' => array('H.A. Cruiser', 'DPS'), 'Enforcer' => array('Force Recon', 'EWAR'), 'Barghest' => array('Cruiser', 'DPS'), 'Molok' => array('Titan', 'Supercap'), 'Vigil' => array('Frigate', 'Tackle'), 'Crucifier Navy Issue' => array('Frigate', 'Tackle'), 'Freki' => array('Frigate', 'Tackle'), 'Prowler' => array('Blockade Run.', 'Cloaky Hauler'), 'Astarte' => array('Frigate', 'Prober'), 'Maller' => array('Cruiser', 'Cruiser'), 'Thanatos' => array('Carrier', 'Capital'), 'Apostle' => array('Force Auxillary', 'Cap Logi'), 'Lif' => array('Force Auxillary', 'Cap Logi'), 'Sacrilege' => array('H.A. Cruiser', 'DPS'), 'Providence' => array('Freighter', 'Freighter'), 'Merlin' => array('Frigate', 'Tackle'), 'Republic Fleet Firetail' => array('Frigate', 'Tackle'), 'Devoter' => array('Hictor', 'Bubbler'), 'Claw' => array('Interceptor', 'Tackle'), 'Hel' => array('Supercarrier', 'Supercap'), 'Stabber Fleet Issue' => array('Cruiser', 'DPS'), 'Nestor' => array('Battleship', 'DPS'), 'Impairor' => array('Corvette', 'Trash'), 'Noctis' => array('Salvaging', 'Trash'), 'Pontifax' => array('Command Destroyer', 'Jumper'), 'Raven Navy Issue' => array('Battleship', 'DPS'), 'Phobos' => array('Hictor', 'Bubbler'), 'Dagon' => array('Force Auxillary', 'Cap Logi'), 'Myrmidon' => array('Battlecruiser', 'DPS'), 'Obelisk' => array('Freighter', 'Freighter'), 'Guardian' => array('Logistics', 'Logistics'), 'Naglfar' => array('Dreadnought', 'Capital'), 'Keres' => array('EWAR Frig.', 'Tackle'), 'Stabber' => array('Cruiser', 'DPS'), 'Talwar' => array('Destroyer', 'Support'), 'Taranis' => array('Interceptor', 'Tackle'), 'Svipul' => array('T3 Destroyer', 'DPS'), 'Ibis' => array('Corvette', 'Trash'), 'Scythe' => array('Cruiser', 'T1 Logi'), 'Covetor' => array('Mining Barge', 'Miner'), 'Kronos' => array('Marauder', 'DPS'), 'Leshak' => array('Triglavian Battleship', 'DPS'), 'Harbinger Navy Issue' => array('Battlecruiser', 'DPS'), 'Nomad' => array('Jump Freighter', 'Jump Freighter'), 'Hawk' => array('Assault Frig.', 'Tackle'), 'Phantasm' => array('Cruiser', 'Support'), 'Aeon' => array('Supercarrier', 'Supercap'), 'Raptor' => array('Interceptor', 'Tackle'), 'Scalpel' => array('Logi Frig', 'Logistics'), 'Bifrost' => array('Command Destroyer', 'Jumper'), 'Heretic' => array('Interdictor', 'Bubbler'), 'Cynabal' => array('Cruiser', 'DPS'), 'Fenrir' => array('Freighter', 'Freighter'), 'Algos' => array('Destroyer', 'Support'), 'Ninazu' => array('Force Auxillary', 'Cap Logi'), 'Revenant' => array('Supercarrier', 'Supercap'), 'Hecate' => array('T3 Destroyer', 'DPS'), 'Vagabond' => array('H.A. Cruiser', 'DPS'), 'Muninn' => array('H.A. Cruiser', 'DPS'), 'Deacon' => array('Logi Frig', 'Logistics'), 'Bestower' => array('Industrial', 'Hauler'), 'Leviathan' => array('Titan', 'Supercap'), 'Venture' => array('Frigate', 'Trash'), 'Sunesis' => array('Destroyer', 'DPS'), 'Oracle' => array('Battlecruiser', 'DPS'), 'Deimos' => array('H.A. Cruiser', 'DPS'), 'Utu' => array('Frigate', 'DPS'), 'Moa' => array('Cruiser', 'Cruiser'), 'Praxis' => array('Battleship', 'DPS'), 'Brutix Navy Issue' => array('Battlecruiser', 'DPS'), 'Vulture' => array('Cmd. Ship', 'Booster'), 'Succubus' => array('Frigate', 'Tackle'), 'Wyvern' => array('Supercarrier', 'Supercap'), 'Burst' => array('Frigate', 'Tackle'), 'Tengu' => array('Strat. Cruiser', 'DPS'), 'Caldari Navy Hookbill' => array('Frigate', 'Tackle'), 'Navitas' => array('Frigate', 'Tackle'), 'Imicus' => array('Frigate', 'Tackle'), 'Breacher' => array('Frigate', 'Tackle'), 'Erebus' => array('Titan', 'Supercap'), 'Nidhoggur' => array('Carrier', 'Capital'), 'Tempest Fleet Issue' => array('Battleship', 'DPS'), 'Brutix' => array('Battlecruiser', 'DPS'), 'Imperial Navy Slicer' => array('Frigate', 'Tackle'), 'Chimera' => array('Carrier', 'Capital'), 'Thorax' => array('Cruiser', 'Cruiser'), 'Omen' => array('Cruiser', 'DPS'), 'Flycatcher' => array('Interdictor', 'Bubbler'), 'Tiamar' => array('Triglavian Cov. Op. Cruiser', 'DPS'), 'Harbinger' => array('Battlecruiser', 'DPS'), 'Archon' => array('Carrier', 'Capital'), 'Absolution' => array('Cmd. Ship', 'DPS'), 'Hurricane Fleet Issue' => array('Battlecruiser', 'DPS'), 'Legion' => array('Strat. Cruiser', 'DPS'), 'Moros' => array('Dreadnought', 'Capital'), 'Ship Name' => array('Ship Type', 'Ship Class'), 'Typhoon' => array('Battleship', 'DPS'), 'Hoarder' => array('Industrial', 'Hauler'), 'Condor' => array('Frigate', 'Tackle'), 'Tristan' => array('Frigate', 'Tackle'), 'Hurricane' => array('Battlecruiser', 'DPS'), 'Viator' => array('Blockade Run.', 'Cloaky Hauler'), 'Bellicose' => array('Cruiser', 'T1 Logi'), 'Rhea' => array('Jump Freighter', 'Jump Freighter'), 'Arbitrator' => array('Cruiser', 'Cruiser'), 'Gnosis' => array('Cruiser', 'DPS'), 'Atron' => array('Frigate', 'Tackle'), 'Prorator' => array('Blockade Run.', 'Cloaky Hauler'), 'Celestis' => array('Cruiser', 'Cruiser'), 'Cheetah' => array('Covert Ops', 'Prober'), 'Scorpion' => array('Battleship', 'DPS'), 'Sin' => array('Black Ops', 'Black Ops'), 'Mastodon' => array('Transport', 'T2 Non Cloaky Hauler'), 'Chemosh' => array('Dreadnought', 'Capital'), 'Eagle' => array('H.A. Cruiser', 'DPS'), 'Venerable' => array('Force Auxillary', 'Cap Logi'), 'Griffin Navy Issue' => array('Frigate', 'EWAR'), 'Phoenix' => array('Dreadnought', 'Capital'), 'Vargur' => array('Marauder', 'DPS'), 'Tornado' => array('Battlecruiser', 'DPS'), 'Thrasher' => array('Destroyer', 'Support'), 'Onyx' => array('Hictor', 'Bubbler'), 'Sigil' => array('Industrial', 'Hauler'), 'Thalia' => array('Logi Frig', 'Logistics'), 'Malediction' => array('Interceptor', 'Tackle'), 'Dragoon' => array('Destroyer', 'Support'), 'Catalyst' => array('Destroyer', 'Support'), 'Drake Navy Issue' => array('Battlecruiser', 'DPS'), 'Falcon' => array('Force Recon', 'EWAR'), 'Prophecy' => array('Battlecruiser', 'DPS'), 'Widow' => array('Black Ops', 'Black Ops'), 'Osprey' => array('Cruiser', 'T1 Logi'), 'Retriever' => array('Mining Barge', 'Miner'), 'Rattlesnake' => array('Battleship', 'DPS'), 'Primae' => array('Industrial', 'Trash'), 'Megathron' => array('Battleship', 'DPS'), 'Mimir' => array('Cruiser', 'DPS'), 'Cormorant' => array('Destroyer', 'Support'), 'Ashimmu' => array('Cruiser', 'Support'), 'Rifter' => array('Frigate', 'Tackle'), 'Federation Navy Comet' => array('Frigate', 'Tackle'), 'Harpy' => array('Assault Frig.', 'Tackle'), 'Maulus' => array('Frigate', 'Tackle'), 'Hyena' => array('EWAR Frig.', 'Tackle'), 'Daredevil' => array('Frigate', 'Tackle'), 'Vanguard' => array('Carrier', 'Capital'), 'Maulus Navy Issue' => array('Frigate', 'Tackle'), 'Mammoth' => array('Industrial', 'Hauler'), 'Avatar' => array('Titan', 'Supercap'), 'Vindicator' => array('Battleship', 'DPS'), 'Sleipnir' => array('Cmd. Ship', 'DPS'), 'Ragnarok' => array('Titan', 'Supercap'), 'Corax' => array('Destroyer', 'Support'), 'Orca' => array('Ind. Cmd.', 'Ind. Cmd.'), 'Prospect' => array('Cov. Op. Miner', 'Miner'), 'Confessor' => array('T3 Destroyer', 'DPS'), 'Crusader' => array('Interceptor', 'Tackle'), 'Velator' => array('Frigate', 'Trash'), 'Magnate' => array('Frigate', 'Tackle'), 'Crow' => array('Interceptor', 'Tackle'), 'Probe' => array('Frigate', 'Tackle'), 'Miasmos' => array('Industrial', 'Hauler'), 'Inquisitor' => array('Frigate', 'Tackle'), 'Apotheosis' => array('Shuttle', 'Trash'), 'Rapier' => array('Force Recon', 'Heavy Tackle'), 'Loki' => array('Strat. Cruiser', 'Heavy Tackle'), 'Garmur' => array('Cruiser', 'DPS'), 'Armageddon' => array('Battleship', 'DPS'), 'Drakavac' => array('Triglavian BC', 'DPS'), 'Dramiel' => array('Frigate', 'Tackle'), 'Nyx' => array('Supercarrier', 'Supercap'), );

    	$ship_classes = array();
        $ship_types = array();
        $ship_names = array();
        $ship_total = 0;

        $dscan = explode("\n", str_replace("\r", "", request('scan')));
        foreach ($dscan as $ship) {
        	$tmp = explode("\t", $ship);
        	$shipName = $tmp[2];

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
		rnatsort($ship_names);
		rnatsort($ship_types);
		rnatsort($ship_classes);
        
        // Convert ship arrays to JSON
        $ship_names_json = json_encode($ship_names);
        $ship_types_json = json_encode($ship_types);
        $ship_classes_json = json_encode($ship_classes);

        // Create the unique ID
    	$sid = uniqid("", true);

    	// Start inserting the Data
    	$scan = new Dscan;

    	$scan->reportedAt = Carbon::now();
    	$scan->ship_classes = $ship_classes_json;
    	$scan->ship_names = $ship_names_json;
    	$scan->ship_total = $ship_total;
    	$scan->ship_types = $ship_types_json;
    	$scan->sid = $sid;

    	$scan->save();

        return redirect()->route('result', [$sid]);

    }

    public function show($sid)
    {
    	//return $sid;
        $dscanInfo = DScan::where('sid', $sid)->first();

        $ship_names = json_decode($dscanInfo->ship_names, TRUE);
        $ship_types = json_decode($dscanInfo->ship_types, TRUE);
        $ship_classes = json_decode($dscanInfo->ship_classes, TRUE);
        $ship_total = $dscanInfo->ship_total;
        $reportedAt = $dscanInfo->reportedAt;

        return view('Dscan::viewScan', compact('ship_names','ship_types','ship_classes','ship_total','reportedAt'));
    }
}
