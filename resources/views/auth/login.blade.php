@extends('layoutss.auth')

@section('content')
  <main>
    <section class="af a2E a1J[180px] a4D[120px]">
      <div class="ae">
        <div class="a3i[-16px] aa a1L">
          <div class="ab ak">
            <form method="POST" action="{{ route('login') }}">
              @csrf
              <div class="wow fadeInUp a3r aH[500px] a1X a1C a2l[#f5f5f5] a1 a2P dark:a4E dark:a3 sm:a4j[60px]"
                data-wow-delay="0s">
                <h3 class="a2d a2G a2B a1P a1k dark:aT sm:a2o">
                  Sign in to your account
                </h3>
                <p class="a4w a2G a1F a1R aS">
                  Login to your account for a faster checkout.
                </p>
         
                <form>
                  <div class="a2n">
                    <label for="login" class="a2d an a1j a1R a2u dark:aT">
                      Email
                    </label>
                    <input type="text" name="email" placeholder="Enter your Email or Username"
                      class="a4F dark:a38 ab a1u a1C a27 a4z a22 aI a1F dark:aS a4I a24 focus:a1H focus-visible:aM dark:a4G dark:a1w[#1F2656] @error('email') border-red-500 @enderror @error('username') border-red-500 @enderror"
                      id="login" value="{{ old('email') }}" required autocomplete="email" autofocus />

                    @error('email')
                      <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                      </p>
                    @enderror
                
                  </div>
                  <div class="a2n">
                    <label for="password" class="a2d an a1j a1R a2u dark:aT">
                      Your Password
                    </label>
                    <input type="password" name="password" placeholder="Enter your Password"
                      class="a4F dark:a38 ab a1u a1C a27 a4z a22 aI a1F dark:aS a4I a24 focus:a1H focus-visible:aM dark:a4G dark:a1w[#1F2656] @error('password') border-red-500 @enderror"
                      id="password" required />

                    @error('password')
                      <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                      </p>
                    @enderror
                  </div>
                  <div class="a2n aa ac ah">
                    <div>
                      <label for="remember" class="aa a1s a4J ac a1j a1R aQ dark:aS">
                        <div class="af">
                          <input type="checkbox" class="a1x" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }} />
                          <div class="box a1p aa a4n a4x ac a1t a1i a1C a27 a4G dark:a1I dark:a28">
                            <span class="aE">
                              <svg width="11" height="8" viewBox="0 0 11 8" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                  d="M10.0915 0.951972L10.0867 0.946075L10.0813 0.940568C9.90076 0.753564 9.61034 0.753146 9.42927 0.939309L4.16201 6.22962L1.58507 3.63469C1.40401 3.44841 1.11351 3.44879 0.932892 3.63584C0.755703 3.81933 0.755703 4.10875 0.932892 4.29224L0.932878 4.29225L0.934851 4.29424L3.58046 6.95832C3.73676 7.11955 3.94983 7.2 4.1473 7.2C4.36196 7.2 4.55963 7.11773 4.71406 6.9584L10.0468 1.60234C10.2436 1.4199 10.2421 1.1339 10.0915 0.951972ZM4.2327 6.30081L4.2317 6.2998C4.23206 6.30015 4.23237 6.30049 4.23269 6.30082L4.2327 6.30081Z"
                                  fill="#3056D3" stroke="#3056D3" stroke-width="0.4" />
                              </svg>
                            </span>
                          </div>
                        </div>
                        Keep me signed in
                      </label>
                    </div>
                    <div>
                      <a href="javascript:void(0)" class="a1j a1R aR hover:a2z">
                        Forgot Password?
                      </a>
                    </div>
                  </div>
                  <div class="a2a">
                    <button type="submit" class="hover:a38 aa ab ac a1t a1u a1A al a4K a1F a1R aT a3d a1c a4L hover:a4">
                      Sign in
                    </button>
                  </div>
                </form>
                <p class="a2G a1F a1R aQ dark:aS">
                  Don't have an account?
                  @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="aR hover:a2z">
                      Sign up
                    </a>
                  @endif
                </p>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="aq a8 a1a a2Z a2w ab a3D"
        style="
                  background-image: linear-gradient(
                    180deg,
                    #3e7dff 0%,
                    rgba(62, 125, 255, 0) 100%
                  );
                ">
      </div>
      <!-- <img src="{{ asset('assets/images/shapes/hero-shape-1.svg') }}" alt="" class="aq a1a a8 a2Z" />
      <img src="{{ asset('assets/images/shapes/hero-shape-2.svg') }}" alt="" class="aq a19 a8 a2Z" /> -->
    </section>
  </main>
@endsection
