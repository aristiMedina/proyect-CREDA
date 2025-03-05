@props(['isAuth' => 'false'])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/module1.css">
    <link rel="stylesheet" href="styles/module2.css">
    <link rel="stylesheet" href="styles/module3.css">
    <link rel="stylesheet" href="styles/module4.css">
    <link rel="stylesheet" href="styles/module5.css">
    <link rel="stylesheet" href="styles/module_container.css">
    <link rel="stylesheet" href="styles/info-users.css">
    <link rel="stylesheet" href="styles/add-admin.css">
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

    <header>

        <x-navbar></x-navbar>

    </header>

    <section class="w-100 py-3 px-4 overflow-auto mx-0 my-0">
        {{ $slot }}
    </section>

    <footer>

        <x-footer>
        </x-footer>

    </footer>
</body>


</html>
