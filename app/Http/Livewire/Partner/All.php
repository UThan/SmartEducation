<?php

namespace App\Http\Livewire\Partner;

use App\Models\Partner;
use Livewire\Component;
use Livewire\WithPagination;

class All extends Component
{
    use WithPagination;    
    protected $paginationTheme = 'bootstrap';
    public $column = '10', $search, $partner_id;
    
    public function render()
    {
        $partners = Partner::where('name', 'like', '%' . $this->search . '%')
                    ->latest()->paginate($this->column);
        return view('livewire.partner.all',compact('partners'));
    }

    public function confirmDelete($id)
    {
        $this->partner_id = $id;
    }

    public function delete()
    {
        Partner::destroy($this->partner_id);
        session()->flash('success','successfully deleted');
        $this->emit('hideModal','deleteConfirmation');
    }
}
