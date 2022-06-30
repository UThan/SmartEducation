<div class="container-xxl flex-grow-1 container-p-y">
    <x-dashboard.toast />
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">member /</span> All</h4>
    

    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">member List</h5>
        </div>

        <x-table.searchbar>
            <a href="{{ route('member.create') }}" class="btn btn-primary" type="button">                            
                <i class="bx bx-plus me-0 me-sm-2"></i>
                <span class="d-none d-sm-inline-block">Register</span>
        </x-table.searchbar>
        
        <div class="table-responsive text-nowrap">
            <x-table.table>
                <x-slot name='heading'>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Salary</th>
                    <th>Salary Type</th>
                    <th>Start Date</th>
                    <th>Action</th>
                </x-slot>

                @foreach ($members as $member)
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                            <strong>{{ $member->name }}</strong>
                        </td>
                        <td>{{ $member->position->name }}</td>
                        <td>{{ $member->salary }} Ks</td>
                        <td>{{ $member->salaryType->name }} </td>
                        <td>{{ $member->start_date }}</td>
                        <td>
                            <x-table.action>
                                <a class="dropdown-item" href="{{ route('member.edit', ['id'=>$member->id]) }}"><i
                                        class="bx bx-edit-alt me-1"></i> Edit</a>
                                <a class="dropdown-item" href="#" data-bs-toggle="modal" wire:click='confirmDelete({{$member->id}})' data-bs-target="#deleteConfirmation"><i
                                        class="bx bx-trash me-1"></i> Delete</a>
                            </x-table.action>
                        </td>
                    </tr>
                @endforeach

            </x-table.table>

            @if ($members->hasPages())
                <div class="card-footer pb-0">
                    {{ $members->onEachSide(1)->links() }}
                </div>
            @endif
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->


    <x-ui.deleteconfirmmodal id='deleteConfirmation' />     


</div>

