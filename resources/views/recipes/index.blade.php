@extends('layouts.layout')

@section('content')

<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Recipe list
        </div>

        @foreach($recipes as $recipe)
        <div>
            {{ $recipe->name }} - {{ $recipe->description }} - {{ $recipe->serves }}
        </div>
        @endforeach




    </div>
</div>
@endsection
