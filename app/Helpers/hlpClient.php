<?php

use App\Model\clients;
//Verifie si le client est valide 
	if(!function_exists('isValidated'))
	{
		function isValidated()
		{
			$clt = clients::find(Auth::id());
			if ($clt->statutClt == 1) 
			{
				return true;	
			}
			else
			{
				return false;
			}
		}
	}


//recuperer les infos du clients
	if(!function_exists('infoClt()'))
	{
		function infoClt()
		{
	         $infos = DB::table('clients')
	            ->join('groupes','groupes.id','=','clients.groupe_id')
	            ->join('zones','zones.id','=','clients.zone_id')
	            ->select('clients.*','groupes.*','clients.id as cltId','clients.nom as nomClt','groupes.nom as groupNom','zones.nom as zoneNom')
	            ->where('clients.id','=',Auth::id())
	           ->first();
	           return $infos;
	 	}
	}

//Recupere les montant due  par un client
	if(!function_exists('cltCreditNonSolde'))
	{
		function cltCreditNonSolde($id)
		{
	         $infos = DB::table('clients_has_credits')
                        ->join('credits', 'credits.id', '=', 'clients_has_credits.credit_id')
                        ->join('clients', 'clients.id', '=', 'clients_has_credits.client_id')
                        ->select('credits.*')
                        ->where('credits.statut','=',1)
                        ->where('clients.id','=',$id)
                        ->get();
              return $infos;

		}
	}


//Tous les Clients
	if(!function_exists('AllClt()'))
	{
		function AllClt()
		{
			return clients::all();
		}
	}

//Client valide 
//Client Bloques 
//Client valide 
?>