<table>
    <thead>
    <tr>
        <th colspan="5" style="text-align: center;">Data User</th>
    </tr>
    <tr>
        <th colspan="5" style="text-align: center;">
            Tanggal: {{ $tanggal }}
        </th>
    </tr>
    <tr>
        <th colspan="5" style="text-align: center;">
            Pukul: {{ $jam }}
        </th>
    </tr>
    <tr>
        <th style="width: 20px; text-align: center;">No</th>
        <th style="width: 120px; text-align: center;">Nama</th>
        <th style="width: 200px; text-align: center;">Email</th>
        <th style="width: 200px; text-align: center;">Jabatan</th>
        <th style="width: 80px; text-align: center;">Status</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($user as $item)
            <tr>
                <td style="width: 20px; text-align: center;">{{ $loop->iteration }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->email }}</td>
                <td style="width: 20px; text-align: center;">{{ $item->jabatan }}</td>
                @if ($item->is_tugas == false)
                    <td style="text-align: center;">Belum Ditugaskan</td>
                @else
                    <td style="text-align: center;">Sudah Ditugaskan</td>
                @endif
            </tr>
        @endforeach
    </tbody>
</table>
