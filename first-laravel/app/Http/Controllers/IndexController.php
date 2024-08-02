<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class IndexController extends Controller
{
    public function index(): View {
        return view('helloworld');
    }

    public function produtos(): View {
        return view('produtos');
    }

    public function contato(): View {
        return view('contato');
    }
}
