<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\appexcel;
use App\Model\clients;
use Auth;
use DB;
use Validator;


class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function dashClt()
    {
        return view('pages/back/User/dashClt');
    }

    //Recuperation des donné soumises
    public function addVal(Request $request)
    {
        $this->validAddVall($request->all())->validate();

        $data = [
                         'type' => $request->type,
                        'societeSousTraitante' => $request->societeSousTraitante,
                          'respoSociete' => $request->respoSociete,
                         'numeroRespo' => $request->numeroRespo,
                          'natureActivicte' => $request->natureActivicte,
                          'lieuActivicte' => $request->lieuActivicte,
                            'debutActivicte' => $request->debutActivicte,
                           'finActivicte' => $request->finActivicte,
                         'referantSucaf' => $request->referantSucaf,
                            'fonctionRefSucaf' => $request->fonctionRefSucaf,
                         'complexe' => $request->complexe,
                         'attributaire' => $request->attributaire,
                         'fonction' => $request->fonction,
                         'numeroBadge' => $request->numeroBadge,
                          'dateAttribution' => $request->dateAttribution,
                          'datePrevueFin' => $request->datePrevueFin,
                            'codePhoto' => $request->codePhoto,
                            'typePiece' => $request->typePiece,
                         'numeroPiece' => $request->numeroPiece,
                          'status' => $request->status,
                           'observation' => $request->observation

                ];
                appexcel::create($data);

        return response()->json();
    }

    //Affiche  Liste covid
        public function covid()
        {
            $covids = appexcel::where('type','=','covid')->orderBy('created_at','desc')->get();
    
            return view('pages/back/User/covid')->with('covids',$covids);
        }

     //Affiche  Liste stcd
        public function stcd()
        {
            $covids = appexcel::where('type','=','stcd')->orderBy('created_at','desc')->get();
            return view('pages/back/User/stcd')->with('covids',$covids);
        }       


     //Affiche  Liste stld
        public function stld()
        {
            $covids = appexcel::where('type','=','stld')->orderBy('created_at','desc')->get();
            return view('pages/back/User/stld')->with('covids',$covids);
        }


     //Affiche  Liste jour
        public function jour()
        {
            $covids = appexcel::where('type','=','jour')->orderBy('created_at','desc')->get();
            return view('pages/back/User/jour')->with('covids',$covids);
        }


     //Affiche  Liste hbdo
        public function hbdo()
        {
            $covids = appexcel::where('type','=','hbdo')->orderBy('created_at','desc')->get();
            return view('pages/back/User/hbdo')->with('covids',$covids);
        }

     //Affiche  Liste stat
        public function stat()
        {
            $covids = appexcel::where('type','=','stat')->orderBy('created_at','desc')->get();
            return view('pages/back/User/stat')->with('covids',$covids);
        }

     //Affiche  Liste stage
        public function stage()
        {
            $covids = appexcel::where('type','=','stage')->orderBy('created_at','desc')->get();
            return view('pages/back/User/stage')->with('covids',$covids);
        }
    // fonction de validation

        protected function validAddVall(array $data)
            {
                return Validator::make($data, [
                        
                        'societeSousTraitante' => 'required|min:3',
                          'respoSociete' => 'required|min:3',
                         'numeroRespo' => 'required|min:3',
                          'natureActivicte' => 'required|min:3',
                          'lieuActivicte' => 'required|min:3',
                            'debutActivicte' => 'required|min:3',
                           'finActivicte' => 'required|min:3',
                         'referantSucaf' => 'required|min:3',
                            'fonctionRefSucaf' => 'required|min:3',
                         'complexe' => 'required|min:1',
                         'attributaire' => 'required|min:3',
                         'fonction' => 'required|min:3',
                         'numeroBadge' => 'required|min:2',
                          'dateAttribution' => 'required|min:3',
                          'datePrevueFin' => 'required|min:3',
                            'codePhoto' => 'required|min:2',
                            'typePiece' => 'required|min:2',
                         'numeroPiece' => 'required|min:3',
                          'status' => 'required|min:3',
                           'observation' => 'required|min:3'

                ]);
            
            }

}