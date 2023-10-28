<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create Account</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<style>
    body {
        background: #282830;
    }
    .header {
        background: url("https://s.yimg.com/ny/api/res/1.2/lv1Zn1MKCSQodsopOXz.6A--/YXBwaWQ9aGlnaGxhbmRlcjt3PTk2MDtoPTU0MDtjZj13ZWJw/https://s.yimg.com/os/creatr-uploaded-images/2023-01/e0338e30-9972-11ed-bbd8-751538e771a1");
        width: 900px;
        height: 450px;
        margin: 40px auto;
    }
    .text-center{
        color: #9ca3af;
    }
    .form-group{
        color: #cbd5e0;
    }
    .btn-success{
        color: #fff;
        background: #1dabb8;
    }

    </style>

<div class="header">
    <div class="bar">
    </div>
<div class="container">
    <h2 class="text-center">Create new User</h2>
    <br>
    @if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li> {{$error}} </li>
        @endforeach
    </ul>
</div>
    @endif
    <form action = "/games" method = "post" class="form-group" style="width:70%; margin-left:15%;" action="/action_page.php">

        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

        <label class="form-group">Login:</label>
        <input type="text" class="form-control" placeholder="Login" name="login">
        <label>Telephone:</label>
        <input type="number" class="form-control" placeholder="Telephone" name="telephone">
        <label>Country:</label>
        <select class="form-control" name="country">
            <option value="Ukraine">Ukraine</option>
            <option value="Poland">Poland</option>
        </select>
        <label>Password:</label>
        <input type="password" class="form-control" placeholder="Password" name="password"><br>
        <button type="submit" class="btn-success">Send</button>
    </form>
</div>

</body>
</html>
