@extends('templates/admin')

@section('content')
<div class="dashboard-title">
    <div class="row">
        <div class="col-sm-6">
            <h1 class="title-text">Dashboard</h1>
        </div>
        <div class="col-sm-6 title-right">
            <a href="#" class="btn btn-dashboard btn-transparent">Aktivasi Voucher</a>
        </div>
    </div>
</div>

<div class="dashboard-feature">
    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="panel panel-default panel-dashboard panel-feature">
                <span class="feature-icon fa fa-globe"></span>
                <div class="feature-detail">
                    <p class="feature-point">1</p>
                    <p class="caption-detail">Website</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="panel panel-default panel-dashboard panel-feature">
                <span class="feature-icon fa fa-database"></span>
                <div class="feature-detail">
                    <p class="feature-point">500MB</p>
                    <p class="caption-detail">Hosting</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="panel panel-default panel-dashboard panel-feature">
                <span class="feature-icon fa fa-shield"></span>
                <div class="feature-detail">
                    <p class="feature-point">3</p>
                    <p class="caption-detail">Domain</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="panel panel-default panel-dashboard panel-feature">
                <span class="feature-icon fa fa-envelope"></span>
                <div class="feature-detail">
                    <p class="feature-point">2</p>
                    <p class="caption-detail">WebMail</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="dashboard-stats">
    <div class="row">
        <div class="col-md-12 col-lg-8 stats-graph">
            <div class="panel panel-default panel-graph">
                <h2 class="stats-title">Grafik Server</h2>
                <div class="dashboard-cart" id="chartContainer" style="width:100%; height:335px;"></div>
            </div>
        </div>
        <div class="col-md-12 col-lg-4 stats-detail">
            <div class="panel panel-default panel-dashboard">
                <h2 class="stats-title">Info Paket</h2>
                <hr class="stats-separator">
                <div class="row">
                    <div class="col-sm-6 stats-left">
                        <div class="package-container">
                            <p class="caption-detail">Paket</p>
                            <p class="caption-info">Standard</p>
                        </div>
                        <div class="package-container">
                            <p class="caption-detail">Kuota</p>
                            <p class="caption-info">500 MB</p>
                        </div>
                        <div class="package-container">
                            <p class="caption-detail">Website Builder</p>
                            <p class="caption-info">1</p>
                        </div>
                    </div>
                    <div class="col-sm-6 stats-right">
                        <div class="package-container">
                            <p class="caption-detail">WebMail</p>
                            <p class="caption-info">1 Mail</p>
                        </div>
                        <div class="package-container">
                            <p class="caption-detail">Addons Domain</p>
                            <p class="caption-info">-</p>
                        </div>
                        <div class="package-container">
                            <p class="caption-detail">Tanggal Expired</p>
                            <p class="caption-info">27 Juli 2018</p>
                        </div>
                    </div>
                </div>
                <div class="row stats-detail-button">
                    <a href="upgrade.html" class="btn btn-dashboard btn-transparent">Upgrade Paket</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
