@extends('layouts.landing.app')
@section('content')
<section class="oppi_signup_wrap mt_99">
    <div class="right_img"><img src="{{asset('landing/images/signUp_vector_2.png')}}" alt="signUp_vector_1" class="img-fluid"></div>
    <div class="left_img"><img src="{{asset('landing/images/signUp_vector_1.png')}}" alt="signUp_vector_2" class="img-fluid"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <div class="oppi_signup_body">
                    <div class="oppi_signup_inner">
                        <h3 class="sign_up_titlle text-center">التسجيل</h3>
                        <form action="{{ route('register') }}" method="POST" class="sign_up_form">
                            @csrf
                            <div class="form-group">
                                <p>اسم المستخدم</p>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  placeholder="اسم المستخدم" onfocus="this.placeholder=''" onblur="this.placeholder='Username'">
                            
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <p>البريد الالكتروني </p>
                                <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" onfocus="this.placeholder=''" onblur="this.placeholder='Email'">
                           
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <p>كلمة المرور</p>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="كلمة المرور" onfocus="this.placeholder=''" onblur="this.placeholder='كلمة المرور'">
                           
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <p> تاكيد كلمة المرور</p>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  placeholder="تاكيد كلمة المرور" onfocus="this.placeholder=''" onblur="this.placeholder='تاكيد كلمة المرور'" required autocomplete="new-password">
                           
                                                        </div>


                            <div class="form-group sign_up_btn_group">
                                <button class="btn sign_up_btn" type="submit"> التسجيل</button>
                            </div>
                            <p class="oppi_sign_note sign_up_para text-center">بالمتابعة فانت توافق على  <a href="#"> شروط الخدمة</a></p>
                            <p class="sign_up_para sign_with_social text-center">with your social network</p>
                            <div class="social_sign_link text-center">
                                <a href="#" class="social_googleplus"></a>
                                <a href="#" class="social_facebook"></a>
                            </div>
                        <p class="text-center have_an_account">لديك حساب سابق ? <a href="{{route('login')}}">تسجيل الدخول </a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- oppi_signup_wrap -->
@endsection