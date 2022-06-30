<?php

namespace App\Http\Livewire\member;

use App\Models\Member;
use App\Models\Position;
use App\Models\SalaryType;
use Livewire\Component;

class Edit extends Component
{
    public Member $member;    
    public $positions, $salarytypes;

    public $rules = [
        'member.name' => 'required',
        'member.position_id' => 'required',
        'member.salary' => 'required',
        'member.salary_type_id' => 'required',
        'member.start_date' => 'required',
    ];

    public function mount($id)
    {
        $this->member = Member::find($id);        
        $this->positions = Position::all(['id','name']); 
        $this->salarytypes = SalaryType::all(['id','name']); 
        
    }

    public function render()
    {
        return view('livewire.member.edit');
    }

    public function submit()
    {
        $this->validate();
        $this->member->update();
        session()->flash('success','Successfully update information');
        redirect()->route('member.all');
    }
}
