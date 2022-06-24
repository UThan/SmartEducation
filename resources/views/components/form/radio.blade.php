@props(['value','name'])
<div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" wire:model='{{ $name }}' name="{{ $name }}"  value="{{$value}}"/>
    <label class="form-check-label" for="inlineRadio1">{{$slot}}</label>
</div>