@props(['id'])
<div wire:ignore.self class="modal fade" id="{{$id}}" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        {{ $slot }}
      </div>
    </div>
</div>