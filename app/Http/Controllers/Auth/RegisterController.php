<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

    private function validateUserData(){
        return request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'mobile' => ['required', 'regex:/^[0-9]+$/', 'min:10', 'max:14'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    private function validateCharityData(){
        return request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'mobile' => ['numeric', 'min:10', 'max:14'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'telephone' => ['required', 'numeric', 'min:6', 'max:14'],
            'license_number' => ['required'],
            'license_date' => ['required', 'date'],
            'address' => ['required'],
            'owner_name' => ['required', 'string'],
        ]);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function createUser(array $data)
    {
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'mobile' => $data['mobile']
        ])->philanthropist()->create([]);
    }
    protected function createCharity(array $data)
    {
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'mobile' => $data['mobile']? $data['mobile'] : null,
        ])->charity()->create([
            'telephone' => $data['telephone'],
            'license_number' => $data['license_number'],
            'license_date' => $data['license_date'],
            'address' => $data['address'],
            'owner_name' => $data['owner_name']
        ]);
    }
    public function register(Request $request)
    {
        if('normal_user'===$request['type']){
            $this->validateUserData();
            $this->createUser($request->all());
        }
        else{
            $this->validateCharityData();
            $this->createCharity($request->all());
        }
        return redirect('login')->with('success', 'You have been registered, Now Confirm your email!');
    }
}
