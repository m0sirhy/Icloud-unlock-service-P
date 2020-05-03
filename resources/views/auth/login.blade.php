@extends('layouts.landing.app')
@section('content')
<section class="oppi_signup_wrap oppi_signin_wrap mt_99">
    <div class="right_img"><img src="{{asset('landing/images/signUp_vector_1.png')}}" alt="signUp_vector_1" class="img-fluid"></div>
    <div class="left_img"><img src="{{asset('landing/images/signUp_vector_2.png')}}" alt="signUp_vector_2" class="img-fluid"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <div class="oppi_signup_body">
                    <div class="oppi_signup_inner">
                        <h3 class="sign_up_titlle text-center">تسجيل الدخول</h3>
                        <form action="{{ route('login') }}" method="POST" class="sign_up_form">
                          @csrf
                            <div class="form-group">
                                <p>البريد الالكتروني</p>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" onfocus="this.placeholder=''" onblur="this.placeholder='Email'">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <p>كلمة المرور</p>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror " placeholder="Password" onfocus="this.placeholder=''" onblur="this.placeholder='Password'">
                            
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="form-group sign_up_btn_group">
                                <button class="btn sign_up_btn" type="submit">تسجيل الدخول</button>
                            </div>
                            
                            @if (Route::has('password.request'))
                            <p class="oppi_sign_note sign_up_para text-right"><span class="float-left"><a href="{{ route('password.request') }}">نسيت كلمة المرور?</a></span> <span class="stay_here justify-content-end d-flex align-items-center"><input type="checkbox" id="stay"><label for="stay">تذكرني</label></span></p>
                            @endif

                            <p class="sign_up_para sign_with_social text-center">with your social network</p>
                            <div class="social_sign_link text-center">
                                <a href="#" class="social_googleplus"></a>
                                <a href="#" class="social_facebook"></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- oppi_signup_wrap -->
@endsection