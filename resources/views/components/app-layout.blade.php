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
        .bg-red{ background: var(--red)}
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

        li>a{
            width: 100%;
            text-decoration: none;
            color: var(--colortext);
            display: inline-block;
            text-align: start;
        }

        .footer {
            margin: 3rem 0;
        }

        .e-fixed{
            width: 170px;
            height: 170px;
            border: 1px solid transparent;
            border-radius: 50%;
            cursor: pointer;
            transition: all ease-in-out 0.5s;
        }

        .e-fixed:hover{
            /* border: 2px solid var(--colortext); */
            transform: scale(1.1)
        }

        .img-fixed{
            width: 100%;
            height: 100%;
            border-radius: 50%;

        }

        @media screen and (width < 660px) {
            .footer {
                margin: 7rem 0;
            }
        }
    </style>
    <header class="mb-5">

        <x-navbar></x-navbar>

    </header>

    <section>
        <div class="w-100 pt-4 px-4">
            {{ $slot }}
        </div>
    </section>

    <footer class="footer mt-5">

        <x-footer>
        </x-footer>

    </footer>
</body>


</html>
