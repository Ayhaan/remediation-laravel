@extends('layouts.index')

@section('content')
<h1 class="text-center py-5">TEMPLATE HOME BOOTSTRAP</h1>
    @forelse ($voitures as $item)
        <h3 class="text-center">{{ $item->model }}</h3>
        <!-- Button trigger modal -->
        <div class="d-flex justify-content-center">
            
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $item->id }}">
                Launch demo modal
            </button>
        </div>
        @include('components.modal-voiture')
    @empty
        <p>vide</p>
    @endforelse
@endsection