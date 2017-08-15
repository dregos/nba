<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      $this->middleware('guest');
    }



    protected function create(){
      return view('register.create');
    }

    protected function store()
    {
      $this->validate(request(), [
          'name' => 'required|min:2',
          'email' => 'required|string|email|max:255|unique:users',
          'password' => 'required|string|min:6|confirmed'
      ]);


      $user = new User();
      $user->name = request("name");
      $user->email = request("email");
      $user->password = bcrypt(request("password"));
      $user->save();

      auth()->login($user);
      return redirect("/");
    }
}
