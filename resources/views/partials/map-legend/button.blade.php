@php
    [$label, $icon] = match ($modalId) {
        'level33Modal' => ['Clinic / Health Centre', 'https://id.concordreview.com/wp-content/plugins/w2gm/resources/images/map_icons/icons/_new/hospital_pin-green.png'],
        'level55Modal' => ['Hospital', 'https://pg.concordreview.com/wp-content/uploads/2025/01/hospital_pin-blue.png'],
        'police3Modal' => ['Specialized Unit', asset('images/Layer2.png')],
        'police4Modal' => ['National Police (HQ)', asset('images/Layer1.png')],
    };
    $size = $iconSize ?? 24;
@endphp
<button type="button" class="{{ $buttonClass }}" @isset($buttonStyle) style="{{ $buttonStyle }}" @endisset data-bs-toggle="modal" data-bs-target="#{{ $modalId }}">
    <img src="{{ $icon }}" alt="" style="width:{{ $size }}px; height:{{ $size }}px;">
    <small>{{ $label }}</small>
</button>
