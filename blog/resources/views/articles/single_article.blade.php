@extends('layout.app')

@section('title')
    {{$article->title}}
@endsection

@section('main_content')
    <p>
    {{$article->content}}
    </p>
    <p>
        @if($article->updated_at != null)
        {{ $article->updated_at->diffForHumans() }}
        @endif
    </p>
    {{--  {{$article->id}}  --}}
<form method="POST" action='{{url("articles/$article->id/delete")}}'>

    {{ csrf_field() }}
    {{method_field('delete')}}

{{--  <a class="btn btn-danger" href='{{url("articles/$article->id/delete")}}'>Delete</a>  --}}
<button class="btn btn-danger">Delete this article</button>
</form>
@endsection