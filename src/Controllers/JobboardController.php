<?php

namespace Abhitheawesomecoder\Jobboardpro\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
class JobboardController extends Controller
{

  	public function __construct(){
       $this->middleware('auth');
    }

    public function home()
    {
      return view('vendor.abhitheawesomecoder.jobboardpro.views.login');
    }

}
