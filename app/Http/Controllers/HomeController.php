<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use App\User;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userList()
    {
        $users = DB::table('users')->get();
        return view('home.user_list', ['user_list' => $users]);
    }
    
    public function addUser() {        
        
        return View('users.add_user');        
    }
    
    public function saveUser(Request $request) {
        
        $this->validate($request, [
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'email'
        ]);
        
        $user = new User; 
        
        $user->first_name = $request->get('first_name');
        $user->last_name  = $request->get('last_name');
        $user->email      = $request->get('email');
       
        $user->save();
        
        return redirect('/')
            ->with('flash_notification.message', 'Successfully added your user')
            ->with('flash_notification.level', 'success');
        
    }
    
    public function editUser($id) {
        
        $user = User::find($id);
        return View('users.edit_user', ['user' => $user]);
    }
    
    public function updateUser(Request $request, $id){
        
        $this->validate($request, [
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'email'
        ]);
                
        $user = User::findOrFail($id);
        
        $user->first_name = $request->get('first_name');
        $user->last_name  = $request->get('last_name');
        $user->email      = $request->get('email');
        
        $user->save();

        return redirect('/')
            ->with('flash_notification.message', 'Successfully added your user')
            ->with('flash_notification.level', 'success');
               
    }
    
    
    
    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/')
            ->with('flash_notification.message', 'Successfully deleted your user')
            ->with('flash_notification.level', 'success');
    }

}
