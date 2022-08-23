<table class="table" style="width: 100%">
    <tbody>
        <tr>
            <th class="data-property" style="width: 10%;">
                ID
            </th>
            <th class="data-property" style="width: 10%;">
                Name
            </th>
            <th class="data-property" style="width: 10%;">
                Email
            </th>
            <th class="data-property" style="width: 10%;">
                Phone
            </th>
            <th class="data-property" style="width: 10%;">
                Photo
            </th>
        </tr>
        <tr>
            <td class="data-value">
                {{ $marketing_edit->users_table->employee_id ?? '' }}
            </td>
            <td class="data-value">
                {{ $marketing_edit->users_table->name ?? '' }}
            </td>
            <td class="data-value">
                {{ $marketing_edit->users_table->email ?? '' }}
            </td>
            <td class="data-value">
                {{ $marketing_edit->users_table->phone ?? '' }}
            </td>
            <td class="data-value">
                @if ($marketing_edit->users_table->employee_photo)
                    <img src="{{ Storage::url($marketing_edit->users_table->employee_photo) }}" alt=""
                        style="width: 50px; height: 50px; background-position: center; background-size: contain, cover;">
                @endif
            </td>
        </tr>
    </tbody>
</table>
