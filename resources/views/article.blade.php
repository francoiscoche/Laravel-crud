@extends('app')

@section('content')



<h1>Article</h1>

<h2>{{ $post->title }}</h2>
<span>{{ $post->created_at }}</span>
<p>{{ $post->content }}</p>
@endsection