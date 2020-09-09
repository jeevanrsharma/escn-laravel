<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\UserData;

class UserAccess extends Controller
{
    //
    public function signIn(){
    	$customers_array = ['Jeevan', 'sneha',];
		// $activeCustomers = Customer::active()->get();
		// $inActiveCustomers = Customer::inActive()->get();
		// $companies = Company::all();

		// dd($activeCustomers);

		// $customers_array = Customer::all();

		// dd($customers_array);
    	return view('login-signin.sign-up');
		// return view('internals.customers',compact('activeCustomers', 'inActiveCustomers', 'companies') );
    }

    public function register(){
		$data = request()->validate([
			'userName'=> 'required|min:3',
			'email'=>'required|email',
			'password'=>'required'
			// 'company_id'=> 'required'
		]);
		UserData::create($data); // mass data assignment
		return back();
    }

    public function list(){
		// $companies = Company::all();
    	$usersList = UserData::all();
    	// dd($usersList);
    	return view('user.list-users', compact('usersList'));
    	// return view('login-signin.list-users', compact('usersList'));
    }
}
