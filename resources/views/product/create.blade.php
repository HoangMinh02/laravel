<h1>Create Product</h1>

@php
    $name = 'Nguyen Van A';
    $string = '<h1> H1 </h1>';
@endphp

{{ $name }}
{{ $string }}
{!! $string !!}

@php
    echo htmlspecialchars($string);
@endphp