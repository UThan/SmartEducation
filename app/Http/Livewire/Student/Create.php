<?php

namespace App\Http\Livewire\Student;

use App\Helper\WithData;
use App\Models\City;
use App\Models\Course;
use App\Models\Institute;
use App\Models\Student;
use Livewire\Component;

class Create extends Component
{
    use WithData;
    public Student $student;   
    public $cities,$courses,$institutes; 

    public $deposit, $currency= "MMK";

    public $rules = [
        'student.name' => 'required',
        'student.email' => 'required',
        'student.phone' => 'required',
        'student.address' => 'required',     
        'student.visa_status' => 'required', 
        'student.application_status' => 'required',
        'student.offer_status' => 'required',
        'student.coe_status' => 'required',
        'student.targeted_city_id' => 'required',
        'student.course_id' => 'required',
        'student.institute_id' => 'required',
        'deposit' => 'required',
        'currency' => 'required'
    ];

    public function mount(){
        $student = new Student();    
        $student->visa_status = 'Not started';
        $student->application_status = 'Not started';
        $student->offer_status = 'Unknown';            
        $student->coe_status = 'Unknown';
        $this->student = $student;
        $this->cities = City::all(['id','name']);
        $this->courses = Course::all(['id','name']);
        $this->institutes = Institute::all(['id','name']);
    }

 
    public function render()
    {
        return view('livewire.student.create');
    }

    public function submit()
    {
        $this->validate();        
        $this->student->save();
        session()->flash('success', 'successfully deleted');
        redirect()->route('student.all');
    }
}
