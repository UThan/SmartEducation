@props(['label','data','name'])
<div class="row mb-3">

    @isset($label)
        <label class="col-sm-2 col-form-label" for="status">{{$label}}</label>
    @endisset    
    
    <div class="col-sm-10 mt-1">
        @isset($data)
            @foreach ($data as $value => $label)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" wire:model='{{ $name }}' name="{{ $name }}" value="{{$value}}"/>
                    <label class="form-check-label" for="inlineRadio1">{{$label}}</label>
                </div>
            @endforeach
        @endisset
        {{ $slot }}

        
    </div>
</div>