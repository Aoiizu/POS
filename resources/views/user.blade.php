<body>
<h1>User Data</h1>
<a href="{{ url('user/tambah') }}">+ Add User</a>

<table border="1" cellpadding="10">
<tr>
<td>ID</td>
<td>Username</td>
<td>Name</td>
<td>ID Level Pengguna</td>
<td>Aksi</td>
</tr>

@foreach ($data as $d)
<tr>
<td>{{ $d->id }}</td>
<td>{{ $d->username }}</td>
<td>{{ $d->nama }}</td>
<td>{{ $d->level_id }}</td>
<td>
<a href="/PWL/POS/public/user/ubah/{{ $d->id }}">Ubah</a>
</td>
</tr>
@endforeach

</table>
</body>
