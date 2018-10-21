<?php
namespace App\Http\Controllers\Admin;
use Auth;
use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class AdminloginController extends Controller
{
    public function index()
        {
            return view('admin.login');
        }

    public function adminlogin(Request $request)
        {

            $user = Admin::where('admin_email', $request->email)
                  ->where('admin_password',md5($request->password))
                  ->first();

          	if(isset($user))
        	{
        		Auth::guard('admin')->login($user,true);
                return redirect()->route('admin_home');
        	}
            else
            {
                return redirect()->route('admin_login')->with('message', 'Invalid login please try again.!!');
            }
            
        } 
    public function reset(Request $request)
        {
            $password= $request['password'];
            $password =md5($request['password']);
            //echo $password;
            $chack=Admin::where('admin_email',$request->email)->first();
            $update =Admin::where('admin_email',$request->email)
             ->update(
            ['admin_password' => $password,
            ]);
            echo "sucseefully Try to login With New Password";
            return view('admin.login')->with('message', 'sucseefully Change!!');
        }
    public function resetview()
        {
         return view('admin.reset');                  
        }

         


}
