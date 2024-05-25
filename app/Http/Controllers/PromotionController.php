<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function ViewPromotion()
    {
        return view('welcome');
    }

    public function eventos()
    {
        return view('eventos');
    }
}
