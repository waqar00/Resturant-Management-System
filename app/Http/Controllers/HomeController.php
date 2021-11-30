<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use App\Models\Food;
use App\Models\Order;
use App\Models\AddToCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $chefs = Chef::all();
        $data = Food::all();
        $user_id = Auth::id();
        $count = AddToCart::where('user_id', $user_id)->count();
        return view('home', compact(['data', 'chefs', 'count']));
    }

    public function redirects()
    {
        $data = Food::all();
        $chefs = Chef::all();
        $usertype = Auth::user()->usertype;
        if ($usertype == 1) {
            return view('admin.index');
        } else {

            $user_id = Auth::id();
            $count = AddToCart::where('user_id', $user_id)->count();
            return view('home', compact(['data', 'chefs', 'count']));
        }
    }
    public function addToCart(Request $request, $id)
    {
        if (Auth::user()) {

            $user_id = Auth::id();
            $food_id = $id;
            $quantity = $request->quantity;
            $cart = new AddToCart;
            $cart->user_id = $user_id;
            $cart->food_id = $food_id;
            $cart->quantity = $quantity;
            $cart->save();
            return redirect()->back();
        } else {
            return redirect()->route('login');
        }
    }
    public function showCart(Request $request, $id)
    {
        $data = AddToCart::where('user_id', $id)->join('food', 'add_to_carts.food_id', '=', 'food.id')->get();
        $count = AddToCart::where('user_id', $id)->count();
        $data2 = AddToCart::select('*')->where('user_id', '=', $id)->get();
        return view('showcart', compact(['count', 'data', 'data2']));
    }
    public function remove($id)
    {
        $delete = AddToCart::find($id);
        $delete->delete();
        return redirect()->back();
    }
    public function orderConfirm(Request $request)
    {
        foreach ($request->foodname as $key => $foodname) {
            $data = new Order;
            $data->foodname = $foodname;
            $data->price = $request->price[$key];
            $data->quantity = $request->quantity[$key];
            $data->name = $request->name;
            $data->phone = $request->phone;
            $data->address = $request->add;
            $data->save();
        }
        return redirect()->back();
    }
}
