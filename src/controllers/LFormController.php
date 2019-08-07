<?php

namespace VietAnh\LForm\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cookie;
use Auth;

class LFormController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }
   
    public function getSetLang($lang)
    {
        return redirect()->back()->withCookie(Cookie::make("locale", $lang));
    }
}
