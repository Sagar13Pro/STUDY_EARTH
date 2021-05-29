@php
use Illuminate\Support\Facades\Auth;
@endphp

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
                    @if (count($projectFetched) > 0 || count($courseFetched) > 0)
                    @if(!session()->has('session_email'))
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
                                    <div class="form-group col-lg-6 col-md-6 {{ is_null(old('addressInput')) ? '' : 'focused' }}">
                                        <input type="text" name="addressInput" value="{{ old('addressInput') }}">
                                        <label>Address<span class="asterik">*</span></label>
                                        <span class="focus-border"></span>
                                        <x-alert />
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 {{ is_null(old('birthdateInput')) ? '' : 'focused' }}">
                                        <input type="date" name="birthdateInput" value="{{ old('birthdateInput') }}">
                                        <label>Birth Date<span class="asterik">*</span></label>
                                        <span class="focus-border"></span>
                                        <x-alert />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group password_container col-lg-6 col-md-6 {{ is_null(old('password')) ? '' : 'focused' }}">
                                        <input type="password" id="Pass" name="passwordInput" placeholder="Password">
                                        <span class="input-group-btn" id="eyeSlash">
                                            <button class="btn btn-default reveal" onclick="visibility3()" type="button"><i class="fa fa-eye-slash" aria-hidden="true"></i></button>
                                        </span>
                                        <span class="input-group-btn" id="eyeShow" style="display: none;">
                                            <button class="btn btn-default reveal" onclick="visibility3()" type="button"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                        </span>
                                        <label>Password<span class="asterik">*</span></label>
                                        <span class="focus-border"></span>
                                        <x-alert type="password" />
                                    </div>
                                    <div class="form-group password_container col-lg-6 col-md-6">
                                        <input type="password" id="Pass_Confirm" name="confirmpasswordInput" placeholder="Confirm Password">
                                        <span class="input-group-btn" id="eyeSlashConfirm">
                                            <button class="btn btn-default reveal" onclick="visibility4()" type="button"><i class="fa fa-eye-slash" aria-hidden="true"></i></button>
                                        </span>
                                        <span class="input-group-btn" id="eyeShowConfirm" style="display: none;">
                                            <button class="btn btn-default reveal" onclick="visibility4()" type="button"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                        </span>
                                        <label>Confirm Password<span class="asterik">*</span></label>
                                        <span class="focus-border"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
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
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 16">
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
                                    <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                        <div>
                                            <h5 class="mb-0 font-18 ml--25">The total amount of</h5>
                                            <sub class="ml--25">(including TAX)</sub>
                                        </div>
                                        <h4 id="total_amount">{{ $projectFetched->pluck('projectPrice')->sum()+$courseFetched->pluck('coursePrice')->sum() }}/-</h4>
                                        <input class="d-none" type="text" name="amount" value="{{ $projectFetched->pluck('projectPrice')->sum()+$courseFetched->pluck('coursePrice')->sum()  }}">
                                    </li>
                                </ul>
                                <button type="button" class="axil-button btn-solid float-right btn-extra02-color buy-now-btn"><span class="button-text">Buy Now</span><span class="button-icon"></span></button>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="container" align="center" style="max-width: 700px;">
                        <div class="row">
                            <!-- <img class="img-fluid rounded mx-auto d-block img-thumbnail" src="{{ asset('assets/images/CartEmpty.jpg') }}" alt=""> -->
                            <h3 class="mt-5 mx-auto">Looks like the cart is empty!</h3>
                            <img class="mx-auto" src="{{ asset('assets/images/icons/empty-cart.svg') }}" width="250" height="200" alt="">
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
                        if (element.nextElementSibling.nextElementSibling.nextElementSibling === null) {
                            let divElem = document.createElement('div');
                            divElem.setAttribute('class', ' tracker prompt-error-' + index);
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
                if ($('.tracker').length > 0) {
                    $('.tracker').remove()
                }
            }, 10000);
        });

    </script>
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
                //console.log(id);
                url = url.replace(':id', id);
                $('#cancel-product-form').attr('action', url).submit();
            });
        });

        function visibility3() {
            var x = document.getElementById('Pass');
            if (x.type === 'password') {
                x.type = "text";
                $('#eyeShow').show();
                $('#eyeSlash').hide();
            } else {
                x.type = "password";
                $('#eyeShow').hide();
                $('#eyeSlash').show();
            }
        }

        function visibility4() {
            var x = document.getElementById('Pass_Confirm');
            if (x.type === 'password') {
                x.type = "text";
                $('#eyeShowConfirm').show();
                $('#eyeSlashConfirm').hide();
            } else {
                x.type = "password";
                $('#eyeShowConfirm').hide();
                $('#eyeSlashConfirm').show();
            }
        }

    </script>
    @endsection
