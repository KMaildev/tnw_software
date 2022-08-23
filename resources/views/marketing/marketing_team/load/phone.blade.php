@php
$propertyPhoneNumber = explode(',', $phone);
$propertyPhoneNumberTotal = count($propertyPhoneNumber);
@endphp
@for ($i = 0; $i < $propertyPhoneNumberTotal; $i++)
    @php
        $ph = $propertyPhoneNumber[$i];
    @endphp
    <a href="tel:{{ $ph }}">
        {{ $ph }}
    </a>
@endfor
