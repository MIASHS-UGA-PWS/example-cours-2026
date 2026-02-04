	@extends('layout')

	@section('title')
	  <h1>{{ $title }}</h1>
	@endsection

	@section('content')
        <ul>
            @foreach($projects as $project)
            <li>
                <h2>{{ $project->title }}</h2>
                <p>{{ $project->description }}</p>
            </li>
            @endforeach
        </ul>
	@endsection
