<!-- resources/views/child.blade.php -->
<?php 
    // die(var_dump(auth()->user()->role_id));
    // if (auth()->user()->role_id == 3) {
    // 	die(var_dump("Im a writer"));
    // } else {
    // 	die(var_dump("Im not writer"));
    // }
    // die(var_dump(!$photos->hasPages()));
    $logged_in = auth()->user()->role_id;
    // die(var_dump($article_id));
?>
@extends('layouts.admin.admin')
 
@section('title', 'All Articles')
 

@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-influence">
        <div class="container-fluid dashboard-content">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h3 class="mb-2"></h3>
                        <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route("articles.edit", ['id' => $id]) }}" class="breadcrumb-link">Edit Article</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">All Photos</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- content  -->
            <!-- ============================================================== -->
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                    
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- campaign activities   -->
                    <!-- ============================================================== -->
                    <div class="col-lg-12">
                        <div class="section-block">
                            <h3 class="section-title">All photos</h3>
                            <a href="{{ url("admin/photos-create/{$id}")}}" class="btn btn-primary">Add Photo</a>
                        </div>
                        <div class="card">
                            <div class="campaign-table table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr class="border-0">
                                            <th class="border-0">Id</th>
                                            <th class="border-0">Photo</th>
                                            <th class="border-0">Name</th>
                                            <th class="border-0">Actions</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @foreach ($photos as $photo)
                                        <tr>
                                            {{-- <td>
                                                <div class="m-r-10"><img src="{{ url('admin/images/dribbble.png') }}" alt="user" width="35"></div>
                                            </td> --}}
                                            <td>
                                                <div class="m-r-10">
                                                    {{ $photo->id }}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="m-r-10">
                                                    <img src="/images/{{$photo->name}}" alt="kobe black mamba" style="width: 300px;">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="m-r-10">
                                                    {{ $photo->name }}
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="nav">
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link text-secondary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Make featured image">
                                                            <i class="far fa-gem text-primary" style="font-size: 20px"></i>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link text-danger"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to delete image"><i class="far fa-trash-alt" style="font-size: 20px"></i></a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach   
                                </table>
                            </div>    
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end campaign activities   -->
                    <!-- ============================================================== -->
                </div>
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- pagination   -->
                    <!-- ============================================================== -->
                    {{-- <div class="col-lg-12">
                        {{ $articles->links() }}
                    </div> --}}
                    <!-- ============================================================== -->
                    <!-- pagination   -->
                    <!-- ============================================================== -->
                </div>
        </div>
        <!-- ============================================================== -->
        <!-- end content  -->
        <!-- ============================================================== -->
     
    </div>
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    @include('layouts.admin.footer')
    <!-- ============================================================== -->
    <!-- end footer -->
    <!-- ============================================================== -->
</div>
@endsection