<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;

class DashController extends Controller
{
    //

    public function index(){

        if(Auth::user()->email == "admin@admin.com"){
            return view('dashboardadmin.index');
        }
        return view('dashboard.index');
    }

    public function profile(){
        $user = User::find(1);

        $detail = $user->userDescription;

        $detail->fname="Aatish";

        return $detail;

        return view('dashboard.profile');
    }
}
