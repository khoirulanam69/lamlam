@extends('templates/admin')

@section('content')
<div class="dashboard-title mysite-title">
    <div class="row">
        <div class="col-md-4">
            <h1 class="title-text">Transaction</h1>
            <p class="subtitle-text">6 Transaction</p>
        </div>
        <div class="col-md-8 title-right">
            <div class="form-inline dashboard-form form-mysite">
                <div class="form-group">
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
                            <th data-options="field:'metode',width:100">Metode</th>
                            <th data-options="field:'trx',width:100">Trx id</th>
                            <th data-options="field:'status',width:100">Status</th>
                            <th data-options="field:'tipe',width:100">Tipe</th>
                            <th data-options="field:'create',width:200">Create at</th>
                            <th data-options="field:'payment',width:200">Payment at</th>
                            <th data-options="field:'email',width:200">Email</th>
                            <th data-options="field:'action',width:350">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-options="field:'ck',checkbox:true"></td>
                            <td>veritrans</td>
                            <td>103712</td>
                            <td>Pending</td>
                            <td>starter</td>
                            <td>2017-03-03, 16:30:34</td>
                            <td>2017-03-03, 16:30:34</td>
                            <td>rikiriki@gmail.com</td>
                            <td><a href="#" class="btn btn-orange btn-action"><span class="fa fa-newspaper-o"></span> View</a> <a href="#" class="btn btn-orange btn-action"><span class="fa fa-edit"></span> Update</a> <a href="#" class="btn btn-orange btn-action"><span class="fa fa-remove"></span> Remove</a></td>
                        </tr>
                         <tr>
                            <td data-options="field:'ck',checkbox:true"></td>
                            <td>veritrans</td>
                            <td>103712</td>
                            <td>Pending</td>
                            <td>starter</td>
                            <td>2017-03-03, 16:30:34</td>
                            <td>2017-03-03, 16:30:34</td>
                            <td>rikiriki@gmail.com</td>
                            <td><a href="#" class="btn btn-orange btn-action"><span class="fa fa-newspaper-o"></span> View</a> <a href="#" class="btn btn-orange btn-action"><span class="fa fa-edit"></span> Update</a> <a href="#" class="btn btn-orange btn-action"><span class="fa fa-remove"></span> Remove</a></td>
                        </tr>
                         <tr>
                            <td data-options="field:'ck',checkbox:true"></td>
                            <td>veritrans</td>
                            <td>103712</td>
                            <td>Pending</td>
                            <td>starter</td>
                            <td>2017-03-03, 16:30:34</td>
                            <td>2017-03-03, 16:30:34</td>
                            <td>rikiriki@gmail.com</td>
                            <td><a href="#" class="btn btn-orange btn-action"><span class="fa fa-newspaper-o"></span> View</a> <a href="#" class="btn btn-orange btn-action"><span class="fa fa-edit"></span> Update</a> <a href="#" class="btn btn-orange btn-action"><span class="fa fa-remove"></span> Remove</a></td>
                        </tr>
                         <tr>
                            <td data-options="field:'ck',checkbox:true"></td>
                            <td>veritrans</td>
                            <td>103712</td>
                            <td>Pending</td>
                            <td>starter</td>
                            <td>2017-03-03, 16:30:34</td>
                            <td>2017-03-03, 16:30:34</td>
                            <td>rikiriki@gmail.com</td>
                            <td><a href="#" class="btn btn-orange btn-action"><span class="fa fa-newspaper-o"></span> View</a> <a href="#" class="btn btn-orange btn-action"><span class="fa fa-edit"></span> Update</a> <a href="#" class="btn btn-orange btn-action"><span class="fa fa-remove"></span> Remove</a></td>
                        </tr>
                         <tr>
                            <td data-options="field:'ck',checkbox:true"></td>
                            <td>veritrans</td>
                            <td>103712</td>
                            <td>Pending</td>
                            <td>starter</td>
                            <td>2017-03-03, 16:30:34</td>
                            <td>2017-03-03, 16:30:34</td>
                            <td>rikiriki@gmail.com</td>
                            <td><a href="#" class="btn btn-orange btn-action"><span class="fa fa-newspaper-o"></span> View</a> <a href="#" class="btn btn-orange btn-action"><span class="fa fa-edit"></span> Update</a> <a href="#" class="btn btn-orange btn-action"><span class="fa fa-remove"></span> Remove</a></td>
                        </tr>
                         <tr>
                            <td data-options="field:'ck',checkbox:true"></td>
                            <td>veritrans</td>
                            <td>103712</td>
                            <td>Pending</td>
                            <td>starter</td>
                            <td>2017-03-03, 16:30:34</td>
                            <td>2017-03-03, 16:30:34</td>
                            <td>rikiriki@gmail.com</td>
                            <td><a href="#" class="btn btn-orange btn-action"><span class="fa fa-newspaper-o"></span> View</a> <a href="#" class="btn btn-orange btn-action"><span class="fa fa-edit"></span> Update</a> <a href="#" class="btn btn-orange btn-action"><span class="fa fa-remove"></span> Remove</a></td>
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
