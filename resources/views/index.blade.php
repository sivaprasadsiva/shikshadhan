@extends('indexlayout')
@section('index_full_content')

<div class="first-section" >
    <img src="{{ asset('assets/hero-img.jpg') }}"  alt="Background Image" class="background-image">
    <div class="content col-lg-5">
        <div class="heading-paragraph first-section-header">
            <p>Inspiring Knowledge, </br>Education Mind</p>
        </div>
        <div class="heading-paragraph first-section-paragraph">
            <p>Education is a systematic process through which a child or an adult acquires knowledge,
                experience, skill and sound attitude. It makes an individual civilized, refined, cultured and educated.
                For a civilized and socialized society, education is the only means. Its goal is to make an individual perfect.
            </p>
        </div>
        <div class='learn-btn'>
            <p>Learn More >></p>
        </div>
    </div>
</div>


{{-- info card section --}}

    <div class="info-bars">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 pl-5">
                <div class="box">
                    <!-- Content for box 1 -->
                    <div class="main-box pt-3">
                        <div class="box-icon">
                            <i class="bi bi-globe2"></i>
                        </div>
                        <div class="box-info">
                            <p class="head"><b>Online Courses</b></p>
                            <p class="read-btn">READ MORE..</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 pl-5">
                <div class="box">
                    <!-- Content for box 2 -->
                    <div class="main-box pt-3">
                        <div class="box-icon">
                            <i class="bi bi-book"></i>
                        </div>
                        <div class="box-info">
                            <p class="head"><b>Extra Books</b></p>
                            <p class="read-btn">READ MORE...</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 pl-5">
                <div class="box">
                    <!-- Content for box 3 -->
                    <div class="main-box pt-3">
                        <div class="box-icon">
                            <i class="bi bi-file-text"></i>
                        </div>
                        <div class="box-info">
                            <p class="head"><b>Certification</b></p>
                            <p class="read-btn">READ MORE...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    {{--  info card section--}}


{{-- Package list --}}

    <div class="all-courses">
    <a href="{{route('packages')}}"><b>All Courses</b></a>
    </div>
    <div class="container">
        <div class="row pb-5">
            @foreach($courses as $course)

            <div class="col-lg-3 col-md-4">
                <div class="package-box">
                        <img src="{{ asset('assets/package.jpeg')}}" class="package-image"/>
                        <div class="package-body">
                            <p>{{$course->p_name}}</p>
                            <p>{{$course->p_description}}</p>
                            <a href="{{ route('purchase', ['id' => $course->pid, 'package_name' => $course->p_name]) }}" style="text-decoration: none"><span class="buy-btn">{{$course->p_price}}</span></a>
                        </div>
                </div>
            </div>
            @endforeach
            {{-- <div class="col-lg-3 col-md-4">
                <div class="package-box">
                    <img src="{{ asset('assets/package.jpeg')}}" class="package-image"/>
                    <div class="package-body">
                        <p>Full Stack Development</p>
                        <p>Learning to write programs stretches your mind, and helps you think better....</p>
                        <span class="buy-btn">Buy</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="package-box">
                    <img src="{{ asset('assets/package.jpeg')}}" class="package-image"/>
                        <div class="package-body">
                            <p>Full Stack Development</p>
                            <p>Learning to write programs stretches your mind, and helps you think better....</p>
                            <span class="buy-btn">Buy</span>
                        </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="package-box">
                    <img src="{{ asset('assets/package.jpeg')}}" class="package-image"/>
                    <div class="package-body">
                        <p>Full Stack Development</p>
                        <p>Learning to write programs stretches your mind, and helps you think better....</p>
                        <span class="buy-btn">Buy</span>
                    </div>
                </div>
            </div> --}}
        </div>
        {{-- <div class="row pb-5">
            <div class="col-lg-3 col-md-4">
                <div class="package-box">
                        <img src="{{ asset('assets/package.jpeg')}}" class="package-image"/>
                        <div class="package-body">
                            <p>Full Stack Development</p>
                            <p>Learning to write programs stretches your mind, and helps you think better....</p>
                            <span class="buy-btn">Buy</span>
                        </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="package-box">
                    <img src="{{ asset('assets/package.jpeg')}}" class="package-image"/>
                        <div class="package-body">
                            <p>Full Stack Development</p>
                            <p>Learning to write programs stretches your mind, and helps you think better....</p>
                            <span class="buy-btn">Buy</span>
                        </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="package-box">
                    <img src="{{ asset('assets/package.jpeg')}}" class="package-image"/>
                        <div class="package-body">
                            <p>Full Stack Development</p>
                            <p>Learning to write programs stretches your mind, and helps you think better....</p>
                            <span class="buy-btn">Buy</span>
                        </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="package-box">
                    <img src="{{ asset('assets/package.jpeg')}}" class="package-image"/>
                        <div class="package-body">
                            <p>Full Stack Development</p>
                            <p>Learning to write programs stretches your mind, and helps you think better....</p>
                            <span class="buy-btn">Buy</span>
                        </div>
                </div>
            </div>
        </div> --}}
    </div>

{{-- Package list --}}


{{-- First Box content under Packages  --}}

    <div class="container first-box">
        <div class="row">
            <div class="col-lg-6 left-section intro-image">
                    <img src=" {{ asset('assets/class.jpeg')}}" class="class-img"/>
            </div>
            <div class="col-lg-6">
                <p class="p1"><b>Welcome To Our  Online Training Center</b></p>
                <p class="p2">Online learning platforms in a repository of learning resources and materials, eliminating the need for students and teachers to take notes or make physical copies of learning materials. It helps save on paper and printing costs while ensuring all learners can access the resources.</p>
                <span class="btn btn-primary first-discover-btn">Discover More...</span>
            </div>
        </div>
    </div>

{{--  First Box conent under Packages --}}


{{-- Second Box content --}}

    <div class="container second-box">
    <div class="row">
        <div class="col-lg-6">
            <p class="p1"><b>Self Development Course</b></p>
            <p class="p4 second-box-description">Self development is simply the process of learning new things and building new
                skills—skills that help us increase our chances of success, achieving our goals, and manifesting our dreams.</p>
                <div class="secondBox-Btn-div">
            <button class="btn btn-primary second-discover-btn">Discover More...</button>
                </div>
        </div>
        <div class="col-lg-6 left-section intro-image">
            <img src=" {{ asset('assets/learning.jpeg')}}" class="class-img"/>
    </div>
    </div>
    </div>

{{-- Second Box content --}}

@endsection
