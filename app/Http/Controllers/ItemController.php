<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;
use App\Models\User;

class ItemController extends Controller
{
    public function index()
    {
        return Item::orderBy('created_at', 'DESC')->get();
    }

    public function store(Request $request)
    {
        $newItem = new Item();
        $newItem->name = $request->item['name'];
        $newItem->user_id = Auth::id();
        $newItem->save();

        return $newItem;
    }

    public function update(Request $request, $id)
    {
        $existingItem = Item::find($id);
        if ($existingItem){
            $existingItem->completed = $request->item['completed'] ? true : false;
            $existingItem->completed_at = $request->item['completed'] ? Carbon::now() : null;
            $existingItem->save();
            return $existingItem;
        }
        return "Item not found";
    }

    public function destroy($id)
    {
        $existingItem = Item::find($id);
        if ($existingItem){
            $existingItem->delete();
            return "Succesfully deleted!";
        }
        return 'Item Not Found';
    }
}
