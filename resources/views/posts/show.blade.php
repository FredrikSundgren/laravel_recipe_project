@extends('layouts.app')
@section('content')

    <div class="">
        <div class="">
            <div class="">
                <h2 class="">Visa Recept</h2>
            </div>
            <div class="">
                <a href="{{ route('posts.index') }}" class="">Back</a>
            </div>
        </div>
    </div>



        <div class="">
            <div class="">
                <div class="">
                    <strong>Maträtt:</strong>
                    {{$post->titel}}
                </div>
            </div>
            <div class="">
                <div class="">
                    <strong>Kategori:</strong>
                    {{$post->kategori}}
                </div>
            </div>
            <div class="">
                <div class="">
                    <strong>Ingredienser:</strong>
                    {{$post->ingredienser}}
                </div>
            </div>
            <div class="">
                <div class="">
                    <strong>Tillagningstid:</strong>
                   {{$post->tillagningstid}}
                </div>
            </div>


            <div class="">
                <div class="">
                    <strong>Beskrivning:</strong>
                    {{$post->beskrivning}}
                </div>
            </div>
        </div>
    </div>
@endsection
