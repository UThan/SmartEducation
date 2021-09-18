<x-admin-dashboard>
    <x-slot name='title'>Payments</x-slot>

    <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">Payment table</h3>
            <div class="card-tools">

            </div>
        </div>

        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>No </th>
                        <th>Name</th>
                        <th>Phone no</th>
                        <th>Payment Type</th>
                        <th>Amount</th>
                        <th>Paid date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($payments as $payment)
                        <tr>
                            <th>{{ $loop->index + 1 }}</th>
                            <td>{{ $payment->student->name }}</td>
                            <td>{{ $payment->student->phone }} </td>
                            <td> {{ $payment->type }} </td>
                            <td> {{ $payment->amount }} {{ $payment->currency }}</td>
                            <td> {{ $payment->created_at->format('d/ M/ Y') }} </td>
                            <td style="width: 5rem"> <a href="{{ route('student.show', $payment->student_id) }}"
                                    class="btn btn-sm btn-secondary"><i class="fas fa-eye"></i></a> </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


        @if ($payments->hasPages())
            <div class="card-footer">
                {{ $payments->links() }}
            </div>
        @endif

    </div>
</x-admin-dashboard>
