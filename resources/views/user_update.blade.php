<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update User</title>
</head>
<body>
    <h1>Update User</h1>
    <a href={{route('/user')}}>back</a>
    <form action="{{ route('/user/update_save',$data->user_id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <label for="">Username</label>
        <input type="text" name="username" id="" value="{{ $data->username }}">
        <br>
        <label for="">Name</label>
        <input type="text" name="nama" id="" value="{{ $data->nama }}">
        <br>
        <label for="">Password</label>
        <input type="password" name="password" id="" value="{{ $data->password }}">
        <br>
        <label for="">ID Level</label>
        <input type="number" name="level_id" id="" value="{{ $data->level_id }}">
        <br>
        <input type="submit" value="Save">
    </form>
</body>
</html>