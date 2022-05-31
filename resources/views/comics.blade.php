@extends('layout.layout')

@section('content')

<div id="comics">

    <div><span class="button">current series</span></div>

    <div class="contenitore">
        @foreach ($fumetti as $key => $item)

        <div class="movie">

           <a href="{{ route( 'comic', ['id' => $key] ) }}">

            <div class="bg-movie" style="background-image: url('{{$item['thumb']}}')"></div>
            <p>{{ $item['series'] }}</p>
            
           </a>

        </div>

        @endforeach
    </div>

</div>

@include('partials.link')

@endsection
