<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar</title>
    <link rel="stylesheet" href="{{ asset('css/style_register.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <style>
        body{
            background-color: #9530e3;
        }
        .form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            max-width: 350px;
            background-color: #fff;
            padding: 30px;
            border-radius: 20px;
            position: relative;
            top: 15%;
            left: 36%;
            border: solid 2px black;
            margin-top: 10%;
        }

        .title {
            font-size: 28px;
            color: royalblue;
            font-weight: 600;
            letter-spacing: -1px;
            position: relative;
            display: flex;
            align-items: center;
            left: 17%;
            padding-left: 30px;
        }

        .title::before,
        .title::after {
            position: absolute;
            content: "";
            height: 16px;
            width: 16px;
            border-radius: 50%;
            left: 0px;
            background-color: royalblue;
        }

        .title::before {
            width: 18px;
            height: 18px;
            background-color: royalblue;
        }

        .title::after {
            width: 18px;
            height: 18px;
            animation: pulse 1s linear infinite;
        }

        .message,
        .signin {
            color: rgba(88, 87, 87, 0.822);
            font-size: 14px;
        }

        .signin {
            text-align: center;
        }

        .signin a {
            color: royalblue;
        }

        .signin a:hover {
            text-decoration: underline royalblue;
        }

        .flex {
            display: flex;
            width: 100%;
            gap: 6px;
        }

        .form label {
            position: relative;
        }

        .form label .input {
            width: 100%;
            padding: 10px 10px 20px 10px;
            outline: 0;
            border: 1px solid rgba(105, 105, 105, 0.397);
            border-radius: 10px;
        }

        .form label .input+span {
            position: absolute;
            left: 10px;
            top: 15px;
            color: grey;
            font-size: 0.9em;
            cursor: text;
            transition: 0.3s ease;
        }

        .form label .input:placeholder-shown+span {
            top: 15px;
            font-size: 0.9em;
        }

        .form label .input:focus+span,
        .form label .input:valid+span {
            top: 30px;
            font-size: 0.7em;
            font-weight: 600;
        }

        .form label .input:valid+span {
            color: green;
        }

        .submit {
            border: none;
            outline: none;
            background-color: royalblue;
            padding: 10px;
            border-radius: 10px;
            color: #fff;
            font-size: 16px;
            transform: .3s ease;
        }

        .submit:hover {
            cursor: url(../images/images_home/cursor-de-mano.png), auto;
            background-color: rgb(56, 90, 194);
        }

        @keyframes pulse {
            from {
                transform: scale(0.9);
                opacity: 1;
            }

            to {
                transform: scale(1.8);
                opacity: 0;
            }
        }
    </style>

    <button><a href="{{ route('home') }}">home</a></button>
    <div class="container">

        <form class="form" action="{{ route('login.verify') }}" method="POST">
            @csrf
            <p class="title">Ingresar </p>
            <p class="message">Ingresa ahora y no te pierdas de ninguna novedad. </p>

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="Close">
                    <small>
                        {{ session('success') }}
                    </small>
                    <button type="button" class="close" data-dismiss="alert" arial-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
            @endif

            @error('invalid_credentials')
                <div class="alert alert-danger alert-dismissible fade show" role="Close">
                    <small>
                        {{ $message }}
                    </small>
                    <button type="button" class="close" data-dismiss="alert" arial-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
            @enderror


            <label>
                <input required="" placeholder="" type="email" class="input" name="email" id="form_email">
                <span>Email</span>
            </label>

            <label>
                <input required="" placeholder="" type="password" class="input" name="password" id="form_password">
                <span>Contraseña</span>
            </label>

            <button class="submit" type="submit">Ingresar</button>
            <p class="signin">No tienes una cuenta ? <a href="{{ route('register') }}">Crear una Cuenta Ya!</a> </p>
        </form>


    </div>







    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>

</body>

</html>
