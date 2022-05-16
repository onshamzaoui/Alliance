<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

use function PHPSTORM_META\type;

class verification extends Controller
{
    public function index(Request $request)
    {

        $idcrypted = $request->route("id");

        $id = Crypt::decrypt($idcrypted);
        $type = $request->route("type");
        if ($type == "instructor") {
            $user = Instructor::find($id);
        } else if ($type == "student") {
            $user = Student::find($id);
        }


        return view("verification")->with("user", $user)->with("id", $idcrypted)->with("type" , $type);
    }


    public function verifyMyAccount(Request $request)
    {
        $id = Crypt::decrypt($request->id);

        
        $type = $request->type;
        
        if ($type == "instructor") {
            Instructor::where("id", $id)
                ->update(['verified' => 1]);
        } else if ($type == "student") {
            Student::where("id", $id)
                ->update(['verified' => 1]);
        }



        return redirect("login");
    }
}
