<?php

namespace App\Http\Livewire\Student;

use App\Helper\WithData;
use App\Models\Description;
use App\Models\Payment;
use App\Models\Student;
use Livewire\Component;

class View extends Component
{
    use WithData;
    public Student $student;
    public Payment $payment;
    public Description $description;

    protected $descriptionRules = [
        'description.title' => 'required',
        'description.body' => 'required',        
    ];

    protected $paymentRules = [
        'payment.type' => 'required',
        'payment.amount' => 'required',      
        'payment.currency' => 'required',    
    ];

    protected $rules = [
        'payment.type' => 'required',
        'payment.amount' => 'required',      
        'payment.currency' => 'required',    
    ];
    

    public function mount($id)
    {
        $this->student = Student::find($id);   
        $this->description = new Description();  
        $this->payment = new Payment();
    }

    public function render()
    {
        return view('livewire.student.view');
    }

    public function createPayment()
    {        
        $this->validate($this->paymentRules); 
        $this->student->payments()->save($this->payment);        
        $this->emit('hideModal','addPaymentModal');
        session()->flash('success','successfully added');   
        $this->student->refresh();    
    }

    public function createDescription()
    {
        $this->validate($this->descriptionRules);   
        $this->student->descriptions()->save($this->description);        
        $this->emit('hideModal','addDescriptionModal');
        session()->flash('success','successfully added');
        $this->student->refresh(); 
    }

    public function deletePayment($id)
    {
        Payment::destroy($id);
        session()->flash('success','Payment Removed');
        $this->student->refresh(); 
    }

    public function deleteDecription($id)
    {
        Description::destroy($id);
        session()->flash('success','Decription Removed');
        $this->student->refresh();
    }
}
