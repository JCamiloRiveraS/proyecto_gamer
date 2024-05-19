<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Gamify</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
       <!--fonts de google-->
       <link
       rel="stylesheet"
       href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"
     />
     <link
       href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
       rel="stylesheet"
       integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
       crossorigin="anonymous"
     />
     <link rel="preconnect" href="https://fonts.googleapis.com" />
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
     <link
       href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
       rel="stylesheet"
     />
    <link rel="stylesheet" href="{{ asset('css/style_dashboard.css') }}">
</head>

<body>
   <!--section barra lateral-->
   <section class="barra_lateral">
    <aside class="sidebar">
      <div class="logo">
        <img src="../../../public/images/images_home/g2.jpg" alt="logo" />
        <h2>Usuario</h2>
      </div>
      <ul class="links">
        <h4>Menú Principal</h4>
        <li>
          <span class="material-symbols-outlined">dashboard</span>
          <a href="#">Panel</a>
        </li>
        <li>
          <span class="material-symbols-outlined">Show_chart</span>
          <a href="#">Contribuciónes</a>
        </li>
        <li>
          <span class="material-symbols-outlined">flag</span>
          <a href="#">Reportes</a>
        </li>
        <h4>Avanzado</h4>
        <li>
          <span class="material-symbols-outlined">person</span>
          <a href="#">Usuario</a>
        </li>
        <li>
          <span class="material-symbols-outlined">group</span>
          <a href="#">Equipo</a>
        </li>
        <li>
          <span class="material-symbols-outlined">ambient_screen</span>
          <a href="#">Publicaciones</a>
        </li>
        <li>
          <span class="material-symbols-outlined">pacemaker</span>
          <a href="#">Conexiones</a>
        </li>
        <hr />
        <h4>Cuenta</h4>
        <li>
          <span class="material-symbols-outlined">bar_chart</span>
          <a href="#">Resumen</a>
        </li>
        <li>
          <span class="material-symbols-outlined">mail</span>
          <a href="#">Mensajes</a>
        </li>
        <li>
          <span class="material-symbols-outlined">settings</span>
          <a href="#">Configuración</a>
        </li>
        <li class="logout_link">
          <span class="material-symbols-outlined">Logout</span>
          <form action="{{ route('signOut') }}" method="POST">
            @csrf
            <a class="btn_log" ><button class="btn_log" type="submit">Cerrar Sesión</button></a>
        </form>
       
        </li>
      </ul>
    </aside>
  </section>
  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader loaded">
    {{-- <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div> </div>--}}
      <div class="socket">
        <div class="gel center-gel">
          <div class="hex-brick h1"></div>
          <div class="hex-brick h2"></div>
          <div class="hex-brick h3"></div>
        </div>
      
        <div class="gel c2 r1">
          <div class="hex-brick h1"></div>
          <div class="hex-brick h2"></div>
          <div class="hex-brick h3"></div>
        </div>
        <div class="gel c3 r1">
          <div class="hex-brick h1"></div>
          <div class="hex-brick h2"></div>
          <div class="hex-brick h3"></div>
        </div>
        <div class="gel c4 r1">
          <div class="hex-brick h1"></div>
          <div class="hex-brick h2"></div>
          <div class="hex-brick h3"></div>
        </div>
        <div class="gel c5 r1">
          <div class="hex-brick h1"></div>
          <div class="hex-brick h2"></div>
          <div class="hex-brick h3"></div>
        </div>
        <div class="gel c6 r1">
          <div class="hex-brick h1"></div>
          <div class="hex-brick h2"></div>
          <div class="hex-brick h3"></div>
        </div>
      
        <div class="gel c7 r2">
          <div class="hex-brick h1"></div>
          <div class="hex-brick h2"></div>
          <div class="hex-brick h3"></div>
        </div>
      
        <div class="gel c8 r2">
          <div class="hex-brick h1"></div>
          <div class="hex-brick h2"></div>
          <div class="hex-brick h3"></div>
        </div>
        <div class="gel c9 r2">
          <div class="hex-brick h1"></div>
          <div class="hex-brick h2"></div>
          <div class="hex-brick h3"></div>
        </div>
        <div class="gel c10 r2">
          <div class="hex-brick h1"></div>
          <div class="hex-brick h2"></div>
          <div class="hex-brick h3"></div>
        </div>
        <div class="gel c11 r2">
          <div class="hex-brick h1"></div>
          <div class="hex-brick h2"></div>
          <div class="hex-brick h3"></div>
        </div>
        <div class="gel c12 r2">
          <div class="hex-brick h1"></div>
          <div class="hex-brick h2"></div>
          <div class="hex-brick h3"></div>
        </div>
        <div class="gel c13 r2">
          <div class="hex-brick h1"></div>
          <div class="hex-brick h2"></div>
          <div class="hex-brick h3"></div>
        </div>
        <div class="gel c14 r2">
          <div class="hex-brick h1"></div>
          <div class="hex-brick h2"></div>
          <div class="hex-brick h3"></div>
        </div>
        <div class="gel c15 r2">
          <div class="hex-brick h1"></div>
          <div class="hex-brick h2"></div>
          <div class="hex-brick h3"></div>
        </div>
        <div class="gel c16 r2">
          <div class="hex-brick h1"></div>
          <div class="hex-brick h2"></div>
          <div class="hex-brick h3"></div>
        </div>
        <div class="gel c17 r2">
          <div class="hex-brick h1"></div>
          <div class="hex-brick h2"></div>
          <div class="hex-brick h3"></div>
        </div>
        <div class="gel c18 r2">
          <div class="hex-brick h1"></div>
          <div class="hex-brick h2"></div>
          <div class="hex-brick h3"></div>
        </div>
        <div class="gel c19 r3">
          <div class="hex-brick h1"></div>
          <div class="hex-brick h2"></div>
          <div class="hex-brick h3"></div>
        </div>
        <div class="gel c20 r3">
          <div class="hex-brick h1"></div>
          <div class="hex-brick h2"></div>
          <div class="hex-brick h3"></div>
        </div>
        <div class="gel c21 r3">
          <div class="hex-brick h1"></div>
          <div class="hex-brick h2"></div>
          <div class="hex-brick h3"></div>
        </div>
        <div class="gel c22 r3">
          <div class="hex-brick h1"></div>
          <div class="hex-brick h2"></div>
          <div class="hex-brick h3"></div>
        </div>
        <div class="gel c23 r3">
          <div class="hex-brick h1"></div>
          <div class="hex-brick h2"></div>
          <div class="hex-brick h3"></div>
        </div>
        <div class="gel c24 r3">
          <div class="hex-brick h1"></div>
          <div class="hex-brick h2"></div>
          <div class="hex-brick h3"></div>
        </div>
        <div class="gel c25 r3">
          <div class="hex-brick h1"></div>
          <div class="hex-brick h2"></div>
          <div class="hex-brick h3"></div>
        </div>
        <div class="gel c26 r3">
          <div class="hex-brick h1"></div>
          <div class="hex-brick h2"></div>
          <div class="hex-brick h3"></div>
        </div>
        <div class="gel c28 r3">
          <div class="hex-brick h1"></div>
          <div class="hex-brick h2"></div>
          <div class="hex-brick h3"></div>
        </div>
        <div class="gel c29 r3">
          <div class="hex-brick h1"></div>
          <div class="hex-brick h2"></div>
          <div class="hex-brick h3"></div>
        </div>
        <div class="gel c30 r3">
          <div class="hex-brick h1"></div>
          <div class="hex-brick h2"></div>
          <div class="hex-brick h3"></div>
        </div>
        <div class="gel c31 r3">
          <div class="hex-brick h1"></div>
          <div class="hex-brick h2"></div>
          <div class="hex-brick h3"></div>
        </div>
        <div class="gel c32 r3">
          <div class="hex-brick h1"></div>
          <div class="hex-brick h2"></div>
          <div class="hex-brick h3"></div>
        </div>
        <div class="gel c33 r3">
          <div class="hex-brick h1"></div>
          <div class="hex-brick h2"></div>
          <div class="hex-brick h3"></div>
        </div>
        <div class="gel c34 r3">
          <div class="hex-brick h1"></div>
          <div class="hex-brick h2"></div>
          <div class="hex-brick h3"></div>
        </div>
        <div class="gel c35 r3">
          <div class="hex-brick h1"></div>
          <div class="hex-brick h2"></div>
          <div class="hex-brick h3"></div>
        </div>
        <div class="gel c36 r3">
          <div class="hex-brick h1"></div>
          <div class="hex-brick h2"></div>
          <div class="hex-brick h3"></div>
        </div>
        <div class="gel c37 r3">
          <div class="hex-brick h1"></div>
          <div class="hex-brick h2"></div>
          <div class="hex-brick h3"></div>
        </div>
      </div>
      

    
  </div>
 <!-- ***** Preloader End ***** -->
<section class="contenido">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="most-popular">
          <div class="row">
            <div class="col-lg-12">
              <div class="heading-section">
                <h4><em>Bienvenido a </em> Proyecto Gamer</h4>
              </div>
              <div class="row gameList">
                
              </div>
              <div class="col-lg-12">
                <div class="main-button hidden">
                  <a href="javascript:void(0)">Load More Games</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <script src="{{ asset('js/dev.env.js') }}"></script>
  <script src="{{ asset('js/script_prueba.js') }}"></script>
</body>

</html>