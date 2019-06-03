<?php

namespace App;

use Cart;
use DB;
use Illuminate\Database\Eloquent\Model;
use Session;
use Image;

class Product extends Model
{
    public static function getProducts($curl, &$data)
    {
        $products = DB::table('products AS p')
            ->join('categories AS c', 'c.id', '=', 'p.categorie_id')
            ->select('c.ctitle', 'c.curl', 'p.*')
            ->where('c.curl', '=', $curl)
            ->paginate(3);
            

        if (!$products->count()) {
            abort(404);
        } else {
            $data['pageTitle'] .= $products[0]->ctitle;
            $data['products'] = $products;
        }
    }

    public static function getItem($purl, &$data)
    {
        if ($item = Product::where('purl', '=', $purl)->join('categories AS c', 'c.id', '=', 'products.categorie_id')->select('c.curl', 'products.*')->first()) {
            $item = $item->toArray();
            $data['pageTitle'] .= $item['ptitle'];
            $data['products'] = $item;
        } else {
            abort(404);
        }
    }

    public static function addToCart($pid)
    {
        if ($product = self::find($pid)) {
            $product = $product->toArray();

            if (!Cart::get($pid)) {
                Cart::add($pid, $product['ptitle'], $product['price'], 1, ['article' => $product['particle'], 'pimage' => $product['pimage']]);
                Session::flash('sm', $product['ptitle'] . ' is in your cart now!');
            }

        }
    }

    public static function updateCart($request)
    {
        if (!empty($request['pid']) && !empty($request['op'])) {
            if (is_numeric($request['pid'])) {
                if (Cart::get($request['pid'])) {
                    if ($request['op'] == 'plus') {
                        Cart::update($request['pid'], ['quantity' => 1]);

                    } elseif ($request['op'] == 'minus') {
                        Cart::update($request['pid'], ['quantity' => -1]);
                    }
                }
            }
        }
    }

    public static function save_new($request)
    {
        $image_name = 'default_img.png';

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $image_name = date('d.m.Y.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image')->move(public_path() . '/images', $image_name);
            $img = Image::make(public_path() . '/images/'. $image_name);
            $img->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save();
        }
        $product = new self();
        $product->categorie_id = $request['categorie_id'];
        $product->ptitle = $request['title'];
        $product->particle = $request['article'];
        $product->pimage = $image_name;
        $product->price = $request['price'];
        $product->purl = $request['url'];
        $product->save();
        Session::flash('sm', 'All changes have been successfully saved');
    }

    public static function update_item($request, $id)
    {
        $image_name = '';

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $image_name = date('d.m.Y.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image')->move(public_path() . '/images', $image_name);
            $img = Image::make(public_path() . '/images/'. $image_name);
            $img->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save();
        }
        $product = self::find($id);
        $product->categorie_id = $request['categorie_id'];
        $product->ptitle = $request['title'];
        $product->particle = $request['article'];
        if($image_name){
            $product->pimage = $image_name;
        }
        $product->price = $request['price'];
        $product->purl = $request['url'];
        $product->save();
        Session::flash('sm', 'All changes have been successfully saved');
    }

}