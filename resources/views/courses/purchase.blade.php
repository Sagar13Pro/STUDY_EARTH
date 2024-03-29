@extends('layout.layout')

@section('title','StudyEarth | Purchases')

@section('content')

<div class="main-wrapper">
    <!-- Start Counterup Area  -->
    <div class="axil-counterup-area ax-section-gap bg-color-lightest">
        <div class="container pt--80 pt_sm--40 pt_md--40">
            @if(count($project_products) > 0)
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="content-wrapper">
                        <div class="inner">
                            <div class="section-title text-left">
                                <h2 class="title wow" data-splitting><span>Projects</span>
                                </h2>
                                <p class="layer2 wow slideFadeInUp"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        @foreach ($project_products as $key => $item )
                        <div class="col-sm-6 col-lg-4">
                            <div class="service-card-one bg-color center">
                                <div class="icon">
                                    <img src="https://img.icons8.com/cotton/64/000000/student-male--v3.png" />
                                </div>
                                <h3>
                                    <a href="#">{{ $item->projectTitle }}</a>
                                </h3>
                                <p>{{ $item->projectContent }}</p>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
            @endif

            @if(count($course_products) > 0)
            <div class="row align-items-center mt--50">
                <div class="col-lg-12">
                    <div class="content-wrapper">
                        <div class="inner">
                            <div class="section-title text-left">
                                <h2 class="title wow" data-splitting><span>Courses</span>
                                </h2>
                                <p class="layer2 wow slideFadeInUp"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        @foreach ($course_products as $key => $items )
                        <div class="col-sm-6 col-lg-3">
                            <div class="service-card-one bg-color center">
                                <div class="icon">
                                    <img src="https://img.icons8.com/flat-round/80/000000/book.png" />
                                </div>
                                <h3>
                                    <a href="#">{{ $items->courseTitle }}</a>
                                </h3>
                                <a class="explore_more mt--10 text-left course-btn" data-hover="Learn More" data-id="{{ $key }}" href="#">Start Reading</a>
                                <form id="course-form-{{ $key}}" action="{{ route('user.read.course',[$items->courseTitle,$items->id])  }}" method="POST">
                                    @csrf
                                </form>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
    <!-- End Counterup Area  -->
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.course-btn').click(function() {
            let id = $(this).data('id');
            $('#course-form-' + id).submit();
        });
    });

</script>
@endsection
