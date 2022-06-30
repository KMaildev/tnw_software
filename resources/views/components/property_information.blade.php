<table class="table" style="width: 100%">
    <tbody>
        <tr>
            <th colspan="2" style="text-align: center; background-color: #845013; color: white;">
                Property Information
            </th>
        </tr>
        <tr>
            <th class="data-property" style="width: 50%;">
                Date
            </th>
            <td class="data-value">
                {{ $marketing_edit->marketing_date }}
            </td>
        </tr>

        <tr>
            <th class="data-property">
                No / အိမ်အမှတ်
            </th>
            <td class="data-value">
                {{ $marketing_edit->no ?? '' }}
            </td>
        </tr>

        <tr>
            <th class="data-property">
                Road / လမ်း
            </th>
            <td class="data-value">
                {{ $marketing_edit->road ?? '' }}
            </td>
        </tr>

        <tr>
            <th class="data-property">
                Township
            </th>
            <td class="data-value">
                {{ $marketing_edit->township_table->township ?? '' }}
                /
                {{ $marketing_edit->township_table->region_table->region_mm ?? '' }}
            </td>
        </tr>

        <tr>
            <th class="data-property">
                Ward
            </th>
            <td class="data-value">
                {{ $marketing_edit->ward ?? '' }}
            </td>
        </tr>

        <tr>
            <th class="data-property">
                Property Type
            </th>
            <td class="data-value">
                {{ $marketing_edit->property_type_table->property_type ?? '' }}
                /
                {{ $marketing_edit->property_type_table->property_type_mm ?? '' }}
            </td>
        </tr>

        <tr>
            <th class="data-property">
                House Style
            </th>
            <td class="data-value">
                {{ $marketing_edit->house_style ?? '' }}
            </td>
        </tr>

        <tr>
            <th class="data-property">
                Floor
            </th>
            <td class="data-value">
                {{ $marketing_edit->floor ?? '' }}
            </td>
        </tr>

        <tr>
            <th class="data-property">
                Price
            </th>
            <td class="data-value">
                {{ $marketing_edit->price ?? 0 }}
                Lakhs
            </td>
        </tr>

    </tbody>
</table>

<hr>

<table class="table" style="width: 100%">
    <tbody>
        <tr>
            <th colspan="2" style="text-align: center; background-color: #845013; color: white;">
                Area Specifications
            </th>
        </tr>
        <tr>
            <th class="data-property" style="width: 50%;">
                Wide
            </th>
            <td class="data-value">
                {{ $marketing_edit->area_width * $marketing_edit->area_height }}
                Sqft
            </td>
        </tr>

        <tr>
            <th class="data-property">
                Acre
            </th>
            <td class="data-value">
                {{ $marketing_edit->area ?? '' }}
            </td>
        </tr>

    </tbody>
</table>

<hr>

<table class="table" style="width: 100%">
    <tbody>
        <tr>
            <th colspan="2" style="text-align: center; background-color: #845013; color: white;">
                Property Specifications
            </th>
        </tr>
        <tr>
            <th class="data-property" style="width: 50%;">
                BCC Status
            </th>
            <td class="data-value">
                @if ('true' == $marketing_edit->bcc_status)
                    BCC ကျပြီး
                @elseif ('false' == $marketing_edit->bcc_status)
                    BCC မကျပြီး
                @else
                    -
                @endif
            </td>
        </tr>

        <tr>
            <th class="data-property">
                Owner Status
            </th>
            <td class="data-value">
                @if ('မြေရှင်' == $marketing_edit->owner_status)
                    မြေရှင်
                @elseif ('တိုက်ခန်း' == $marketing_edit->owner_status)
                    တိုက်ခန်း
                @else
                    -
                @endif
            </td>
        </tr>

        <tr>
            <th class="data-property">
                Lift Status (ဓာတ်လှေကား)
            </th>
            <td class="data-value">
                @if ('Yes' == $marketing_edit->lift_status)
                    ပါ
                @elseif ('No' == $marketing_edit->lift_status)
                    မပါ
                @else
                    -
                @endif
            </td>
        </tr>

        <tr>
            <th class="data-property">
                Status
            </th>
            <td class="data-value">
                @if ('Hall' == $marketing_edit->property_status)
                    Hall
                @elseif ('Bedroom' == $marketing_edit->property_status)
                    အိပ်ခန်း
                @else
                    -
                @endif
            </td>
        </tr>

        <tr>
            <th class="data-property">
                Extra Charge
            </th>
            <td class="data-value">
                @if ('Yes' == $marketing_edit->extra_charge)
                    ပါ
                @elseif ('No' == $marketing_edit->extra_charge)
                    မပါ
                @else
                    -
                @endif
            </td>
        </tr>

    </tbody>
</table>

<hr>

<table class="table" style="width: 100%">
    <tbody>
        <tr>
            <th colspan="2" style="text-align: center; background-color: #845013; color: white;">
                Room Specifications
            </th>
        </tr>
        <tr>
            <th class="data-property" style="width: 50%;">
                Rooms
            </th>
            <td class="data-value">
                {{ $marketing_edit->rooms ?? '' }}
            </td>
        </tr>

        <tr>
            <th class="data-property">
                Shrine
            </th>
            <td class="data-value">
                {{ $marketing_edit->shrine ?? '' }}
            </td>
        </tr>

        <tr>
            <th class="data-property">
                Bathrooms
            </th>
            <td class="data-value">
                {{ $marketing_edit->bathrooms ?? '' }}
            </td>
        </tr>

        <tr>
            <th class="data-property">
                Dining
            </th>
            <td class="data-value">
                {{ $marketing_edit->dining ?? '' }}
            </td>
        </tr>

        <tr>
            <th class="data-property">
                Living
            </th>
            <td class="data-value">
                {{ $marketing_edit->living ?? '' }}
            </td>
        </tr>

        <tr>
            <th class="data-property">
                Bedrooms
            </th>
            <td class="data-value">
                {{ $marketing_edit->living ?? '' }}
            </td>
        </tr>

        <tr>
            <th class="data-property">
                Master Bedrooms
            </th>
            <td class="data-value">
                {{ $marketing_edit->bedrooms ?? '' }}
            </td>
        </tr>

        <tr>
            <th class="data-property">
                Other
            </th>
            <td class="data-value">
                {{ $marketing_edit->master_bedrooms ?? '' }}
            </td>
        </tr>

    </tbody>
</table>

<table class="table" style="width: 100%">
    <tbody>
        <tr>
            <th colspan="3" style="text-align: center; background-color: #845013; color: white;">
                Premission
            </th>
        </tr>
        <tr>
            <th class="data-property" style="width: 30%;">
                Premission
            </th>
            <td class="data-value" style="width: 30%;">
                @if ($marketing_edit->permission_type == 'grant')
                    ဂရံ
                @elseif ($marketing_edit->permission_type == 'permit')
                    Permit
                @elseif ($marketing_edit->permission_type == 'ancestral_land')
                    ဘိုးဘွားပိုင်မြေ
                @endif

                @if ($marketing_edit->grant_type)
                    ({{ $marketing_edit->grant_type ?? '' }})
                @endif
            </td>

            <td class="data-value" style="width: 30%;">
                @if ($marketing_edit->orginal_or_copy == 'Orginal')
                    မူရင်း
                @elseif ($marketing_edit->orginal_or_copy == 'Copy')
                    မိတ္တူ
                @endif
            </td>
        </tr>
    </tbody>
</table>
