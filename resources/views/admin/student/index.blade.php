<x-admin-dashboard>
    <x-slot name='title'>
        Students
    </x-slot>

    <x-alert />

    <div class="row">
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Student Table</h3>
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
                                <th></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>


    @push('scripts')
        <script>
            $(function() {
                $('#users-table').DataTable({
                    processing: true,
                    serverSide: true,
                    responsive: true,
                    autoWidth: false,
                    ajax: '{!! route('api.student') !!}',
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
                            name: 'status'
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
                            name: 'action'
                        }
                    ]
                });
            });
        </script>
    @endpush

</x-admin-dashboard>
