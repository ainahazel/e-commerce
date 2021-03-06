<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Watch;

class CartController extends Controller
{

    /**
     * adding a product to a cart
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addToCart($id)
    {
        $watch = Watch::find($id);

        //getting cart out of session
        $cart = session()->get('cart');

        // checking if cart is empty and this is the first watch in the cart
        if (!$cart) {

            $cart = [
                $id => [
                    "watch_name" => $watch->watch_name,
                    "quantity" => 1,
                    "price" => $watch->price,
                    "cover_img" => $watch->cover_img
                ]
            ];

            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist and increment its quantity
        if (isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "watch_name" => $watch->watch_name,
            "quantity" => 1,
            "price" => $watch->price,
            "cover_img" => $watch->cover_img
        ];

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');

    }

    /**
     * getCartTotal
     *
     *
     * @return float|int
     */
    private function getCartTotal()
    {
        $total = 0;

        $cart = session()->get('cart');

        foreach($cart as $id => $details) {
            $total += $details['price'] * $details['quantity'];
        }

        return number_format($total, 2);
    }


    /**
     * @param Request $request
     *
     * removing an item from a cart
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function remove(Request $request)
    {
        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            $total = $this->getCartTotal();

            return response()->json(['total' => $total]);

            session()->flash('success', 'Product removed successfully');
        }
    }


    /**
     * @param Request $request
     *
     * updating quantity of a product in a cart and total/subtotal accordingly
     *
     * @return \Illuminate\Http\JsonResponse
     */

    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            $subTotal = $cart[$request->id]['quantity'] * $cart[$request->id]['price'];

            $total = $this->getCartTotal();

            return response()->json(['msg' => 'Cart updated successfully',  'total' => $total, 'subTotal' => $subTotal]);

            session()->flash('success', 'Cart updated successfully');
        }
    }
}
