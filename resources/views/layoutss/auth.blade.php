<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="a0">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Styles -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
  <link rel="shortcut icon" href="{{ asset('assets/images/logo/cryptfx.png') }}" type="image/x-icon" />
  <link rel="stylesheet" href="{{ asset('assets/css/glightbox.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/apexcharts.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}" />

  <!-- Script -->
  <script defer src="{{ asset('assets/js/alpine.min.js') }}"></script>
  <script src="{{ asset('assets/js/wow.min.js') }}"></script>
  <script>
    // ===== wow js
    new WOW().init();
  </script>
</head>

<body x-data="{
    scrolledFromTop: false
}" x-init="window.pageYOffset >= 50 ? scrolledFromTop = true : scrolledFromTop = false"
  @scroll.window="window.pageYOffset >= 50 ? scrolledFromTop = true : scrolledFromTop = false" class="a1 dark:a2">
  <header x-data="{
      navbarOpen: false,
      dropdownOpen: false
  }" :class="scrolledFromTop ? 'a1 dark:a3 a4 dark:a4 a5 a6 ' : ' a7 dark:a7'"
    class="a8 a9 aa ab ac ad">
    <div class="ae bg-primary">
      <div class="af ag aa ac ah">
        <div class="ai aj ak">
           
        </div>
        <div class="aa ab ac ap ak" style="">
            <div>
              <button
                @click="navbarOpen = !navbarOpen"
                :class="navbarOpen && 'navbarTogglerActive' "
                id="navbarToggler"
                class="aq ar as/2 an at/2 au av aw[6px] ax focus:ay lg:ao"
              >
                <span
                  :class="navbarOpen && 'az aA[7px]' "
                  class="af aB[6px] an aC[2px] aD[30px] a2 dark:a1"
                ></span>
                <span
                  :class="navbarOpen && 'aE' "
                  class="af aB[6px] an aC[2px] aD[30px] a2 dark:a1"
                ></span>
                <span
                  :class="navbarOpen && 'aA[-8px] aF[135deg]' "
                  class="af aB[6px] an aC[2px] aD[30px] a2 dark:a1"
                ></span>
              </button>
   
            
            </div>
          <div class="aa ap lg:a1m xl:a1n 2xl:a1o">
            <div style="margin-right: 3rem;">
              <label for="darkToggler" class="aa a1q a1r a1s ac a1t a1u a1v dark:a1w[#1E2763]">
                <input type="checkbox" name="darkToggler" id="darkToggler" checked class="a1x"
                  aria-label="darkToggler" />
                <span class="aa a1y a1z ac a1t a1u a1A aT dark:a7 dark:aS">
                  <svg width="16" height="16" viewBox="0 0 16 16" class="a1B">
                    <path
                      d="M4.50663 3.2267L3.30663 2.03337L2.36663 2.97337L3.55996 4.1667L4.50663 3.2267ZM2.66663 7.00003H0.666626V8.33337H2.66663V7.00003ZM8.66663 0.366699H7.33329V2.33337H8.66663V0.366699ZM13.6333 2.97337L12.6933 2.03337L11.5 3.2267L12.44 4.1667L13.6333 2.97337ZM11.4933 12.1067L12.6866 13.3067L13.6266 12.3667L12.4266 11.1734L11.4933 12.1067ZM13.3333 7.00003V8.33337H15.3333V7.00003H13.3333ZM7.99996 3.6667C5.79329 3.6667 3.99996 5.46003 3.99996 7.6667C3.99996 9.87337 5.79329 11.6667 7.99996 11.6667C10.2066 11.6667 12 9.87337 12 7.6667C12 5.46003 10.2066 3.6667 7.99996 3.6667ZM7.33329 14.9667H8.66663V13H7.33329V14.9667ZM2.36663 12.36L3.30663 13.3L4.49996 12.1L3.55996 11.16L2.36663 12.36Z" />
                  </svg>
                </span>
                <span class="aa a1y a1z ac a1t a1u a7 aQ dark:a1A dark:aT">
                  <svg width="13" height="15" viewBox="0 0 13 15" class="a1B">
                    <path
                      d="M10.6111 12.855C11.591 12.1394 12.3151 11.1979 12.7723 10.1623C10.4824 10.4065 8.1342 9.46314 6.67948 7.47109C5.22476 5.47905 5.04093 2.95516 5.97054 0.848179C4.84491 0.968503 3.72768 1.37162 2.74781 2.08719C-0.224105 4.25747 -0.874706 8.43084 1.29558 11.4028C3.46586 14.3747 7.63923 15.0253 10.6111 12.855Z" />
                  </svg>
                </span>
              </label>
            </div>

            <div class="ao sm:aa">
              @if (Route::has('login'))
                <a href="{{ route('login') }}"
                  class="aa ac a1t a1u a1C a1D aw[9px] a1E a1F aP aQ a1G hover:a1H hover:a1A hover:aT dark:a1I dark:aT dark:hover:a1 dark:hover:aR lg:px-4 xl:px-8">
                  Sign In
                </a>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main>
    @yield('content')
  </main>



  <a x-show="scrolledFromTop" href="javascript:void(0)" name="scrollToTop" aria-label="scrollToTop"
    class="hover:a38 back-to-top ad a39 a3a a3b a2I[999] aa a32 a33 ac a1t au a1A aT a3c a3d">
    <span class="a10[6px] a3e a3f az a36 a3g a1I"></span>
  </a>

  <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
  <script src="{{ asset('assets/js/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script>
    // ==== for menu scroll
    const pageLink = document.querySelectorAll('.scroll-menu');

    pageLink.forEach((elem) => {
      elem.addEventListener('click', (e) => {
        e.preventDefault();
        document.querySelector(elem.getAttribute('href')).scrollIntoView({
          behavior: 'smooth',
          offsetTop: 1 - 60,
        });
      });
    });

    // section menu active
    function onScroll(event) {
      const sections = document.querySelectorAll('.scroll-menu');
      const scrollPos =
        window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;

      for (let i = 0; i < sections.length; i++) {
        const currLink = sections[i];
        const val = currLink.getAttribute('href');
        const refElement = document.querySelector(val);
        const scrollTopMinus = scrollPos + 73;
        if (
          refElement.offsetTop <= scrollTopMinus &&
          refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
        ) {
          document.querySelector('.scroll-menu').classList.remove('dark:aT', 'aR');
          currLink.classList.add('dark:aT', 'aR');
        } else {
          currLink.classList.remove('dark:aT', 'aR');
        }
      }
    }

    window.document.addEventListener('scroll', onScroll);

    // ====
    var options = {
      series: [73, 55, 38, 20],
      chart: {
        type: 'donut',
        width: 400,
      },
      colors: ['#2347B9', '#3363FF', '#8BA6FF', '#8696CA'],
      legend: {
        show: false,
      },
      stroke: {
        show: false,
      },
      responsive: [{
        breakpoint: 480,
        options: {
          chart: {
            width: 200,
          },
          legend: {
            position: 'bottom',
          },
        },
      }, ],
    };

    var chart = new ApexCharts(document.querySelector('#chart'), options);
    chart.render();
  </script>
</body>

</html>
