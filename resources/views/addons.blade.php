@extends('purchase')
@section('addon_rows')

@foreach ($addons as $addon)
<div class="row box">
    <div class="col-lg-9">
    <p>{{$addon->ad_name}}</p>
    </div>
    <div class="col-lg-2 price-box">
        <p>{{$addon->ad_price}}</p>
    </div>
    <div class="col-lg-1 add-btn">
        <i class="bi bi-plus-circle"></i></div>
</div>
@endforeach
{{-- <div class="row box">
    <p>Course 2</p>
</div>
<div class="row box">
    <p>Course 2</p>
</div> --}}

@endsection
