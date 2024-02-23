@extends('packageslayout')
@section('package-content')
<div class="container header-image-container">
    <p>ALL COURSES</p>
</div>
<div class="container">
    <div class="row">
    @foreach ($courses as $course)
    <div class="col-lg-3 col-md-4">
        <div class="package-box">
                <img src="{{ asset('assets/package.jpeg')}}" class="package-image"/>
                <div class="package-body">
                    <p>{{ $course->p_name }}</p>
                    <p>{{$course->p_description}}</p>
                    <a class="buy-btn" href="{{ route('purchase', ['id' => $course->pid, 'package_name' => $course->p_name]) }}">{{$course->p_price}}</a>
                </div>
        </div>
    </div>

    @endforeach
    </div>
</div>


@endsection
