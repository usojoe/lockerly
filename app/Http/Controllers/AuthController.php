<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\LoginRequest;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('auth.login');
    }
    
    public function postLogin(Request $request){
        
        $this->validate($request, [
            'email'    => 'required|email',
            'password' => 'required',
        ]);
        
        
        if(Auth::attempt([
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ]))
                
        {            
           if(Auth::user()->user_type == "admin")
           { 
                return redirect("userList");
                //return redirect('/todo');
           } 
           else
           {
              return redirect("dashboard"); 
           }
        }
        
        
        
        /*
        return redirect()
            ->back()
            ->withInput()
            ->with('flash_notification.message', 'Wrong email or password')
            ->with('flash_notification.level', 'danger');
         * 
         */
        
    }
    
    public function logout() {
        
        Auth::logout();
        return redirect("/");         
    }
        
}