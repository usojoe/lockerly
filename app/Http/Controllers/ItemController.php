<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use App\Items;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function itemList()
    {
        $items = DB::table('items')->get();
        return view('items.manage_items', ['item_list' => $items]);
    }

    public function addItem() {

        return View('items.add_item');
    }

     public function saveItem(Request $request) {

        $this->validate($request, [
            'title' => 'required',
            'item_description'  => 'required'
        ]);

        $item = new Items;

        $item->title             = $request->get('title');
        $item->item_description  = $request->get('item_description');

        $item->save();

        return redirect('/itemlist')
            ->with('flash_notification.message', 'Successfully added your item')
            ->with('flash_notification.level', 'success');
    }

    public function editItem($id) {

        $item = Items::find($id);
        return View('items.edit_item', ['item' => $item]);
    }

    public function updateItem(Request $request, $id){

        $this->validate($request, [
            'title'            => 'required',
            'item_description' => 'required'
        ]);

        $item = Items::findOrFail($id);

        $item->title             = $request->get('title');
        $item->item_description  = $request->get('item_description');

        $item->save();

        return redirect('/itemlist')
            ->with('flash_notification.message', 'Successfully updated your item')
            ->with('flash_notification.level', 'success');

    }

    public function deleteItem($id)
    {
        $item = Items::findOrFail($id);
        $item->delete();

        return redirect('/itemlist')
            ->with('flash_notification.message', 'Successfully deleted your item.')
            ->with('flash_notification.level', 'success');
    }
}
