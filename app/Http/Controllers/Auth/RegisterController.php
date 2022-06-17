<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Model\role;
use App\Model\clients;
use App\Model\userHasRole;
use Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'tel' =>['required', 'string', 'min:8', ],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {



        $user =  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        $role = role::where('libelle','=','client')->first();
        userHasRole::create([
            'user_id' =>$user->id,
            'role_id' =>$role->id,
                ]);
        switch ($data['sexe']) {
            case 'M':
                $avatar = 'assetAdmin/assets/img/boy-2.png';
                break;
            case 'F':
                $avatar = 'assetAdmin/assets/img/girl-4.png';
                break;
            
            default:
                $avatar = 'assetAdmin/assets/img/boy.png';
                break;
        }
        clients::create([
            'id' => $user->id,
            'nom' => $data['name'],
            'mail' => $data['email'],
            'pass' => Hash::make($data['password']),
            'tel'       =>$data['tel'],
            'matC'      =>'CLT0'.Auth::id().rand(0,100),
            'pays'  => $data['pays'],
            'sexe'  =>$data['sexe'],
            'avatar' => $avatar,
            'dateIns' =>date('d/m/Y'),
            'fonction' => 'Non préciser',
            'aboutClt' => 'Non préciser',
            'groupe_id' => 1,
            'zone_id' => 1,
            'statutClt' => 2,]);

        return $user;
    }
}
