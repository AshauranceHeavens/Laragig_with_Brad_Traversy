<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#ef3b2d",
                    },
                },
            },
        };
    </script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>LaraGigs | Find Laravel Jobs & Projects</title>
</head>

<body class="mb-5 ">
    <nav class="d-flex justify-content-between align-items-center mb-4">
        <a href="/"><img class="w-50" src="{{ asset('images/logo.png') }}" alt="" class="logo" /></a>
        <ul class="d-flex mx-5 mb-0 fs-5 aign-items-center">
            @auth
                <li class="list-unstyled mx-2">
                    <span class="fw-bold text-uppercase">
                        Welcome {{ auth()->user()->name }}
                    </span>
                </li>
                <li class="list-unstyled mx-2">
                    <a href="/listings/manage" class="text-decoration-none  text-dark fw-bold hover:text-laravel">
                        <i class="fa-solid fa-gear"></i>
                        Manage Listings
                    </a>
                </li>
                <li class="list-unstyled mx-2">
                    <form action="/logout" method="POST" class="d-inline">
                        @csrf
                        <button class="btn fs-5 m-0 p-0">
                            <i class="fa-solid fa-door-closed"></i>
                            Logout
                        </button>
                    </form>
                </li>
            @endauth
            @guest
                <li class="list-unstyled mx-2">
                    <a href="{{ route('register') }}" class="text-decoration-none text-dark fw-bold hover:text-laravel">
                        <i class="fa-solid fa-user-plus"></i> Register</a>
                </li>
                <li class="list-unstyled mx-2">
                    <a href="{{ route('login') }}" class="text-decoration-none  text-dark fw-bold hover:text-laravel">
                        <i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login</a>
                </li>
            @endguest
        </ul>
    </nav>
    <main class="pb-5">
        {{ $slot }}
    </main>
    <footer
        class="position-fixed  bottom-0 left-0 w-100 d-flex align-items-center  
               font-bold bg-danger text-white py-3 mt-22 justify-content-md-center"
        style="z-index:5;">

        <p class="ms-2 m-0">Copyright &copy; 2022, All Rights reserved</p>

        <a href="/listings/create"
            class="position-absolute d-block float-end 
            text-decoration-none end-0 me-5 top-1/3 right-5 
            bg-black text-white py-1 px-3">
            Post Job
        </a>

    </footer>
    <x-flash-message />
</body>

</html>
