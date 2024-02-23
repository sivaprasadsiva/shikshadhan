@extends('layout')
@section('main_content_purchase')

<div class="container addon-tab">
    <div class="row">
    <div class="col-lg-5 img-section">
        <img src="{{asset("assets/hero-img.jpg")}}" class="package-image"/>
    </div>
    <div class="col-lg-7 detail-section">
        <div class="row">
            <div class="col-lg-8 package-header">
                <p><b>{{$package->p_name}}</b></p>
            </div>
            <div class="col-lg-4 package-price">
                <p>₹ {{$package->p_price}}</p>
            </div>
    </div>
    <div class="row">
    <div class="package-details">
        <p>{{$package->p_description}}</p>
        {{-- <p>A full stack developer course, with a special focus on the MEAN stack, 
            offers comprehensive knowledge and broad-level training on front-end, middleware,
            and back-end software development technologies.
             You will also gain expertise in testing technologies such as JavaScript, Node. js, Angular, Docker, and Protractor.</p> --}}
    </div>
    </div>
    <div class="addon-box">
        <div class="addon-box-header"><p>Add On</p></div>
        <div class="addon-list">
            @yield('addon_rows')
        </div>
    <div class="viewmore-btn"><a href="{{route('addonlist')}}">View More>></a></div>
    </div>

    {{-- add on button --}}
    <div class="addon-btn">
        <a class="btn btn-danger">Buy Now</a>
    </div>
    </div>
</div>

<div>
    <p></p>
</div>

<div class="second-header-addon">
    <div>
        <p>Related Course</p>
    </div>
    <div class="container">
        <div class="row">
        <div class="col-lg-3 col-md-4">
            <div class="package-box">
                    <img src="{{ asset('assets/package.jpeg')}}" class="package-image"/>
                    <div class="package-body">
                        <p></p>
                        <p></p>
                        <span class="buy-btn"></span>
                    </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="package-box">
                    <img src="{{ asset('assets/package.jpeg')}}" class="package-image"/>
                    <div class="package-body">
                        <p></p>
                        <p></p>
                        <span class="buy-btn"></span>
                    </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="package-box">
                    <img src="{{ asset('assets/package.jpeg')}}" class="package-image"/>
                    <div class="package-body">
                        <p></p>
                        <p></p>
                        <span class="buy-btn"></span>
                    </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">
            <div class="package-box">
                    <img src="{{ asset('assets/package.jpeg')}}" class="package-image"/>
                    <div class="package-body">
                        <p></p>
                        <p></p>
                        <span class="buy-btn"></span>
                    </div>
            </div>
        </div>

        </div>
    </div>
</div>

@endsection
