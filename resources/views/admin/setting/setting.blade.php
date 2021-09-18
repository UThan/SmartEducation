<x-admin-dashboard>
    <x-slot name='title'>
        Setting
    </x-slot>

    <x-alert />
    <div class="row">
        <div class="col-md-6">
            @include('admin.setting.courselist')
            @include('admin.setting.citylist')
        </div>

        <div class="col-md-6">
            @include('admin.setting.institutelist')
        </div>
    </div>

    @push('scripts')
        <script>
            $(document).on('click', '.btn-open-modal', function() {
                const name = $(this).data('name');
                $("input[name='name']").val(name);
            })
        </script>
    @endpush
</x-admin-dashboard>
