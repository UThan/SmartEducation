    <div class="form-row">
        <div class="col-md-6">
            <x-form-input name="name" label="Name" placeholder="Enter name" />
        </div>
        <div class="col-md-6">
            <x-form-input type='email' name="email" label="Email" placeholder="Enter email" />
        </div>
    </div>



    <div class="form-row">
        <div class="col-md-6">
            <x-form-input type='tel' name="phone" label="Phone no" placeholder="Enter phone no" />
        </div>
        <div class="col-md-6">
            <x-form-select name="course" label="Course" :options="$courses" />
        </div>
    </div>


    <div class="form-row">
        <div class="col-md-6">
            <x-form-select name="institute" label="Institute" :options="$institutes" />
        </div>
        <div class="col-md-6">
            <x-form-select name="city" label="Targeted City" :options="$targeted_cities" />
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-6">
            <x-form-select name="visa_status" label="Visa Status"
                :options="['Not started'=>'Not started','Process start' => 'Process start','Pending' => 'Pending','Completed' => 'Completed']" />
        </div>

        <div class="col-md-6">
            <x-form-select name="application_status" label="Application Status"
                :options="['Not started'=>'Not started','Process start' => 'Process start','Pending' => 'Pending','Completed' => 'Completed']" />
        </div>
    </div>

    <div class="form-row">
        <div class="col">
            <x-form-textarea name='address' label='Current Address' row='2' />
        </div>
    </div>

    <x-form-group name="offer_status" label="Offer Status" inline>
        <x-form-radio name="offer_status" value="Received" label="Received" />
        <x-form-radio name="offer_status" value="Pending" label="Pending" />
        <x-form-radio name="offer_status" value="Unknown" label="Unknown" />
    </x-form-group>

    <x-form-group name="coe_status" label="COE Status" inline>
        <x-form-radio name="coe_status" value="Received" label="Received" />
        <x-form-radio name="coe_status" value="Pending" label="Pending" />
        <x-form-radio name="coe_status" value="Unknown" label="Unknown" />
    </x-form-group>

    <x-form-group name="level_test" label="English level placement test" inline>
        <x-form-radio name="level_test" value="Not started" label="Not started" />
        <x-form-radio name="level_test" value="Finished" label="Finished" />
        <x-form-radio name="level_test" value="Unknown" label="Unknown" />
    </x-form-group>
