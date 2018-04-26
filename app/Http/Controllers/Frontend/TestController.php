<?php
/**
 * Created by PhpStorm.
 * User: Binaya
 * Date: 3/21/2018
 * Time: 12:23 PM
 */

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class TestController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.test');
    }
}