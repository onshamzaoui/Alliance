<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Dashboard()
    {
        $layout = "side-menu";
        return View(
            'admin/Dashboard',
            [
                "layout" => "simple-menu",
                "side_menu" => [],

            ]

        );
    }
    public function UserManagement()
    {
        $layout = "side-menu";
        return View(
            'admin/Dashboard',


        );
    }
}
