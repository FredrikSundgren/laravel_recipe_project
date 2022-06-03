@extends('layouts.app')
@section('content')

    <div class="">
        <div class="">
            <div class="">
                <h2 class="text-3xl">Laravel Recept </h2>
            </div>
            <div class="">
                <a href="{{route('posts.create')}}" class="">Lägg upp Recept</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="">
            <p class="">{{$message}}</p>
        </div>
        @endif

    <table class="h-24 w-24">
        <tr class="flex">
            <th class="h-24 mx-8 bg-red-200 text-blue-500">Titel</th>
            <th class="h-24 mx-8 bg-red-200 text-blue-500">Kategori</th>
            <th class="h-24 mx-8 bg-red-200 text-blue-500">Tillagningstid</th>
            <th class="h-24 mx-8 bg-red-200 text-blue-500">Ingredienser</th>
            <th class="h-24 mx-8 bg-red-200 text-blue-500">Beskrivning</th>
        </tr>
        @foreach($posts as $post)
            <tr>
                <td class="">{{$post->titel}}</td>
                <td class="">{{$post->kategori}}</td>
                <td class="">{{$post->ingredienser}}</td>
                <td class="">{{$post->tillagningstid}}</td>
                <td class="">{{$post->beskrivning}}</td>
                <td class="">
                    <a href="{{route('posts.show', $post->id)}}" class="">Show</a>
                    <a href="{{route('posts.edit', $post->id)}}"
                       class="">Edit</a>
                    <form action="{{route('posts.destroy', $post->id)}}"
                          method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
    </table>
    @endsection
