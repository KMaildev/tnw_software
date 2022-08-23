@php
$address = $marketing_edit->township_table->township;
echo '<iframe width="100%" height="400" frameborder="0" src="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=' . str_replace(',', '', str_replace(' ', '+', $address)) . '&z=14&output=embed"></iframe>';
@endphp
