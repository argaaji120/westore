<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function store()
    {
        return view('pages.dashboard.settings');
    }

    public function account()
    {
        return view('pages.dashboard.account');
    }
}
