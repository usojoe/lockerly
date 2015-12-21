<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Items;
use App\Itemtypes;
use App\UserItemRecord;

class ItemController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function itemTypeList() {
        $items = DB::table('item_type')->get();
        return view('items.manage_item_type', ['item_list' => $items]);
    }

    public function addItemType() {

        return View('items.add_item_type');
    }

    public function saveItemType(Request $request) {

        $this->validate($request, [
            'item_type_name' => 'required',
            'description' => 'required'
        ]);

        $itemtypes = new Itemtypes;

        $itemtypes->item_type_name = $request->get('item_type_name');
        $itemtypes->description = $request->get('description');

        $itemtypes->save();

        return redirect('/itemtypelist')
                        ->with('flash_notification.message', 'Successfully added your item type')
                        ->with('flash_notification.level', 'success');
    }

    public function editItemType($id) {

        $item = Itemtypes::find($id);
        return View('items.edit_item_type', ['item' => $item]);
    }

    public function updateItemType(Request $request, $id) {

        $this->validate($request, [
            'item_type_name' => 'required',
            'description' => 'required'
        ]);

        $item = Itemtypes::findOrFail($id);

        $item->item_type_name = $request->get('item_type_name');
        $item->description = $request->get('description');

        $item->save();

        return redirect('/itemtypelist')
                        ->with('flash_notification.message', 'Successfully updated your item type')
                        ->with('flash_notification.level', 'success');
    }

    public function deleteItemType($id) {
        $item = Itemtypes::findOrFail($id);
        $item->delete();

        return redirect('/itemtypelist')
                        ->with('flash_notification.message', 'Successfully deleted your item.')
                        ->with('flash_notification.level', 'success');
    }

    public function itemList() {
        $items = DB::table('items')
                ->select('items.*', 'item_type.item_type_name')
                ->leftJoin('item_type', 'item_type.id', '=', 'items.item_type_id')
                ->get();

        return view('items.manage_items', ['item_list' => $items]);
    }

    public function addItem() {

        $items_type = DB::table('item_type')->get();
        return View('items.add_item', ['item_type_list' => $items_type]);
    }

    public function saveItem(Request $request) {

        $this->validate($request, [
            'title' => 'required',
            'item_description' => 'required',
            'item_type' => 'required'
        ]);

        $items = new Items;

        $items->title = $request->get('title');
        $items->item_description = $request->get('item_description');
        $items->item_type_id = $request->get('item_type');

        $items->save();

        return redirect('/itemlist')
                        ->with('flash_notification.message', 'Successfully added your item')
                        ->with('flash_notification.level', 'success');
    }

    public function editItem($id) {

        $item = Items::find($id);
        $items_type = DB::table('item_type')->get();

        return View('items.edit_item', ['item' => $item, 'item_type_list' => $items_type]);
    }

    public function updateItem(Request $request, $id) {

        $this->validate($request, [
            'title' => 'required',
            'item_description' => 'required',
            'item_type' => 'required'
        ]);

        $item = Items::findOrFail($id);

        $item->title = $request->get('title');
        $item->item_description = $request->get('item_description');
        $item->item_type_id = $request->get('item_type');

        $item->save();

        return redirect('/itemlist')
                        ->with('flash_notification.message', 'Successfully updated your item')
                        ->with('flash_notification.level', 'success');
    }

    public function deleteItem($id) {
        $item = Items::findOrFail($id);
        $item->delete();

        return redirect('/itemlist')
                        ->with('flash_notification.message', 'Successfully deleted your item.')
                        ->with('flash_notification.level', 'success');
    }

    public function userItemList() {

        $items = DB::table('user_item_records')
                ->select('user_item_records.*', 'users.first_name', 'users.last_name', 'items.title')
                ->leftJoin('users', 'users.id', '=', 'user_item_records.user_id')
                ->leftJoin('items', 'items.id', '=', 'user_item_records.item_id')
                ->get();


        return View('items.manage_user_items', ['user_item_list' => $items]);
    }

    public function assignUserItem() {

        $users = DB::table('users')->get();
        $items = DB::table('items')->get();


        return View('items.add_user_item', ['users' => $users, 'items' => $items]);
    }

    public function saveAssignUserItem(Request $request) {

        $this->validate($request, [
            'user' => 'required',
            'item' => 'required',
            'from_date' => 'required|date_format:"Y-m-d"',
            'to_date' => 'required|date_format:"Y-m-d"'
        ]);

        $items = new UserItemRecord;

        $items->user_id = $request->get('user');
        $items->item_id = $request->get('item');
        $items->from_date = $request->get('from_date');
        $items->to_date = $request->get('to_date');

        $items->save();

        return redirect('/useritemlist')
                        ->with('flash_notification.message', 'Successfully assign your user item')
                        ->with('flash_notification.level', 'success');
    }
    
    public function editUserItem($id) {

        $record = UserItemRecord::find($id);
        
        $users = DB::table('users')->get();
        $items = DB::table('items')->get();

        return View('items.edit_user_item', ['record' => $record, 'users' => $users, 'items' => $items]);
    }
    
    public function updateUserItem(Request $request, $id) {

        $this->validate($request, [
            'user' => 'required',
            'item' => 'required',
            'from_date' => 'required|date_format:"Y-m-d"',
            'to_date' => 'required|date_format:"Y-m-d"'
        ]);

        $items = UserItemRecord::findOrFail($id);
        
       
        $items->user_id = $request->get('user');
        $items->item_id = $request->get('item');
        $items->from_date = $request->get('from_date');
        $items->to_date = $request->get('to_date');

        $items->save();

        return redirect('/useritemlist')
                        ->with('flash_notification.message', 'Successfully assign user item')
                        ->with('flash_notification.level', 'success');
    }
    
    public function deleteUserItem($id) {
        $item = UserItemRecord::findOrFail($id);
        $item->delete();

        return redirect('/useritemlist')
                        ->with('flash_notification.message', 'Successfully deleted your User item.')
                        ->with('flash_notification.level', 'success');
    }

}
