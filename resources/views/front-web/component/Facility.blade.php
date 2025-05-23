@php
$facilities = DB::table('facilities')->get();
@endphp
<div class="row">
    @foreach ($facilities as $f)
    <div class="col-md-6">
        <!-- Case Study Item Start -->
        <div class="case-study-item wow fadeInUp">
            <!-- Case Study Image Start -->
            <div class="case-study-image">
                {{-- <a href="case-study-single.html" data-cursor-text="View"> --}}
                    <figure class="image-anime">
                        <img src="{{ url('file/facility/' . (@$f->avatar ?? '')) }}" alt="">
                    </figure>
                {{-- </a> --}}
            </div>
            <!-- Case Study Image End -->

            <!-- Case Study Body Start -->
            <div class="case-study-body">
                <!-- Case Study Content Start -->
                <div class="case-study-item-content">
                    <h3><a href="#">{{ App::isLocale('ar') ? @$f->name_ar : @$s->name}}</a></h3>
                </div>
                <!-- Case Study Content End -->
                <!-- Case Study Button End -->
            </div>
            <!-- Case Study Body End -->
        </div>
        <!-- Case Study Item End -->
    </div>
    @endforeach
</div>
