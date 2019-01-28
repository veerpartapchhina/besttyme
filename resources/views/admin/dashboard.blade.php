@extends('admin.layouts.app')

@section('content')

<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="javascript;">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Dashboard</span>
        </li>
    </ul>
</div>

<h3 class="page-title"> Dashboard
    <small>dashboard &amp; statistics</small>
</h3>
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 blue" href="{{url('admin/home')}}">
            <div class="visual">
                <i class="fa fa-comments"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value=""></span>
                </div>
                <div class="desc"> Dasgboard </div>
            </div>
        </a>
    </div>
    
</div>                                      
@endsection