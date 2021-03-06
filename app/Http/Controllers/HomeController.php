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

        $items = DB::table('items')->get();
        return View('users.add_user', ['item_list' => $items]);
    }

    public function saveUser(Request $request) {

        $this->validate($request, [
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|email',
            'password'   => 'required',
            'user_type'  => 'required'
        ]);

        $user = new User;

        $user->first_name = $request->get('first_name');
        $user->last_name  = $request->get('last_name');
        $user->email      = $request->get('email');
        $user->password   = bcrypt($request->get('password'));
        $user->user_type  = $request->get('user_type');

        $user->save();
        $id = $user->id;


        return redirect('userList')
            ->with('flash_notification.message', 'Successfully added your user')
            ->with('flash_notification.level', 'success');

    }

    public function editUser($id) {

        $user = User::find($id);

        //All item
        $allitems = DB::table('items')->get();

        return View('users.edit_user', ['user' => $user, 'item_list' => $allitems, 'item_id' => @$items->item_id]);
    }

    public function updateUser(Request $request, $id){

        $this->validate($request, [
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|email',
            'password'   => 'required',
            'user_type'  => 'required'
        ]);

        $user = User::findOrFail($id);

        $user->first_name = $request->get('first_name');
        $user->last_name  = $request->get('last_name');
        $user->email      = $request->get('email');
        $user->password   = $request->get('password');
        $user->user_type  = $request->get('user_type');

        $user->save();

        return redirect('userList')
            ->with('flash_notification.message', 'Successfully added your user')
            ->with('flash_notification.level', 'success');

    }



    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        //Delete user item
        DB::table('user_item_records')->where('user_id', $id)->delete();

        return redirect('userList')
            ->with('flash_notification.message', 'Successfully deleted your user')
            ->with('flash_notification.level', 'success');
    }

}
