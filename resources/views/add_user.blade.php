<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add User</title>
</head>
<body>
    <h1>Add User</h1>
    <a href={{route('/user')}}>back</a>
    <form action="{{ route('/user/add_save') }}" method="POST">
        {{ csrf_field() }}
        <label for="">Username</label>
        <input type="text" name="username" id="" placeholder="Username">
        <br>
        <label for="">Name</label>
        <input type="text" name="nama" id="" placeholder="Name">
        <br>
        <label for="">Password</label>
        <input type="password" name="password" id="" placeholder="Password">
        <br>
        <label for="">ID Level</label>
        <input type="number" name="level_id" id="" placeholder="ID Level">
        <br>
        <input type="submit" value="Save">
    </form>
</body>
</html>