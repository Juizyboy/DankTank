<?php

namespace App\Http\Controllers;

use App\User;
use App\Apartment;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    public function index() {
        $apartments = Apartment::all();
        return view('booking.index', compact('apartments'));
    }
}