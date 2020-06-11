@extends('templates/main')

@section('content')
    <!-- Signup Form -->
    <section class="signup-form box-grey">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="signup-title">
                        <h1>Reset Password</h1>
                    </div>
                    <div class="panel panel-default panel-signup">
                        <div class="panel-body">
                            <form class="lamlam-form-1">
                                <div class="form-group resetpass-caption">
                                    <p class="help-block">Kirim saya Link untuk reset password</p>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-envelope-o"></i></div>
                                        <input type="email" name="emailreg" class="form-control" id="emailreg" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group form-submit">
                                    <input type="submit" name="regbtn" id="regbtn" class="btn btn-orange" value="Kirim">
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
