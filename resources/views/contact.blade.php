@extends('layout.layout')

@section('title','StudyEarth | Contact')

@section('content')
<!-- Start Breadcrumb Area -->
<div class="axil-breadcrumb-area breadcrumb-style-default pt--170 pb--70 theme-gradient">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner">
                    <ul class="axil-breadcrumb liststyle d-flex">
                        <li class="axil-breadcrumb-item"><a href="home-01.html">Home</a></li>
                        <li class="axil-breadcrumb-item active" aria-current="page">Contact</li>
                    </ul>
                    <h1 class="axil-page-title">Contact</h1>
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
                <div class="col-lg-6 col-md-12 col-xl-5 col-12">
                    <div class="contact-form-wrapper">
                        <!-- Start Contact Form -->
                        <div class="axil-contact-form contact-form-style-1">
                            <h3 class="title">Contact Form</h3>
                            <form id="contact-form" method="POST" action="{{ route('contact.details') }}">
                                @csrf
                                <div class="form-group bill {{ !is_null(old('con_name')) ? 'focused' : '' }}">
                                    <input type="text" name="con_name" value="{{ old('con_name') }}">
                                    <label>Name<span class="asterik">*</span></label>
                                    <span class="focus-border"></span>
                                    <x-alert type="con_name_error" />
                                </div>
                                <div class="form-group bill {{ !is_null(old('con_email')) ? 'focused' : '' }}">
                                    <input type="email" name="con_email" value="{{ old('con_email') }}">
                                    <label>Email<span class="asterik">*</span></label>
                                    <span class="focus-border"></span>
                                    <x-alert type="con_email_error" />
                                </div>
                                <div class="form-group bill {{ !is_null(old('con_mobile')) ? 'focused' : '' }}">
                                    <input type="tel" name="con_mobile" value="{{ old('con_mobile') }}">
                                    <label>Phone<span class="asterik">*</span></label>
                                    <span class="focus-border"></span>
                                    <x-alert type="con_mobile_error" />
                                </div>
                                <div class="form-group bill {{ !is_null(old('con_message')) ? 'focused' : '' }}">
                                    <input type="text" name="con_message" value="{{ old('con_message') }}">
                                    <label>Your message<span class="asterik">*</span></label>
                                    <span class="focus-border"></span>
                                    <x-alert type="con_message_error" />
                                </div>
                                <div class="form-group bill">
                                    <input type="submit" value="Send message">
                                    <p class="form-messege"></p>
                                    <span class="focus-border"></span>
                                </div>
                            </form>

                        </div>
                        <!-- End Contact Form -->
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-xl-6 offset-xl-1 col-12 mt_md--40 mt_sm--40">
                    <div class="axil-address-wrapper">
                        <!-- Start Single Address  -->
                        <div class="axil-address wow move-up">
                            <div class="inner">
                                <div class="icon">
                                    <i class="fas fa-phone" style="transform: rotate(90deg)"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">Phone</h4>
                                    <p>Our customer care is open from Mon-Fri, 10:00 am to 6:00 pm</p>
                                    <p><a class="axil-link" href="tel:1234567890">(123) 456 7890</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Address  -->
                        <!-- Start Single Address  -->
                        <div class="axil-address wow move-up mt--60 mt_sm--30 mt_md--30">
                            <div class="inner">
                                <div class="icon">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">Email</h4>
                                    <p>Our support team will get back to in 48-h during standard business hours.
                                    </p>
                                    <p><a class="axil-link" href="mailto:example@gmail.com">info@studyearth.co.in</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Address  -->
                    </div>
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
    <div class="modal fade  {{ session()->has('success_contact') ? 'show' : '' }}" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" {{ session()->has('success_contact') ? 'style=display:block' : 'style=display:none' }} style="display:block">
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
    </div>

</main>
@endsection
