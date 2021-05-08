@extends('layout.layout')

@section('title','StudyEarth - Paid Projects')

@section('content')

<div class="main-wrapper">
    <div class="axil-contact-form ax-section-gap theme-gradient">
        <div class="container">
            <x-alert type="message" />
            <form id="billing-details-form" method="post">
                @csrf
                <div class="row mt--80">
                    <div class="col-xl-6">
                        <div class="card card-user">
                            <div class="card-body">
                                <h4>Billing Details<b style="color: #f00">*</b></h4>
                                <div class="row">
                                    <div class="form-group col-lg-6 col-md-6 {{ is_null(old('fnameInput')) ? '' : 'focused' }}">
                                        <input type="text" name="fnameInput" value="{{ old('fnameInput') }}">
                                        <label>First name<span class="asterik">*</span></label>
                                        <span class="focus-border"></span>
                                        <x-alert />
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 {{ is_null(old('lnameInput')) ? '' : 'focused' }}">
                                        <input type="text" name="lnameInput" value="{{ old('lnameInput') }}">
                                        <label>Last name<span class="asterik">*</span></label>
                                        <span class="focus-border"></span>
                                        <x-alert />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6 col-md-6 {{ is_null(old('emailInput')) ? '' : 'focused' }}">
                                        <input type="email" name="emailInput" value="{{ old('emailInput') }}">
                                        <label>Email I'd<span class="asterik">*</span></label>
                                        <span class="focus-border"></span>
                                        <x-alert type="email" />
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 {{ is_null(old('mobileNoInput')) ? '' : 'focused' }}">
                                        <input type="text" name="mobileNoInput" value="{{ old('mobileNoInput') }}">
                                        <label>Mobile<span class="asterik">*</span></label>
                                        <span class="focus-border"></span>
                                        <x-alert type="mobileNo" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-12 col-md-12 {{ is_null(old('addressInput')) ? '' : 'focused' }}">
                                        <input type="text" name="addressInput" value="{{ old('addressInput') }}">
                                        <label>Address<span class="asterik">*</span></label>
                                        <span class="focus-border"></span>
                                        <x-alert />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card bill-details">
                            <div class="card-body">
                                @if (count($projectFetched) > 0)
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
                                                        <h6>Amount</h6>
                                                    </th>
                                                    <th scope="col">
                                                        <h6></h6>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($projectFetched as $key => $item )
                                                <tr>
                                                    <td class="product_name">{{ $item->projectTitle }}</td>

                                                    <td>
                                                        <span class="product_name font-20 mt--10">
                                                            <strong>{{ $item->projectPrice }}/-</strong>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <a class="cancel_btn" id="cancel_btn_1">Cancel</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <hr style="border-bottom: 1px solid;">
                                    <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                        <div>
                                            <h5 class="mb-0 font-18 ml--25">The total amount of</h5>
                                            <sub class="ml--25">(including TAX)</sub>
                                        </div>
                                        <h4 id="total_amount">{{ $projectFetched->pluck('projectPrice')->sum() }}/-</h4>
                                        <input class="d-none" type="text" name="amount" value="{{ $projectFetched->pluck('projectPrice')->sum() }}">
                                    </li>
                                </ul>
                                <button type="button" class="axil-button btn-solid float-right btn-extra02-color buy-now-btn"><span class="button-text">Buy Now</span><span class="button-icon"></span></button>
                                @else
                                <div class="container">
                                    <div class="row">
                                        <img class="img-fluid rounded mx-auto d-block img-thumbnail" src="{{ asset('assets/images/CartEmpty.jpg') }}" alt="">
                                        <h3 class="mt-5 mx-auto">Looks like the cart is empty!</h3>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!--Grid row-->
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            let hasError = null;
            const addErrorElement = () => {
                let positionSpan = document.querySelectorAll('.form-group .focus-border');
                let inputs_field = document.querySelectorAll('.form-group input');
                inputs_field.forEach((element, index) => {
                    if (element.value.length === 0) {
                        console.log(element.nextElementSibling.nextElementSibling.nextElementSibling)

                        if (element.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling === null) {
                            let divElem = document.createElement('div');
                            divElem.setAttribute('class', ' tracker prompt-error-' + index);
                            divElem.style.cssText = "margin: 5px 0;color: #ff0000";
                            let divText = document.createTextNode('This is required.');
                            divElem.appendChild(divText);
                            positionSpan[index].insertAdjacentElement('afterend', divElem);
                            hasError = false;
                        }
                    } else {
                        $('.prompt-error-' + index).remove();
                    }
                });
                let hasErrorCount = document.querySelectorAll('div .tracker').length;
                if (hasErrorCount === 0) {
                    hasError = true;
                }
            }
            $('.buy-now-btn').click(function() {
                addErrorElement();
                if (hasError) {
                    $('#billing-details-form').attr('action', "{{ route('cart.checkout') }}")
                    $('#billing-details-form').submit();
                }
            });
            setInterval(() => {
                if ($('.alert').length > 0) {
                    $('.alert').remove()
                }
            }, 10000);
        });

    </script>
    {{-- <script>
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

    </script> --}}
    @endsection
