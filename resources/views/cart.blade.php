@extends('templates/main')

@section('content')
    <!-- Cart Table -->
    <section class="cart-table box-grey">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="cart-title">
                        <h1>Cart</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <div class="table-responsive cart-responsive">
                        <table class="table cart-content">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Tipe Paket</th>
                                    <th>Deskripsi</th>
                                    <th>Jumlah</th>
                                    <th>Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Paket Professional</td>
                                    <td>2 Website, Storage 700MB,...</td>
                                    <td class="cart-count">
                                        <div class="form-group cart-counter">
                                            <input type="text" name="quant[1]" id="jumlah" class="form-control single-text counter-nomina" placeholder="0" value="0">
                                            <div class="counter">
                                                <button class="btn btn-default counter-up btn-counter" data-type="plus" data-field="quant[1]"><span class="fa fa-sort-up"></span></button>
                                                <button class="btn btn-default counter-down btn-counter" disabled="disabled" data-type="minus" data-field="quant[1]"><span class="fa fa-sort-down"></span></button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Rp 20.000</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Paket Professional</td>
                                    <td>2 Website, Storage 700MB,...</td>
                                    <td class="cart-count">
                                        <div class="form-group cart-counter">
                                            <input type="text" name="quant[2]" id="jumlah" class="form-control single-text counter-nomina" placeholder="0" value="0">
                                            <div class="counter">
                                                <button class="btn btn-default counter-up btn-counter" data-type="plus" data-field="quant[2]"><span class="fa fa-sort-up"></span></button>
                                                <button class="btn btn-default counter-down btn-counter" disabled="disabled" data-type="minus" data-field="quant[2]"><span class="fa fa-sort-down"></span></button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Rp 100.000</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Paket Professional</td>
                                    <td>2 Website, Storage 700MB,...</td>
                                    <td class="cart-count">
                                        <div class="form-group cart-counter">
                                            <input type="text" name="quant[3]" id="jumlah" class="form-control single-text counter-nomina" placeholder="0" value="0">
                                            <div class="counter">
                                                <button class="btn btn-default counter-up btn-counter" data-type="plus" data-field="quant[3]"><span class="fa fa-sort-up"></span></button>
                                                <button class="btn btn-default counter-down btn-counter" disabled="disabled" data-type="minus" data-field="quant[3]"><span class="fa fa-sort-down"></span></button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Rp 20.000</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Paket Professional</td>
                                    <td>2 Website, Storage 700MB,...</td>
                                    <td class="cart-count">
                                        <div class="form-group cart-counter">
                                            <input type="text" name="quant[4]" id="jumlah" class="form-control single-text counter-nomina" placeholder="0" value="0">
                                            <div class="counter">
                                                <button class="btn btn-default counter-up btn-counter" data-type="plus" data-field="quant[4]"><span class="fa fa-sort-up"></span></button>
                                                <button class="btn btn-default counter-down btn-counter" disabled="disabled" data-type="minus" data-field="quant[4]"><span class="fa fa-sort-down"></span></button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Rp 100.000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-3 cart-voucher">
                    <div class="panel panel-default">
                        <div class="cart-title">
                            <h3>Gunakan Kupon</h3>
                        </div>
                        <form class="lamlam-form-1">
                            <div class="form-group">
                                <input type="text" name="vouchercart" class="form-control single-text" id="vouchercart" placeholder="Masukkan kode voucher">
                            </div>
                            <div class="form-group form-submit">
                                <input type="submit" name="regbtn" id="regbtn" class="btn btn-orange" value="Proses">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row cart-total">
                <div class="col-xs-12">
                    <div class="panel panel-default">
                        <div class="cart-title">
                            <h3>Cart Total</h3>
                        </div>
                        <div class="row total-content top">
                            <div class="col-sm-6 total-left">
                                <p class="subtotal">Total Produk</p>
                            </div>
                            <div class="col-sm-6 total-right">
                                <p class="subtotal-nominal">Rp 120.000</p>
                            </div>
                        </div>
                        <div class="row total-content bottom">
                            <div class="col-sm-6 total-left">
                                <p class="grandtotal">Grand Total</p>
                            </div>
                            <div class="col-sm-6 total-right">
                                <p class="grandtotal-nominal">Rp 120.000</p>
                            </div>
                        </div>
                        <div class="row total-button">
                            <button type="button" class="btn btn-orange" data-toggle="modal" data-target="#cartModal">Proses Checkout</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade modal-checkout" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title" id="myModalLabel">Proses Checkout</h2>
                        </div>
                        <div class="modal-body checkout-content">
                            <h3>Data Informasi Anda</h3>
                            <form class="lamlam-form-1">
                                <div class="radio">
                                    <label>
                                        <input type="radio" id="radio" name="akun">
                                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                        <span class="cr-text">Checkout sebagai tamu</span>
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" id="radio" name="akun">
                                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                        <span class="cr-text">Checkout sebagai user</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user-o"></i></div>
                                        <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                        <input type="password" name="passreg" class="form-control" id="passreg" placeholder="Password">
                                    </div>
                                </div>
                                <hr>
                                <h3>Metode Pembayaran</h3>
                                <div class="form-group">
                                    <div class="radio-container double">
                                        <input type="radio" name="payment" id="payment_1">
                                        <label class="radio double first" for="payment_1">
                                            <img src="{{ asset('assets/auth/images/thumbnails/xendit.png') }}" width="183" height="118" alt="Xendit Payment Method" class="img-responsive">
                                        </label>
                                        <input type="radio" name="payment" id="payment_2">
                                        <label class="radio double" for="payment_2">
                                            <img src="{{ asset('assets/auth/images/thumbnails/veritrans.png') }}" width="183" height="118" alt="Veritrans Payment Method" class="img-responsive">
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group form-submit">
                                    <input type="submit" name="checkout" value="Lanjutkan" class="btn btn-orange">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Cart Table -->
@endsection
