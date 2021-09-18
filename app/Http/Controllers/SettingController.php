<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\City;
use App\Models\Institute;

class SettingController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $courses = Course::paginate(5, ['*'], 'courses');
        $cities = City::paginate(5, ['*'], 'cities');
        $institutes = Institute::paginate(5, ['*'], 'institutes');

        return view('admin/setting/setting', compact('courses', 'cities', 'institutes'));
    }
}
