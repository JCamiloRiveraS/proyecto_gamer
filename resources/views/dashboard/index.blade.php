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
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style_dashboard.css') }}">
</head>

<body>
    <!--section barra lateral-->
    <section class="barra_lateral">
        <aside class="sidebar">
            <div class="logo">
                <span class="material-symbols-outlined">
                    account_circle
                </span>
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
                        <a class="btn_log"><button class="btn_log" type="submit">Cerrar Sesión</button></a>
                    </form>

                </li>
            </ul>
        </aside>
    </section>
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader loaded">
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
{{-- nav pequ start --}}
<div class="group">
    <svg viewBox="0 0 24 24" aria-hidden="true" class="search-icon">
      <g>
        <path
          d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"
        ></path>
      </g>
    </svg>
  
    <input
      id="query"
      class="input"
      type="search"
      placeholder="Buscar Juego"
      name="searchbar"
    />
  </div>
  
{{-- nav peque end --}}
    {{-- nav titulo  start --}}
    <section class="section_tittle">
        <div class="content_title">
            <div class="title">
                <div class="loader">
                    <span class="loader-text">Proyecto </span><span class="loader-text"> Gamer</span>
                </div>
            </div>
        </div>
    </section>
    {{-- nav titulo end --}}
    <section class="contenido">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="most-popular">
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="navigation-card">
                                    <a href="#" class="tab">
                                        <span class="material-symbols-outlined">
                                            stadia_controller
                                        </span>

                                        <path
                                            d="M100.5 40.75V96.5H66V68.5V65H62.5H43H39.5V68.5V96.5H3.5V40.75L52 4.375L100.5 40.75Z"
                                            stroke="black" stroke-width="7"></path>
                                        </svg>
                                    </a>

                                    <a href="#" class="tab">
                                        <span class="material-symbols-outlined">
                                            mosque
                                        </span>

                                        <rect x="21.5" y="3.5" width="60" height="60" rx="30"
                                            stroke="black" stroke-width="7"></rect>
                                        <g clip-path="url(#clip0_41_27)">
                                            <mask id="mask0_41_27" style="mask-type:luminance"
                                                maskUnits="userSpaceOnUse" x="0" y="61" width="104"
                                                height="52">
                                                <path
                                                    d="M0 113C0 84.2812 23.4071 61 52.1259 61C80.706 61 104 84.4199 104 113H0Z"
                                                    fill="white"></path>
                                            </mask>
                                            <g mask="url(#mask0_41_27)">
                                                <path
                                                    d="M-7 113C-7 80.4152 19.4152 54 52 54H52.2512C84.6973 54 111 80.3027 111 112.749H97C97 88.0347 76.9653 68 52.2512 68H52C27.1472 68 7 88.1472 7 113H-7ZM-7 113C-7 80.4152 19.4152 54 52 54V68C27.1472 68 7 88.1472 7 113H-7ZM52.2512 54C84.6973 54 111 80.3027 111 112.749V113H97V112.749C97 88.0347 76.9653 68 52.2512 68V54Z"
                                                    fill="black"></path>
                                            </g>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_41_27">
                                                <rect width="104" height="39" fill="white"
                                                    transform="translate(0 61)"></rect>
                                            </clipPath>
                                        </defs>
                                        </svg>
                                    </a>

                                    <a href="#" class="tab">
                                        <span class="material-symbols-outlined">
                                            fireplace
                                        </span>

                                        <circle cx="46.1726" cy="46.1727" r="29.5497"
                                            transform="rotate(36.0692 46.1726 46.1727)" stroke="black"
                                            stroke-width="7"></circle>
                                        <line x1="61.7089" y1="67.7837" x2="97.7088" y2="111.784"
                                            stroke="black" stroke-width="7"></line>
                                        </svg>
                                    </a>

                                    <a href="#" class="tab">
                                        <span class="material-symbols-outlined">
                                            military_tech
                                        </span>

                                        <circle cx="46.1726" cy="46.1727" r="29.5497"
                                            transform="rotate(36.0692 46.1726 46.1727)" stroke="black"
                                            stroke-width="7"></circle>
                                        <line x1="61.7089" y1="67.7837" x2="97.7088" y2="111.784"
                                            stroke="black" stroke-width="7"></line>
                                        </svg>
                                    </a>

                                    <a href="#" class="tab" alt="Carreras">
                                        <span class="material-symbols-outlined">
                                            auto_towing
                                        </span>
                                        <circle cx="46.1726" cy="46.1727" r="29.5497"
                                            transform="rotate(36.0692 46.1726 46.1727)" stroke="black"
                                            stroke-width="7"></circle>
                                        <line x1="61.7089" y1="67.7837" x2="97.7088" y2="111.784"
                                            stroke="black" stroke-width="7"></line>
                                        </svg>
                                    </a>

                                </div>

                                <div class="row gameList">

                                </div>
                                <div class="col-lg-12">
                                    <div class="main-button hidden">
                                        <a href="javascript:void(0)">Cargar Más Juegos</a>
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
