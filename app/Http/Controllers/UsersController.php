<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use DB;
use App\Http\Requests\SignupRequest;

class UsersController extends MainController
{
    public function index()
    {
        self::$data['users'] = DB::table('users AS u')
        ->join('users_roles AS ur', 'ur.uid', '=', 'u.id')
        ->get()
        ->toArray();
        return view('cms.users', self::$data);
    }

    public function create()
    {
        return view('cms.add_user', self::$data);
    }

    public function store(SignupRequest $request)
    {
        User::save_new($request);
        return redirect('cms/users');
    }

    public function show($id)
    {
        self::$data['item_id'] = $id;
        return view('cms.delete_users', self::$data);
    }

    public function edit($id)
    {
        self::$data['item'] = User::find($id)->toArray();
        return view('cms.edit_users', self::$data);
    }

    public function update(SignupRequest $request, $id)
    {
        User::update_item($request, $id);
        return redirect('cms/users');
    }

    public function destroy($id)
    {
        User::destroy($id);
        Session::flash('sm', 'The item has been deleted');
        return redirect('cms/users');
    }
}
