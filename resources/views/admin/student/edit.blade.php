<x-admin-dashboard>
    <x-slot name='title'>
        Students
    </x-slot>



    <div class="row">
        <div class="col">
            <x-alert />
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Student Registeration</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <x-form :action="route('student.update', $student->id)" method='PUT'>
                    @bind($student)
                    <div class="card-body">
                        @include('admin.student.form')
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                    @endbind
                </x-form>
            </div>
            <!-- /.card -->
        </div>
    </div>
</x-admin-dashboard>
