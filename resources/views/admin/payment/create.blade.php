<div class="modal fade" id="payment">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fas fa-money-check-alt mr-2"></i>New payment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <x-form :action="route('payment.store')" method='POST'>
                <div class="modal-body">
                    <x-form-input name="student_id" value="{{ old('student_id') }}" hidden />
                    <x-form-select name="type" label="Payment type"
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

@push('scripts')

    @if ($errors->any())
        <script>
            $('#payment').modal('show');
        </script>
    @endif

    <script>
        $(document).on('click', '.open-payment-modal', function() {
            const id = $(this).data('id');
            $("input[name='student_id']").val(id);

        })
    </script>
@endpush
