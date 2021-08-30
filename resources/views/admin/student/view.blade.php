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
                    >
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
                        Transactions
                    </h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-primary btn-sm" data-target='#modal-new'
                            data-toggle="modal">
                            New
                            <i class="fas fa-plus-circle ml-2"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Type</th>
                                <th>Amount</th>
                                <th style="width: 50px">Currency</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($student->transactions as $transaction)
                                <tr>
                                    <td>{{ $transaction->id }}</td>
                                    <td>{{ $transaction->type }}</td>
                                    <td>{{ $transaction->amount }} </td>
                                    <td>{{ $transaction->currency }}</td>
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

    <div class="modal fade" id="modal-new">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="fas fa-money-check-alt mr-2"></i>New transaction</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <x-form :action="route('transaction.store')" method='POST'>
                    <div class="modal-body">
                        <x-form-input name="student_id" value="{{ $student->id }}" hidden />
                        <x-form-select name="type" label="Transaction type"
                            :options="['Deposit'=>'Deposit','Tution fees' => 'Tution fees']" />
                        <x-form-input name="amount" label="Amount" type='number' placeholder="Amount" />
                        <x-form-select name="currency" label="Currency"
                            :options="['MMK' => 'MMK','AUD'=>'AUD','USD' => 'USD']" />
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <x-form-submit>Save</x-form-submit>
                    </div>
                </x-form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->


</x-admin-dashboard>
