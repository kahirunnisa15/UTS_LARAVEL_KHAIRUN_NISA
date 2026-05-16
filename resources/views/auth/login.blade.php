<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background: linear-gradient(135deg,#4facfe,#00f2fe);
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            font-family:Arial, Helvetica, sans-serif;
        }

        .login-card{
            width:400px;
            background:white;
            border-radius:25px;
            padding:40px;
            box-shadow:0 10px 30px rgba(0,0,0,0.2);
        }

        .logo{
            width:100px;
            height:100px;
            border-radius:50%;
            object-fit:cover;
            display:block;
            margin:auto;
            margin-bottom:20px;
            border:4px solid #4facfe;
        }

        .title{
            text-align:center;
            font-weight:bold;
            margin-bottom:5px;
            color:#333;
        }

        .subtitle{
            text-align:center;
            color:gray;
            margin-bottom:30px;
        }

        .form-control{
            border-radius:12px;
            padding:12px;
        }

        .btn-login{
            background:#4facfe;
            border:none;
            border-radius:12px;
            padding:12px;
            font-weight:bold;
            transition:0.3s;
        }

        .btn-login:hover{
            background:#00c6fb;
            transform:scale(1.02);
        }

    </style>

</head>

<body>

    <div class="login-card">

        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
             class="logo">

        <h2 class="title">
            Welcome Admin
        </h2>

        <p class="subtitle">
            Login to your account
        </p>

        @if ($errors->any())

            <div class="alert alert-danger">

                {{ $errors->first() }}

            </div>

        @endif

        <form action="{{ route('login') }}" method="POST">

            @csrf

            <div class="mb-3">

                <label>Email</label>

                <input type="email"
                       name="email"
                       class="form-control"
                       placeholder="Enter your email"
                       required>

            </div>

            <div class="mb-4">

                <label>Password</label>

                <input type="password"
                       name="password"
                       class="form-control"
                       placeholder="Enter your password"
                       required>

            </div>

            <div class="d-grid">

                <button type="submit"
                        class="btn btn-login text-white">

                    LOGIN

                </button>

            </div>

        </form>

    </div>

</body>
</html>