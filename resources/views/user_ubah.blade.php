<form method="post" action="{{ url('user/ubah_simpan/'.$data->id) }}">
{{ csrf_field() }}
{{ method_field('PUT') }}

<input type="text" name="username" value="{{ $data->username }}">
<input type="text" name="nama" value="{{ $data->nama }}">
<input type="password" name="password">
<input type="number" name="level_id" value="{{ $data->level_id }}">

<input type="submit" value="Ubah">

</form>
