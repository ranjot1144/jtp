<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function imprint() {
        return view('frontend_view.company.imprint');
    }
    public function terms_condition() {
        return view('frontend_view.company.terms_conditions');
    }
    public function aboutUs() {
        return view('frontend_view.company.about_me');
    }
    public function news(){
        return view('frontend_view.company.news_view');
    }
}
