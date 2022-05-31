@extends('layout.layout')

@section('title', 'singolo fumetto')

@section('content')

{{-- Barra colorata --}}
<div class="barra"></div>

<div id="comic">

    <div id="comicTop">

        {{-- Immagine fumetto --}}
        <div class="img" style="background-image: url('{{$fumetto['thumb']}}')">

            {{-- View gallery --}}
            <div>View gallery</div>

            {{-- Coming book --}}
            <span>Comic book</span>

        </div>
        {{-- Dati del singolo fumetto --}}
        <div class="bar-img">

            {{-- Parte sinistra --}}
            <div style="width: 80%">

                {{-- Titolo --}}
                <h2 style="margin-bottom: 10px">{{ $fumetto['title'] }}</h2>

                {{-- Parte verde con prezzo e disponibilità --}}
                <div class="button" style="margin-bottom: 10px">

                    {{-- 70% --}}
                    <div class="price">
                        <div> US Price: <span>{{ $fumetto['price'] }}</span></div>
                        <div>Availbaility</div>
                    </div>
                    {{-- 30% --}}
                    <div>
                        check availability
                    </div>

                </div>

                {{-- Descrizione --}}
                <p>{{ $fumetto['description'] }}</p>

            </div>

            {{-- Parte destra immagine --}}
            <div style="width:20%">
                <img src="../../images/adv.jpg" alt="" width="100%">
            </div>

        </div>


    </div>

    <div id="comicBottom">

        {{-- Parte in alto --}}
        <div class="top">

            {{-- Talent --}}
            <div class="talent">

                {{-- Titolo --}}
                <h3>Talent</h3>

                {{-- Art by: --}}
                <div class="flex">

                    <div style="width: 50%">Art by: </div>
                    <div>
                        @foreach ($fumetto['artists'] as $item)
                        <span>{{$item}}, </span>
                        @endforeach
                    </div>

                </div>

                {{-- Written by: --}}
                <div class="flex">

                    <div style="width: 50%">Written by:</div>
                    <div>
                        @foreach ($fumetto['writers'] as $item)
                        <span>{{$item}}, </span>
                        @endforeach
                    </div>

                </div>

            </div>

            {{-- Specs --}}
            <div class="specs">

                {{-- Titolo --}}
                <h3>Specs</h3>

                {{-- Series --}}
                <div class="flex">

                    <div>Series</div>
                    <div style="color: #0282f9">{{$fumetto['series']}}</div>

                </div>

                {{-- US Price --}}
                <div class="flex">

                    <div>U.S. Price</div>
                    <div>{{$fumetto['price']}}</div>

                </div>

                {{-- On Sale date --}}
                <div class="flex">

                    <div>On Sale Date</div>
                    <div>{{$fumetto['sale_date']}}</div>

                </div>

            </div>

        </div>

        {{-- Parte in basso --}}
        <div></div>

    </div>

    <div id="linkBottom">

        {{-- Parte sinista --}}
        <div class="border" style="width: 25%"></div>

        {{-- Parte centrale --}}
        <div class="border" style="width: 50%">

            {{-- Digital comics --}}
            <div class="border" style="width: 25%; color: grey; padding: 10px 10px">Digital Comics</div>
            {{-- Shop DC --}}
            <div class="border" style="width: 25%; color: grey; padding: 10px 10px">Shop DC</div>
            {{-- Comic Shop Locator --}}
            <div class="border" style="width: 25%; color: grey; padding: 10px 10px">Comic Shop Locator</div>
            {{-- Subscription --}}
            <div class="border" style="width: 25%; color: grey; padding: 10px 10px">Subscription</div>

        </div>

        {{-- Parte destra --}}
        <div class="border" style="width: 25%"></div>

    </div>
</div>

@endsection
