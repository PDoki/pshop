<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cart;
use Session;
use DB;

class Order extends Model
{
   static public function save_new()
   {
    $order = new self();
    $order->user_id = Session::get('user_id');
    $order->total = Cart::getTotal();
    $order->data = serialize(Cart::getContent()->toArray());
    $order->save();
    Session::flash('sm', 'It\'s been a pleasure!');
    Cart::clear();
   }

   public static function getAll()
   {
      return DB::table('orders AS o')
      ->join('users AS u', 'u.id', '=', 'o.user_id')
      ->select('u.name', 'o.*')
      ->orderBy('o.created_at', 'desc')
      ->get()
      ->toArray();
   }
}