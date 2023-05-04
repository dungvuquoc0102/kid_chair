<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntroC extends Controller
{
    public function introCompany() {
        return view('customer/Intro');
    }

    public function introCompanyDetail() {
        return view('customer/IntroDetail');
    }
}
