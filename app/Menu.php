<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class Menu extends Model
{
    static public function save_new($request)
    {
        $menu = new self();
        $menu->link = $request['link'];
        $menu->url = $request['url'];
        $menu->title = $request['title'];
        $menu->save();

        Session::flash('sm', 'All changes have been saved');
    }

    static public function update_item($request, $id)
    {
        $menu = Menu::find($id);
        $menu->link = $request['link'];
        $menu->url = $request['url'];
        $menu->title = $request['title'];
        $menu->save();

        Session::flash('sm', 'All changes have been saved');
    }
}
