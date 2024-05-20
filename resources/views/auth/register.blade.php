<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar</title>
    <link rel="stylesheet" href="{{ asset('css/style_register.css') }}">
    <link rel="icon" href="{{ asset('images/images_home/control-de-juego.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <style>
              /* Estilos para el cuerpo y encabezado */
              body,
        html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            background: linear-gradient(-45deg, #1b05da, #141315, #000000, #660185);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
        }

        .buttom_home {
            position: absolute;
        
            background-color: #d5f0dbf7;
            z-index: 20;
            margin-bottom: 42%;
            margin-left: -90%;
            padding: 5px;
            transition: .5s;
            border-radius: 0 20px 20px 20px;
        }
        .buttom_home:hover{
            scale: 150%;
            transition: .5s;
        }

        .buttom_home a{
            text-decoration: none;
            color: black;
            font-weight: 600;
        }
        /* Animación del fondo */
        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        /* Estilo para el canvas */
        canvas {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
        }

        .form {
            display: block;
            flex-direction: column;
            gap: 10px;
            max-width: 350px;
            background-color: whitesmoke;
            padding: 60px 50px;

            transition: .5s;
            border-radius: 20px;
            border: solid 2px black;
            z-index: 1;
        }
        .form:hover {
            scale: 103%;
            box-shadow: 0px 0px 10px black;
            transition: .5s;
        }

        .title {
            font-size: 28px;
            color: royalblue;
            font-weight: 600;
            letter-spacing: -1px;
            text-align: center;
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
            gap: 10px;
        }

        .form label {
            position: relative;
        }

        .form label .input {
            width: 100%;
            padding: 10px 70px 10px 10px;
            margin-bottom: 5%;
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
            margin-top: 5%;
            margin-left: 28%;
            margin-bottom: 5%;
            border-radius: 10px;
            color: #fff;
            font-size: 16px;
            transform: .3s ease;
        }

        .submit:hover {
            cursor: url(../images/images_home/cursor-de-mano.png),
                auto;
            background-color: rgb(56, 90, 194);
        }

    </style>
    <button class="buttom_home"><a href="{{ route('home') }}">home</a></button>
 
    <canvas id="particleCanvas"></canvas>
   
    <div class="container">

        <form class="form" action="" method="POST">
            @csrf
            <p class="title">Crear Cuenta </p>
            <p class="message">Crea una cuenta y disfruta de Proyecto Gamer </p>
            <div class="flex">
                <label>
                    <input required="" placeholder="" type="text" class="input" name="nombre" id="form_nombre">
                    <span>Nombre</span>
                </label>

                <label>
                    <input required="" placeholder="" type="text" class="input" name="apellido"
                        id="form_apellido">
                    <span>Apellido</span>
                </label>
            </div>

            <label>
                <input required="" placeholder="" type="email" class="input" name="email" id="form_email">
                <span>Email</span>
            </label>

            <label>
                <input required="" placeholder="" type="password" class="input" name="password" id="form_password">
                <span>Contraseña</span>
            </label>
            <label>
                <input required="" placeholder="" type="password" class="input" name="confirm_password"
                    id="form_confirm_password">
                <span>Confirmar Contraseña</span>
            </label>
            <button class="submit" type="submit">Crear Cuenta</button>
            <p class="signin">Ya tienes una cuenta ? <a href="{{ route('login') }}">Inicia sesión</a> </p>
        </form>


    </div>






    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>

<script>
        const canvas = document.getElementById('particleCanvas');
        const ctx = canvas.getContext('2d');
        let particlesArray = [];

        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;

        window.addEventListener('resize', () => {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
            init();
        });

        class Particle {
            constructor(x, y, directionX, directionY, size, color) {
                this.x = x;
                this.y = y;
                this.directionX = directionX;
                this.directionY = directionY;
                this.size = size;
                this.color = color;
            }
            draw() {
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2, false);
                ctx.fillStyle = this.color;
                ctx.fill();
            }
            update() {
                if (this.x > canvas.width || this.x < 0) {
                    this.directionX = -this.directionX;
                }
                if (this.y > canvas.height || this.y < 0) {
                    this.directionY = -this.directionY;
                }
                this.x += this.directionX;
                this.y += this.directionY;
                this.draw();
            }
        }

        function init() {
            particlesArray = [];
            let numberOfParticles = (canvas.height * canvas.width) / 9000;
            for (let i = 0; i < numberOfParticles; i++) {
                let size = (Math.random() * 5) + 1;
                let x = (Math.random() * ((innerWidth - size * 2) - (size * 2)) + size * 2);
                let y = (Math.random() * ((innerHeight - size * 2) - (size * 2)) + size * 2);
                let directionX = (Math.random() * 2) - 1;
                let directionY = (Math.random() * 2) - 1;
                let color = '#ffffff';

                particlesArray.push(new Particle(x, y, directionX, directionY, size, color));
            }
        }

        function animate() {
            requestAnimationFrame(animate);
            ctx.clearRect(0, 0, innerWidth, innerHeight);

            particlesArray.forEach(particle => {
                particle.update();
            });
        }

        init();
        animate();
    </script>
</body>

</html>
