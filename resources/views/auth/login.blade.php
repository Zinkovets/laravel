<form action="/login" method="post">
    @csrf
</form>
<html>
<head>
    <style>
        body{
            background: #282830;
        }
        .Myform{
            width:300px;
            height: 225px;
            background: #ffffff;
            border-radius: 10px;
            margin: 10% auto;
            box-shadow: 2px 2px 4px 0px #000000;
        }
        .Myform h1 {
            margin: 0;
            background-color: #282830;
            border-radius: 10px 10px 0 0;
            color: #fff;
            font-size: 14px;
            padding: 20px;
            text-align: center;
            text-transform: uppercase;
        }
        .inp{
            padding:20px;
        }
        .log{
            border: 1px solid #dcdcdc;
            padding: 12px 10px;
            width: 260px;
            border-radius: 5px 5px 0 0;
        }
        .pass{
            border: 1px solid #dcdcdc;
            padding: 12px 10px;
            width: 260px;
            border-radius: 0px 0px 5px 5px;
        }
        .btn{
            background: #1dabb8; /* фон */
            border-radius: 5px; /* закругленные углы */
            color: #fff; /* цвет текста */
            float: right; /* выравнивание справа */
            font-weight: bold; /* жирный текст */
            margin: 10px; /* отступы */
            padding: 12px 20px; /* оступы для текста */
        }
        .info{
            width:130px; /* ширина */
            float: left; /* выравнивание слева */
            padding-top: 20px; /* оступ сверху для текста */
            {
                color:#999; /* цвет ссылки */
                text-decoration: none; /* убираем подчеркивание */

            }
            a:hover{
                color: #1dabb8; /* цвет ссылки при наведении */

            }
    </style>
</head>
<body>

<div class="Myform">
    <h1> Authorisation</h1>
    <div class="inp">
        <form name="registration" action="/games" method="post">
            <input class="log" type="text" required value="Login" name="login">
            <input class="pass" type="password" required value="Password" name="password">
            <div class="info">
                <a href="/users">Create New Account</a>
            </div>
            <input class="btn" type="submit" value="Go">
        </form>
    </div>
</div>

</body>
</html>



