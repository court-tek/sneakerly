<!-- resources/views/child.blade.php -->
@extends('layouts.blog')
 
@section('title', 'Page Title')
 
@section('intro')
    @parent
@endsection
 
@section('content')
<div id="main">

    <!-- Featured Post -->
        <article class="post featured">
            @foreach ($articles as $article)
                @if ($article->featured == 1 && $article->status == "published")
                    <header class="major">
                        <span class="date">{{ date('F jS, Y', strtotime($article->created_at)) }}</span>
                        <h2><a href="#">{{ $article->title }}</h2>
                        <p style="text-align: center;">Aenean ornare velit lacus varius enim ullamcorper proin aliquam<br />
                        facilisis ante sed etiam magna interdum congue. Lorem ipsum dolor<br />
                        amet nullam sed etiam veroeros.</p>
                        <p style="text-align: center;">by {{ $article->author }}</p>
                    </header>
                    <a href="#" class="image main"><img src="{{$article->img_url}}" alt="Air Jordan 4 RM" /></a>
                    <ul class="actions">
                        <li><a href="{{ url("2024/article/show/{$article->id}") }}" class="button big">Full Story</a></li>
                    </ul>
                @endif
            @endforeach
        </article>

    <!-- Posts -->
        <section class="posts">
            @foreach ($articles as $article)
                @if ($article->featured == 0 && $article->status == "published")
                <article>
                    <header>
                        <span class="date">{{ date('F jS, Y', strtotime($article->created_at)) }}</span>
                        <h2><a href="#">Sed magna<br />
                        ipsum faucibus</a></h2>
                    </header>
                    <a href="#" class="image fit"><img src="images/pic02.jpg" alt="" /></a>
                    <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
                    <ul class="actions">
                        <li><a href="#" class="button">Full Story</a></li>
                    </ul>
                </article>
                @endif
            @endforeach
        </section>

    <!-- Footer -->
        @include('layouts.blog.pagination')

</div>
@endsection