<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><a href="{{ route('member.all') }}" class="text-light fw-light">Member </a>/ Register</h4>
    
    <x-dashboard.toast/> 
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="mb-0">Member Registeration</h5>          
        </div>
        <div class="card-body">
          <form wire:submit.prevent='submit'>
            <x-inlineform.input name="member.name" placeholder="Enter member name" label="Name" icon="bx-user"/>
            <x-inlineform.select name='member.position_id' placeholder='Select ...' :model="$positions" label="Position"/>
            <x-inlineform.input type="number" name="member.salary" placeholder="10000 Ks" label="Salary" icon="bx-credit-card"/>
            <x-inlineform.select name='member.salary_type_id' placeholder='Select ...' :model="$salarytypes" label="Salary Type"/>
            <x-inlineform.input type="date" name="member.start_date" placeholder="Select Date" label="Start Date" icon="bx-calendar"/> 
                           
            
            <div class="row justify-content-end">
              <div class="col-sm-10">
                <x-inlineform.submit label='Add' icon='bx-save'/>
              </div>
            </div>
          </form>
        </div>
      </div>    
        
</div>