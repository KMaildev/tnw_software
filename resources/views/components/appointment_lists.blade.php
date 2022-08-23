<table class="table" style="width: 100%">
    <tbody>
        <tr>
            <th class="data-property" style="width: 1%;">
                #
            </th>
            <th class="data-property" style="width: 7%;">
                Call User <br> (ဖုန်းခေါ်ဆိုသူ)
            </th>
            <th class="data-property" style="width: 7%;">
                Call Date <br> (ခေါ်ဆိုသည့်ရက်)
            </th>
            <th class="data-property" style="width: 10%;">
                Appointment Date
            </th>
            <th class="data-property" style="width: 10%;">
                Contact Person
            </th>
            <th class="data-property" style="width: 10%;">
                Appointment Location
            </th>
            <th class="data-property" style="width: 10%;">
                Remark
            </th>
        </tr>
        @foreach ($appointments as $key => $appointment)
            <tr>
                <td class="data-value">
                    {{ $key + 1 }}
                </td>
                <td class="data-value">
                    {{ $appointment->user_table->name ?? '' }}
                </td>
                <td class="data-value">
                    {{ $appointment->appointment_date ?? '' }}
                </td>
                <td class="data-value">
                    {{ $appointment->appointment_date_time ?? '' }}
                </td>
                <td class="data-value">
                    {{ $appointment->appointment_person ?? '' }}
                </td>
                <td class="data-value">
                    {{ $appointment->appointment_location ?? '' }}
                </td>
                <td class="data-value">
                    {{ $appointment->appointment_remark ?? '' }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
