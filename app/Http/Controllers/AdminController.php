<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use User;
use Role;
use Session;

class AdminController extends Controller
{

	public function dashboard(){
	        if (Auth::check() && Auth::user()->role->id == 1) {
	            $roleId = Auth::user()->role->id;
	            Session::put('roleId', $roleId);
	            return redirect('aadmin');
	        } elseif (Auth::check() && Auth::user()->role->id == 2) {
	            $roleId = Auth::user()->role->id;
	            Session::put('roleId', $roleId);
	            return redirect('distributor');
	        } elseif (Auth::check() && Auth::user()->role->id == 3) {
	            $roleId = Auth::user()->role->id;
	            Session::put('roleId', $roleId);
	            return redirect('manager');
	        } elseif (Auth::check() && Auth::user()->role->id == 4) {
	            $roleId = Auth::user()->role->id;
	            Session::put('roleId', $roleId);
	            return redirect('user');
	        } 
	    }


    public function dashboardContent(){
    	$roleId = Session::get('roleId');
    	return view('admin.dashboard.dashboardContent', ['roleId' => $roleId]);
    }


    // public function adminDashboard(){
    //     $roleId = Session::get('roleId');
    //     return view('admin.admin.adminDashboard', ['roleId' => $roleId]);
    // }

    // public function distributorDashboard(){
    //     $roleId = Session::get('roleId');
    //     return view('admin.distributor.distributorDashboard', ['roleId' => $roleId]);
    // }

    // public function managerDashboard(){
    //     $roleId = Session::get('roleId');
    //     return view('admin.manager.managerDashboard', ['roleId' => $roleId]);
    // }

    // public function userDashboard(){
    //     $roleId = Session::get('roleId');
    //     return view('admin.user.userDashboard', ['roleId' => $roleId]);
    // }



}
