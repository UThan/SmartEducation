<?php

namespace App\Http\Livewire\Student;

use App\Helper\WithData;
use App\Models\City;
use App\Models\Course;
use App\Models\Institute;
use App\Models\Student;
use Livewire\Component;

class Edit extends Component
{
    use WithData;
    public Student $student;   
    public $cities,$courses,$institutes; 


    public $rules = [
        'student.name' => 'required',
        'student.email' => 'required',
        'student.phone' => 'required',
        'student.address' => 'required',     
        'student.visa_status' => 'required', 
        'student.application_status' => 'required',
        'student.offer_status' => 'required',
        'student.coe_status' => 'required',
        'student.status' => 'required',
        'student.targeted_city_id' => 'required',
        'student.course_id' => 'required',
        'student.institute_id' => 'required',
        
    ];

    public function mount($id){
        $student = Student::find($id);      
        $this->student = $student;
        $this->cities = City::all(['id','name']);
        $this->courses = Course::all(['id','name']);
        $this->institutes = Institute::all(['id','name']);
    }

 
    public function render()
    {
        return view('livewire.student.edit');
    }

    public function submit()
    {
        $this->validate();        
        $this->student->update();
        session()->flash('success', 'successfully updated');
    }
}
