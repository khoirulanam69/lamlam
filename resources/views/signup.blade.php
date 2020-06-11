@extends('templates/main')

@section('content')
    <!-- Signup Form -->
    <section class="signup-form box-grey">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="signup-title">
                        <h1>Buat akun sekarang</h1>
                    </div>
                    <div class="panel panel-default panel-signup">
                        <div class="panel-body">
                            <form class="lamlam-form-1">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user-o"></i></div>
                                        <input type="text" name="namalengkap" class="form-control" id="namalengkap" placeholder="Nama Lengkap">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user-o"></i></div>
                                        <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-envelope-o"></i></div>
                                        <input type="email" name="emailreg" class="form-control" id="emailreg" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                        <input type="password" name="passreg" class="form-control" id="passreg" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-qrcode"></i></div>
                                        <input type="text" name="voucher" class="form-control" id="voucher" placeholder="Kode Voucher">
                                    </div>
                                    <p class="help-block">Belum punya voucher? <a href="#">beli di sini</a></p>
                                </div>
                                <hr class="form-separator">
                                <div class="form-group form-captcha">
                                    <input type="text" name="captcha" class="form-control single-text" id="captcha" placeholder="Kode Keamanan">
                                    <button class="btn btn-default btn-refresh"><i class="fa fa-refresh"></i></button>
                                    <div class="panel panel-default panel-captcha">
                                        <div class="panel-body">
                                            <img src="{{ asset('assets/auth/images/captcha/code.png') }}" width="179" height="60" alt="Capthca" class="img-responsive">
                                        </div>
                                    </div>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="checkbox">
                                        <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                        Saya setuju dengan <a href="#">Syarat dan Ketentuan LAMLAM</a>
                                    </label>
                                </div>
                                <div class="form-group form-submit">
                                    <input type="submit" name="regbtn" id="regbtn" class="btn btn-orange" value="Buat Akun">
                                    <p class="help-block">Sudah punya akun? <a href="{{ url('/signin') }}">Login</a></p>
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
