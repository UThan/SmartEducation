<x-admin-dashboard>
    <x-slot name='title'>
        Students
    </x-slot>

    <x-alert />

    <div class="row">
        <div class="col-12">
            <div class="card card-secondary">
                <div class="card-header">
                    <div class="card-title">
                        <h5 class="m-1">Student list</h5>
                    </div>
                    <div class="card-tools">
                        <a href="{{ route('student.create') }}" class="btn btn-sm btn-success"> <i
                                class="fas fa-plus mr-1"></i> New student</a>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Visa</th>
                                <th>Application</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>
                                        @if ($student->active_status)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-secondary">Inactive</span>
                                        @endif
                                    </td>
                                    <td>{{ $student->visa_status }}</td>
                                    <td>{{ $student->application_status }}</td>
                                    <td>@include('admin.student.action')</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- /.card-body -->
                @if ($students->hasPages())
                    <div class="card-footer">
                        {{ $students->links() }}
                    </div>
                @endif


            </div>
        </div>
    </div>

    @include('admin.payment.create')

</x-admin-dashboard>
