<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Student /</span> Register</h4>
    
    <x-dashboard.toast/> 
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="mb-0">Student Registeration</h5>          
        </div>
        <div class="card-body">
          <form wire:submit.prevent='submit'>
            <x-form.input name="student.name" placeholder="Your Name" label="Name" icon="bx-user"/>
            <x-form.input type="email" name="student.email" placeholder="name@company.com" label="Email" icon="bx-envelope"/>
            <x-form.input type="tel" name="student.phone" placeholder="+95 94456789" label="Phone" icon="bx-phone"/>            
            <x-form.textarea name="student.address" placeholder="Full Address..." label="Address" icon="bx-comment"/>       
            
            <hr>

            <x-form.select label='City' name='student.targeted_city_id' :model="$cities"/>
            <x-form.select label='Course' name='student.course_id' :model="$courses"/>
            <x-form.select label='Institute' name='student.institute_id' :model="$institutes"/>

            <hr>
            
            <x-form.radiogroup label='Visa Status' name='student.visa_status' :data="$visa_status"/>
            <x-form.radiogroup label='Application Status' name='student.application_status' :data="$application_status"/>
            <x-form.radiogroup label='Offer Status' name='student.offer_status' :data="$offer_status"/>
            <x-form.radiogroup label='COE Status' name='student.coe_status' :data="$coe_status"/>              

            <hr>

            <x-form.input type="number" name="deposit" placeholder="Enter amount" label="Deposit Amount" icon="bx-dollar"/> 

            <x-form.radiogroup label='' name="currency" :data="$currencies"/>

            <hr>

            

            <div class="row justify-content-end">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Send</button>
              </div>
            </div>
          </form>
        </div>
      </div>    
        
</div>