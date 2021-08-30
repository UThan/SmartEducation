<x-admin-dashboard>
    <x-slot name='title'>
        Students
    </x-slot>



    <div class="row">
        <div class="col">

            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Student Registeration</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <x-alert />

                <x-form :action="route('student.store')" method='POST'>

                    @include('admin.student.form')

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </x-form>
            </div>
            <!-- /.card -->
        </div>
    </div>
</x-admin-dashboard>
