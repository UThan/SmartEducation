@props(['id'])
<div wire:ignore.self class="modal fade" id="{{$id}}" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title w-100 text-center">Are you sure?</h3>
        </div>
        <div class="modal-body">              
            <p class="text-center">
                Do you really want to delete these records? <br>
                This process cannot be undone.</p>              
        </div>
        <div class="modal-footer justify-content-center">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
            Close
          </button>
          <button type="button" class="btn btn-danger" wire:click.prevent='delete()'>Delete</button>
        </div>
      </div>
    </div>
</div>