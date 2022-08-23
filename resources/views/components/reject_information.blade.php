<table class="table" style="width: 100%">
    <tbody>
        <tr>
            <th colspan="2" style="text-align: center; background-color: #845013; color: white;">
                Reject Status
            </th>
        </tr>
        <tr>
            <th class="data-property" style="width: 30%;">
                Reject Date
            </th>
            <td class="data-value">
                {{ $marketing_edit->rejects_table->reject_date ?? '' }}
            </td>
        </tr>

        <tr>
            <th class="data-property">
                Reject Reason
            </th>
            <td class="data-value">
                {{ $marketing_edit->rejects_table->reject_reason ?? '' }}
            </td>
        </tr>

        <tr>
            <th class="data-property">
                Reject By
            </th>
            <td class="data-value">
                {{ $marketing_edit->rejects_table->users_table->name ?? '' }}
            </td>
        </tr>
    </tbody>
</table>
