<div class="table-responsive text-nowrap" style="overflow-x:auto;">
    <table class="table dataTable" id="viewed_datatable">
        <thead class="tbbg">
            <tr>
                <th rowspan="2" style="width: 1%; color: white;">
                    #
                </th>

                <th rowspan="2" style="width: 10%; text-align: center; color: white;">
                    User
                </th>

                <th rowspan="2" style="width: 10%; text-align: center; color: white;">
                    Date
                </th>

                <th rowspan="2" style="width: 10%; text-align: center; color: white;">
                    Code
                </th>

                <th rowspan="2" style="width: 2%; text-align: center; color: white;">
                    No/အိမ်အမှတ်
                </th>

                <th rowspan="2" style="width: 10%; text-align: center; color: white;">
                    Road/လမ်း
                </th>

                <th rowspan="2" style="width: 10%; text-align: center; color: white;">
                    Ward/ရပ်ကွက်
                </th>

                <th rowspan="2" style="width: 10%; text-align: center; color: white;">
                    Tsp/မြို့နယ်
                </th>

                <th rowspan="2" style="width: 10%; text-align: center; color: white;">
                    Property Type
                </th>

                <th colspan="2" style="color: white; background-color: #3f51b5; text-align: center; width: 10%">
                    Property Style
                </th>

                <th rowspan="2" style="width: 10%; text-align: center; color: white;">
                    Price (Lakhs)
                </th>

                <th colspan="2" style="width: 10% text-align: center; background-color: green; color: white;">
                    Wide
                </th>

                <th colspan="2" style="width: 10%; text-align: center; background-color: #c01faa; color: white;">
                    Permission
                </th>

                <th rowspan="2" style="width: 10%; text-align: center; color: white;">
                    Photo
                </th>
            </tr>

            <tr>
                <th style="color: white; background-color: #3f51b5; text-align: center; widht: 10%">
                    Floor
                </th>

                <th style="color: white; background-color: #3f51b5; text-align: center; widht: 10%">
                    House Style
                </th>

                <th style="color: white; background-color: green; text-align: center; widht: 100px">
                    Sqft
                </th>

                <th style="color: white; background-color: green; text-align: center; widht: 10%">
                    Acre
                </th>

                <th style="color: white; background-color: #c01faa; text-align: center; widht: 10%">
                    Premission
                </th>

                <th style="color: white; background-color: #c01faa; text-align: center; widht: 10%">
                    မူရင်း/မိတ္တူ
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($viewed_properties as $key => $viewed_propertie)
                <tr>
                    <td>
                        {{ $key + 1 }}
                    </td>

                    <td>
                        {{ $viewed_propertie->users_table->name ?? '' }}
                    </td>

                    <td>
                        {{ $viewed_propertie->viewed_date ?? '' }}
                    </td>

                    <td>
                        {{ $viewed_propertie->marketing_team->code ?? '' }}
                    </td>

                    <td>
                        {{ $viewed_propertie->marketing_team->no ?? '' }}
                    </td>

                    <td>
                        {{ $viewed_propertie->marketing_team->road ?? '' }}
                    </td>

                    <td>
                        {{ $viewed_propertie->marketing_team->ward ?? '' }}
                    </td>

                    <td>
                        {{ $viewed_propertie->marketing_team->township_table->township ?? '' }}
                    </td>

                    <td>
                        {{ $viewed_propertie->marketing_team->property_type_table->property_type ?? '' }}
                    </td>

                    <td>
                        {{ $viewed_propertie->marketing_team->floor ?? '' }}
                    </td>

                    <td>
                        {{ $viewed_propertie->marketing_team->house_style ?? '' }}
                    </td>

                    <td>
                        {{ $viewed_propertie->marketing_team->price ?? '' }}
                    </td>

                    <td>
                        @php
                            if ($viewed_propertie->marketing_team->area_width == null || $viewed_propertie->marketing_team->area_width == '') {
                                $area_width = 0;
                            } else {
                                $area_width = $viewed_propertie->marketing_team->area_width ?? 0;
                            }
                            
                            if ($viewed_propertie->marketing_team->area_height == null || $viewed_propertie->marketing_team->area_height == '') {
                                $area_height = 0;
                            } else {
                                $area_height = $viewed_propertie->marketing_team->area_height ?? 0;
                            }
                            
                            echo $area_width . '*' . $area_height . ' = ' . $area_width * $area_height;
                        @endphp
                    </td>

                    <td>
                        {{ $viewed_propertie->marketing_team->area ?? '' }}
                    </td>

                    <td>
                        @php
                            if ($viewed_propertie->marketing_team->permission_type == 'grant') {
                                echo 'ဂရံ';
                            } elseif ($viewed_propertie->marketing_team->permission_type == 'permit') {
                                echo 'Permit';
                            } elseif ($viewed_propertie->marketing_team->permission_type == 'ancestral_land') {
                                echo 'ဘိုးဘွားပိုင်မြေ';
                            } else {
                                echo '';
                            }
                        @endphp
                    </td>

                    <td>
                        @php
                            if ($viewed_propertie->marketing_team->orginal_or_copy == 'Orginal') {
                                echo 'မူရင်း';
                            } elseif ($viewed_propertie->marketing_team->orginal_or_copy == 'Copy') {
                                echo 'မိတ္တူ';
                            } else {
                                echo '';
                            }
                        @endphp
                    </td>

                    <td>
                        <a href="{{ route('marketing_file_create.create', ['id' => $viewed_propertie->marketing_team->id]) }}"
                            style="font-size: 12px;" target="_blank">
                            View
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
