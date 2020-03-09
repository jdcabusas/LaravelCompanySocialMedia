@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4">
                <img class="rounded-circle p-5" src="/svg/milestech.jpg">
            </div>
            <div class="col-8 pt-5">

                <div class="col-8 pt-5">

                    <div><h1>{{$user->username}}</h1></div>

                    <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
                    <div class="d-flex pt-3">
                        <div class="p-2">Employees: 501 - 1000</div>
                        <div class="p-2">Revenue: $5M to $25M</div>
                        <div class="p-2">Industry: Internet and Software</div>
                    </div>

                        <div class="pt-3 font-weight-bold"><h2>{{$user->profile->motto}}</h2></div>
                        <div>{{$user->profile->description}}</div>
                        <div><a href="https://www.milestechnologies.com/">{{$user->profile->url}}</a></div>

                </div>
        </div>
        <div class="row pt-5" >
            <div class="col-4">
                <img src="/svg/m1.jpg" class="w-100">
            </div>
            <div class="col-4">
                <img src="/svg/m2.jpg " class="w-100">
            </div>
            <div class="col-4">
                <img sr c="/svg/m3.jpg" class="w-100">
            </div>
        </div>
    </div>

@endsection
