<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Home</title>
        <!--Links-->
        <link rel="stylesheet" href="{{ asset('css/style_home.css') }}">
        <link rel="icon" href="{{ asset('images/images_home/control-de-juego.png') }}" type="image/x-icon">

        </script>
    </head>
    <body>
        <!--Barra de Navegacion y Banner Inicio-->
        <header class="header">
            <div class="menu container">
                <button class="btn_logo">Proyecto Gamer</button>
                <input type="checkbox" id="menu" />
                <label for="menu">
                    <img src="{{ asset('images/images_home/menu.png') }}" class="menu-icono" alt="menu" />
                </label>
                <nav class="navbar">
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Servicios</a></li>
                        <li><a href="#">Productos</a></li>
                        <li><a href="#">Contacto</a></li>
                        <li><a id="log" href="{{ route('login') }}">Login</a></li>
                        <li>  
                    </li>
                    </ul>
                    
                </nav>
            </div>
            <!--Banner Inicio-->
            <div class="header-content container">
                <div class="header-txt">
                    <h1>Compra tu <span>juego</span><br />favorito aquí</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing
                        elit. Esse odio alias iste recusandae animi eum nulla
                        nobis, nam illo quae quos molestiae libero ratione,
                        similique adipisci beatae? Voluptas, ipsum consequuntur.
                    </p>
                    <div class="butons">
                        <a href="#" class="btn-1">Información</a>
                        <a href="#todos_juegos" class="btn-1">Juegos</a>
                    </div>
                </div>
            </div>
        </header>
        <!--letras dinámicas-->
        <section class="letter">
            <div class="gamer-background">
                <div class="gamer-container">
                    <div class="gamer-text" id="gamerText"></div>
                </div>
            </div>
        </section>
        <!--muestra productos populares-->
        <section class="popular container">
            <h2>Juegos Populares</h2>
            <div class="popular-content">
                <img src="{{ asset('images/images_home/g1.jpg') }}" alt="" />
                <img src="{{ asset('images/images_home/g2.jpg') }}" alt="" />
                <img src="{{ asset('images/images_home/g3.jpg') }}" alt="" />
                <img src="{{ asset('images/images_home/g4.jpg') }}" alt="" />
                <img src="{{ asset('images/images_home/g5.jpg') }}" alt="" />
                <img src="{{ asset('images/images_home/g6.jpg') }}" alt="" />
                <img src="{{ asset('images/images_home/g7.jpg') }}" alt="" />
            </div>
        </section>
        <!--cards de los productos/items-->
        <main class="product container">
            <h2 id="todos_juegos">Todos los juegos</h2>

            <div class="product-content">
                <div class="product-1">
                    <img src="{{ asset('images/images_home/l1.jpg') }}" alt="" />
                    <div class="product-txt">
                        <h3>Halo Reach</h3>
                        <div class="price">
                            <p>$9.99</p>
                            <a href="{{ route('login') }}" class="btn-2">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="product-1">
                    <img src="{{ asset('images/images_home/l2.jpg') }}" alt="" />
                    <div class="product-txt">
                        <h3>Free Fire</h3>
                        <div class="price">
                            <p>$0</p>
                            <a href="{{ route('login') }}" class="btn-2">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="product-1">
                    <img src="{{ asset('images/images_home/l3.jpg') }}" alt="" />
                    <div class="product-txt">
                        <h3>Class Royale</h3>
                        <div class="price">
                            <p>$0</p>
                            <a href="{{ route('login') }}" class="btn-2">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="product-1">
                    <img src="{{ asset('images/images_home/l4.jpg') }}" alt="" />
                    <div class="product-txt">
                        <h3>Cyberpunk 2077</h3>
                        <div class="price">
                            <p>$59.99</p>
                            <a href="{{ route('login') }}" class="btn-2">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="product-1">
                    <img src="{{ asset('images/images_home/l5.jpg') }}" alt="" />
                    <div class="product-txt">
                        <h3>Fortnite</h3>
                        <div class="price">
                            <p>$0</p>
                            <a href="{{ route('login') }}" class="btn-2">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="product-1">
                    <img src="{{ asset('images/images_home/l6.jpg') }}" alt="" />
                    <div class="product-txt">
                        <h3>Gear War 3</h3>
                        <div class="price">
                            <p>$12.59</p>
                            <a href="{{ route('login') }}" class="btn-2">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="product-1">
                    <img src="{{ asset('images/images_home/l7.jpg') }}" alt="" />
                    <div class="product-txt">
                        <h3>Krash Team Nitro</h3>
                        <div class="price">
                            <p>$21.99</p>
                            <a href="{{ route('login') }}" class="btn-2">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="product-1">
                    <img src="{{ asset('images/images_home/l8.jpg') }}" alt="" />
                    <div class="product-txt">
                        <h3>GTA 3</h3>
                        <div class="price">
                            <p>$21.89</p>
                            <a href="{{ route('login') }}" class="btn-2">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="product-1">
                    <img src="{{ asset('images/images_home/l9.jpg') }}" alt="" />
                    <div class="product-txt">
                        <h3>Battlefield</h3>
                        <div class="price">
                            <p>$7.79</p>
                            <a href="{{ route('login') }}" class="btn-2">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!--seccion del layaout de contacto-->
        <section class="contact container">
            <div class="contact-content">
                <h3>Conócenos y has parte de Proyecto Gamer</h3>
                <form action="">
                    <input type="email" placeholder="Escribe tu correo" />
                    <input type="submit" class="btn-3" value="Enviar" />
                </form>
            </div>
        </section>
        <!--pie de pagina-->
        <footer class="footer container">
            <div class="link">
                <a href="#" class="logo">Project Gaming</a>
            </div>
            <div class="link">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#todos_juegos">Productos</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>
        </footer>

        <!--Scripts-->
        <script src="{{ asset('js/script_home.js') }}"></script>
        
    </body>
</html>