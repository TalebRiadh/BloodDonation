<?php

namespace App\Http\Controllers;

use App\Donator;
use App\Wilaya;
use Illuminate\Http\Request;

class DonatorController extends Controller
{

    public function index(){
        $wilayas = Wilaya::all();
        return view('donator.index',compact('wilayas'));
    }

    public function create(Request $request){
        $data = $request->validate([
            'firstName' => 'required|unique:donators|min:5',
            'lastName'  => 'required|unique:donators|min:5',
            'email' => 'required|unique:donators|email:rfc,dns',
            'birthday' => 'required|date|date_format:Y-m-d',
            'phone' => ['required','unique:donators', 'regex:/^(00213|\+213|0)(5|6|7)[0-9]{8}$/'],
            'wilaya'  => 'required',
            'bloodGroup'  => 'required',
            'commune'  => 'required',

        ]);
        $donator = new Donator();
        $donator->firstName = $request->firstName;
        $donator->lastName = $request->lastName;
        $donator->email = $request->email;
        $donator->phone = $request->phone;
        $donator->birthday = $request->birthday;
        $donator->wilaya_id = $request->wilaya;
        $donator->commune_id = $request->commune;
        $donator->bloodGroup = $request->bloodGroup;

        //$donator->save();
        return redirect('/donator')->withSuccess('Success message');
}
}
