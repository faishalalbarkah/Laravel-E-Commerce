@section('title', 'Login Admin')
    <html>

    <head>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" type="text/css" />
    </head>

    <body class="body">
        <form class="form-login-admin" method="post" action="/Masuk">
            <h1>Login Admin</h1>
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control inputlogin" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control inputlogin" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn">Submit</button>
        </form>
    </body>

    </html>
