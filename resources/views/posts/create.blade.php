@extends('layouts.app')
@section('content')

    <div class="">
        <div class="">
            <div class="">
                <h2 class="">Lägg Till Nytt Recept</h2>
            </div>
            <div class="">
                <a href="{{ route('posts.index') }}" class="">Tillbaka</a>
            </div>
        </div>
    </div>

    @if($errors->any())
        <div class="">
            <ul class="">
                @foreach($errors->all() as $error)
                    <li class="">{{$error}}</li>
                    @endforeach
            </ul>
        </div>
        @endif

    <form action="{{route('posts.store')}}" method="POST">
        @csrf

        <div class="">
            <div class="">
                <div class="">
                    <strong>Maträtt:</strong>
                    <input type="text" name="titel" class=""
                           placeholder="Titel">
                </div>
            </div>
            <div class="">
                <div class="">
                    <strong>Kategori:</strong>
                    <input type="text" name="kategori" class=""
                           placeholder="Kategori">
                </div>
            </div>
            <div class="">
                <div class="">
                    <strong>Ingredienser:</strong>
                    <input type="text" name="ingredienser" class=""
                           placeholder="Ingredienser">
                </div>
            </div>
            <div class="">
                <div class="">
                    <strong>Tillagningstid:</strong>
                    <input type="text" name="tillagningstid" class=""
                           placeholder="Tillagningstid">
                </div>
            </div>

            <div class="">
                <div class="">
                    <strong>Beskrivning:</strong>
                    <textarea name="beskrivning" class=""
                              placeholder="Beskrivning"></textarea>
                </div>
            </div>
            <div class="">
                <button class="" type="submit">Lägg Upp</button>
            </div>
        </div>
    </form>
@endsection
