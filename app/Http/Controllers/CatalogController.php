<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogController extends Controller
{
    public function getIndex()
    {
        $items = Item::paginate(12);
        return view("catalog.index", compact('items'));
    }
    public function getShow($id)
    {
        return view("catalog.show", ["item" => Item::findOrFail($id)]);
    }

    public function addToCart($id)
    {
        $product = Item::find($id);

        if (!$product) {
            abort(404);
        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if (!$cart) {
            $cart = [
                $id => [
                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $product->price,
                    "photo" => $product->photo
                ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Producto añadido al carrito correctamente');
        }

        // if cart not empty then check if this product exist then increment quantity
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            $cart[$id]['price'] += $product->price;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Producto añadido al carrito correctamente');
        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "photo" => $product->photo
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Producto añadido al carrito correctamente');
    }

    public function showCart()
    {
        return view("catalog.cart");
    }

    public function addToFav($id)
    {
        $productFav = Item::find($id);

        if (!$productFav) {
            abort(404);
        }

        $fav = session()->get('fav');

        // if cart is empty then this the first product
        if (!$fav) {
            $fav = [
                $id => [
                    "name" => $productFav->name,
                    "price" => $productFav->price,
                    "photo" => $productFav->photo
                ]
            ];
            session()->put('fav', $fav);
            return redirect()->back()->with('success', 'Producto añadido a favoritos correctamente');
        }


        // if item not exist in cart then add to cart with quantity = 1
        $fav[$id] = [
            "name" => $productFav->name,
            "price" => $productFav->price,
            "photo" => $productFav->photo
        ];

        session()->put('fav', $fav);

        return redirect()->back()->with('success', 'Producto añadido a favoritos correctamente');
    }


    public function showFav(){
        return view("catalog.fav");
    }

    public function getFindItemsByCategory($category)
    {
        $items = DB::table('items')
            ->where('category', '=', $category)
            ->paginate(12);

        return view("catalog.index", compact('items'));
    }


    public function deleteItemCart($id)
    {
        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            $price = $cart[$id]['price'] / $cart[$id]['quantity'];
            $cart[$id]['quantity'] -= 1;
            $cart[$id]['price'] -= $price;

            if ($cart[$id]['quantity'] == 0) {
                unset($cart[$id]);
            }
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Producto eliminado correctamente');
    }


    public function deleteItemFav($id){
        $fav = session()->get('fav');
        if(isset($fav[$id])){
            unset($fav[$id]);
        }
        session()->put('fav', $fav);

        return redirect()->back()->with('success', 'Product eliminado correctamente');
    }

    public function getAdd()
    {
        return view("catalog.addItem");
    }

    public function postAdd(Request $request){
        $request->validate([
            'name' => 'required|max:64',
            'price' => 'required',
            'photo' => 'required',
        ]);

        $item = new Item();
        $item->name = $request->input('name');
        $item->price = $request->input('price');
        $item->photo = $request->input('photo');
        $item->save();

       return redirect('/')->with('success', 'El articulo se ha añadido correctamente.');
    }

    public function deleteItem($id){
        $item = Item::find($id);
        $item->delete();

        return redirect('/')->with('success', 'El articulo se ha eliminado correctamente.');
    }

    public function getEdit($id){
        return view("catalog.edit", ["item"=> Item::findOrFail($id)]);
    }


    public function putEdit( Request $request, $id){
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'photo' => 'required',

        ]);

        $item = Item::findOrFail($id);
        $item->name = $request->input('name');
        $item->price = $request->input('price');
        $item->photo = $request->input('photo');
        $item->save();

        return redirect('/show/' . $id)->with('success', 'El articulo se ha modificado correctamente.');
    }
}
