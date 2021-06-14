@extends('layout.layout')

@if (session('status')=='TXN_SUCCESS')
@section('title','Successfull')
@elseif (session('status')=='TXN_FAILURE')
@section('title','Failed')
@else
@section('title','Pending')
@endif
@section('content')
<main class="page-wrappper">
    <!-- Start Slider Area -->
    <div class="axil-slider-area axil-slide-activation">
        <!-- Start Single Slide -->
        <div class="axil-slide slide-style-4 theme-gradient-4  d-flex align-items-center">
            <div class="container-fluid d-flex justify-content-center">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="content mx--100">
                            @if (session('status') == 'TXN_SUCCESS')
                            <div class="cards d-flex align-items-center flex-column">
                                <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_7W0ppe.json" background="transparent" speed="1" style="width: 300px;height: 250px" loop autoplay></lottie-player>
                                <h1 class="axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="500ms">Paid Successfully</h1>
                                <div class="m-3">
                                    <div class="row mt-2">
                                        <div class="col-4 axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="600ms">Transaction ID</div>
                                        <div class="col-8 axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="600ms">{{ session('txn_id') }}</div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-4 axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="700ms">Order ID</div>
                                        <div class="col-8 axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="700ms">{{ session('order_id') }}</div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-4 axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="800ms">Amount Paid</div>
                                        <div class="col-8 axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="800ms">{{ session('amount') }}</div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-4 axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="900ms">Date</div>
                                        <div class="col-8 axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="900ms">{{ session('date') }}</div>
                                    </div>

                                </div>
                            </div>
                            @elseif(session('status') == 'TXN_FAILURE')
                            <div class="cards d-flex align-items-center flex-column">
                                <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_imrP4H.json" background="transparent" speed="1" style="width: 300px; height: 250px;" loop autoplay></lottie-player>
                                <h1 class="axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="500ms">Payment Failed</h1>
                                <div class="m-3">
                                    <div class="row mt-2">
                                        <div class="col-4 axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="600ms">Transaction ID</div>
                                        <div class="col-8 axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="600ms">{{ session('txn_id') }}</div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-4 axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="700ms">Order ID</div>
                                        <div class="col-8 axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="700ms">{{ session('order_id') }}</div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-4 axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="800ms">Amount Paid</div>
                                        <div class="col-8 axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="800ms">{{ session('amount') }}</div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-4 axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="900ms">Date</div>
                                        <div class="col-8 axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="900ms">{{ session('date') }}</div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-4 axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="1000ms">Message</div>
                                        <div class="col-8 axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="1000ms">{{ session('message') }}</div>
                                    </div>
                                </div>
                            </div>
                            @elseif (session('status') == 'PENDING')
                            <div class="cards d-flex align-items-center flex-column">
                                <lottie-player src="https://assets6.lottiefiles.com/temp/lf20_cLJq7R.json" background="transparent" speed="1" style="width: 300px; height: 250px;" loop autoplay></lottie-player>
                                <h1 class="axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="500ms">Payment Pending</h1>
                                <div class="m-3">
                                    <div class="row mt-2">
                                        <div class="col-4 axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="600ms">Transaction ID</div>
                                        <div class="col-8 axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="600ms">{{ session('txn_id') }}</div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-4 axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="700ms">Order ID</div>
                                        <div class="col-8 axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="700ms">{{ session('order_id') }}</div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-4 axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="800ms">Amount Paid</div>
                                        <div class="col-8 axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="800ms">{{ session('amount') }}</div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-4 axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="900ms">Date</div>
                                        <div class="col-8 axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="900ms">{{ session('date') }}</div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-4 axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="1000ms">Message</div>
                                        <div class="col-8 axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="1000ms">{{ session('message') }}</div>
                                    </div>
                                </div>
                            </div>

                            @else
                            <div class="row mt-100 p-5">
                                <div class="col-12">
                                    <a href="{{ route('index.view') }}">RETURN HOME</a>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@section('scripts')
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
@endsection
