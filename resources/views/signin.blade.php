@extends('templates/main')

@section('content')
    <!-- Signup Form -->
    <section class="signup-form box-grey">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="signup-title">
                        <h1>Login sekarang</h1>
                    </div>
                    <div class="panel panel-default panel-signup">
                        <div class="panel-body">
                            <form class="lamlam-form-1">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user-o"></i></div>
                                        <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                        <input type="password" name="passreg" class="form-control" id="passreg" placeholder="Password">
                                    </div>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="checkbox">
                                        <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                        Ingat akun saya
                                    </label>
                                    <label class="form-forgot">
                                        <a href="{{ url('/resetpassword') }}">Lupa Password</a>
                                    </label>
                                </div>
                                <div class="form-group form-submit">
                                    <input type="submit" name="regbtn" id="regbtn" class="btn btn-orange" value="Sign In">
                                    <p class="help-block">Belum punya akun? <a href="{{ url('/signup') }}">Daftar</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Signup Form -->
@endsection
