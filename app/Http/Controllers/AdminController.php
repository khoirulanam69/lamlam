<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin/index');
    }

    public function transaction()
    {
        return view('admin/transaction');
    }

    public function voucher()
    {
        return view('admin/voucher');
    }

    public function newvoucher()
    {
        return view('admin/voucher_new');
    }
}
