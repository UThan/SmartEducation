@props(['icon','label'])
<button type="submit" class="btn btn-primary">
    @isset($icon)
    <i class="bx {{$icon}} me-0 me-sm-2"></i>
    @endisset
    <span class="d-none d-sm-inline-block">{{ $label }}</span>
</button>
