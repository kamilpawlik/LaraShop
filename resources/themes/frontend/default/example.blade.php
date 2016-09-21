<!-- This view is extendign some layout - this is how we define which one -->
@extends('layout')

<!-- To set html title we can use html_title field -->
@section('html_title', 'Sample title set from view');

@section('sidebar')
    @parent
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection