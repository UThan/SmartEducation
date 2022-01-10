<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Payment;
use App\Models\City;
use App\Models\Institute;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Yajra\Datatables\Datatables;

class StudentController extends Controller
{

    public function index()
    {
        $students = Student::orderBy('id', 'desc')->paginate(10);
        return view('admin.student.index', ['students' => $students]);
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
                return view('admin.student.action', ['student' => $student]);
            })
            ->editColumn('active_status', function ($student) {
                $active = '<span class="badge bg-success">Active</span>';
                $inactive = '<span class="badge bg-secondary">Inactive</span>';
                return $student->active_status ? $active : $inactive;
            })->rawColumns(['active_status'])
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
        $student->description = $request->description;
        $student->city_id = $request->city;
        $student->visa_status = $request->visa_status;
        $student->application_status = $request->application_status;
        $student->address = $request->address;
        $student->offer_status = $request->offer_status;
        $student->coe_status = $request->coe_status;
        $student->level_test = $request->level_test;
        $student->active_status = true;
        $student->save();

        $payment = new Payment;
        $payment->type = 'deposit';
        $payment->amount = $request->deposit_amount;
        $payment->currency = $request->currency;
        $student->payments()->save($payment);

        return redirect()->route('student.index')->with('success', 'New student added successfully');
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
        $this->validateStudent($request);
        $student = Student::find($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->course_id = $request->course;
        $student->institute_id = $request->institute;
        $student->description = $request->description;
        $student->city_id = $request->city;
        $student->visa_status = $request->visa_status;
        $student->application_status = $request->application_status;
        $student->address = $request->address;
        $student->offer_status = $request->offer_status;
        $student->coe_status = $request->coe_status;
        $student->active_status = true;
        $student->level_test = $request->level_test;
        $student->save();
        return redirect()->route('student.index')->with('success', 'Successfully updated');
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('student.index')->with('success', 'Successfully deleted');
    }

    private function validateStudent(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'course' => 'required',
            'institute' => 'required',
            'city' => 'required',
            'visa_status' => 'required',
            'application_status' => 'required',
            'address' => 'required',
            'offer_status' => 'required',
            'coe_status' => 'required',
            'level_test' => 'required'
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
