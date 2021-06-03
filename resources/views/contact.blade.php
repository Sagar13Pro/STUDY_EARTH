@extends('layout.layout')

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
                            <h3 class="title">Get a free Keystroke quote now</h3>
                            <form id="contact-form" method="POST" action="{{ route('contact.details') }}">
                                @csrf
                                <div class="form-group bill">
                                    <input type="text" name="con_name" required>
                                    <label>Name<span class="asterik">*</span></label>
                                    <span class="focus-border"></span>
                                        <x-alert />
                                </div>
                                <div class="form-group bill">
                                    <input type="email" name="con_email" required>
                                    <label>Email<span class="asterik">*</span></label>
                                    <span class="focus-border"></span>
                                        <x-alert />
                                </div>
                                <div class="form-group bill">
                                    <input type="tel" name="con_mobile"  pattern="[0-9]{10}" required>
                                    <label>Phone<span class="asterik">*</span></label>
                                    <span class="focus-border"></span>
                                        <x-alert />
                                </div>
                                <div class="form-group bill">
                                    <input type="text" name="con_message" required>
                                    <label>Your message<span class="asterik">*</span></label>
                                    <span class="focus-border"></span>
                                        <x-alert />
                                </div>
                                <div class="form-group bill">
                                    <input type="submit" value="Send message">
                                    <p class="form-messege"></p>
                                    <span class="focus-border"></span>
                                        <x-alert />
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
                                    <i class="fas fa-phone"></i>
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
    <!-- End Contact Area  -->

    <!-- Start Office Location  -->
    {{-- <div class="axil-office-location-area ax-section-gap bg-color-lightest">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="sub-title extra04-color wow" data-splitting>who we are</span>
                        <h2 class="title wow mb--0" data-splitting>Our office</h2>
                    </div>
                </div>
            </div>
            <div class="row mt--30">

                <!-- Start Single Location  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="axil-office-location mt--30 wow move-up">
                        <div class="thumbnail">
                            <img src="assets/images/inner-image/contact/contact-01.jpg" alt="Location Images">
                        </div>
                        <div class="content">
                            <h4 class="title">Virginia-HQ</h4>
                            <p>435 Pouros Locks <br /> United States</p>
                            <a class="axil-button btn-transparent" href="#"><span class="button-text">View on
                                    Map</span><span class="button-icon"></span></a>
                        </div>
                    </div>
                </div>
                <!-- End Single Location  -->

                <!-- Start Single Location  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="axil-office-location mt--30 wow move-up">
                        <div class="thumbnail">
                            <img src="assets/images/inner-image/contact/contact-02.jpg" alt="Location Images">
                        </div>
                        <div class="content">
                            <h4 class="title">Nevada</h4>
                            <p>46 Watsica Creek Suite 071 <br /> United States</p>
                            <a class="axil-button btn-transparent" href="#"><span class="button-text">View on
                                    Map</span><span class="button-icon"></span></a>
                        </div>
                    </div>
                </div>
                <!-- End Single Location  -->

                <!-- Start Single Location  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="axil-office-location mt--30 wow move-up">
                        <div class="thumbnail">
                            <img src="assets/images/inner-image/contact/contact-01.jpg" alt="Location Images">
                        </div>
                        <div class="content">
                            <h4 class="title">Columbia</h4>
                            <p>7140 Wehner Tunnel <br /> Washington, D.C</p>
                            <a class="axil-button btn-transparent" href="#"><span class="button-text">View on
                                    Map</span><span class="button-icon"></span></a>
                        </div>
                    </div>
                </div>
                <!-- End Single Location  -->

                <!-- Start Single Location  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="axil-office-location mt--30 wow move-up">
                        <div class="thumbnail">
                            <img src="assets/images/inner-image/contact/contact-01.jpg" alt="Location Images">
                        </div>
                        <div class="content">
                            <h4 class="title">New Mexico</h4>
                            <p>10 Maggie Valleys , <br /> United States</p>
                            <a class="axil-button btn-transparent" href="#"><span class="button-text">View on
                                    Map</span><span class="button-icon"></span></a>
                        </div>
                    </div>
                </div>
                <!-- End Single Location  -->
            </div>
        </div>
    </div> --}}
    <!-- End Office Location  -->


</main>
<!-- <script type="text/javascript">
    $(document).ready(function() {
        let hasError = null;
        const addErrorElement = () => {
            let positionSpan = document.querySelectorAll('.bill .focus-border');
            let inputs_field = document.querySelectorAll('.bill input');
            inputs_field.forEach((element, index) => {
                if (element.value.length === 0) {
                    console.log(element)
                    if (element.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling === null) {
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
            } else if ("{{ session()->has('session_email') }}") {
                hasError = true;
            }
        }
    });
</script> -->
@endsection
