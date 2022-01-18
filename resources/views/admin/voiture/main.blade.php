@extends('layouts.back')

@section('content')
    <h1 class="text-red-500 text-5xl text-center py-5">Voiture</h1>
    

    @forelse ($voitures as $item)
        @include('components.table-voiture')
    @empty
        <p>No dispo</p>
    @endforelse
@endsection