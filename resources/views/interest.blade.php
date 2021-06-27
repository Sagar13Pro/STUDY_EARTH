@extends('layout.layout')

@section('title','StudyEarth | Interest')

@section('content')

<!-- Start Breadcrumb Area -->
<div class="axil-breadcrumb-area breadcrumb-style-default pt--170 pb--70 theme-gradient">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner">
                    <ul class="axil-breadcrumb liststyle d-flex">
                        <li class="axil-breadcrumb-item"><a href="/">Home</a></li>
                        <li class="axil-breadcrumb-item active" aria-current="page">Interest</li>
                    </ul>
                    <h1 class="axil-page-title">Interest</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-images">
        <i class="shape shape-1 icon icon-bcm-01"></i>
        <i class="shape shape-2 icon icon-bcm-02"></i>
        <i class="shape shape-3 icon icon-bcm-03"></i>
    </div>
</div>
<!-- End Breadcrumb Area -->

<main class="main-wrapper">
    <!-- Start Contact Area  -->
    <div class="axil-contact-area axil-shape-position ax-section-gap bg-color-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xl-3 col-12">
                </div>
                <div class="col-lg-6 col-md-12 col-xl-6 col-12">
                    <div class="interest-form-wrapper">
                        <!-- Start Contact Form -->
                        <div class="card card-user">
                            <div class="card-body">
                                <form id="interest-form" method="POST" action="{{ route('interest.details') }}">
                                    @csrf
                                    <h4>Details<b style="color: #f00">*</b></h4>
                                    <div class="row">
                                        <div class="form-group bill col-lg-6 col-md-6 {{ is_null(old('interestfnameInput')) ? '' : 'focused' }}">
                                            <input type="text" name="interestfnameInput" value="{{ old('interestfnameInput') }}">
                                            <label>First name<span class="asterik">*</span></label>
                                            <span class="focus-border"></span>
                                            <x-alert type="interestfname_error" />
                                        </div>

                                        <div class="form-group bill col-lg-6 col-md-6 {{ is_null(old('interestlnameInput')) ? '' : 'focused' }}">
                                            <input type="text" name="interestlnameInput" value="{{ old('interestlnameInput') }}">
                                            <label>Last name<span class="asterik">*</span></label>
                                            <span class="focus-border"></span>
                                            <x-alert type="interestlname_error" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group bill col-lg-6 col-md-6 {{ is_null(old('interestemailInput')) ? '' : 'focused' }}">
                                            <input type="email" name="interestemailInput" value="{{ old('interestemailInput') }}">
                                            <label>name@example.com<span class="asterik">*</span></label>
                                            <span class="focus-border"></span>
                                            <x-alert type="interestmail_error" />
                                        </div>
                                        <div class="form-group bill col-lg-6 col-md-6 {{ is_null(old('interestmobileNoInput')) ? '' : 'focused' }}">
                                            <input type="text" name="interestmobileNoInput" value="{{ old('interestmobileNoInput') }}">
                                            <label>Mobile<span class="asterik">*</span></label>
                                            <span class="focus-border"></span>
                                            <x-alert type="interestmobileNo_error" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group bill col-lg-6 col-md-6 {{ is_null(old('interestaddressInput')) ? '' : 'focused' }}">
                                            <input type="text" name="interestaddressInput" value="{{ old('interestaddressInput') }}">
                                            <label>Address<span class="asterik">*</span></label>
                                            <span class="focus-border"></span>
                                            <x-alert type="interestaddress_error" />
                                        </div>
                                        <div class="form-group bill col-lg-6 col-md-6 {{ is_null(old('interestbirthdateInput')) ? '' : 'focused' }}">
                                            <input type="text" name="interestbirthdateInput" value="{{ old('interestbirthdateInput') }}" onfocus="(this.type = 'date')" onblur="(this.type = 'text')">
                                            <label>Birth Date<span class="asterik">*</span></label>
                                            <span class="focus-border"></span>
                                            <x-alert type="interestdob_error" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group bill col-lg-12 col-md-12 {{ is_null(old('interestpurposeInput')) ? '' : 'focused' }}">
                                            <input type="text" name="interestpurposeInput" value="{{ old('purposeInput') }}">
                                            <label>What is the Purpose for?<span class="asterik">*</span></label>
                                            <span class="focus-border"></span>
                                            <x-alert type="interestpurpose_error" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group bill col-lg-12 col-md-12 {{ is_null(old('interestamountInput')) ? '' : 'focused' }}">
                                            <input type="number" name="interestamountInput" value="{{ old('interestamountInput') }}">
                                            <label>Amount<span class="asterik">*</span></label>
                                            <span class="focus-border"></span>
                                            <x-alert type="interestamount_error" />
                                        </div>
                                    </div>
                                    <div class="form-group bill">
                                        <input type="submit" value="Send">
                                        <p class="form-messege"></p>
                                        <span class="focus-border"></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- End Contact Form -->
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-xl-3 col-12">
                </div>
            </div>
        </div>
        <div class="shape-group">
            <div class="shape shape-01">
                <i class="icon icon-contact-01"></i>
            </div>
            <div class="shape shape-02">
                <i class="icon icon-contact-02"></i>
            </div>
            <div class="shape shape-03">
                <i class="icon icon-contact-03"></i>
            </div>
        </div>
    </div>
    {{-- <div class="modal fade  {{ session()->has('success_interest') ? 'show' : '' }}" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" {{ session()->has('success_interest') ? 'style=display:block' : 'style=display:none' }} style="display:block">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Info</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">&times;</button>
            </div>
            <div class="modal-body">
                <x-alert type="contact_details" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-close" data-dismiss="modal">Close</button>
            </div>
            <script>
                $('.btn-close').click(function() {
                    $('#exampleModal').fadeOut(1000);
                })

            </script>
        </div>
    </div>
    </div> --}}

</main>
@endsection
