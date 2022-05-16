<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class TestController extends Controller
{
    function testfunction(){
        foreach (Student::all() as $flight) {
            echo $flight->first_name;
        }
    }
}
