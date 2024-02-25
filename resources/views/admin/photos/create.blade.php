<?php 
    // die(var_dump(auth()->user()->role_id));
    // if (auth()->user()->role_id == 3) {
    // 	die(var_dump("Im a writer"));
    // } else {
    // 	die(var_dump("Im not writer"));
    // }
    // die(var_dump(!$photos->hasPages()));
    $logged_in = auth()->user()->role_id;
    
?>
<!-- resources/views/child.blade.php -->
@extends('layouts.admin.admin')
 
@section('title', 'Sneakerly Create Article')
 
@section('content')
<div class="dashboard-wrapper">
    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Add Photo </h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{ route("articles.edit", ['id' => $logged_in]) }}" class="breadcrumb-link">Edit Article</a></li>
                                <li class="breadcrumb-item"><a href="{{ route("photos.index", ['id' => $logged_in]) }}" class="breadcrumb-link">All Photos</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add New Photo</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            </div>
            <div class="row">
                <!-- ============================================================== -->
                <!-- basic form -->
                <!-- ============================================================== -->
                <?php $categories = [1 => 'fashion', 2 => 'footwear', 3 => 'art', 4 => 'design']; ?>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">Basic Form</h5>
                        <div class="card-body">
                            <form method="POST" action="{{ route('photos', ['id' =>  $id]) }}">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input id="title" type="text" name="title" required="" placeholder="" value="{{ old('title') }}" autocomplete="off" class="form-control">
                                </div>      
                                <div class="row">
                                    <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                        <label class="be-checkbox custom-control custom-checkbox">
                                            <input type="hidden" name="featured" value="0" class="custom-control-input"></span>
                                            <input type="checkbox" name="featured" value="1" @checked(old('featured')) class="custom-control-input"><span class="custom-control-label">Featured</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6 pl-0">
                                        <p class="text-right">
                                            <button type="submit" class="btn btn-space btn-primary">Create Article</button>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end basic form -->
                <!-- ============================================================== -->
            </div>
            <div class="row">
                
            </div>
   
    </div>
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    @include('layouts.admin.footer');
    <!-- ============================================================== -->
    <!-- end footer -->
    <!-- ============================================================== -->
</div>
@endsection