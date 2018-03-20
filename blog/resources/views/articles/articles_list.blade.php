<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Articles List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Articles List Page</h1>

    <h3>List of Articles:</h3> -->
    <!-- <?php
    //echo "$article1 <br> $article2";
    ?> -->

    <!-- {{$article1}}
    <br>
    {{$article2}}
    <ul>
        <li>{{$article1}}</li>
        <li>{{$article2}}</li>
    </ul>

    <ul>
        @foreach($articles as $article)
        <li>{{$article}}</li>
        @endforeach
    </ul>
</body>
</html> -->

@extends('layout.app')

@section('name')
Tuitt Inc
@endsection

@section('title')
    Articles List
@endsection

@section('main_content')
    <ul>
    @foreach($articles as $article)
        <li>{{$article}}</li>
    @endforeach
    </ul>
    
@endsection

