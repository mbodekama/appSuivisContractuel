<?php

use App\Model\credit;
//Verifie le role du connecte

if(!function_exists('getCredit'))
{

	// Code des tatut des credit  ==> 0 = nouveau / 1 =valide/ 2 = rejette/ 3 =  soldé /
	function getCredit($status)
	{
         return credit::where('statut','=',$status)->get();
    }
}


if(!function_exists('AllCredit'))
{

	function AllCredit()
	{
         return credit::all();
    }
}
