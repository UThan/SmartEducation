<x-admin-dashboard>
    <x-slot name='title'>
        Students
    </x-slot>



    <div class="row">
        <div class="col">

            <!-- general form elements -->
            <div class="card card-secondary">
                <div class="card-header">
                    <div class="card-title">
                        <h5 class="mb-0">Student registeration</h5>
                    </div>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <x-alert />
                <x-form :action="route('student.store')" method='POST'>

                    <div class="card-body">

                        @include('admin.student.form')

                        <div class="form-row">
                            <div class="col-md-6">
                                <x-form-input name="deposit_amount" label="Deposit Amount" type='number'
                                    placeholder="Amount" value='0' />

                            </div>

                            <div class="col-md-6">
                                <x-form-select name="currency" label="Currency"
                                    :options="['MMK' => 'MMK','AUD'=>'AUD','USD' => 'USD']" />
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </x-form>
            </div>
            <!-- /.card -->
        </div>
    </div>
</x-admin-dashboard>
