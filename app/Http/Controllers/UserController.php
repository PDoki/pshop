<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignupRequest;
use Illuminate\Http\Request;
use App\Http\Requests\SigninRequest;
use App\User;
use Session;

class UserController extends MainController
{
    public function __construct(){

        parent::__construct();
        $this->middleware('authuser', ['except' =>['logout']]);
    }
    
    public function getSignin()
    {
        self::$data['pageTitle'] .= 'Register';
        return view('forms.signin', self::$data);
    }

    public function getSignup()
    {
        self::$data['pageTitle'] .= 'Signup';
        return view('forms.signup', self::$data);
    }

    public function postSignup(SignupRequest $request)
    {
        User::save_new($request);
        return redirect('/');
    }

    public function postSignin(SigninRequest $request)
    {
        if (User::authUser($request['email'], $request['password'])) {
            $rn = !empty($request['rn']) ? $request['rn']:'/';
            return redirect($rn);
        } else {
            self::$data['pageTitle'] .= 'Register';
            self::$data['auth_error'] = '* Wrong email or password';
            return view('forms.signin', self::$data);
        }
    }

    public function logout()
    {
        Session::flush();
        return redirect('user/signin');
    }

    
}