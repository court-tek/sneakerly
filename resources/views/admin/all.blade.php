<!-- resources/views/child.blade.php -->
 
@extends('layouts.admin')
 
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
                                    <li class="breadcrumb-item"><a href="/admin/dash" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"></li>
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
                                            <th class="border-0">Category</th>
                                        </tr>
                                    </thead>
                                    <tbody>    
                                            <tr>
                                                <td>
                                                    <div class="m-r-10"><img src="{{ url('admin/images/dribbble.png') }}" alt="user" width="35"></div>
                                                </td>
                                                <td></td>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end campaign activities   -->
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
    @include('layouts.footer')
    <!-- ============================================================== -->
    <!-- end footer -->
    <!-- ============================================================== -->
</div>
@endsection