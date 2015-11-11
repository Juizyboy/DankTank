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

class AdminController extends Controller
{
    public function index() {
        $apartments = Apartment::all();
        $bookings = Booking::all();
        foreach($bookings as $booking) {
            $booking->apartmentName = Apartment::find($booking->apartment_id)->name;
        }
        return view('admin.index', compact('apartments', 'bookings'));
    }

    public function newApartment() {
        return view('admin.newApartment');
    }

    public function createApartment() {
        $input = Input::all();
        $inputApartment['name'] = $input['name'];
        $validator = Validator::make($inputApartment, Apartment::$rules);
        if ($validator->passes())
        {
            Apartment::create($inputApartment);
            return Redirect::to('/booking/admin/');
        }
        else {
            return Redirect::to('/booking/admin/newApartment')
                ->withErrors($validator);
        }
    }

    public function destroyApartment() {
        $input = Input::all();
        Apartment::destroy($input['id']);
        return Redirect::to('booking/admin');
    }

}