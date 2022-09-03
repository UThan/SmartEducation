<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><a href="{{ route('student.all') }}" class="text-light fw-light">Student </a>/ Register</h4>
    
    <x-dashboard.toast/> 
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="mb-0">Student Registeration</h5>          
        </div>
        <div class="card-body">
          <form wire:submit.prevent='submit'>
            <x-inlineform.input name="student.name" placeholder="Your Name" label="Name" icon="bx-user"/>
            <x-inlineform.input type="email" name="student.email" placeholder="name@company.com" label="Email" icon="bx-envelope"/>
            <x-inlineform.input type="tel" name="student.phone" placeholder="+95 94456789" label="Phone" icon="bx-phone"/>            
            <x-inlineform.textarea name="student.address" placeholder="Full Address..." label="Address" icon="bx-comment"/>       
            
            <hr>

            <x-inlineform.select label='City' name='student.targeted_city_id' placeholder='Select city' :model="$cities"/>
            <x-inlineform.select label='Course' name='student.course_id' :model="$courses" placeholder='Select course'/>
            <x-inlineform.select label='Institute' name='student.institute_id' :model="$institutes" placeholder='Select institute'/>

            <hr>
            
            <x-inlineform.radiogroup label='Visa Status' name='student.visa_status' :data="$visa_status"/>
            <x-inlineform.radiogroup label='Application Status' name='student.application_status' :data="$application_status"/>
            <x-inlineform.radiogroup label='Offer Status' name='student.offer_status' :data="$offer_status"/>
            <x-inlineform.radiogroup label='COE Status' name='student.coe_status' :data="$coe_status"/>   
            <x-inlineform.radiogroup label='Level Test' name='student.level_test' :data="$level_test"/>           

            <hr>

            <x-inlineform.input type="number" name="payment.amount" placeholder="Enter amount" label="Deposit Amount" icon="bx-dollar"/> 
            <x-inlineform.radiogroup label='' name="payment.currency" :data="$currencies"/>

            <hr>

            

            <div class="row justify-content-end">
              <div class="col-sm-10">
                <x-inlineform.submit label='Register'/>
              </div>
            </div>
          </form>
        </div>
      </div>    
        
</div>