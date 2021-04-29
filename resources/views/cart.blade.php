@extends('layout.layout')

@section('title','StudyEarth - Paid Projects')

@section('links')
<li><a href="{{ route('index.view') }}">Home</a></li>
<li class="has-dropdown"><a href="{{ route('projects.view') }}">Projects</a></li>
<li><a href="">About Us</a></li>
<li><a href="">Contact</a></li>
@endsection

@section('content')

<div class="main-wrapper">
    <div class="axil-contact-form ax-section-gap bg-color-f3f8f9">
        <div class="container">
            <div class="row mt--80">
                <div class="col-xl-6">
                    <div class="card card-user">
                        <div class="card-body">
                            <h4>Billing Details<b>*</b></h4>
                            <div class="row">

                                <div class="form-group col-lg-6 col-md-6">
                                    <input type="text">
                                    <label>First name</label>
                                    <span class="focus-border"></span>
                                </div>

                                <div class="form-group col-lg-6 col-md-6">
                                    <input type="text">
                                    <label>Last name</label>
                                    <span class="focus-border"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6 col-md-6">
                                    <input type="email">
                                    <label>Email I'd</label>
                                    <span class="focus-border"></span>
                                </div>
                                <div class="form-group col-lg-6 col-md-6">
                                    <input type="text">
                                    <label>Mobile</label>
                                    <span class="focus-border"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-12 col-md-12">
                                    <input type="text" name="">
                                    <label>Address</label>
                                    <span class="focus-border"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card bill-details">
                        <div class="card-body">
                            <h4 class="mb-3">Billing Amount</h4>

                            <ul class="list-group list-group-flush">
                                <div class="table-responsive">
                                    <table class="table table-borderless width-100">
                                        <thead>
                                            <tr>
                                                <th scope="col">
                                                    <h6>Product Name</h6>
                                                </th>
                                                <th scope="col">
                                                    <h6>Quantity</h6>
                                                </th>
                                                <th scope="col">
                                                    <h6>Amount</h6>
                                                </th>
                                                <th scope="col">
                                                    <h6></h6>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="product_name">C++ Program for Face Detection using OpenCV 1</td>
                                                <td>
                                                    <input type="text" name="" class="multiply_number" min="1" value="1" id="multiply_number_1" />
                                                    <a class="fill_btn_denger" id="fill_btn_denger_1"><i class="fas fa-minus"></i></a>
                                                    <a class="fill_btn_green" id="fill_btn_green_1"><i class="fas fa-plus"></i></a> &nbsp;
                                                </td>
                                                <td>
                                                    <span class="product_name font-20 mt--10" id="price_1" data-value="32640">
                                                        <strong>32,640/-</strong>
                                                    </span>
                                                </td>
                                                <td>
                                                    <a class="cancel_btn" id="cancel_btn_1">Cancel</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="product_name">C++ Program for Face Detection using OpenCV 2</td>
                                                <td>
                                                    <input type="text" name="" class="multiply_number" min="1" value="1" id="multiply_number_2" />
                                                    <a class="fill_btn_denger" id="fill_btn_denger_2"><i class="fas fa-minus"></i></a>&nbsp;
                                                    <a class="fill_btn_green" id="fill_btn_green_2"><i class="fas fa-plus"></i></a>
                                                </td>
                                                <td>
                                                    <span class="product_name font-20 mt--10" id="price_2" data-value="32640">
                                                        <strong>32,640/-</strong>
                                                    </span>
                                                    <p id="hidden_amount_1" hidden="">32640</p>
                                                </td>
                                                <td>
                                                    <a class="cancel_btn" id="cancel_btn_2">Cancel</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <hr style="border-bottom: 1px solid;">
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                    <div>
                                        <h5 class="mb-0 font-18 ml--25">The total amount of</h5>
                                        <sub class="ml--25">(including TAX)</sub>
                                    </div>

                                    <h4 id="total_amount">32,640/-</h4>
                                    <p id="hidden_amount_2" hidden="">32640</p>
                                </li>
                            </ul>

                            <a class="axil-button btn-solid float-right btn-extra02-color" href="#"><span class="button-text">Buy Now</span><span class="button-icon"></span></a>

                        </div>
                    </div>
                </div>
            </div>
            <!--Grid row-->
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <script>
        jQuery(document).ready(function() {
            var all_price = jQuery(".product_name");
            var total_amount = 0;
            for (var i = 1; i < all_price.length; i++) {
                if (i % 2 != 0) {
                    total_amount = total_amount + parseFloat(all_price[i].attributes['data-value'].value);
                }
            }
            jQuery("#total_amount")[0].innerHTML = total_amount.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",") + "/-";

            //After Click + button
            jQuery(".fill_btn_green").click(function() {

                var id = this.id.slice(-1);
                var current_qnt = jQuery('#multiply_number_' + id).val();
                if (current_qnt >= 1) {

                    var current_price = jQuery("#hidden_amount_" + id)[0].innerHTML;

                    current_qnt++;

                    document.getElementById("multiply_number_" + id).value = current_qnt;

                    var total_price = current_price * current_qnt;

                    jQuery("#price_" + id)[0].children[0].innerHTML = total_price.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",") + "/-";
                    jQuery("#price_" + id)[0].attributes['data-value'].value = total_price;

                    var all_price = jQuery(".product_name");
                    var total_amount = 0;
                    for (var i = 1; i < all_price.length; i++) {
                        if (i % 2 != 0) {
                            total_amount = total_amount + parseFloat(all_price[i].attributes['data-value'].value);
                        }
                    }

                    jQuery("#total_amount")[0].innerHTML = total_amount.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",") + "/-";
                }
            });

            //After Click - button
            jQuery(".fill_btn_denger").click(function() {
                var id = this.id.slice(-1);
                var current_qnt = jQuery('#multiply_number_' + id).val();
                if (current_qnt > 1) {
                    var current_price = jQuery("#hidden_amount_" + id)[0].innerHTML;
                    current_qnt--;

                    var total_price = current_price * current_qnt;
                    document.getElementById("multiply_number_" + id).value = current_qnt;

                    jQuery("#price_" + id)[0].children[0].innerHTML = total_price.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",") + "/-";

                    jQuery("#price_" + id)[0].attributes['data-value'].value = total_price;

                    var all_price = jQuery(".product_name");
                    var total_amount = 0;
                    for (var i = 1; i < all_price.length; i++) {
                        if (i % 2 != 0) {
                            total_amount = parseFloat(all_price[i].attributes['data-value'].value) + total_amount;
                        }
                    }

                    jQuery("#total_amount")[0].innerHTML = total_amount.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",") + "/-";
                } else {
                    current_qnt == 1;
                    document.getElementById("multiply_number_" + id).value = current_qnt;
                }
            });
        });

    </script>
    @endsection
