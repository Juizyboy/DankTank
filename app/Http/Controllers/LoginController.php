<?php

namespace App\Http\Controllers;

use App\Apartment;
use App\Booking;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function loginIndex() {
        return view('auth.index');
    }

    public function loginProcess() {
        $input = Input::all();
        $remember = (Input::has('remember')) ? true : false;


        if (Auth::attempt(['name' => $input['name'], 'password' => $input['password']], $remember)) {
            // validation successful!
            // redirect them to the secure section or whatever
            return Redirect::intended('/booking/admin');

        } else {

            // validation not successful, send back to form
            return Redirect::to('/auth/login')
                ->withErrors(array('invalid' => 'Het e-mailadres of wachtwoord klopt niet.')); // send back all errors to the login form
        }
}

}