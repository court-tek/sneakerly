<!-- resources/views/child.blade.php -->
@extends('layouts.blog')
 
@section('title', 'Page Title')
 
@section('intro')
    
@endsection
 
@section('content')
<div id="main">

    <!-- Main -->
    <div id="main">

        <!-- Post -->
            <section class="post">
                <header class="major">
                    <span class="date">{{ date('F jS, Y', strtotime($article->created_at)) }}</span>
                    <h1>{{ $article->title }}</h1>
                    <p>Aenean ornare velit lacus varius enim ullamcorper proin aliquam<br />
                    facilisis ante sed etiam magna interdum congue. Lorem ipsum dolor<br />
                    amet nullam sed etiam veroeros.</p>
                </header>
                <div class="image main"><img src="{{ $article->img_url }}" alt="" /></div>
                <p>{{ $article->content }}</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dapibus rutrum facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam tristique libero eu nibh porttitor fermentum. Nullam venenatis erat id vehicula viverra. Nunc ultrices eros ut ultricies condimentum. Mauris risus lacus, blandit sit amet venenatis non, bibendum vitae dolor. Nunc lorem mauris, fringilla in aliquam at, euismod in lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In non lorem sit amet elit placerat maximus. Pellentesque aliquam maximus risus. Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum.</p>
            </section>

    </div>
    

    <!-- Footer -->
        @include('layouts.blog.pagination')

</div>
@endsection