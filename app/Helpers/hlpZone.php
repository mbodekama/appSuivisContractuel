<?php

//Verifie le role du connecte

if(!function_exists('allZones'))
{
	function allZones()
	{
         $zones = DB::table('zones')->select('zones.*','zones.nom as nomZone',
                  'zones.id as idZone')->get();
         return $zones;

	}
}
