@extends('layout.layout')

@section('title','StudyEarth | 401')

@section('content')
<main class="page-wrapper page-error">
    <!-- Start Page Error Area  -->
    <div class="axil-error-not-found fullscreen d-flex align-items-center theme-gradient-7 list-active">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="axil-error text-center">
                        <div class="inner">
                            <h1 class="title mb--20">Page Expired</h1>
                            <a class="axil-button btn-large btn-transparent" href="{{ route('index.view') }}"><span class="button-text">Go Home</span><span class="button-icon"></span></a>
                            <img class="text-image" src="{{ asset('assets/images/others/401.svg') }}" alt="404 Images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-group">
            <div class="shape shape-01">
                <img src="{{ asset('assets/images/shape/404-01.svg') }}" alt="Shape Images">
            </div>
            <div class="shape shape-02">
                <img src="{{ asset('assets/images/shape/404-01.svg') }}" alt="Shape Images">
            </div>
            <div class="shape shape-03">
                <img src="{{ asset('assets/images/shape/404-02.svg') }}" alt="Shape Images">
            </div>
            <div class="shape shape-04">
                <img src="{{ asset('assets/images/shape/404-03.svg') }}" alt="Shape Images">
            </div>
        </div>
    </div>
    <!-- End Page Error Area  -->
</main>
@endsection
