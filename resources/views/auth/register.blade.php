@extends('layoutss.auth')

@section('content')
  <main>
    <section class="af a2E a1J[180px] a4D[120px]">
      <div class="ae">
        <div class="a3i[-16px] aa a1L">
          <div class="ab ak">
            <form method="POST" action="{{ route('register') }}">
              @csrf
              <div class="wow fadeInUp a3r aH[500px] a1X a1C a2l[#f5f5f5] a1 a2P dark:a4E dark:a3 sm:a4j[60px]"
                data-wow-delay="0s">
                <h3 class="a2d a2G a2B a1P a1k dark:aT sm:a2o">
                  Create your account
                </h3>
             
          
                <div class="a2n aa ac a1t">
                  <span class="ao aC[1px] ab aH[60px] a2m a4H sm:an"></span>
                  <p class="ab a23 a2G a1F a1R aQ dark:aS">
                    Register with your email
                  </p>
                  <span class="ao aC[1px] ab aH[60px] a2m a4H sm:an"></span>
                </div>
                <form>
                  <div class="a2n">
                    <label for="name" class="a2d an a1j a1R a2u dark:aT">
                       Name
                    </label>
                    <input type="text" name="name" placeholder="Enter your first name"
                      class="a4F dark:a38 ab a1u a1C a27 a4z a22 aI a1F dark:aS a4I a24 focus:a1H focus-visible:aM dark:a4G dark:a1w[#1F2656] @error('first_name') border-red-500 @enderror"
                      id="name" name="name" value="{{ old('name') }}" required autocomplete="name"
                      autofocus />
                    @error('name')
                      <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                      </p>
                    @enderror
                  </div>
               
                  <div class="a2n">
                    <label for="email" class="a2d an a1j a1R a2u dark:aT">
                      Email Address
                    </label>
                    <input type="email" name="email" placeholder="Enter your Email"
                      class="a4F dark:a38 ab a1u a1C a27 a4z a22 aI a1F dark:aS a4I a24 focus:a1H focus-visible:aM dark:a4G dark:a1w[#1F2656] @error('email') border-red-500 @enderror"
                      id="email" name="email" value="{{ old('email') }}" required autocomplete="email" />
                    @error('email')
                      <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                      </p>
                    @enderror
                  </div>
       
                  <div class="a2n">
                    <label for="password" class="a2d an a1j a1R a2u dark:aT">
                      Password
                    </label>
                    <input type="password" name="password" placeholder="Enter your Password"
                      class="a4F dark:a38 ab a1u a1C a27 a4z a22 aI a1F dark:aS a4I a24 focus:a1H focus-visible:aM dark:a4G dark:a1w[#1F2656] @error('password') border-red-500 @enderror"
                      id="password" name="password" required autocomplete="new-password" />
                    @error('password')
                      <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                      </p>
                    @enderror
                  </div>








           


                    <div class="a2n">
                        <label for="password-confirm" class="a2d an a1j a1R a2u dark:aT">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="a4F dark:a38 ab a1u a1C a27 a4z a22 aI a1F dark:aS a4I a24 focus:a1H focus-visible:aM dark:a4G dark:a1w[#1F2656] @error('password_confirm') border-red-500 @enderror"
                                 name="password_confirmation" required autocomplete="new-password">
                            </div>
                            @error('password_confirm')
                        <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                        </p>
                       @enderror
                   </div>











                  <div class="a2n aa">
                    <label for="checkboxLabel" class="aa a1s a4J a1j a1R aQ dark:aS">
                      <div class="af">
                        <input type="checkbox" id="checkboxLabel" class="a1x" />
                        <div class="box a1p a4M aa a4n a4x ac a1t a1i a1C a27 a4G dark:a1I dark:a28">
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
                      <span>
                        By creating account means you agree to the
                        <a href="javascript:void(0)" class="aR hover:a2z">
                          Terms and Conditions
                        </a>
                        , and our
                        <a href="javascript:void(0)" class="aR hover:a2z">
                          Privacy Policy
                        </a>
                      </span>
                    </label>
                  </div>
                  <div class="a2a">
                    <button type="submit" class="hover:a38 aa ab ac a1t a1u a1A al a4K a1F a1R aT a3d a1c a4L hover:a4">
                      Sign up
                    </button>
                  </div>
                </form>
                <p class="a2G a1F a1R aQ dark:aS">
                  Already using EDMS?
                  @if (Route::has('login'))
                  <a href="{{ route('login') }}" class="aR hover:a2z">
                    Sign in
                  </a>
                </p>
                  @endif
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
    
    </section>
  </main>
@endsection
