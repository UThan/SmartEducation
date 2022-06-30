<?php

namespace App\Http\Livewire\Partner;

use App\Helper\WithData;
use App\Models\Partner;
use Livewire\Component;

class Create extends Component
{
    use WithData;

    public Partner $partner;

    public $rules = [
        'partner.name' => 'required',
        'partner.type' => 'required',
        'partner.annual_tution_fees' => 'required',
        'partner.scholarship_offer' => 'required',
        'partner.commission_rate' => 'required',
        'partner.agreement_date' => 'required',
        'partner.end_date' => 'required',
    ];
    
    public function mount(){
        $this->partner = new Partner();      
    }

    public function render()
    {
        return view('livewire.partner.create');
    }

    public function submit()
    {
        $this->validate();
        $this->partner->save();
        session()->flash('success','Successfully register new parter');
        redirect()->route('partner.all');
    }
}
