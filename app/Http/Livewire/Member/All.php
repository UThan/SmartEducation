<?php

namespace App\Http\Livewire\Member;

use App\Models\Member;
use Livewire\Component;
use Livewire\WithPagination;

class All extends Component
{

    use WithPagination;    
    protected $paginationTheme = 'bootstrap';
    public $column = '10', $search, $member_id;

    public function render()    
    {
        $members = Member::where('name','like','%' . $this->search . '%')
                ->latest()->paginate($this->column);
        return view('livewire.member.all',compact('members'));
    }

    public function confirmDelete($id)
    {
        $this->member_id = $id;
    }

    public function delete()
    {
        Member::destroy($this->member_id);
        session()->flash('success','successfully deleted');
        $this->emit('hideModal','deleteConfirmation');
    }
}
