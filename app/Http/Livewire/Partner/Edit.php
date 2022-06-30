<?php

namespace App\Http\Livewire\Partner;

use App\Helper\WithData;
use App\Models\Partner;
use Livewire\Component;

class Edit extends Component
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

    public function mount($id)
    {
        $this->partner = Partner::find($id);
    }

    public function render()
    {
        return view('livewire.partner.edit');
    }

    public function submit()
    {
        $this->validate();
        $this->partner->update();
        session()->flash('success','Successfully update information');
        redirect()->route('partner.all');
    }
}
