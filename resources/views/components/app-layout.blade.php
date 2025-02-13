@props(['isAuth' => 'false'])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CREDA</title>

    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    {{-- fontAwesome --}}
    {{-- tipografia --}}
</head>

<body class="text-center bg-colorback">
    <style>
        :root {
            --colorback: #F5EFD0;
            --colortext: #0f0f0f;
            /* --colorauth: #3ABEFF; */
            /* --colornoauth: #fae680; */

            --colorauth: linear-gradient(to right, #7db9e8 0%, #2989d8 49%, #207cca 61%, #207cca 73%, #207cca 73%, #2c70be 100%);
            --colornoauth: linear-gradient(to right, #f8f4d0 0%, #f5d93a 73%, #f5d93a 73%);

            --colorauthft: #4ea6e9;
            /* --colornoauthft: #f1dc63; */
            --colornoauthft: #f1e78a;

            --red: #c52626;

        }

        .bg-main {
            background: #fffbe4
        }

        .bg-red {
            background: var(--red)
        }

        .noinit {
            visibility: hidden
        }

        .bg-auth {
            background: var(--colorauth)
        }

        .bg-auth-ft {
            background: var(--colorauthft)
        }

        .bg-noauth {
            background: var(--colornoauth)
        }

        .bg-noauth-ft {
            background: var(--colornoauthft)
        }

        .bg-colorback {
            background: var(--colorback)
        }

        .text-body-black,
        .text-body-name {
            color: var(--colortext);
            text-decoration: none;
        }

        .text-body-black:hover {
            opacity: 0.5;
            cursor: pointer;
        }

        .text-body-name {
            cursor: not-allowed;
            pointer-events: none;
        }

        p,
        span {
            cursor: default;
        }

        li>a {
            width: 100%;
            text-decoration: none;
            color: var(--colortext);
            display: inline-block;
            text-align: start;
        }

        body {
            min-height: 100vh;
            background: #000;
            display: flex;
            flex-direction: column;
            flex-wrap: nowrap;
            align-items: center;
            justify-content: center;
            /* padding: 3rem */
        }

        .footer {
            margin: 3rem 0;
        }

        .e-fixed {
            width: 220px;
            height: 220px;
            border: 1px solid transparent;
            border-radius: 50%;
            cursor: pointer;
            transition: all ease-in-out 0.5s;
        }

        .e-fixed:hover {
            /* border: 2px solid var(--colortext); */
            transform: scale(1.1)
        }

        .img-fixed {
            width: 100%;
            height: 100%;
            border-radius: 50%;

        }

        @media screen and (width < 660px) {
            .footer {
                margin: 7rem 0;
            }
        }

        @media screen and (width < 1281px) {
            .e-fixed {
                width: 170px;
                height: 170px;
            }
        }

        @media screen and (height < 670px) {
            .e-fixed {
                width: 170px;
                height: 170px;
            }
        }
    </style>



    {{-- * Estilos del módulo 1 --}}
    <style>
        /* .mod1 {
            background-image: url(../../../assets/fondosModulos/fondoModulo1.png);
        } */

        .modulo1 {
            border: 1px solid #bb3a3e !important;
            min-height: 70vh;
            max-height: 70vh;

            padding: 1rem 1.5rem 1rem 1.5rem;
            font-size: small;

            border-radius: 20px;
        }

        .titulosMod1 {
            margin-bottom: 2px;
            color: #bb3a3e;
        }

        .diseñoFilaTextoImagenMod1 {
            display: grid;
            grid-template-rows: 1fr 1fr;
            gap: 20px;
        }

        .tablaConceptoDiscapacidad {
            height: 12rem;
            width: 25rem;
        }

        .tablaDiscapacidades {
            height: 16rem;
            width: 28rem;
        }

        .imagenAbordajePedagogico {
            height: 20rem;
            width: 20rem;
        }

        .graficoDiscapacidad {
            height: 20rem;
            width: 15rem
        }

        .diseñoTextoSelect {
            display: grid;
            grid-template-columns: 1fr 3fr;
            gap: 10px;
        }
    </style>

    {{-- * Estilos del módulo 2 --}}
    <style>
        /* .mod2 {
            background-image: url(../../../assets/fondosModulos/fondoModulo2.png);
        } */

        .modulo2 {
            border: 1px solid #6eb79a !important;
            min-height: 70vh;
            max-height: 70vh;

            padding: 1rem 1.5rem 1rem 1.5rem;
            font-size: small;

            border-radius: 20px;
        }

        .titulos {
            margin-bottom: 2px;
            color: #6eb79a;
        }

        .diseñoTablaIMG {
            display: block;
            margin: auto;
        }

        .PP1 {
            width: 25rem;
            height: 17rem;
        }

        .PP2L {
            width: 60%;
            height: 17rem;
        }

        .PP2 {
            width: 100%;
            /* height: 17rem; */
        }

        .diseñoTablaImagen {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 10px;
        }
    </style>

    {{-- * Estilos del modulo 3 --}}
    <style>
        /* .mod3 {
            background-image: url(../../../assets/fondosModulos/fondoModulo3.png);
        } */

        .modulo3 {
            border: 1px solid #fece49 !important;
            min-height: 70vh;
            max-height: 70vh;

            padding: 1rem 1.5rem 1rem 1.5rem;
            font-size: small;

            border-radius: 20px;
        }

        .titulosMod3 {
            margin-bottom: 2px;
            color: #fece49;
        }

        .w-70 {
            width: 70%;
        }
    </style>

    {{-- * Estilos del modulo 4 --}}
    <style>
        /* .mod4 {
            background-image: url(../../../assets/fondosModulos/fondoModulo4.png);
        } */

        .modulo4 {
            border: 1px solid #d77631 !important;
            min-height: 70vh;
            max-height: 70vh;

            padding: 1rem 1.5rem 1rem 1.5rem;
            font-size: small;

            border-radius: 20px;
        }

        .titulosMod4 {
            margin-bottom: 2px;
            color: #d77631;
        }
    </style>

    {{-- * Estilos del modulo 5 --}}
    <style>
        /* .mod5 {
            background-image: url(../../../assets/fondosModulos/fondoModulo5.png);
        } */

        .modulo5 {
            border: 1px solid #2990bc !important;
            min-height: 70vh;
            max-height: 70vh;

            padding: 1rem 1.5rem 1rem 1.5rem;
            font-size: small;

            border-radius: 20px;
        }

        .titulosMod5 {
            margin-bottom: 2px;
            color: #2990bc;
        }

        .diseñoTablaTextoImagen {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
        }

        .diseñoFilaImagenImagen {
            display: grid;
            grid-template-rows: 1fr 1fr;
            gap: 10px;
        }

        .diseñoTablaIMG {
            display: block;
            margin: auto;
        }

        .logoGAIAMod5 {
            height: 8rem;
            width: 15rem;
        }

        .logoManosMod5 {
            height: 8rem;
            width: 17rem;
        }

        .logoInterface1Mod5 {
            height: 12rem;
            width: 25rem;
        }

        .logoIndilenguasMod5 {
            height: 12rem;
            width: 12rem;
        }

        .logoInterface2Mod5 {
            height: 12rem;
            width: 25rem;
        }

        .logoAETMod5 {
            height: 12rem;
            width: 12rem;
        }

        .logoInterface3Mod5 {
            height: 12rem;
            width: 25rem;
        }

        .logoFROACMod5 {
            height: 11rem;
            width: 11rem;
        }

        .logoInterface4Mod5 {
            height: 12rem;
            width: 25rem;
        }
    </style>

    {{-- ! Estilos del los contenedores de los módulos --}}
    <style>
        .contendorMod {
            margin: 0 auto;
            margin-top: 10px;

            padding: 1.2rem 1.5rem 1.2rem 1.5rem;

            background-color: aliceblue;
            border-radius: 20px;

            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .titulosCentros {
            text-align: center;
        }

        .buttonCertificado {
            background-color: #7bbed9;
            border: none;
            border-radius: 10px;
            margin-top: 5px;
            color: white;
            cursor: pointer;
            display: block;
            font-size: 1rem;
            padding: 10px;
        }

        .buttonCertificado:hover {
            background-color: #2690ba;
        }

        .buttonCertificado:focus {
            background-color: #2690ba;
            outline: none;
        }

        .buttonModSiguiente {
            background-color: #7bbed9;
            border: none;
            border-radius: 10px;
            margin-top: 5px;
            color: white;
            cursor: pointer;
            display: block;
            font-size: 1rem;
            padding: 10px;
            margin-left: auto;
        }

        .buttonModSiguiente:hover {
            background-color: #2690ba;
        }

        .buttonModSiguiente:focus {
            background-color: #2690ba;
            outline: none;
        }

        .buttonModAnterior {
            background-color: #7bbed9;
            border: none;
            border-radius: 10px;
            margin-top: 5px;
            color: white;
            cursor: pointer;
            display: block;
            font-size: 1rem;
            padding: 10px;
        }

        .buttonModAnterior:hover {
            background-color: #2690ba;
        }

        .buttonModAnterior:focus {
            background-color: #2690ba;
            outline: none;
        }

        .buttonModSalir {
            background-color: #c96363;
            border: none;
            border-radius: 10px;
            margin-top: 5px;
            color: white;
            cursor: pointer;
            display: block;
            font-size: 1rem;
            padding: 10px;
        }

        .buttonModSalir:hover {
            background-color: #a72020;
        }

        .buttonModSalir:focus {
            background-color: #a72020;
            outline: none;
        }

        .buttonModEnviar {
            background-color: #d1af65;
            border: none;
            border-radius: 10px;
            margin-top: 5px;
            color: white;
            cursor: pointer;
            display: block;
            font-size: 1rem;
            padding: 10px;
        }

        .buttonModEnviar:hover {
            background-color: #ac8021;
        }

        .buttonModEnviar:focus {
            background-color: #ac8021;
            outline: none;
        }

        .twoButtons {
            margin-bottom: 0;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .threeButtons {
            margin-bottom: 0;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .m1 {
            overflow: auto;
            height: 100%;

            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .m1::-webkit-scrollbar {
            -webkit-appearance: none;
        }

        .m1::-webkit-scrollbar:vertical {
            width: 10px;
        }

        .m1::-webkit-scrollbar-button:increment,
        .m1::-webkit-scrollbar-button {
            display: none;
        }

        .m1::-webkit-scrollbar:horizontal {
            height: 10px;
        }

        .m1::-webkit-scrollbar-thumb {
            background-color: #797979;
            border-radius: 30px;
            border: 3px solid #f1f2f3;
        }

        .m1::-webkit-scrollbar-track {
            border-radius: 10px;
        }

        a {
            text-decoration: none;
            color: black;
        }

        @media screen and (max-height: 700px) {
            .contendorMod {
                margin-bottom: 1rem;
            }
        }

        @media screen and (max-height: 600px) {
            .contendorMod {
                margin-bottom: 3rem;
                margin-top: 3rem;
            }
        }
    </style>


    <header>

        <x-navbar></x-navbar>

    </header>

    <section class="w-100 py-3 px-4 overflow-auto">
        {{ $slot }}
    </section>

    <footer>

        <x-footer>
        </x-footer>

    </footer>
</body>


</html>
