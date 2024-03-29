@extends('layout.layout')

@section('title','StudyEarth | Courses')

@section('content')
<div class="main-wrapper">
    <!-- Start Breadcrumb Area -->
    <div class="axil-breadcrumb-area breadcrumb-style-2 single-service pt--170 pb--70 theme-gradient">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-2 order-lg-1 mt_md--30 mt_sm--20">
                    <div class="inner">
                        @if (!is_null($coursesImage))
                        <img src="{{ asset('assets/images/icons/Course_icons/'. $coursesImage) }}" style="max-width: 200px;">
                        @endif
                        <h2 class="title">{{ $langName }}- Courses</h2>
                        <!-- <p>We have list of free projects in <code style="font-size: 24px;">c++</code>. </p> -->
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="thumbnail text-left text-lg-right">
                        <div class="image-group">
                            <img class="image-1 paralax-image" src="{{ asset('assets/images/slider/single-service-02.png') }}" alt="Slider images">
                            <img class="image-2 paralax-image" src="{{ asset('assets/images/slider/single-service-01.svg') }}" alt="Slider images">
                        </div>
                        <div class="shape-group">
                            <div class="shape shape-1">
                                <i class="icon icon-breadcrumb-1"></i>
                            </div>
                            <div class="shape shape-2">
                                <i class="icon icon-breadcrumb-2"></i>
                            </div>
                            <div class="shape shape-3 customOne">
                                <i class="icon icon-breadcrumb-3"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->



    <!-- Start Working Process  -->
    <div class="axil-working-process-area ax-section-gap theme-gradient-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    @if (count($Courses) > 0)
                    @foreach ($Courses as $key => $item)
                    @if ($key % 2 == 0)
                    <!-- Start Working Process ODD ONE -->
                    <div class="axil-working-process mb--100 mb_md--50 mb_sm--40">
                        <div class="thumbnail">
                            <div class="image paralax-image">
                                <img src="{{ asset('assets/images/process/9858_.jpg') }}" alt="Process Images">
                            </div>
                        </div>
                        <!-- <img src="assets/images/process/9858.jpg" alt="Process Images"> -->
                        <div class="content">
                            <div class="inner">
                                <div class="section-title">
                                    @if (!is_null($item->tag_1))
                                    <span class="sub-title extra04-color">{{ $item->tag_1 }}</span>
                                    @endif
                                    @if (!is_null($item->tag_2))
                                    <span class="sub-title extra04-color">{{ $item->tag_2 }}</span>
                                    @endif
                                    <h3 class="title">{{ $item->courseTitle }}</h3>
                                    <div id="description">
                                        <p class="subtitle-2 show-less" id={{ $key }}>
                                            {{ $item->courseContent }}
                                            <div class="show-more-btn hide" id="btn-container-{{ $key }}">
                                                <h6 type="button" id="showBtn-{{ $key }}" class="showBtn" data-id="{{ $key }}">Read More</h6>
                                            </div>
                                        </p>
                                        <form action="{{ $key }}"></form>
                                    </div>
                                    <div class="pricing-details">
                                        <h3 class="mt--20 price-text"><img src="{{ asset('assets/images/icons/rupee.svg') }}" class="rupee" /><img src="{{ asset('assets/images/icons/rupee-28.svg') }}" class="rupee-alt" />{{ $item->coursePrice }}/-
                                    </div>
                                    <button type="button" class="axil-button btn-large btn-transparent mt--20 add-to-cart" data-product-id={{ $item->id }}>
                                        <span class="button-text">Add To Cart</span><span class="button-icon"></span>
                                    </button>
                                    <form id="add-to-cart-form-{{ $item->id }}" class="hide" action="{{ route('course_cart.add.product') }}" method="POST">
                                        @csrf
                                        <input type="text" name="id" value="{{ $item->id }}">
                                    </form>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Working Process  -->
                    @else
                    <!-- Start Working Process EVEN ODD -->
                    <div class="axil-working-process mb--100 text-left mb_md--50 mb_sm--40">
                        <div class="content order-2 order-lg-1">
                            <div class="inner">
                                <div class="section-title">
                                    @if (!is_null($item->tag_1))
                                    <span class="sub-title extra04-color">{{ $item->tag_1 }}</span>
                                    @endif
                                    @if (!is_null($item->tag_2))
                                    <span class="sub-title extra04-color">{{ $item->tag_2 }}</span>
                                    @endif
                                    <h3 class="title">{{ $item->courseTitle }}</h3>
                                    <div id="description">
                                        <p class="subtitle-2 show-less" id={{ $key }}>
                                            {{ $item->coursetContent }}
                                            <div class="show-more-btn hide" id="btn-container-{{ $key }}">
                                                <h6 type="button" id="showBtn-{{ $key }}" class="showBtn" data-id="{{ $key }}">Read More</h6>
                                            </div>
                                        </p>
                                    </div>
                                    <div class="pricing-details">
                                        <h3 class="mt--20 price-text"><img src="{{ asset('assets/images/icons/rupee.svg') }}" class="rupee" /><img src="{{ asset('assets/images/icons/rupee-28.svg') }}" class="rupee-alt" />{{ $item->coursePrice }}/-
                                    </div>
                                    <button type="button" class="axil-button btn-large btn-transparent mt--20 add-to-cart" data-product-id={{ $item->id }}>
                                        <span class="button-text">Add To Cart</span><span class="button-icon"></span>
                                    </button>
                                    <form id="add-to-cart-form-{{ $item->id }}" class="hide" action="{{ route('course_cart.add.product') }}" method="POST">
                                        @csrf
                                        <input type="text" name="id" value="{{ $item->id }}">
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="thumbnail order-1 order-lg-2">
                            <div class="image paralax-image">
                                <img src="{{ asset('assets/images/process/process-02.jpg') }}" alt="Process Images">
                            </div>
                        </div>
                    </div>
                    <!-- End Working Process  -->
                    @endif
                    @endforeach
                    @else
                    <div>No Course Available.</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- End Working Process  -->
</div>

<!-- Model Area Start-->
<div class="modal fade bs-example-modal-lg" id="confirmation-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center font-18">
                <h4 class="padding-top-30 mb-30 weight-500">C++ Program for Face Detection using OpenCV</h4>
                <hr>
                <div class="row">
                    <div class="col-lg-12">
                        <h5>Requirements for running the program:</h5>
                        <p>1) OpenCV must be installed on the local machine.</p>
                        <p>1) OpenCV must be installed on the local machine.</p>
                        <p>1) OpenCV must be installed on the local machine.</p>
                        <p>1) OpenCV must be installed on the local machine.</p>
                        <p>1) OpenCV must be installed on the local machine.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade {{ session()->has('info') ? 'show' : '' }}" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" {{ session()->has('info') ? 'style=display:block' : 'style=display:none' }}>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Info</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">&times;</button>
            </div>
            <div class="modal-body">
                <x-alert type="message" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-close" data-dismiss="modal">Close</button>
            </div>
            <script>
                $('.btn-close').click(function() {
                    console.log('o')
                    $('#exampleModal').fadeOut(1000);
                })

            </script>
        </div>
    </div>
</div>

<!-- /Model Area End -->
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script>
    //Show More And Less Content
    $(document).ready(function() {
        //Adding Dynamic Read More button
        totalCourses = '{{ count($Courses) }}';
        for (let $i = 0; $i < totalCourses; $i++) {
            let contentPara = document.getElementById($i);
            //console.log(contentPara.innerHTML.length, $i, contentPara.innerHTML.trim().length);
            if (contentPara.innerHTML.length > 462) {
                let addReadMoreBtn = document.getElementById('btn-container-' + $i);
                addReadMoreBtn.setAttribute('class', 'show-more-btn');
            } else if (contentPara.innerHTML.trim().length == 0) {
                contentPara.style.height = '0px';
            } else if (contentPara.innerHTML.trim().length < 200) {
                contentPara.style.height = '100px';
            }
        }
        //For Read MORE/LESS button
        $('.showBtn').click(function() {
            let id = $(this).data('id');
            if (id != " " || id == 0) {
                if ($('#' + id).hasClass('show-less')) {
                    $('#' + id).removeClass('show-less');
                    $('#showBtn-' + id).html('Read Less');
                } else {
                    $('#' + id).addClass('show-less');
                    $('#showBtn-' + id).html('Read More');
                }
            }
        });
    });

</script>
<script>
    $(document).ready(function() {
        $('.add-to-cart').click(function() {
            let product_id = $(this).data('product-id');
            document.getElementById('add-to-cart-form-' + product_id).submit();
        });
    });

</script>
