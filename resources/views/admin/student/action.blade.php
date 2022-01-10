<a href="#" class="text-muted" data-toggle="dropdown">
    <span class="sr-only">Toggle Dropdown</span><i class="fas fa-ellipsis-v"></i>
</a>
<x-form :action="route('student.destroy', $student->id)" method="delete">
    <div class=" dropdown-menu" role="menu">
        <a class="dropdown-item" href="{{ route('student.show', $student->id) }}"><i
                class="fas fa-eye mr-2"></i>View</a>
        <a class="dropdown-item" href="{{ route('student.edit', $student->id) }}"><i
                class="fas fa-edit mr-2"></i>Edit</a>
        <button type="button" class="open-payment-modal dropdown-item" data-target="#payment"
            data-id="{{ $student->id }}" data-toggle="modal"><i class="fas fa-plus mr-2"></i>Add
            payment</button>
        <div class="dropdown-divider"></div>
        <button type="submit" class="dropdown-item text-danger"><i class="fas fa-trash mr-2"></i>Delete</button>
    </div>
</x-form>
