@extends('templates/main')

@section('content')
    <!-- Frequently Asked Question (FAQ) -->
    <section class="faq-content box-grey">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-7 faq-list">
                    <h1>FAQ</h1>
                    <ul>
                        <li class="panel-group faq-question" role="tablist" id="faq1">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="collapseListGroupHeading1">
                                    <h4 class="panel-title">
                                        <a href="#collapseListGroup1" class="collapsed" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseListGroup1" data-item="1"> Bagaimana cara membuat akun di LAMLAM? </a>
                                    </h4>
                                </div>
                                <div class="panel-collapse collapse" role="tabpanel" id="collapseListGroup1" aria-labelledby="collapseListGroupHeading1" aria-expanded="false">
                                    <ul class="list-group">
                                        <li class="list-group-item">Bootply</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="panel-group faq-question" role="tablist" id="faq2">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="collapseListGroupHeading2">
                                    <h4 class="panel-title">
                                        <a href="#collapseListGroup2" class="collapsed" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseListGroup1" data-item="2"> Bagaimana cara login di LAMLAM? </a>
                                    </h4>
                                </div>
                                <div class="panel-collapse collapse" role="tabpanel" id="collapseListGroup2" aria-labelledby="collapseListGroupHeading2" aria-expanded="false">
                                    <ul class="list-group">
                                        <li class="list-group-item">Bootply</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="panel-group faq-question" role="tablist" id="faq3">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="collapseListGroupHeading3">
                                    <h4 class="panel-title">
                                        <a href="#collapseListGroup3" class="collapsed" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseListGroup1" data-item="3"> Bagaimana cara membeli theme di LAMLAM? </a>
                                    </h4>
                                </div>
                                <div class="panel-collapse collapse" role="tabpanel" id="collapseListGroup3" aria-labelledby="collapseListGroupHeading3" aria-expanded="false">
                                    <ul class="list-group">
                                        <li class="list-group-item">Bootply</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="panel-group faq-question" role="tablist" id="faq4">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="collapseListGroupHeading4">
                                    <h4 class="panel-title">
                                        <a href="#collapseListGroup4" class="collapsed" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseListGroup1" data-item="4"> Apa fungsi voucher di LAMLAM? </a>
                                    </h4>
                                </div>
                                <div class="panel-collapse collapse" role="tabpanel" id="collapseListGroup4" aria-labelledby="collapseListGroupHeading4" aria-expanded="false">
                                    <ul class="list-group">
                                        <li class="list-group-item">Bootply</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-5 faq-form">
                    <div class="panel panel-default">
                        <h2>Dapatkan Bantuan</h2>
                        <form class="lamlam-form-1">
                            <div class="form-group">
                                <select class="form-control single-text" name="selectfaq" id="selectfaq">
                                    <option value="0">Pilih Permasalahan</option>
                                    <option value="1">Akun</option>
                                    <option value="1">Template</option>
                                    <option value="2">Voucher</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea name="deskripsifaq" id="deskripsifaq" class="form-control single-text" placeholder="Tulis keterangan"></textarea>
                            </div>
                            <div class="form-group form-submit">
                                <input type="submit" name="regbtn" id="regbtn" class="btn btn-orange" value="Kirim">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Frequently Asked Question (FAQ) -->

    <!-- Call Support -->
    <section class="call-support">
        <div class="row">
            <div class="col-sm-6 cs-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3966.5681315759184!2d106.8132196!3d-6.1885006!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f69d045fb8ef%3A0x749254741e7eda37!2sJl.+Kh.+Mas+Mansyur+No.223%2C+Kb.+Kacang%2C+Tanah+Abang%2C+Kota+Jakarta+Pusat%2C+Daerah+Khusus+Ibukota+Jakarta+10240!5e0!3m2!1sid!2sid!4v1497197882865" width="100%" height="595" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-6 box-color-black cs-form">
                <h2>Hubungi Kami</h2>
                <form class="lamlam-form-1">
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
                        <textarea name="deskripsifaq" id="deskripsifaq" class="form-control single-text" placeholder="Tulis keterangan"></textarea>
                    </div>
                    <div class="form-group form-submit">
                        <input type="submit" name="regbtn" id="regbtn" class="btn btn-transparent" value="Kirim">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- End Call Support -->
@endsection
