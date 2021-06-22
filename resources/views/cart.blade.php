@php
use Illuminate\Support\Facades\Auth;
@endphp

@extends('layout.layout')

@section('title','StudyEarth | Cart')

@section('content')
<div class="main-wrapper">
    <div class="axil-contact-form ax-section-gap theme-gradient">
        <div class="container">
            <x-alert type="message" />
            <form id="billing-details-form" method="post" action="{{ route('cart.checkout') }}">
                @csrf
                <div class="row mt--80">
                    @if (count($projectFetched) > 0 || count($courseFetched) > 0)
                    <div class="col-xl-6" {{ session()->has('session_email') ? "style=display:none": 'style=display:block' }}>
                        <div class="card card-user">
                            <div class="card-body">
                                <h4>Billing Details<b style="color: #f00">*</b></h4>
                                <div class="row">
                                    <div class="form-group bill col-lg-6 col-md-6 {{ is_null(old('fnameInput')) ? '' : 'focused' }}">
                                        <input type="text" name="fnameInput" value="{{ old('fnameInput') }}">
                                        <label>First name<span class="asterik">*</span></label>
                                        <span class="focus-border"></span>
                                        <x-alert type="fname_error" />
                                    </div>

                                    <div class="form-group bill col-lg-6 col-md-6 {{ is_null(old('lnameInput')) ? '' : 'focused' }}">
                                        <input type="text" name="lnameInput" value="{{ old('lnameInput') }}">
                                        <label>Last name<span class="asterik">*</span></label>
                                        <span class="focus-border"></span>
                                        <x-alert type="lname_error" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group bill col-lg-6 col-md-6 {{ is_null(old('emailInput')) ? '' : 'focused' }}">
                                        <input type="email" name="emailInput" value="{{ old('emailInput') }}">
                                        <label>name@example.com<span class="asterik">*</span></label>
                                        <span class="focus-border"></span>
                                        <x-alert type="mail_error" />
                                    </div>
                                    <div class="form-group bill col-lg-6 col-md-6 {{ is_null(old('mobileNoInput')) ? '' : 'focused' }}">
                                        <input type="text" name="mobileNoInput" value="{{ old('mobileNoInput') }}">
                                        <label>Mobile<span class="asterik">*</span></label>
                                        <span class="focus-border"></span>
                                        <x-alert type="mobileNo_error" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group bill col-lg-6 col-md-6 {{ is_null(old('addressInput')) ? '' : 'focused' }}">
                                        <input type="text" name="addressInput" value="{{ old('addressInput') }}">
                                        <label>Address<span class="asterik">*</span></label>
                                        <span class="focus-border"></span>
                                        <x-alert type="address_error" />
                                    </div>
                                    <div class="form-group bill col-lg-6 col-md-6 {{ is_null(old('birthdateInput')) ? '' : 'focused' }}">
                                        <input type="text" name="birthdateInput" value="{{ old('birthdateInput') }}" onfocus="(this.type = 'date')" onblur="(this.type = 'text')">
                                        <label>Birth Date<span class="asterik">*</span></label>
                                        <span class="focus-border"></span>
                                        <x-alert type="dob_error" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group bill password_container col-lg-6 col-md-6 d-flex flex-column {{ is_null(old('password')) ? '' : 'focused' }}">
                                        <input type="password" id="Pass" name="passwordInput">
                                        <label>Password<span class="asterik">*</span></label>
                                        <span class="focus-border"></span>
                                        <x-alert type="passwd" />
                                        <div class="custom-toast fade mt-3 mx-0">
                                            <div class="custom-toast-header">
                                                Your passsword must have:
                                            </div>
                                            <div class="custom-toast-body">
                                                <span class="pass-validator invalid">
                                                    <i class="fas fa-check-circle pass-validator-icon characters"></i>
                                                    <span class="pass-validator-text characters">8 or more characters</span>
                                                </span>
                                                <span class="pass-validator invalid">
                                                    <i class="fas fa-check-circle pass-validator-icon lower-upper"></i>
                                                    <span class="pass-validator-text lower-upper">upper or lowercase letters</span>
                                                </span>
                                                <span class="pass-validator invalid">
                                                    <i class="fas fa-check-circle pass-validator-icon atleast-number"></i>
                                                    <span class="pass-validator-text atleast-number">at least one number</span>
                                                </span>
                                            </div>
                                            <div class="custom-progress-container">
                                                <div class="custom-progress-header">Password Strength: <span class="status"></span></div>
                                                <div class="custom-progress">
                                                    <div class="custom-progress-bar" style="width:0%"></div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="form-group bill cpassword_container col-lg-6 col-md-6">
                                        <input type="password" id="Pass_Confirm" name="confirmpasswordInput">
                                        <label>Confirm Password<span class="asterik">*</span></label>
                                        <span class="focus-border"></span>
                                        <x-alert type="cpasswd" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="{{ session()->has('session_email') ? 'col-xl-12' : 'col-xl-6' }}">
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
                                                        <h6>Amount</h6>
                                                    </th>
                                                    <th scope="col">
                                                        <h6>Action</h6>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($projectFetched as $key => $item )
                                                <tr>
                                                    <td class="product_name">{{ $item->projectTitle }}</td>
                                                    <td>
                                                        <span class="product_name font-16 mt--10">
                                                            <strong>{{ $item->projectPrice }}/-</strong>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <a class="cancel_btn project_cancel" id="cancel_btn_{{ $key }}" data-id="{{ $item->id }}">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M10,2 C10.5522847,2 11,2.44771525 11,3 L11,4 L14,4 C14.5522847,4 15,4.44771525 15,5 C15,5.55228475 14.5522847,6 14,6 L13,6 L13,11 C13,12.6568542 11.8807119,14 10.5,14 L5.5,14 C4.11928813,14 3,12.6568542 3,11 L3,6 L2,6 C1.44771525,6 1,5.55228475 1,5 C1,4.44771525 1.44771525,4 2,4 L5,4 L5,3 C5,2.44771525 5.44771525,2 6,2 L10,2 Z M6,6 C5.48716416,6 5.06449284,6.38604019 5.00672773,6.88337887 L5,7 L5,11 C5,11.5522847 5.44771525,12 6,12 C6.51283584,12 6.93550716,11.6139598 6.99327227,11.1166211 L7,11 L7,7 C7,6.44771525 6.55228475,6 6,6 Z M10,6 C9.48716416,6 9.06449284,6.38604019 9.00672773,6.88337887 L9,7 L9,11 C9,11.5522847 9.44771525,12 10,12 C10.5128358,12 10.9355072,11.6139598 10.9932723,11.1166211 L11,11 L11,7 C11,6.44771525 10.5522847,6 10,6 Z" />
                                                            </svg>
                                                        </a>
                                                        <form id="remove-from-cart-{{ $item->id }}" class="hide" action="{{ route('cart.remove.product') }}" method="POST">
                                                            @csrf
                                                            <input type="text" class="hide" name="id" value="{{ $item->id }}">
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @foreach ($courseFetched as $key => $item )
                                                <tr>
                                                    <td class="product_name">{{ $item->courseTitle }}</td>
                                                    <td>
                                                        <span class="product_name font-20 mt--10">
                                                            <strong>{{ $item->coursePrice }}/-</strong>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <a class="cancel_btn course_cancel" id="cancel_btn_{{ $key }}" data-id="{{ $item->id }}">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M10,2 C10.5522847,2 11,2.44771525 11,3 L11,4 L14,4 C14.5522847,4 15,4.44771525 15,5 C15,5.55228475 14.5522847,6 14,6 L13,6 L13,11 C13,12.6568542 11.8807119,14 10.5,14 L5.5,14 C4.11928813,14 3,12.6568542 3,11 L3,6 L2,6 C1.44771525,6 1,5.55228475 1,5 C1,4.44771525 1.44771525,4 2,4 L5,4 L5,3 C5,2.44771525 5.44771525,2 6,2 L10,2 Z M6,6 C5.48716416,6 5.06449284,6.38604019 5.00672773,6.88337887 L5,7 L5,11 C5,11.5522847 5.44771525,12 6,12 C6.51283584,12 6.93550716,11.6139598 6.99327227,11.1166211 L7,11 L7,7 C7,6.44771525 6.55228475,6 6,6 Z M10,6 C9.48716416,6 9.06449284,6.38604019 9.00672773,6.88337887 L9,7 L9,11 C9,11.5522847 9.44771525,12 10,12 C10.5128358,12 10.9355072,11.6139598 10.9932723,11.1166211 L11,11 L11,7 C11,6.44771525 10.5522847,6 10,6 Z" />
                                                            </svg></a>

                                                        <form id="remove-from-cart-{{ $item->id }}" class="hide" action="{{ route('course_cart.remove.product') }}" method="POST">
                                                            @csrf
                                                            <input type="text" class="hide" name="id" value="{{ $item->id }}">
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <hr style="border-bottom: 1px solid;">
                                    <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3 checkOut">
                                        <div>
                                            <h5 class="mb-0 font-18 ml--25">The total amount of</h5>
                                            <sub class="ml--25">(including TAX)</sub>
                                        </div>
                                        <h4 id="total_amount">{{ $projectFetched->pluck('projectPrice')->sum()+$courseFetched->pluck('coursePrice')->sum() }}/-</h4>
                                        <input id="amount" class="d-none" type="hidden" name="amount" value="" contenteditable="false">
                                    </li>
                                </ul>
                                <button type="submit" class="axil-button btn-solid float-right btn-extra02-color buy-now-btn"><span class="button-text">Buy Now</span><span class="button-icon"></span></button>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="container" align="center" style="max-width: 700px;">
                        <div class="row">
                            <h3 class="mt-5 mx-auto">Looks like the cart is empty!</h3>
                            <img class="mx-auto" src="{{ asset('assets/images/icons/empty-cart.svg') }}" width="250" height="200" alt="Empty Cart">
                        </div>
                    </div>
                    @endif

                </div>
            </form>
            <!--Grid row-->
            {{-- Cancel-product-form --}}
            <form id="cancel-product-form" action="" method="POST">
                @csrf
            </form>
        </div>
    </div>


</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
{{-- Script for Cancel --}}
<script>
    $(document).ready(function() {
        $('.project_cancel').click(function() {
            const id = $(this).data('id');
            let url = "{{ route('cart.remove.product', ':id') }}";
            url = url.replace(':id', id);
            $('#cancel-product-form').attr('action', url).submit();
        });
    });
    $(document).ready(function() {
        $('.course_cancel').click(function() {
            const id = $(this).data('id');
            let url = "{{ route('course_cart.remove.product', ':id') }}";
            url = url.replace(':id', id);
            $('#cancel-product-form').attr('action', url).submit();
        });
        $('#billing-details-form').submit(function() {
            $('#amount').attr('value', "{{ $projectFetched->pluck('projectPrice')->sum()+$courseFetched->pluck('coursePrice')->sum()  }}");
        });
    });
    $(document).ready(function() {
        let pass = document.getElementById('Pass');
        pass.addEventListener("focus", function() {
            $('.custom-toast').addClass('show');
        });
        pass.addEventListener("blur", function() {
            $('.custom-toast').removeClass('show');
        })
        pass.addEventListener("keyup", function() {
            if (pass.value.match(/[a-z]/g) && pass.value.match(/[A-Z]/g)) {
                $('.lower-upper').addClass("valid");
                $('.lower-upper').removeClass("invalid");
            } else {
                $('.lower-upper').addClass("invalid");
                $('.lower-upper').removeClass("valid");
            }
            if (pass.value.match(/[0-9]/g)) {
                $('.atleast-number').addClass("valid");
                $('.atleast-number').removeClass("invalid");
            } else {
                $('.atleast-number').addClass("invalid");
                $('.atleast-number').removeClass("valid");
            }
            if (pass.value.length >= 8) {
                $('.characters').addClass("valid");
                $('.characters').removeClass("invalid");
            } else {
                $('.characters').addClass("invalid");
                $('.characters').removeClass("valid");
            }
            progressBar();
        });
        const progressBar = () => {
            let bar = $('.custom-progress-bar');
            let status = $('.status');

            if (pass.value.length >= 1 && pass.value.length < 8) {
                bar.css('background', '#ff0000');
                status.css('color', '#ff0000');
                bar.css('width', '30%');
                status.text('weak')
            }
            if (pass.value.match(/[a-z]/g) && pass.value.match(/[A-Z]/g) && pass.value.match(/[0-9]/g) && pass.value.length >= 8) {
                bar.css('background', '#ff8c00')
                status.css('color', '#ff8c00')
                bar.css('width', '60%');
                status.text('moderate')
            } else {
                bar.css('background', '#ff0000')
                status.css('color', '#ff0000')
                bar.css('width', '30%');
                status.text('weak');
            }
            if (pass.value.match(/[a-z]/g) && pass.value.match(/[A-Z]/g) && pass.value.match(/[0-9]/g) && pass.value.match(/['!@#$%^&*()']/g) && pass.value.length >= 8) {
                bar.css('background', '#09ae00')
                status.css('color', '#09ae00')
                bar.css('width', '90%');
                status.text('strong')
            }
            if (pass.value.match(/[a-z]/g) && pass.value.match(/[A-Z]/g) && pass.value.match(/[0-9]/g) && pass.value.match(/['!@#$%^&*()']/g) && pass.value.length >= 16) {
                bar.css('background', '#09ae00')
                status.css('color', '#09ae00')
                bar.css('width', '100%');
                status.text('strong')
            }
        }
    });

</script>

@endsection
