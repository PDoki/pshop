<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Hash;
use Session;

class User extends Model
{
    static public function authUser($email, $password)
    {
        $auth = false;
        $user = DB::table('users AS u')
        ->join('users_roles AS ur', 'u.id', '=', 'ur.uid')->where('u.email', '=', $email)
        ->first();

        if($user){
            if(Hash::check($password, $user->password)){
                $auth = true;
                if($user->rid == 148){
                    Session::put('is_admin', true);
                }
                self::setUserSession($user, ', we\'ve been waiting for you.');
            }
                
            
        };

        return $auth;
    }

    static public function save_new($request)
    {
        $user = new self();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = bcrypt($request['password']);
        $user->save();
        $uid = $user->id;
        $role = 7??$request['role'];
        DB::insert("INSERT INTO users_roles VALUES($uid, $role)");
        self::setUserSession($user, ', we\'ve been waiting for you.');
    }

    private static function setUserSession($user, $ms)
    {
        Session::put('user_name', $user->name);
        Session::put('user_id', $user->id);
        Session::flash('sm', $user->name . $ms);
    }

    
    public static function update_item($request, $id)
    {
        $user = self::find($id);
        $user->name = $request['name'];
        $user->email = $request['email'];
        // $user->users_roles = $request['role'];
        $user->save();
        $role = $request['role'];
        DB::table('users_roles')->where('uid','=',$id)->update(['rid' => $role]);
        Session::flash('sm', 'All changes have been saved');
    }
}