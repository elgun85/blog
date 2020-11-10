<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Validator;
//Models
use App\Models\Article;
use App\Models\Category;
use App\Models\Page;
use App\Models\Contact;
use Mail;
use App\Models\Config;

class Homepage extends Controller
{
    public function index()
    {
return view('front.homepage');
    }




}
