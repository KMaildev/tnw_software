<table class="table" style="width: 100%">
    <tbody>
        <tr>
            <th class="data-property" style="width: 5%;">
                Name
            </th>
            <th class="data-property" style="width: 10%;">
                Phone
            </th>
            <th class="data-property" style="width: 10%;">
                Email
            </th>
            <th class="data-property" style="width: 10%;">
                Address
            </th>
            <th class="data-property" style="width: 10%;">
                Remark
            </th>
            <th class="data-property" style="width: 5%;">
                Marketing
            </th>
            <th class="data-property" style="width: 10%;">
                Date
            </th>
        </tr>
        @foreach ($visitors as $visitor)
            <tr>
                <td class="data-value">
                    {{ $visitor->name ?? '' }}
                </td>
                <td class="data-value">
                    <a href="tel:{{ $visitor->phone ?? '' }}" style="color: white">
                        {{ $visitor->phone ?? '' }}
                    </a>
                </td>
                <td class="data-value">
                    <a href="email:{{ $visitor->email ?? '' }}" style="color: white">
                        {{ $visitor->email ?? '' }}
                    </a>
                </td>
                <td class="data-value">
                    {{ $visitor->address ?? '' }}
                </td>
                <td class="data-value">
                    {{ $visitor->remark ?? '' }}
                </td>
                <td class="data-value">
                    {{ $visitor->users_table->name ?? '' }}
                </td>
                <td class="data-value">
                    {{ $visitor->created_at ?? '' }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
