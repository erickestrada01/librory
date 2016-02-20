<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Course as Course;

class CourseController extends Controller
{
    public function getCourses(){
        $varcourse = [
            'courses'=> Course::all(),

        ];
        return view('courses.list' , $varcourse);
    }

}
