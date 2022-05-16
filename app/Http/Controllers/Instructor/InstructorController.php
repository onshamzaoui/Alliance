<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InstructorController extends Controller
{
    public function CoursesPage()
    {
        if (!Auth::guard('Instructor')->user()) {
            return redirect("/login");
        }

        $connecteduser = Auth::guard('Instructor')->user();


        $programs = Program::where("instructor_id", $connecteduser->id)->get();


        return view('instructor/courses', [
            'connecteduser' => $connecteduser,
            "programs" => $programs
        ]);
    }
    public function show(Course $course)
    {
        return view('courses.show', compact($course));
    }
    public function editCourse(Request $request)
    {
        if (!Auth::guard('Instructor')->user()) {
            return redirect("/login");
        }

        $id = $request->route("id");


        $connecteduser = Auth::guard('Instructor')->user();

        $program = Program::where("id", $id)->first();

        return view('instructor/ModifyCourse', [
            'program' => $program

        ]);
    }

    public function updateAProgram(Request $request)
    {
        Program::where('id', $request->id)
            ->update([
                'title' => $request->title,
                'description' => $request->description,
                'price' => intval($request->price),
                'difficulty' => $request->difficulty

            ]);


        return redirect("/instructor/courses");
    }






    public function addCourse(Request $request, Course $course)
    {
        if (!Auth::guard('Instructor')->user()) {
            return redirect("/login");
        }



        $connecteduser = Auth::guard('Instructor')->user();



        return view('instructor/AddCourse', [

            'connecteduser' => $connecteduser,
        ]);
    }


    public function addNewProgram(Request $request)
    {
        $connecteduser = Auth::guard('Instructor')->user();

        $program = new Program();


        $request->image->store("Images");





        // $program->title = $request->title;
        // $program->description = $request->description;
        // $program->price = $request->price;
        // $program->difficulty = $request->difficulty;
        // $program->instructor_id = $connecteduser->id;


        // $program->save();
    }


    public function deleteCourse(Request $request)
    {


        Program::where("id", $request->id)->delete();

        return redirect("/instructor/courses");
    }



    //profile

    public function viewProfile()
    {
        if (!Auth::guard('Instructor')->user()) {
            return redirect("/login");
        }



        $connecteduser = Auth::guard('Instructor')->user();



        return view('instructor/profile', [

            'connecteduser' => $connecteduser,
        ]);
    }





    //Item management => COurses


    public function ItemsPage()
    {
        $connecteduser = Auth::guard('Instructor')->user();


        $items = DB::table('course')
            ->join('program', 'course.program_id', '=', 'program.id')
            ->join('instructor', 'program.instructor_id', '=', 'instructor.id')
            ->where("instructor.id" , $connecteduser->id)
            ->select("course.*" , "program.title")
            ->get();


        return view('instructor/items', [
            "items" => $items,
            'connecteduser' => $connecteduser,
        ]);
    }


    public function AddItemHomePage()
    {
        $connecteduser = Auth::guard('Instructor')->user();


        $programs = Program::where("instructor_id", $connecteduser->id)->get();



        return view('instructor/AddItem', [

            'connecteduser' => $connecteduser,
            'programs' => $programs,
        ]);
    }


    public function AddNewItem(Request $request)
    {

        $item = new Course();

        $item->name = $request->name;
        $item->description = $request->description;
        $item->program_id = $request->program;



        $item->save();


        return redirect("/instructor/courses");
    }


    public function editItem(Request $request)
    {
        if (!Auth::guard('Instructor')->user()) {
            return redirect("/login");
        }

        $id = $request->route("id");


        $connecteduser = Auth::guard('Instructor')->user();

        $item = Course::where("id", $id)->first();

        return view('instructor/ModifyItem', [
            'item' => $item

        ]);

    }

    public function updateItem(Request $request)
    {
        Course::where('id', $request->id)
            ->update([
                'name' => $request->name,
                'description' => $request->description,
            ]);


        return redirect("/instructor/items");

    }


}
