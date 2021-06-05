@extends('layout.layout')

@section('title','StudyEarth - Paid Projects')

@section('content')

<div class="main-wrapper">
    <!-- Start Counterup Area  -->
    <div class="axil-counterup-area ax-section-gap bg-color-lightest">
        <div class="container pt--80 pt_sm--40 pt_md--40">
            <div class="row align-items-center">
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
                <div class="col-lg-12 mt--30">
                    <div class="content-wrapper">
                        <section class="faq-area ptb-100">
                            <div class="container p-0">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="faq-accordion">
                                            <ul class="accordion">
                                                @foreach ($titles as $key => $title)
                                                <li class="accordion-item">
                                                    <a class="accordion-title" href="javascript:void(0)">
                                                        {{ $title->title }}
                                                    </a>
                                                    <div class="accordion-content">
                                                        <table class="table border-less">
                                                            <tbody>
                                                                @foreach ($topics as $index => $item)
                                                                @if($item->title == $title->title)

                                                                <tr>
                                                                    <th class="w-20">{{ $key+1 }}.{{ $item->display_order }}</th>
                                                                    <td class="w-60">{{ $item->subtitle }}</td>
                                                                    <td>
                                                                        <button class="btn btn-info pdf-view-link" data-id={{ $index }}>View</button>
                                                                    </td>

                                                                    <form method="post" id="viewer-course-form-{{ $index }}" action="{{ route('pdf.viewer',[$item->title,$item->subtitle]) }}">
                                                                        @csrf
                                                                    </form>
                                                                </tr>
                                                                @endif
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Counterup Area  -->
</div>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.pdf-view-link').click(function() {
            let id = $(this).data('id');
            $('#viewer-course-form-' + id).submit();
        });
    });

</script>
