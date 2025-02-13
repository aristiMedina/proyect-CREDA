{{-- <div {{ $attributes->merge(['class'=>'d-flex flex-nowrap flex-column align-items-center justify-content-center '. $class ]) }}> --}}
<div class="d-flex flex-nowrap flex-column align-items-center justify-content-center">
    <div class="e-fixed">
        <a href="{{ route('module-1')}}">
            {{ $slot }}
        </a>
    </div>

    <span class="mt-2 fs-4 fw-semibold">{{ $title ?? '' }}</span>
</div>
