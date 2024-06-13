<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
    <!-- Custom CSS -->
    <style>
        body {
            background: #1c1c1c;
            color: #f39c12;
            font-family: 'Source Sans Pro', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .register-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            background: #2c2c2c;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            overflow: hidden;
            max-width: 1000px;
            width: 90%;
            padding: 20px;
        }
        .register-box {
            flex: 1;
            padding: 2rem;
            background: #2c2c2c;
            color: #f39c12;
            max-width: 600px;
            width: 100%;
        }
        .register-box a {
            color: #f39c12;
            text-decoration: none;
        }
        .register-box .card {
            border: none;
            background: transparent;
        }
        .card-header {
            border-bottom: none;
            text-align: center;
        }
        .card-header a {
            font-size: 3rem;
            color: #f39c12;
        }
        .input-group-text {
            background-color: #f39c12;
            border: none;
            color: #1c1c1c;
        }
        .form-control {
            background: #1c1c1c;
            border: 1px solid #f39c12;
            color: #f39c12;
            border-radius: 50px;
            height: 45px;
            text-align: center;
            width: 100%;
        }
        .form-control::placeholder {
            text-align: center;
        }
        .btn-primary {
            background-color: #f39c12;
            border: none;
            border-radius: 30px;
            transition: background-color 0.3s ease;
            color: #1c1c1c;
            width: 100%;
            height: 50px;
            margin-top: 30px;
        }
        .btn-primary:hover {
            background-color: #e67e22;
        }
        .btn-secondary {
            background-color: transparent;
            border: 1px solid #f39c12;
            border-radius: 30px;
            transition: background-color 0.3s ease;
            color: #f39c12;
            width: 100%;
            height: 50px;
            margin-top: 10px;
        }
        .btn-secondary:hover {
            background-color: #e67e22;
            color: #1c1c1c;
        }
        .icheck-primary input[type="checkbox"]:checked + label::before {
            background-color: #f39c12;
            border-color: #f39c12;
        }
        .image-container {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #1c1c1c;
            max-width: 600px;
            margin: 20px 0;
        }
        .image-container img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
        @media (max-width: 768px) {
            .register-container {
                flex-direction: column;
                padding: 10px;
            }
            .register-box, .image-container {
                max-width: 100%;
            }
            .register-box {
                padding: 1rem;
            }
        }
        .register-box-msg {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="register-box">
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a href="#" class="h1"><b>Register</b></a>
                </div>
                <div class="card-body">
                    <p class="register-box-msg">Daftar untuk membuat akun baru</p>
                    <form action="{{ route('register.post') }}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Konfirmasi Password" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                            </div>
                        </div>
                    </form>
                    <p class="mb-0">
                        <a href="{{ route('login') }}" class="btn btn-secondary btn-block">Sudah mempunyai akun?</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="image-container">
            <img src="{{ asset('frontend/img/about-1.jpg') }}" alt="Image">
        </div>
    </div>
    <!-- jQuery -->
    <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
