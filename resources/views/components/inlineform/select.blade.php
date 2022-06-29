@props(['label','data','model','name','placeholder'])
<div class="row mb-3">
    @isset($label)
    <label class="col-sm-2 col-form-label" for="{{$name}}">{{$label}}</label>
    @endisset
    
    <div class="col-sm-10">
      <div class="input-group">
        <select class="form-select" id="{{ $name }}" wire:model='{{ $name }}'>

            @isset($placeholder)
                <option selected>{{ $placeholder }}</option>
            @endisset
            @isset($data)
                @foreach ($data as $value=>$label)
                  <option value="{{$value}}">{{$label}}</option>
                @endforeach
            @endisset
            @isset($model)
                @foreach ($model as $value)
                  <option value="{{$value->id}}">{{$value->name}}</option>
                @endforeach
            @endisset
            
        </select>
        <x-form.error :name="$name" />
      </div>
    </div>
</div>