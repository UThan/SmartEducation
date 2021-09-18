<x-admin-dashboard>
    <x-slot name='title'>
        Students
    </x-slot>

    <x-alert />

    <div class="row">
        <div class="col-12">
            <div class="card card-primary">
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
                    <table class="table table-hover" id="users-table">
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
                    </table>
                </div>
            </div>
        </div>
    </div>

    @include('admin.student.payment')

    @push('scripts')
        <script>
            @if ($errors->any())
                $('#payment').modal('show');
            @endif

            $(function() {
                $('#users-table').DataTable({
                    processing: true,
                    serverSide: true,
                    responsive: true,
                    autoWidth: false,
                    ajax: {
                        url: '/api/student',
                        type: "GET",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    },
                    columns: [{
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'email',
                            name: 'email'
                        },
                        {
                            data: 'active_status',
                            name: 'active_status'
                        },
                        {
                            data: 'visa_status',
                            name: 'visa_status'
                        },
                        {
                            data: 'application_status',
                            name: 'application_status'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false,
                            sortable: false,
                        }
                    ]
                });
            });

            $(document).on('click', '.open-payment-modal', function() {
                const student_id = $(this).data('id');
                $("input[name='student_id']").val(student_id);
            })
        </script>
    @endpush

</x-admin-dashboard>
