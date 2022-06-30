<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><a href="{{ route('partner.all') }}" class="text-light fw-light">Partner </a>/ Register</h4>
    
    <x-dashboard.toast/> 
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="mb-0">Partner Registeration</h5>          
        </div>
        <div class="card-body">
          <form wire:submit.prevent='submit'>
            <x-inlineform.input name="partner.name" placeholder="Organization Name" label="Name" icon="bx-buildings"/>
            <x-inlineform.select name='partner.type' placeholder='Select ...' :data="$partner_types" label="Type"/>
            <x-inlineform.input type="number" name="partner.annual_tution_fees" placeholder="10000$" label="Tutuion Fees" icon="bx-credit-card"/> 
            <x-inlineform.radiogroup label='Scholarship Offer' name='partner.scholarship_offer' :data="$boolean"/>    
            <x-inlineform.input type="number" name="partner.commission_rate" placeholder="10000$" label="Commission Fees" icon="bx-credit-card"/> 
                             
            <hr>

            <x-inlineform.input type="date" name="partner.agreement_date"  label="Agreement Date" icon="bx-calendar"/> 
            <x-inlineform.input type="date" name="partner.end_date" label="Expire Date" icon="bx-calendar"/> 
            

            <div class="row justify-content-end">
              <div class="col-sm-10">
                <x-inlineform.submit label='Add' icon='bx-save'/>
              </div>
            </div>
          </form>
        </div>
      </div>    
        
</div>