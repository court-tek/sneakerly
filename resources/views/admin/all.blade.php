<!-- resources/views/child.blade.php -->
<?php 
    // die(var_dump(auth()->user()->role_id));
    // if (auth()->user()->role_id == 3) {
    // 	die(var_dump("Im a writer"));
    // } else {
    // 	die(var_dump("Im not writer"));
    // }
    $logged_in = auth()->user()->role_id;
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
                                    <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">All Articles
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
                            <h3 class="section-title">Articles</h3>
                        </div>
                        <div class="card">
                            <div class="campaign-table table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr class="border-0">
                                            <th class="border-0">Image</th>
                                            <th class="border-0">id</th>
                                            <th class="border-0">User Id</th>
                                            <th class="border-0">Title</th>
                                            <th class="border-0">Author</th>
                                            <th class="border-0">Created Date</th>
                                            <th class="border-0">Status</th>
                                            <th class="border-0">Featured</th>
                                            <th class="border-0">Category</th>
                                        </tr>
                                    </thead>
                                    <tbody> 
                                        @foreach ($articles as $article)
                                            <tr>
                                                <td>
                                                    <div class="m-r-10"><img src="{{ url('admin/images/dribbble.png') }}" alt="user" width="35"></div>
                                                </td>
                                                <td>{{ $article->id }}</td>
                                                <td>{{ $article->user_id }}</td>
                                                <td>
                                                    @if ($logged_in == 1)
												        <a class="">{{ $article->title }}</a>
                                                    @else
                                                        <a href="{{ url("admin/articles-edit/{$article->id}") }}">{{ $article->title }}</a></td>
                                                    @endif
                                                <td>{{ $article->author }}</td>
                                                <td>{{ date('F jS, Y', strtotime($article->created_at)) }}</td>
                                                <td>
                                                    @if ($article->status == "published")
												        <a class="text-capitalize text-white badge badge-success p-2">{{ $article->status }}</a>
                                                    @else
                                                        <a class="text-capitalize text-white badge badge-primary p-2">{{ $article->status }}</span></a></td>
                                                    @endif
                                                    {{-- {{ $article->status }} --}}
                                                </td>
                                                <td>@if($article->featured == 1) Yes @else No @endif</td>
                                                <td>{{ $article->category_id }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
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
                    <div class="col-lg-12">
                        {{ $articles->links() }}
                    </div>
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