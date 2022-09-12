<table class="table dataTable">
    <thead class="tbbg">
        <tr>
            <th rowspan="2" style="width: 1%; color: white;">
                #
            </th>

            <th colspan="4" style="width: 40%; text-align: center; color: white;">
                Customer Information
            </th>

            <th colspan="6" style="width: 60%; text-align: center; color: white;">
                Wanted information
            </th>
        </tr>
        <tr>
            <th style="color: white; background-color: green; text-align: center; widht: 10%">
                Name
            </th>
            <th style="color: white; background-color: green; text-align: center; widht: 10%">
                Phone
            </th>

            <th style="color: white; background-color: green; text-align: center; widht: 10%">
                Email
            </th>

            <th style="color: white; background-color: green; text-align: center; widht: 10%">
                Address
            </th>

            <th style="color: white; background-color: #3f51b5; text-align: center; widht: 10%">
                Property Type
            </th>

            <th style="color: white; background-color: #3f51b5; text-align: center; widht: 10%">
                Area
            </th>

            <th style="color: white; background-color: #3f51b5; text-align: center; widht: 10%">
                Price Form
            </th>

            <th style="color: white; background-color: #3f51b5; text-align: center; widht: 10%">
                Price To
            </th>

            <th style="color: white; background-color: #3f51b5; text-align: center; widht: 10%">
                Township
            </th>

            <th style="color: white; background-color: #3f51b5; text-align: center; widht: 10%">
                Remark
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                1
            </td>

            <td style="text-align: center">
                {{ $want_to_buy->customer_name ?? '' }}
            </td>

            <td style="text-align: center">
                {{ $want_to_buy->phone_number ?? '' }}
            </td>

            <td style="text-align: center">
                {{ $want_to_buy->email ?? '' }}
            </td>

            <td style="text-align: center">
                {{ $want_to_buy->address ?? '' }}
            </td>

            <td style="text-align: center">
                {{ $want_to_buy->property_type_table->property_type ?? '' }}
            </td>

            <td style="text-align: center">
                @php
                    if ($want_to_buy->area_width == null || $want_to_buy->area_width == '') {
                        $area_width = 0;
                    } else {
                        $area_width = $want_to_buy->area_width ?? 0;
                    }
                    
                    if ($want_to_buy->area_height == null || $want_to_buy->area_height == '') {
                        $area_height = 0;
                    } else {
                        $area_height = $want_to_buy->area_height ?? 0;
                    }
                    
                    echo $area_width . '*' . $area_height . ' = ' . $area_width * $area_height;
                @endphp
            </td>

            <td style="text-align: center">
                {{ $want_to_buy->price_from ?? '' }}
            </td>

            <td style="text-align: center">
                {{ $want_to_buy->price_to ?? '' }}
            </td>

            <td style="text-align: center">
                {{ $want_to_buy->township_table->township ?? '' }}
            </td>

            <td style="text-align: center">
                {{ $want_to_buy->remark ?? '' }}
            </td>
        </tr>
    </tbody>
</table>
