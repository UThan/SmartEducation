<?php

namespace App\Http\Livewire\Student;

use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class All extends Component
{
    use WithPagination;    
    protected $paginationTheme = 'bootstrap';
    public $column = '10', $search;

    public function render()
    {
        $students = Student::where('name', 'like', '%' . $this->search . '%')
                    ->latest()->paginate($this->column);
        return view('livewire.student.all',compact('students'));
    }    

    public function delete($id)
    {
        Student::destroy($id);
        session()->flash('success','successfully deleted');
    }
}
