@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="/storage/{{ $post->image }}" alt="image" class="w-100">
            </div>
            <div class="col-4">
                <div>
                    <h3>{{ $post->user->username }}</h3>
                    <p>{{ $post->user->caption }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
