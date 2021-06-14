@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-medium text-white">{{ __('Upsss! Algo va mal.') }}</div>

        <ul class="mt-3 list-disc list-inside text-sm text-white">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
