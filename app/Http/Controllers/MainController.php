<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Categorie;

class MainController extends Controller
{
    public static $data = [
        'pageTitle' => 'W.T.F.Shop - ',
        'toasterpos' => 'toast-top-center',
    ];

    public function __construct()
    {
        self::$data['categories'] = Categorie::all()->toArray();
        self::$data['menu'] = Menu::all()->toArray();
    }
}