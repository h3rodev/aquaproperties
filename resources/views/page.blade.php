@extends('layouts.index')

@section('title', '{{ $page->title}}' )

@section('content')

    <div class="card card-image" style="background-image: url(/{{$page->image}});">
        <div class="text-white text-center rgba-stylish-strong py-5 px-4">
            <div class="py-5">
                <h1 class="card-title h2 my-4 py-2">{{ $page->title }}</h1>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Library</a></li>
                        <li class="breadcrumb-item active">Data</li>
                    </ol>
                </nav>
                <nav class="mb-4 pb-2 px-md-5 mx-md-5"><a href="/">Home</a> » <a href="#">{{ $page->title }}</a</nav>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row row-cols-1">
            <h2>{{ $page->title }}</h2>
            {!! $page->body !!}
        </div>
    </div>
@stop