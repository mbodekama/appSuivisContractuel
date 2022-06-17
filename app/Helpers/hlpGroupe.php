<?php

//Tous les groupes

if(!function_exists('allGroupes'))
{
	function allGroupes()
	{
         $groupes = DB::table('groupes')->select('groupes.*')->get();
         return $groupes;

	}
}

//Les membres du groupes

if(!function_exists('membreGrp'))
{
	function membreGrp($id)
	{
         $groupes = DB::table('groupes')
                    ->join('clients', 'clients.groupe_id', '=', 'groupes.id')
                    ->select('clients.*', 'groupes.id as groupId','groupes.nom as groupNom' ,'clients.id as CltId')
                    ->where('groupes.id','=',$id)
                    ->get();
                return $groupes;
    

	}
}

