<h2>Data Level</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Kode</th>
        <th>Nama</th>
    </tr>

    @foreach($level as $l)
    <tr>
        <td>{{ $l->level_id }}</td>
        <td>{{ $l->level_kode }}</td>
        <td>{{ $l->level_nama }}</td>
    </tr>
    @endforeach

</table>
