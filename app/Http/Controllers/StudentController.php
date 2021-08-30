<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\City;
use App\Models\Institute;
use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Collection;
use Yajra\Datatables\Datatables;

class StudentController extends Controller
{

    public function index()
    {
        return view('admin.student.index');
    }


    public function create()
    {
        $targeted_cities = $this->createAssociativeArray(City::all('id', 'name'));
        $courses = $this->createAssociativeArray(Course::all('id', 'name'));
        $institutes = $this->createAssociativeArray(Institute::all('id', 'name'));
        return view('admin.student.create', compact('institutes', 'courses', 'targeted_cities'));
    }

    public function ajax()
    {
        $student = Student::query();
        return Datatables::of($student)
            ->addColumn('action', function ($student) {
                return '<div class="btn-group btn-group-sm">
                <a href="/student/' . $student->id . '" class="btn btn-info"><i class="fas fa-eye"></i></a>
                <a href="/student/' . $student->id . '/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>                                
              </div>';
            })
            ->addColumn('active_status', function ($student) {
                $html = $student->active_status ? 'Active' : 'Inactive';
                return  $html;
            })
            ->make(true);
    }


    public function store(Request $request)
    {
        $this->validateStudent($request);
        $student = new Student;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->course_id = $request->course;
        $student->institute_id = $request->institute;
        $student->city_id = $request->targeted_city;
        $student->visa_status = $request->visa_status;
        $student->application_status = $request->application_status;
        $student->address = $request->address;
        $student->offer_status = $request->offer_status;
        $student->coe_status = $request->coe_status;
        $student->active_status = true;
        $student->save();
        return back()->with('success', 'New record created successfully');
    }

    public function show($id)
    {
        $student = Student::find($id);
        return view('admin.student.view', ['student' => $student]);
    }

    public function edit($id)
    {
        $targeted_cities = $this->createAssociativeArray(City::all('id', 'name'));
        $courses = $this->createAssociativeArray(Course::all('id', 'name'));
        $institutes = $this->createAssociativeArray(Institute::all('id', 'name'));
        $student = Student::find($id);
        return view('admin.student.edit', compact('institutes', 'courses', 'targeted_cities', 'student'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $this->validateStudent($request);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->course_id = $request->course;
        $student->institute_id = $request->institute;
        $student->city_id = $request->targeted_city;
        $student->visa_status = $request->visa_status;
        $student->application_status = $request->application_status;
        $student->address = $request->address;
        $student->offer_status = $request->offer_status;
        $student->coe_status = $request->coe_status;
        $student->active_status = true;
        $student->save();
        return back()->with('success', 'Successfully updated');
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('student.index')->with('success', 'Successfully deleted');;
    }

    private function validateStudent(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'course' => 'required',
            'institute' => 'required',
            'targeted_city' => 'required',
            'visa_status' => 'required',
            'application_status' => 'required',
            'address' => 'required',
            'offer_status' => 'required',
            'coe_status' => 'required',
        ]);
    }

    private function createAssociativeArray(Collection $model)
    {
        $key = array_column($model->toArray(), 'id');
        $value = array_column($model->toArray(), 'name');
        $keyvalue = array_combine($key, $value);
        return $keyvalue;
    }
}
