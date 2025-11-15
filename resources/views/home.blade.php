{{-- @extends('layout.layout2')

@section('title', 'Blog Home')

@section('content')
    <h1>My Blog</h1>
    
    @foreach($posts as $post)
        <div class="post">
            <h2>{{ $post['title'] }}</h2>
            <p>{{ $post['content'] }}</p>
            <a href="/post/{{ $post['id'] }}">Read More →</a>
        </div>
    @endforeach
    <h3>
        jumlah postingan disini: {{$totalposts}}</h3>
@endsection --}}

@extends('layout.layout2')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($posts as $post)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset($post['image']) }}" class="card-img-top" alt="{{ $post['title'] }}">
                    <div class="card-img-overlay d-flex align-items-end">
                        <h5 class="card-title text-white bg-transparant p-0,5 rounded">
                            {{ $post['title'] }}
                        </h5>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
