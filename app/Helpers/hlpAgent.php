<?php

use App\Model\agents;
//Verifie le role du connecte

if(!function_exists('getAgent'))
{
	function getAgent()
	{
         return agents::all();
  }
}
