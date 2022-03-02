<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function flashErrorMessage($message)
    {
        Session::flash('danger', $message);
    }

    public function flashInfoMessage($message)
    {
        Session::flash('info', $message);
    }

    public function flashSuccessMessage($message)
    {
        Session::flash('success', $message);
    }

    public function getAuthMember(){
        return auth('member')->user();
    }
}
