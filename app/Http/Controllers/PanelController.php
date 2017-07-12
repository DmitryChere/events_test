<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class PanelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['events'] = Event::all();
        return view('panel', $data);
    }
}
