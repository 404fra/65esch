<?php

namespace Enamlima\Schoolconnect\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index() {
      return view('schoolconnect::index');
    }
}
