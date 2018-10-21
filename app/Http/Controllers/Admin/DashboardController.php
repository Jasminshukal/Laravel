<?php

namespace App\Http\Controllers\Admin;
use Auth;
use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Buyers;
use App\Contact;


class DashboardController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('adminmiddleware');
    }
	
    public function index()
    {
        $data = array(
    'buyers'  => Buyers::count(),
    'contact' => Contact::count()
    );
        return view('admin.home')->with('data',$data);    
    }



    public function dologout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin_login');
    }
}
