@extends('templates/main')

@section('content')
    <!-- Pricing Table -->
    <section class="pricing-table box-grey">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="pricing-title">
                        <h1>Pilih paket website sesuai kebutuhan anda</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-default panel-pricing pricing-personal">
                        <div class="panel-heading">
                            <div class="nominal">10</div>
                            <div class="currency">Ribu</div>
                        </div>
                        <div class="panel-body pricing-package">
                            <h3>Paket Personal</h3>
                            <p>
                                Memenuhi kebutuhan dasar untuk membuat website pribadi, e-mail pribadi, blog, atau online presence sederhana.
                            </p>
                            <hr class="pricing-separator">
                            <ul class="package-list">
                                <li>1 Website</li>
                                <li>1 WebMail</li>
                                <li>Free Hosting</li>
                                <li>Free Domain</li>
                                <li>Storage 200 MB</li>
                                <li>Unlimited Bandwidth</li>
                            </ul>
                        </div>
                        <div class="panel-footer">
                            <a href="#" class="pricing-select">Pilih Paket</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default panel-pricing pricing-professional">
                        <div class="panel-heading">
                            <div class="nominal">20</div>
                            <div class="currency">Ribu</div>
                        </div>
                        <div class="panel-body pricing-package">
                            <h3>Paket Professional</h3>
                            <p>Sesuai untuk membuat website perusahaan kecil menengah, sekolah, atau blog yang populer.</p>
                            <hr class="pricing-separator">
                            <ul class="package-list">
                                <li>2 Website</li>
                                <li>2 WebMail</li>
                                <li>Free Hosting</li>
                                <li>Free Domain</li>
                                <li>Storage 700 MB</li>
                                <li>Unlimited Bandwidth</li>
                            </ul>
                        </div>
                        <div class="panel-footer">
                            <a href="#" class="pricing-select">Pilih Paket</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default panel-pricing pricing-enterprise">
                        <div class="panel-heading">
                            <div class="nominal">30</div>
                            <div class="currency">Ribu</div>
                        </div>
                        <div class="panel-body pricing-package">
                            <h3>Paket Enterprise</h3>
                            <p>Anda membangun website yang ramai, e-commerce, web pemerintahan, atau ingin menggunakan e-mail korporat.</p>
                            <hr class="pricing-separator">
                            <ul class="package-list">
                                <li>3 Website</li>
                                <li>3 WebMail</li>
                                <li>Free Hosting</li>
                                <li>Free Domain</li>
                                <li>Storage 1 GB</li>
                                <li>Unlimited Bandwidth</li>
                            </ul>
                        </div>
                        <div class="panel-footer">
                            <a href="#" class="pricing-select">Pilih Paket</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Pricing Table -->
@endsection
