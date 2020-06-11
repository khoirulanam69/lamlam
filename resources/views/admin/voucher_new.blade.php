@extends('templates/admin')

@section('content')
<div class="dashboard-title mysite-title">
    <div class="row">
        <div class="col-md-12">
            <h1 class="title-text">Buat Voucher</h1>
        </div>
    </div>
</div>

<div class="dashboard-domain dashboard-newebmail">
    <div class="row">
        <div class="col-xs-12">

            <form class="form-horizontal dashboard-form">
                <div class="form-group">
                    <label for="mailpass" class="col-sm-4 col-md-3 col-lg-3 control-label">Prefix</label>
                    <div class="col-sm-8 col-md-9 col-lg-9 fields">
                        <input type="text" id="mailpass" class="form-control pass-control" placeholder="ex : LM">
                        <p class="help-block">Prefix.</p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="mailpass" class="col-sm-4 col-md-3 col-lg-3 control-label">Total Voucher</label>
                    <div class="col-sm-8 col-md-9 col-lg-9 fields">
                        <input type="text" id="mailpass" class="form-control pass-control">
                        <p class="help-block">Total Voucher.</p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="maildomain" class="col-sm-4 col-md-3 col-lg-3 control-label">Product Category</label>
                    <div class="col-sm-8 col-md-9 col-lg-9 fields">
                        <div class="choose-single">
                            <select data-placeholder="Select" name="domainmail" id="domainmail" class="chosen-select" tabindex="-1">
                                <option value=""></option>
                                <option value="1">@lamlam.co.id</option>
                                <option value="2">@smartmedia.xyz</option>
                                <option value="3">@wawsac.com</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group btn-form">
                    <div class="col-sm-offset-4 col-sm-8 col-md-offset-3 col-md-9 col-lg-offset-3 col-lg-9 fields">
                        <input type="submit" name="domainbtn" id="domainbtn" value="Simpan" class="btn btn-transparent">
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
