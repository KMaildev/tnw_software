<table>
    <thead>
        <tr>
            <th style="width: 1vh; text-align: center;">
                Sr
            </th>

            <th style="width: 3vh; text-align: center;">
                Marketing Name
            </th>

            <th style="width: 3vh; text-align: center;">
                Type
            </th>

            <th style="width: 3vh; text-align: center;">
                Date Time
            </th>

            <th style="width: 3vh; text-align: center;">
                Code
            </th>

            <th style="width: 3vh; text-align: center;">
                No အိမ်အမှတ်
            </th>

            <th style="width: 3vh; text-align: center;">
                Road လမ်း
            </th>

            <th style="width: 3vh; text-align: center;">
                Ward ရပ်ကွက်
            </th>

            <th style="width: 3vh; text-align: center;">
                Tsp မြို့နယ်
            </th>

            <th style="width: 3vh; text-align: center;">
                Floor
            </th>

            <th style="width: 3vh; text-align: center;">
                House Style
            </th>

            <th style="width: 3vh; text-align: center;">
                Property Style
            </th>

            <th style="width: 3vh; text-align: center;">
                Price Lakhs
            </th>

            <th style="width: 3vh; text-align: center;">
                Sqft
            </th>

            <th style="width: 3vh; text-align: center;">
                Acre
            </th>

            <th style="width: 3vh; text-align: center;">
                BCC Status
            </th>

            <th style="width: 3vh; text-align: center;">
                Owner Status
            </th>

            <th style="width: 3vh; text-align: center;">
                Lift Status (ဓာတ်လှေကား)
            </th>

            <th style="width: 3vh; text-align: center;">
                Status
            </th>

            <th style="width: 3vh; text-align: center;">
                Extra Charge
            </th>

            <th style="width: 3vh; text-align: center;">
                Rooms
            </th>

            <th style="width: 3vh; text-align: center;">
                Shrine
            </th>

            <th style="width: 3vh; text-align: center;">
                Bathrooms
            </th>

            <th style="width: 3vh; text-align: center;">
                Dining
            </th>

            <th style="width: 3vh; text-align: center;">
                Living
            </th>

            <th style="width: 3vh; text-align: center;">
                Bedrooms
            </th>

            <th style="width: 3vh; text-align: center;">
                Master Bedrooms
            </th>

            <th style="width: 3vh; text-align: center;">
                Other
            </th>

            <th style="width: 3vh; text-align: center;">
                Premission
            </th>

            <th style="width: 3vh; text-align: center;">
                မူရင်း မိတ္တူ
            </th>

            <th style="width: 3vh; text-align: center;">
                Owner Agent
            </th>

            <th style="width: 3vh; text-align: center;">
                Name
            </th>

            <th style="width: 3vh; text-align: center;">
                Phone
            </th>

            <th style="width: 3vh; text-align: center;">
                Photo
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($marketing_teams as $key => $marketing_team)
            <tr>
                <td>
                    {{ $key + 1 }}
                </td>

                <td>
                    {{ $marketing_team->users_table->name ?? '' }}
                </td>

                <td>
                    {{ Str::upper(str_replace('_', ' ', $marketing_team->offer_status ?? '')) }}
                </td>

                <td>
                    {{ $marketing_team->marketing_date ?? '' }}
                </td>

                <td>
                    {{ $marketing_team->code ?? '' }}
                </td>

                <td>
                    {{ $marketing_team->no ?? '' }}
                </td>

                <td>
                    {{ $marketing_team->road ?? '' }}
                </td>

                <td>
                    {{ $marketing_team->ward ?? '' }}
                </td>

                <td>
                    {{ $marketing_team->township_table->township ?? '' }}
                </td>

                <td>
                    {{ $marketing_team->floor ?? '' }}
                </td>

                <td>
                    {{ $marketing_team->house_style ?? '' }}
                </td>

                <td>
                    {{ $marketing_team->property_type_table->property_type ?? '' }}
                </td>

                <td>
                    {{ $marketing_team->price ?? 0 }}
                </td>

                <td>
                    {{ $marketing_team->area_width * $marketing_team->area_height }}
                </td>

                <td>
                    {{ $marketing_team->area ?? '' }}
                </td>

                <td>
                    @if ($marketing_team->bcc_status == true)
                        BCC ကျပြီ
                    @endif
                </td>

                <td>
                    {{ $marketing_team->owner_status ?? '' }}
                </td>

                <td>
                    {{ $marketing_team->lift_status ?? '' }}
                </td>

                <td>
                    {{ $marketing_team->property_status ?? '' }}
                </td>

                <td>
                    {{ $marketing_team->extra_charge ?? '' }}
                </td>

                <td>
                    {{ $marketing_team->rooms ?? '' }}
                </td>

                <td>
                    {{ $marketing_team->shrine ?? '' }}
                </td>

                <td>
                    {{ $marketing_team->bathrooms ?? '' }}
                </td>

                <td>
                    {{ $marketing_team->dining ?? '' }}
                </td>

                <td>
                    {{ $marketing_team->living ?? '' }}
                </td>

                <td>
                    {{ $marketing_team->bedrooms ?? '' }}
                </td>

                <td>
                    {{ $marketing_team->master_bedrooms ?? '' }}
                </td>

                <td>
                    {{ $marketing_team->other_rooms ?? '' }}
                </td>

                <td>
                    @if ($marketing_team->permission_type == 'grant')
                        ဂရံ
                    @elseif ($marketing_team->permission_type == 'permit')
                        Permit
                    @elseif ($marketing_team->permission_type == 'ancestral_land')
                        ဘိုးဘွားပိုင်မြေ
                    @endif
                    @if ($marketing_team->grant_type)
                        ({{ $marketing_team->grant_type ?? '' }})
                    @endif
                </td>

                <td>
                    @if ($marketing_team->orginal_or_copy == 'Orginal')
                        မူရင်း
                    @elseif ($marketing_team->orginal_or_copy == 'Copy')
                        မိတ္တူ
                    @endif
                </td>

                <td>
                    {{ $marketing_team->owner_agent ?? '' }}
                </td>

                <td>
                    {{ $marketing_team->name ?? '' }}
                </td>

                <td>
                    {{ $marketing_team->phone ?? '' }}
                </td>

                <td>
                    @if ($marketing_team->photo_status == 'no')
                        No
                    @else
                        Yes
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
