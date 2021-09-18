<div class="card">
    <div class="card-header">
        <h3 class="card-title">City list</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-sm btn-success btn-inline" data-target="#city_modal"
                data-toggle="modal"><i class="fas fa-plus mr-2"></i>new</button>
        </div>

    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>City name</th>
                    <th style="width: 40px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cities as $city)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>

                        <td>{{ $city->name }}</td>

                        <td>
                            <x-form :action="route('city.destroy',$city->id)" method="DELETE">
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
    @if ($cities->hasPages())
        <div class="card-footer">
            {{ $cities->links() }}
        </div>
    @endif

</div>

<x-modal>
    <x-slot name='title'> New City </x-slot>
    <x-form :action="route('city.store')" method='POST'>
        <div class="modal-body">
            <x-form-input name="name" label="City name" placeholder="City name" />
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <x-form-submit>Save</x-form-submit>
        </div>
    </x-form>
</x-modal>
