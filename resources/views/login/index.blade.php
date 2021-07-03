<!DOCTYPE html>
<html class="h-100" lang="en">


{{-- Head Section Start --}}

@include('head.head' , ['title' => "Login | E-Banking System"] )

{{-- Head Section End --}}



<body class="h-100">

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->





    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center" href="{{route('login.login')}}">
                                    <h4>LogIn</h4>
                                </a>

                                <form method="POST" class="mt-5 mb-5 login-input">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="user_name" class="form-control"
                                            placeholder="User Name"  value="{{old('user_name')}}">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control"
                                            placeholder="Password" value="{{old('password')}}">
                                    </div>

                                    <!-- <div class="form-group">
                                        <input type="text" name="user_type" class="form-control"
                                            placeholder="user_type" value="{{old('user_type')}}">
                                    </div> -->

                                    <div class="form-group">
                                            <select class="form-control" id="val-skill" name="user_type">
                                                <option value="">User Type</option>
                                                <option value="clients">Clients</option>
                                                <option value="bank_manager">Bank Manager</option>
                                                <option value="meo">Money exchange officer</option>
                                                <option value="admin">Admin</option>
                                            </select>
                                        </div>


                    
                                    <input type="submit" value="Sign in" class="btn login-form__btn submit w-100 ">
                                </form>
                                <section>
                                    @foreach ($errors->all() as $err)
                                   <h5>{{$err}}</h5>  <br>
                                    @endforeach
                                </section>

                                {{-- Errors --}}
                                <div align='center' class="errors alert-danger">{{session('msg')}}</div>
                                {{-- Errors end --}}
                                <p class="mt-5 login-form__footer">Dont have account? <a
                                        href="{{ route('registration.register')}}" class="text-primary">Sign Up</a> now
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--**********************************
        Scripts
    ***********************************-->
    @include('scripts.scripts');

</body>

</html>