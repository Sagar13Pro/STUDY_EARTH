@extends('layout.layout')

@section('title','StudyEarth - Free Projects')

@section('content')
<div class="main-wrapper">
    <!-- Start Breadcrumb Area -->
    <div class="axil-breadcrumb-area breadcrumb-style-2 single-service pt--170 pb--70 theme-gradient">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-2 order-lg-1 mt_md--30 mt_sm--20">
                    <div class="inner">
                        <h2 class="title">{{ $langName }} Free Projects</h2>
                        <p>We have list of free projects in <code style="font-size: 24px;">{{ $langName }}</code>. </p>
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
                    @if(count($freeProjects) > 0)
                    @foreach ($freeProjects as $key => $project)
                    @if($loop->odd)
                    <div class="axil-working-process mb--100 mb_md--50 mb_sm--40">
                        <div class="thumbnail">
                            <div class="image paralax-image">
                                <img src="{{ asset('assets/images/process/9858_.jpg') }}" alt="Process Images">
                            </div>
                        </div>
                        <div class="content">
                            <div class="inner">
                                <div class="section-title">
                                    @if(!is_null($project->tag_1))
                                    <span class="sub-title extra04-color">{{ $project->tag_1 }}</span>
                                    @endif
                                    @if(!is_null($project->tag_2))
                                    <span class="sub-title extra04-color">{{ $project->tag_2 }}</span>
                                    @endif
                                    <h3 class="title">{{ $project->projectTitle }}</h3>
                                    <div id="description">
                                        <p class="subtitle-2 show-less" id={{ $key }}>
                                            {{ $project->projectContent }}
                                            <div class="show-more-btn hide" id="btn-container-{{ $key }}">
                                                <h6 type="button" id="showBtn-{{ $key }}" class="showBtn" data-id="{{ $key }}">Read More</h6>
                                            </div>
                                        </p>
                                    </div>
                                    <button class="axil-button btn-large btn-transparent mt--20 download-btn" data-id="{{ $project->id }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 16 16" enable-background="new 0 0 512 512">
                                            <path fill-rule="evenodd" d="M13,8 C13.5128358,8 13.9355072,8.38604019 13.9932723,8.88337887 L14,9 L14,11 C14,12.5976809 12.75108,13.9036609 11.1762728,13.9949073 L11,14 L5,14 C3.40231912,14 2.09633912,12.75108 2.00509269,11.1762728 L2,11 L2,9 C2,8.44771525 2.44771525,8 3,8 C3.51283584,8 3.93550716,8.38604019 3.99327227,8.88337887 L4,9 L4,11 C4,11.5128358 4.38604019,11.9355072 4.88337887,11.9932723 L5,12 L11,12 C11.5128358,12 11.9355072,11.6139598 11.9932723,11.1166211 L12,11 L12,9 C12,8.44771525 12.4477153,8 13,8 Z M8,2 C8.55228475,2 9,2.44771525 9,3 L9,6.584 L9.29289322,6.29289322 C9.65337718,5.93240926 10.2206082,5.90467972 10.6128994,6.20970461 L10.7071068,6.29289322 C11.0675907,6.65337718 11.0953203,7.22060824 10.7902954,7.61289944 L10.7071068,7.70710678 L8.70710678,9.70710678 L8.663147,9.7485042 L8.663147,9.7485042 L8.59530661,9.80366542 L8.59530661,9.80366542 L8.4840621,9.87532883 L8.4840621,9.87532883 L8.37133602,9.92877451 L8.37133602,9.92877451 L8.26599297,9.96415486 L8.26599297,9.96415486 L8.11747418,9.99316578 L8.11747418,9.99316578 L8,10 L8,10 L7.92476146,9.99721214 L7.92476146,9.99721214 L7.79927424,9.97975993 L7.79927424,9.97975993 L7.68785748,9.95026191 L7.68785748,9.95026191 L7.57677845,9.90632664 L7.57677845,9.90632664 L7.47929125,9.85400455 L7.47929125,9.85400455 L7.38324992,9.78721404 C7.35153408,9.76233116 7.32135953,9.73557309 7.29289322,9.70710678 L5.29289322,7.70710678 C4.90236893,7.31658249 4.90236893,6.68341751 5.29289322,6.29289322 C5.65337718,5.93240926 6.22060824,5.90467972 6.61289944,6.20970461 L6.70710678,6.29289322 L7,6.585 L7,3 C7,2.44771525 7.44771525,2 8,2 Z" />
                                        </svg>
                                        <span class="button-text">Download Now</span><span class="button-icon"></span>
                                    </button>
                                    <form class="d-none" id="download-form-{{ $project->id }}" action="{{ route('free.projects.download',$project->id) }}" method="POST">
                                        @csrf
                                    </form>
                                    <a class="axil-button btn-large btn-solid mt--20 more-info-btn more-info-btn" href="#" data-toggle="modal" data-target="#confirmation-modal" data-id={{ $project->id }}>
                                        <span class="button-text">More Info</span><span class="button-icon"></span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    @else
                    <div class="axil-working-process mb--100 text-left mb_md--50 mb_sm--40">
                        <div class="content order-2 order-lg-1">
                            <div class="inner">
                                <div class="section-title">
                                    @if(!is_null($project->tag_1))
                                    <span class="sub-title extra04-color">{{ $project->tag_1 }}</span>
                                    @endif
                                    @if(!is_null($project->tag_2))
                                    <span class="sub-title extra04-color">{{ $project->tag_2 }}</span>
                                    @endif
                                    <h3 class="title">{{ $project->projectTitle }}</h3>
                                    <div id="description">
                                        <p class="subtitle-2 show-less" id={{ $key }}>
                                            {{ $project->projectContent }}
                                            <div class="show-more-btn hide" id="btn-container-{{ $key }}">
                                                <h6 type="button" id="showBtn-{{ $key }}" class="showBtn" data-id="{{ $key }}">Read More</h6>
                                            </div>
                                        </p>
                                    </div>
                                    <button class="axil-button btn-large btn-transparent mt--20 download-btn" data-id="{{ $project->id }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 16 16" enable-background="new 0 0 512 512">
                                            <path fill-rule="evenodd" d="M13,8 C13.5128358,8 13.9355072,8.38604019 13.9932723,8.88337887 L14,9 L14,11 C14,12.5976809 12.75108,13.9036609 11.1762728,13.9949073 L11,14 L5,14 C3.40231912,14 2.09633912,12.75108 2.00509269,11.1762728 L2,11 L2,9 C2,8.44771525 2.44771525,8 3,8 C3.51283584,8 3.93550716,8.38604019 3.99327227,8.88337887 L4,9 L4,11 C4,11.5128358 4.38604019,11.9355072 4.88337887,11.9932723 L5,12 L11,12 C11.5128358,12 11.9355072,11.6139598 11.9932723,11.1166211 L12,11 L12,9 C12,8.44771525 12.4477153,8 13,8 Z M8,2 C8.55228475,2 9,2.44771525 9,3 L9,6.584 L9.29289322,6.29289322 C9.65337718,5.93240926 10.2206082,5.90467972 10.6128994,6.20970461 L10.7071068,6.29289322 C11.0675907,6.65337718 11.0953203,7.22060824 10.7902954,7.61289944 L10.7071068,7.70710678 L8.70710678,9.70710678 L8.663147,9.7485042 L8.663147,9.7485042 L8.59530661,9.80366542 L8.59530661,9.80366542 L8.4840621,9.87532883 L8.4840621,9.87532883 L8.37133602,9.92877451 L8.37133602,9.92877451 L8.26599297,9.96415486 L8.26599297,9.96415486 L8.11747418,9.99316578 L8.11747418,9.99316578 L8,10 L8,10 L7.92476146,9.99721214 L7.92476146,9.99721214 L7.79927424,9.97975993 L7.79927424,9.97975993 L7.68785748,9.95026191 L7.68785748,9.95026191 L7.57677845,9.90632664 L7.57677845,9.90632664 L7.47929125,9.85400455 L7.47929125,9.85400455 L7.38324992,9.78721404 C7.35153408,9.76233116 7.32135953,9.73557309 7.29289322,9.70710678 L5.29289322,7.70710678 C4.90236893,7.31658249 4.90236893,6.68341751 5.29289322,6.29289322 C5.65337718,5.93240926 6.22060824,5.90467972 6.61289944,6.20970461 L6.70710678,6.29289322 L7,6.585 L7,3 C7,2.44771525 7.44771525,2 8,2 Z" />
                                        </svg>
                                        <span class="button-text">Download Now</span><span class="button-icon"></span>
                                    </button>
                                    <form class="d-none" id="download-form-{{ $project->id }}" action="{{ route('free.projects.download',$project->id) }}" method="POST">
                                        @csrf
                                    </form>
                                    <a class="axil-button btn-large btn-solid mt--20 more-info-btn more-info-btn" href="#" data-toggle="modal" data-target="#confirmation-modal" data-id={{ $project->id }}>
                                        <span class="button-text">More Info</span><span class="button-icon"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="thumbnail order-1 order-lg-2">
                            <div class="image paralax-image">
                                <img src="{{ asset('assets/images/process/9858_.jpg') }}" alt="Process Images">
                            </div>
                        </div>
                    </div>
                    @endif
                    <!-- End Working Process  -->
                    @endforeach
                    @else
                    <div>No Projects Avaiable for {{ $name }}</div>
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
                <h4 id="modalTitle" class="padding-top-30 mb-30 weight-500"></h4>
                <hr>
                <div class="row">
                    <div id="modalContent" class="col-lg-12">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Model Area End -->
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        totalProjects = '{{ count($freeProjects) }}';
        for (let $i = 0; $i < totalProjects; $i++) {
            let contentPara = document.getElementById($i);

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
        $('.download-btn').click(function() {
            let download_id = $(this).data('id');
            $('#download-form-' + download_id).submit();
        });
        $('.more-info-btn').click(function() {
            let modal_id = $(this).data('id');
            console.log(modal_id);
            let url = "{{ route('free.projects.modal',':id') }}";
            url = url.replace(':id', modal_id);
            $.get({
                url: url
                , success: function(response) {
                    if (response.success) {
                        $('#modalTitle').html(response.title);
                        if (response.content !== null) {
                            $('#modalContent').html(response.content);
                        } else {
                            $('#modalContent').html("No Requirements Needed!");
                        }
                    }
                }
            });
        });
    });

</script>

@endsection
