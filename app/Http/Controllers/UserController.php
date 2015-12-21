<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use App\User;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {
        
         $users = DB::table('users')
                ->select('users.*', 'items.title')
                ->leftJoin('user_item_records', 'user_item_records.user_id', '=', 'users.id')
                ->leftJoin('items', 'items.id', '=', 'user_item_records.item_id')
                ->where('users.id', Auth::user()->id)
                ->first();
        
        return View('users.dashboard', ['users' => $users]);        
    }
}
