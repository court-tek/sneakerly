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
                        <h5 class="card-header">Upload Photo</h5>
                        <div class="card-body">
                            <form method="POST" enctype="multipart/form-data" action="{{ route('photos.store', ['id' =>  $id]) }}">
                                @csrf
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input id="title" type="file" name="image" required="" placeholder="" value="{{ old('title') }}" autocomplete="off" class="form-control">
                                </div>
                                @error('image')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror         
                                <div class="row">
                                    <div class="col-sm-6 pl-0">
                                        <p class="text-right">
                                            <button type="submit" class="btn btn-space btn-primary">Save Image</button>
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