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
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h4 class="axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="600ms">Transaction ID</h4>
                                                </td>
                                                <td>
                                                    <h4 class="axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="600ms">{{ session('txn_id') }}</h4>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <h4 class="axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="700ms">Order ID</h4>
                                                </td>
                                                <td>
                                                    <h4 class="axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="700ms">{{ session('order_id') }}</h4>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h4 class="axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="800ms">Amount Paid</h4>
                                                </td>
                                                <td>
                                                    <h4 class="axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="800ms">{{ session('amount') }}</h4>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <h4 class="axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="900ms">Date</h4>
                                                </td>
                                                <td>
                                                    <h4 class="axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="900ms">{{ session('date') }}</h4>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            @elseif(session('status') == 'TXN_FAILURE')
                            <div class="cards d-flex align-items-center flex-column">
                                <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_Dum1s3.json" background="transparent" speed="1" style="width: 300px;" loop autoplay></lottie-player>
                                <h1 class="axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="500ms">Payment Failed</h1>
                                <div class="mx-4 mt-3">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h5 class="axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="600ms">Transaction ID</h5>
                                                </td>
                                                <td>
                                                    <h5 class="axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="600ms">{{ session('txn_id') }}</h5>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <h5 class="axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="700ms">Order ID</h5>
                                                </td>
                                                <td>
                                                    <h5 class="axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="700ms">{{ session('order_id') }}</h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5 class="axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="800ms">Amount Paid</h5>
                                                </td>
                                                <td>
                                                    <h5 class="axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="800ms">{{ session('amount') }}</h5>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <h5 class="axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="900ms">Date</h5>
                                                </td>
                                                <td>
                                                    <h5 class="axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="900ms">{{ session('date') }}</h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5 class="axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="900ms">Message</h5>
                                                </td>
                                                <td>
                                                    <h5 class="axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="900ms">{{ session('message') }}</h5>

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            @elseif (session('status') == 'PENDING')
                            <div class="cards d-flex align-items-center flex-column">
                                <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_imlwk5lf.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></lottie-player>
                                <h1 class="axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="500ms">Payment Pending</h1>
                                <div class="mx-4 mt-3">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h5 class="axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="600ms">Transaction ID</h5>
                                                </td>
                                                <td>
                                                    <h5 class="axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="600ms">{{ session('txn_id') }}</h5>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <h5 class="axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="700ms">Order ID</h5>
                                                </td>
                                                <td>
                                                    <h5 class="axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="700ms">{{ session('order_id') }}</h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5 class="axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="800ms">Amount Paid</h5>
                                                </td>
                                                <td>
                                                    <h5 class="axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="800ms">{{ session('amount') }}</h5>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <h5 class="axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="900ms">Date</h5>
                                                </td>
                                                <td>
                                                    <h5 class="axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="900ms">{{ session('date') }}</h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5 class="axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="900ms">Message</h5>
                                                </td>
                                                <td>
                                                    <h5 class="axil-display-5 layer1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="900ms">{{ session('message') }}</h5>

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
