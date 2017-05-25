<?php
/**
 * Created by PhpStorm.
 * User: hungnguyen
 * Date: 18/05/2017
 * Time: 22:35
 */

namespace App\Http\Services;

use App\Units;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Exception;
use Illuminate\Support\Facades\Session;

class CartService
{
    public function add($params){
        if(!session()->has('cart')){
            Session::put('cart', []);
        }
        $product = $params["item"];
        $cart = Session::get('cart');
        $variantID = $product["variant_id"];
        if(isset($cart[$variantID])){
            $item = $cart[$variantID];
            $item["quantity"] += $product["quantity"];
            $item["total"] += $product["total"];
            $cart[$variantID] = $item;
        }else{
            $cart[$variantID] = $product;
        }
        Session::put('cart', $cart);
        return "success";
    }

    public function update($params){
        $product = $params["item"];
        $cart = Session::get('cart');
        $variantID = $product["variant_id"];
        if(isset($cart[$variantID])){
            $item = $cart[$variantID];
            $item["quantity"] = $product["quantity"];
            $item["total"] = $product["total"];
            $cart[$variantID] = $item;
            Session::put('cart', $cart);
            return "success";
        }
    }

    public function remove($params){
        $product = $params["item"];
        $cart = Session::get('cart');
        $variantID = $product["variant_id"];
        if(isset($cart[$variantID])){
            unset($cart[$variantID]);
            Session::put('cart', $cart);
            return "success";
        }
    }

    public function getCart(){
        return Session::get('cart');
    }

    public function createOrder($params){
        $order = $params["order"];

        $variants = [];
        $data = [];
        foreach ($order["variants"] as $variant){
            $variants[] = [
                "variant_id" => $variant["variant_id"],
                "quantity" => $variant["quantity"],
                "unit_price" => $variant["price"]
            ];
        }

        try {
            if(Auth::check()){
                $token = $this->guard()->user()->token;
                $email = $this->guard()->user()->email;
                $headers = [
                    'Content-Type' => 'application/json',
                    'Authorization' => $email,
                    'Tokenkey' => $token
                ];
            }else {
                $headers = [
                    'Content-Type' => 'application/json',
                ];
                $data["customer"] = $order["customer"];
            }
            $data["total_price"] = $order["total"];
            $data["variants"] = $variants;
            $response = Units::sendWithDataJson('orders', $headers, $data, 'POST');
            if($response->success){
                Session::forget("cart");
            }
            return $response;
        }catch (Exception $e){
            Log::error($e->getMessage());
            return null;
        }
    }

    protected function guard()
    {
        return Auth::guard();
    }
}