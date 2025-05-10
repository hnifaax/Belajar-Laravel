<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\Merchandise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class MerchandiseController extends Controller
{
    
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $merch = merchandise::where('name', 'LIKE', '%'.$keyword.'%')
        ->orWhere('harga', 'LIKE', '%'.$keyword.'%')
        ->paginate(8);
        return view('merchandise', ['merchlist' => $merch]);
    }

    public function show($id) {
        $merch = Merchandise::findOrFail($id);
        return view('merch-detail', ['merch' => $merch]);
    }
    

    public function cart(Request $request, $id) {
        $merch = Merchandise::where('id', $id)->first();

        

        $cek_order = Cart::where('id', $id)->where('status', 0)->first();
        //simpan ke db carts
        $cart = new Cart;
        $cart->name = $request->name;
        
        $cart->totalHarga = $merch->harga*$request->order;
        $cart->status = 0;
        $cart->save();

         $carts = Cart::where('id', $id)->first();

         $cek_order_detail = CartDetail::where('id', $id)->where('id', $id)->first();
            $cart_detail = new CartDetail;
            $cart_detail->merch_id = $merch->id;
            $cart_detail->carts_id = $cart->id;
            $cart_detail->jumlah = $request->order;
            $cart_detail->jumlahHarga = $merch->harga*$request->order;
            $cart_detail->save();
         
            if ($cart_detail) {
                Session::flash('status', 'success');     
                Session::flash('message', 'Add Product To Cart Success!');
            }

        //else {
        //     $cart_detail = CartDetail::where('merch_id', $merch->id)->where('carts_id', $cart->id)->first();
        //     $cart_detail->jumlah = $cart_detail->jumlah+$request->order;

        //     $price_cart_detail_new = $merch->harga*$request->order;
        //     $cart_detail->jumlahHarga = $cart_detail->jumlahHarga+$price_cart_detail_new;
        //     $cart_detail = update();
        //   }

        //  $cart = Cart::where('id', $id)->where('status', 0)->first();
        //  $cart->jumlahHarga = $cart->jumlahHarga+$merch->harga*$request->order;
        //  $cart->update();
        //simpan data ke cart_detail
        

        return redirect('merchandise');
    }

    public function shop() {
        $shop = CartDetail::all();
        $merch = Merchandise::select('id', 'name', 'harga')->get();
        return view('cart', ['cartdetaillist' => $shop,'merchlist' => $merch]);
    }

    public function delete($id) {
        $deleteshop = DB::table('cart_details')->where('id', $id)->delete();
        if ($deleteshop) {
            Session::flash('status', 'success');     
            Session::flash('message', 'Delete Data Success!');
        }
        return redirect('cart');
    }

    public function update(Request $request, $id=null, $jumlah=null) {
        $update = CartDetail::where('id', $id)->increment('jumlah', $jumlah);
        $merch = Merchandise::where('id', $id)->first();

        
        if ($update) {
            Session::flash('status', 'success');     
            Session::flash('message', 'Product Quantity has been updated!');
        }
        return redirect('cart');
    }

    // public function update(Request $reques, $id) {
    //     CartDetail::where('id', $id)->update([
    //         'jumlah' => $request->jumlah
    //     ]);
    //     return response()->json([
    //         'success' => true
    //     ]);
    // }

    // public function tambahjumlah(Request $request, $id) {
    //     $produk = CartDetail::get($id);
    //     $qty = $produk->jumlah + 1;
    //     CartDetail::update($id, $qty);
    // }
    // public function kurangjumlah($id) {
    //     $produk = CartDetail::get($id);
    //     $qty = $produk->jumlah - 1;
    //     CartDetail::update($id, $qty);
    // }
}
