@props(['label','data','name'])
<div class="row">
    <div class="col mb-3">
        @isset($label)
            <label class="form-label d-block" for="status">{{$label}}</label>
        @endisset 
        @isset($data)
            @foreach ($data as $value => $label)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" wire:model.defer='{{ $name }}' name="{{ $name }}" value="{{$value}}"/>
                    <label class="form-check-label" for="inlineRadio1">{{$label}}</label>
                </div>
            @endforeach
        @endisset
        {{ $slot }}        
    </div>
</div>