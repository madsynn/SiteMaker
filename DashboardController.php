<?php

namespace App\Http\Controllers\Admin;

use App\Feature;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Package;
use App\Page;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    /**
     * DashboardController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all()->count();
        $packages = Package::all()->count();
        $features = Feature::all()->count();
        $pages = Page::page()->count();
        $posts = Page::post()->count();
        $subscriptions = \DB::table('subscriptions')->count();

        return view('admin.dashboard')->with(compact('users', 'packages', 'features', 'subscriptions', 'pages', 'posts'));
    }

}
