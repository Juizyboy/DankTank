<?php

namespace App\Http\Controllers;

use App\Apartment;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index() {
        $apartments = Apartment::all();
        return view('admin.index', compact('apartments'));
    }

    public function destroyApartment() {
        $input = Input::all();
        Apartment::destroy($input['id']);
        return Redirect::to('booking/admin');
    }

}