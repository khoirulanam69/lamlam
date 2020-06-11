@extends('templates/main')

@section('content')
    <!-- Signup Form -->
    <section class="signup-form box-grey">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="signup-title">
                        <h1>Pilih template sesuai kebutuhan anda</h1>
                    </div>
                </div>
            </div>
            <div class="row template-list">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="template-item">
                        <a rel="example_group" href="{{ url('assets/auth/images/thumbnails/template/blog-smart.jpg') }}" class="thumbnail">
                            <img src="{{ asset('assets/auth/images/thumbnails/template/blog-smart.jpg') }}" width="400" height="600" alt="LamLam Template Preview" class="img-responsive">
                        </a>
                        <a href="http://preview.themeforest.net/item/venice-wordpress-responsive-blog-template/full_screen_preview/18771652" class="btn btn-demo">Lihat Demo</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="template-item">
                        <a rel="example_group" href="{{ url('assets/auth/images/thumbnails/template/architectural.jpg') }}" class="thumbnail">
                            <img src="{{ asset('assets/auth/images/thumbnails/template/architectural.jpg') }}" width="400" height="550" alt="LamLam Template Preview" class="img-responsive">
                        </a>
                        <a href="http://preview.themeforest.net/item/madison-ii-clean-designers-blog-theme/full_screen_preview/12101383" class="btn btn-demo">Lihat Demo</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="template-item">
                        <a rel="example_group" href="{{ url('assets/auth/images/thumbnails/template/smart-church.jpg') }}" class="thumbnail">
                            <img src="{{ asset('assets/auth/images/thumbnails/template/smart-church.jpg') }}" width="400" height="550" alt="LamLam Template Preview" class="img-responsive">
                        </a>
                        <a href="http://demo.orange-idea.com/#suzette" class="btn btn-demo">Lihat Demo</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="template-item">
                        <a rel="example_group" href="{{ url('assets/auth/images/thumbnails/template/blog-smart.jpg') }}" class="thumbnail">
                            <img src="{{ asset('assets/auth/images/thumbnails/template/blog-smart.jpg') }}" width="400" height="600" alt="LamLam Template Preview" class="img-responsive">
                        </a>
                        <a href="http://www.burnhambox.com/demos/?theme=Gagens" class="btn btn-demo">Lihat Demo</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="template-item">
                        <a rel="example_group" href="{{ url('assets/auth/images/thumbnails/template/blog-smart.jpg') }}" class="thumbnail">
                            <img src="{{ asset('assets/auth/images/thumbnails/template/huge-shoop.jpg') }}" width="400" height="550" alt="LamLam Template Preview" class="img-responsive last">
                        </a>
                        <a href="http://preview.themeforest.net/item/venice-wordpress-responsive-blog-template/full_screen_preview/18771652" class="btn btn-demo">Lihat Demo</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="template-item">
                        <a rel="example_group" href="{{ url('assets/auth/images/thumbnails/template/smart-church.jpg') }}" class="thumbnail">
                            <img src="{{ asset('assets/auth/images/thumbnails/template/smart-church.jpg') }}" width="400" height="550" alt="LamLam Template Preview" class="img-responsive">
                        </a>
                        <a href="http://preview.themeforest.net/item/madison-ii-clean-designers-blog-theme/full_screen_preview/12101383" class="btn btn-demo">Lihat Demo</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="template-item">
                        <a rel="example_group" href="{{ url('assets/auth/images/thumbnails/template/architectural.jpg') }}" class="thumbnail">
                            <img src="{{ asset('assets/auth/images/thumbnails/template/architectural.jpg') }}" width="400" height="550" alt="LamLam Template Preview" class="img-responsive">
                        </a>
                        <a href="http://demo.orange-idea.com/#suzette" class="btn btn-demo">Lihat Demo</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="template-item">
                        <a rel="example_group" href="{{ url('assets/auth/images/thumbnails/template/huge-shoop.jpg') }}" class="thumbnail">
                            <img src="{{ asset('assets/auth/images/thumbnails/template/huge-shoop.jpg') }}" width="400" height="550" alt="LamLam Template Preview" class="img-responsive">
                        </a>
                        <a href="http://www.burnhambox.com/demos/?theme=Gagens" class="btn btn-demo">Lihat Demo</a>
                    </div>
                </div>
            </div>
<!--
            <div id="content">
                <a rel="example_group" href="images/thumbnails/template/huge-shoop.jpg" title="Lorem ipsum dolor sit amet">
                    <img alt="" src="images/thumbnails/template/huge-shoop.jpg" />
                </a>

                <a rel="example_group" href="images/thumbnails/template/huge-shoop.jpg" title="">
                    <img alt="" src="images/thumbnails/template/huge-shoop.jpg" />
                </a>

                <a rel="example_group" href="images/thumbnails/template/huge-shoop.jpg" title="">
                    <img alt="" src="images/thumbnails/template/huge-shoop.jpg" />
                </a>

                <a rel="example_group" href="images/thumbnails/template/huge-shoop.jpg" title="">
                    <img class="last" alt="" src="images/thumbnails/template/huge-shoop.jpg" />
                </a>
            </div>
-->

        </div>
    </section>
    <!-- End Signup Form -->
@endsection
