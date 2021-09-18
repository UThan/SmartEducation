<x-admin-dashboard>
    <x-slot name='title'>
        Students
    </x-slot>
    <x-alert />

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-user-graduate mr-2"></i>
                        Student Information
                    </h3>

                    <div class="card-tools">
                        <x-form :action="route('student.destroy', $student->id)" method='DELETE'>
                            <div class="btn-group">
                                <a href="/student/{{ $student->id }}/edit" class="btn btn-sm btn-info"><i
                                        class="fas fa-edit"></i></a>
                                <button type="submit" class="btn btn-sm btn-danger"><i
                                        class="fas fa-trash"></i></button>
                            </div>
                        </x-form>
                    </div>
                </div>


                <!-- /.card-header -->
                <div class="card-body">
                    <dl class="row">
                        <dt class="col-sm-5">Name</dt>
                        <dd class="col-sm-7">{{ $student->name }}</dd>
                        <dt class="col-sm-5">Email</dt>
                        <dd class="col-sm-7">{{ $student->email }}</dd>
                        <dt class="col-sm-5">Phone No</dt>
                        <dd class="col-sm-7">{{ $student->phone }}</dd>
                        <dt class="col-sm-5">Status</dt>
                        <dd class="col-sm-7">
                            @if ($student->active_status)
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-secondary">Inactive</span>
                            @endif
                        </dd>
                        <dt class="col-sm-5">Address</dt>
                        <dd class="col-sm-7">{{ $student->address }}</dd>
                        <dt class="col-sm-5">Registered date</dt>
                        <dd class="col-sm-7">{{ $student->created_at->format('d/ M/ Y') }}</dd>
                        <dt class="col-sm-5">Targeted City</dt>
                        <dd class="col-sm-7">{{ $student->city->name }}</dd>
                        <dt class="col-sm-5">Course</dt>
                        <dd class="col-sm-7">{{ $student->course->name }}</dd>
                        <dt class="col-sm-5">Institute</dt>
                        <dd class="col-sm-7">{{ $student->institute->name }}</dd>
                        <dt class="col-sm-5">Applicaton status</dt>
                        <dd class="col-sm-7">{{ $student->application_status }}</dd>
                        <dt class="col-sm-5">Visa status</dt>
                        <dd class="col-sm-7">{{ $student->visa_status }}</dd>
                        <dt class="col-sm-5">COE status</dt>
                        <dd class="col-sm-7">{{ $student->coe_status }}</dd>
                        <dt class="col-sm-5">Offer status</dt>
                        <dd class="col-sm-7">{{ $student->offer_status }}</dd>
                        <dt class="col-sm-5">English level test</dt>
                        <dd class="col-sm-7">{{ $student->level_test }}</dd>
                    </dl>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <!-- /.col-md-6 -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-money-check-alt mr-2"></i>
                        Payments
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Type</th>
                                <th>Amount</th>
                                <th>Currency</th>
                                <th style="width: 50px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($student->payments as $payment)
                                <tr>
                                    <td>{{ $payment->id }}</td>
                                    <td>{{ $payment->type }}</td>
                                    <td>{{ $payment->amount }} </td>
                                    <td>{{ $payment->currency }}</td>
                                    <td>
                                        <x-form :action="route('payment.destroy',  $payment->id)" method='DELETE'>
                                            <div class="btn-group">
                                                <button type="submit" class="btn btn-sm btn-danger"><i
                                                        class="fas fa-trash"></i></button>
                                            </div>
                                        </x-form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <!-- /.col-md-6 -->
    </div>
    @include('admin.payment.create')

</x-admin-dashboard>
