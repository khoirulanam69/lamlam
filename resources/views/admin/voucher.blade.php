@extends('templates/admin')

@section('content')
<div class="dashboard-title mysite-title">
    <div class="row">
        <div class="col-md-4">
            <h1 class="title-text">Voucher</h1>
            <p class="subtitle-text">16 Voucher</p>
        </div>
        <div class="col-md-8 title-right">
            <div class="form-inline dashboard-form form-mysite">
                <div class="form-group">
                    <a href="{{ url('/admin/newvoucher') }}" class="btn btn-dashboard btn-transparent">Add New Voucher</a>
                    <a href="#" class="btn btn-dashboard btn-transparent">Export</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="dashboard-domain">
    <div class="row">
        <div class="col-xs-12">
            <div class="table-responsive">
                <table id="dg" class="easyui-datagrid" title="" data-options="singleSelect:true">
                    <thead>
                        <tr>
                            <th data-options="field:'ck',checkbox:true"></th>
                            <th data-options="field:'metode',width:150">Code</th>
                            <th data-options="field:'trx',width:200">Status</th>
                            <th data-options="field:'status',width:200">Product Category</th>
                            <th data-options="field:'tipe',width:200">Created at</th>
                            <th data-options="field:'create',width:200">Used at</th>
                            <th data-options="field:'action',width:450">Action</th>


                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-options="field:'ck',checkbox:true"></td>
                            <td>ABAD53152A6A</td>
                            <td>Belum digunakan</td>
                            <td>starter</td>
                            <td>2017-03-03, 16:30:34</td>
                            <td>2017-03-03, 16:30:34</td>
                            <td><a href="#" class="btn btn-orange btn-action"><span class="fa fa-history"></span> History</a> <a href="#" class="btn btn-orange btn-action"><span class="fa fa-newspaper-o"></span> View</a> <a href="#" class="btn btn-orange btn-action"><span class="fa fa-edit"></span> Update</a> <a href="#" class="btn btn-orange btn-action"><span class="fa fa-remove"></span> Remove</a></td>
                        </tr>
                        <tr>
                            <td data-options="field:'ck',checkbox:true"></td>
                            <td>ABAD53152A6A</td>
                            <td>Belum digunakan</td>
                            <td>starter</td>
                            <td>2017-03-03, 16:30:34</td>
                            <td>2017-03-03, 16:30:34</td>
                            <td><a href="#" class="btn btn-orange btn-action"><span class="fa fa-history"></span> History</a> <a href="#" class="btn btn-orange btn-action"><span class="fa fa-newspaper-o"></span> View</a> <a href="#" class="btn btn-orange btn-action"><span class="fa fa-edit"></span> Update</a> <a href="#" class="btn btn-orange btn-action"><span class="fa fa-remove"></span> Remove</a></td>
                        </tr>
                        <tr>
                            <td data-options="field:'ck',checkbox:true"></td>
                            <td>ABAD53152A6A</td>
                            <td>Belum digunakan</td>
                            <td>starter</td>
                            <td>2017-03-03, 16:30:34</td>
                            <td>2017-03-03, 16:30:34</td>
                            <td><a href="#" class="btn btn-orange btn-action"><span class="fa fa-history"></span> History</a> <a href="#" class="btn btn-orange btn-action"><span class="fa fa-newspaper-o"></span> View</a> <a href="#" class="btn btn-orange btn-action"><span class="fa fa-edit"></span> Update</a> <a href="#" class="btn btn-orange btn-action"><span class="fa fa-remove"></span> Remove</a></td>
                        </tr>
                        <tr>
                            <td data-options="field:'ck',checkbox:true"></td>
                            <td>ABAD53152A6A</td>
                            <td>Belum digunakan</td>
                            <td>starter</td>
                            <td>2017-03-03, 16:30:34</td>
                            <td>2017-03-03, 16:30:34</td>
                            <td><a href="#" class="btn btn-orange btn-action"><span class="fa fa-history"></span> History</a> <a href="#" class="btn btn-orange btn-action"><span class="fa fa-newspaper-o"></span> View</a> <a href="#" class="btn btn-orange btn-action"><span class="fa fa-edit"></span> Update</a> <a href="#" class="btn btn-orange btn-action"><span class="fa fa-remove"></span> Remove</a></td>
                        </tr>
                        <tr>
                            <td data-options="field:'ck',checkbox:true"></td>
                            <td>ABAD53152A6A</td>
                            <td>Belum digunakan</td>
                            <td>starter</td>
                            <td>2017-03-03, 16:30:34</td>
                            <td>2017-03-03, 16:30:34</td>
                            <td><a href="#" class="btn btn-orange btn-action"><span class="fa fa-history"></span> History</a> <a href="#" class="btn btn-orange btn-action"><span class="fa fa-newspaper-o"></span> View</a> <a href="#" class="btn btn-orange btn-action"><span class="fa fa-edit"></span> Update</a> <a href="#" class="btn btn-orange btn-action"><span class="fa fa-remove"></span> Remove</a></td>
                        </tr>
                        <tr>
                            <td data-options="field:'ck',checkbox:true"></td>
                            <td>ABAD53152A6A</td>
                            <td>Belum digunakan</td>
                            <td>starter</td>
                            <td>2017-03-03, 16:30:34</td>
                            <td>2017-03-03, 16:30:34</td>
                            <td><a href="#" class="btn btn-orange btn-action"><span class="fa fa-history"></span> History</a> <a href="#" class="btn btn-orange btn-action"><span class="fa fa-newspaper-o"></span> View</a> <a href="#" class="btn btn-orange btn-action"><span class="fa fa-edit"></span> Update</a> <a href="#" class="btn btn-orange btn-action"><span class="fa fa-remove"></span> Remove</a></td>
                        </tr>
                        <tr>
                            <td data-options="field:'ck',checkbox:true"></td>
                            <td>ABAD53152A6A</td>
                            <td>Belum digunakan</td>
                            <td>starter</td>
                            <td>2017-03-03, 16:30:34</td>
                            <td>2017-03-03, 16:30:34</td>
                            <td><a href="#" class="btn btn-orange btn-action"><span class="fa fa-history"></span> History</a> <a href="#" class="btn btn-orange btn-action"><span class="fa fa-newspaper-o"></span> View</a> <a href="#" class="btn btn-orange btn-action"><span class="fa fa-edit"></span> Update</a> <a href="#" class="btn btn-orange btn-action"><span class="fa fa-remove"></span> Remove</a></td>
                        </tr>
                        <tr>
                            <td data-options="field:'ck',checkbox:true"></td>
                            <td>ABAD53152A6A</td>
                            <td>Belum digunakan</td>
                            <td>starter</td>
                            <td>2017-03-03, 16:30:34</td>
                            <td>2017-03-03, 16:30:34</td>
                            <td><a href="#" class="btn btn-orange btn-action"><span class="fa fa-history"></span> History</a> <a href="#" class="btn btn-orange btn-action"><span class="fa fa-newspaper-o"></span> View</a> <a href="#" class="btn btn-orange btn-action"><span class="fa fa-edit"></span> Update</a> <a href="#" class="btn btn-orange btn-action"><span class="fa fa-remove"></span> Remove</a></td>
                        </tr>
                        <tr>
                            <td data-options="field:'ck',checkbox:true"></td>
                            <td>ABAD53152A6A</td>
                            <td>Belum digunakan</td>
                            <td>starter</td>
                            <td>2017-03-03, 16:30:34</td>
                            <td>2017-03-03, 16:30:34</td>
                            <td><a href="#" class="btn btn-orange btn-action"><span class="fa fa-history"></span> History</a> <a href="#" class="btn btn-orange btn-action"><span class="fa fa-newspaper-o"></span> View</a> <a href="#" class="btn btn-orange btn-action"><span class="fa fa-edit"></span> Update</a> <a href="#" class="btn btn-orange btn-action"><span class="fa fa-remove"></span> Remove</a></td>
                        </tr>
                        <tr>
                            <td data-options="field:'ck',checkbox:true"></td>
                            <td>ABAD53152A6A</td>
                            <td>Belum digunakan</td>
                            <td>starter</td>
                            <td>2017-03-03, 16:30:34</td>
                            <td>2017-03-03, 16:30:34</td>
                            <td><a href="#" class="btn btn-orange btn-action"><span class="fa fa-history"></span> History</a> <a href="#" class="btn btn-orange btn-action"><span class="fa fa-newspaper-o"></span> View</a> <a href="#" class="btn btn-orange btn-action"><span class="fa fa-edit"></span> Update</a> <a href="#" class="btn btn-orange btn-action"><span class="fa fa-remove"></span> Remove</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <form class="form-inline form-domain dashboard-form">
                <div class="form-group form-left">
                    <div class="form-control">
                        <select>
                            <option value="0">Bulk</option>
                            <option value="1">Option 2</option>
                            <option value="2">Option 3</option>
                            <option value="3">Option 4</option>
                        </select>
                    </div>
                    <input type="submit" name="submitapply" class="btn btn-transparent" value="Apply">
                </div>
                <div class="form-group form-right">
                    <div class="form-control">
                        <select>
                            <option value="0">All</option>
                            <option value="1">Option 2</option>
                            <option value="2">Option 3</option>
                            <option value="3">Option 4</option>
                        </select>
                    </div>
                    <input type="submit" name="submitfilter" class="btn btn-transparent" value="Filter">
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
