<?php

namespace App\Http\Controllers;

use App\Models\App;
use App\Models\Slid;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $apps = App::orderBy('created_at', 'desc')->take('2')->get();
        $comments = Testimonial::take('8')->get();
        $slids = Slid::all();
        return view('index', [
            'apps' => $apps,
            'slids' => $slids,
            'comments' => $comments,
        ]);
    }
}
