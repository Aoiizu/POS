<!DOCTYPE html>
<html>
<head>
    <title>Data User</title>
</head>
<body>
    <h1>Data User</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Level ID</th>
            <th>Username</th>
            <th>Nama</th>
        </tr>
        @foreach($user as $u)
        <tr>
            <td>{{ $u->user_id }}</td>
            <td>{{ $u->level_id }}</td>
            <td>{{ $u->username }}</td>
            <td>{{ $u->nama }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
