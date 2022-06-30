<?php

namespace App\Http\Livewire\Member;

use App\Helper\WithData;
use App\Models\Member;
use App\Models\Position;
use App\Models\SalaryType;
use Livewire\Component;

class Create extends Component
{
    use WithData;

    public Member $member;
    public $positions, $salarytypes;

    public $rules = [
        'member.name' => 'required',
        'member.position_id' => 'required',
        'member.salary' => 'required',
        'member.salary_type_id' => 'required',
        'member.start_date' => 'required',
    ];
    
    public function mount(){   
        $this->member = new Member();  
        $this->positions = Position::all(['id','name']); 
        $this->salarytypes = SalaryType::all(['id','name']); 
    }

    public function render()
    {
        return view('livewire.member.create');
    }

    public function submit()
    {
        $this->validate();
        $this->member->save();
        session()->flash('success','Successfully register new parter');
        redirect()->route('member.all');
    }
}
