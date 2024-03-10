<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data User</title>
</head>
<body>
    <h1>Data User</h1>
    <a href={{route('/user/add')}}>Add User</a>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            {{-- <th>Amount Users</th> --}}
            <th>ID</th>
            <th>Username</th>
            <th>Name</th>
            <th>ID Level User</th>
            <th>Level Code</th>
            <th>Name Level</th>
            <th>Action</th>
        </tr>
        @foreach ($data as $data)
        <tr>
            {{-- <td>{{ $data }}</td> --}}
            <td>{{ $data->user_id }}</td>
            <td>{{ $data->username }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->level_id }}</td>
            <td>{{ $data->level->level_kode }}</td>
            <td>{{ $data->level->level_nama }}</td>
            <td><a href={{route('/user/update',$data->user_id)}}>Update</a> | <a href={{route('/user/delete',$data->user_id)}}>Delete</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>