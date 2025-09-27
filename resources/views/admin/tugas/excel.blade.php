<table>
    <thead>
    <tr>
        <th colspan="6" style="text-align: center;">Data Tugas</th>
    </tr>
    <tr>
        <th colspan="6" style="text-align: center;">
            Tanggal: {{ $tanggal }}
        </th>
    </tr>
    <tr>
        <th colspan="6" style="text-align: center;">
            Pukul: {{ $jam }}
        </th>
    </tr>
    <tr>
        <th style="width: 20px; text-align: center;">No</th>
        <th style="width: 120px; text-align: center;">Nama</th>
        <th style="width: 200px; text-align: center;">Email</th>
        <th style="width: 80px; text-align: center;">Tugas</th>
        <th style="width: 80px; text-align: center;">Tanggal Mulai</th>
        <th style="width: 80px; text-align: center;">Tanggal Selesai</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($tugas as $item)
            <tr>
                <td style="width: 20px; text-align: center;">{{ $loop->iteration }}</td>
                <td>{{ $item->user->nama }}</td>
                <td>{{ $item->user->email }}</td>
                <td>{{ $item->tugas }}</td>
                <td style="text-align-center;">{{ $item->tanggal_mulai }}</td>
                <td style="text-align-center;">{{ $item->tanggal_selesai }}</td>
                
            </tr>
        @endforeach
    </tbody>
</table>
