<table class="table" style="width: 100%">
    <tbody>
        <tr>
            <th class="data-property" style="width: 1%;">
                #
            </th>
            <th class="data-property" style="width: 10%;">
                Call User <br> (ဖုန်းခေါ်ဆိုသူ)
            </th>
            <th class="data-property" style="width: 10%;">
                Call Date <br> (ခေါ်ဆိုသည့်ရက်)
            </th>
            <th class="data-property" style="width: 10%;">
                Next Time <br> (နောက်တစ်ကြိမ် ခေါ်ရမည့်ရက်)
            </th>
            <th class="data-property" style="width: 10%;">
                Remark <br> (မှတ်ချက်)
            </th>
        </tr>
        @foreach ($follow_ups as $key => $follow_up)
            <tr>
                <td class="data-value">
                    {{ $key + 1 }}
                </td>
                <td class="data-value">
                    {{ $follow_up->follow_up_user->name ?? '' }}
                </td>
                <td class="data-value">
                    {{ $follow_up->date_time ?? '' }}
                </td>
                <td class="data-value">
                    {{ $follow_up->follow_up_date ?? '' }}
                </td>
                <td class="data-value">
                    {{ $follow_up->follow_up_remark ?? '' }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
