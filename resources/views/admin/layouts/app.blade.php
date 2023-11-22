

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
    <!-- Meta tags  -->
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />

    <title>EDMS</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo/cryptfx.png') }}" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
   
    <!-- CSS Assets -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/js/style1.css') }}" />

    <!-- Javascript Assets -->
    <script src="{{ asset('assets/user-js/app.js') }}" defer></script>
    <script src="{{ asset('assets/js/sidebar1.js') }}" defer></script>
    <script src="{{ asset('assets/js/dark-mode1.js') }}" defer></script>
    <script src="{{ asset('assets/js/index.js') }}" defer></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet" />
        <style>

            @media only screen and (min-width: 1000px) {
            /* For large screens: */
            .marg {margin-left: 15%}
            }

        </style>
    
    </head>
    <body>
        @include('layouts.partials.navbar-dashboard')
        <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">

            @include('admin.layouts.sidebar')
        
            <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50  dark:bg-gray-900">
                <main>
                    <div class="marg bg-gray-50 dark:bg-gray-900" >
                      @yield('content')
                    </div>
                        
                    
                </main>
               
            </div>

        </div>
    </body>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- <script src="HTTPS://app.bundle.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/datepicker.min.js"></script>
   
</html>



