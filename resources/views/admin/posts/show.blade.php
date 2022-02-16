
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-5">
                <div class="card-header">s
                    {{ $post->title }}
                </div>
                
                <div class="card-body">
                    <h4 class="card-title">{{ $post->title }}</h4>
                    <p class="card-text">
                        {{ $post->content }}
                    </p>
                </div>
            </div>
            <a href="{{route('posts.index')}}" class="btn btn-primary">Torna alla pagina</a>
        </div>
    </div>
</div>
@endsection