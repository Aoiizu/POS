<form method="post" action="{{ url('user/tambah_simpan') }}">
{{ csrf_field() }}

<label>Username</label>
<br>
<input type="text" name="username">
<br>

<label>Nama</label>
<br>
<input type="text" name="nama">
<br>

<label>Password</label>
<br>
<input type="password" name="password">
<br>

<label>Level ID</label>
<br>
<input type="number" name="level_id">
<br><br>

<input type="submit" value="Simpan">

</form>
