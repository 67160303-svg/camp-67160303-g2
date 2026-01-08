@extends('template.default')

@push('styles')
<style>
    body {
        background: linear-gradient(135deg, #e3f2fd, #87e7ff);
    }

    .flight-card {
        background: #87e7ff;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 10px 25px rgba(255, 250, 250, 0.15);
    }

    label {
        font-weight: bold;
        margin-top: 10px;
    }
</style>
@endpush

@section('content')
<div class="container mt-4">
    <h2>แก้ไขข้อมูล Pokémon</h2>

    <form action="/pokedexs/{{ $pokedex->id }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control"
                   value="{{ $pokedex->name }}">
        </div>

        <div class="mb-3">
            <label>Type</label>
            <input type="text" name="type" class="form-control"
                   value="{{ $pokedex->type }}">
        </div>

        <div class="mb-3">
            <label>Species</label>
            <input type="text" name="species" class="form-control"
                   value="{{ $pokedex->species }}">
        </div>

        <div class="mb-3">
            <label>HP</label>
            <input type="number" name="hp" class="form-control"
                   value="{{ $pokedex->hp }}">
        </div>

        <div class="mb-3">
            <label>Attack</label>
            <input type="number" name="attack" class="form-control"
                   value="{{ $pokedex->attack }}">
        </div>

        <div class="mb-3">
            <label>Defense</label>
            <input type="number" name="defense" class="form-control"
                   value="{{ $pokedex->defense }}">
        </div>

        <div class="mb-3">
            <label>Image URL</label>
            <input type="text" name="image_url" class="form-control"
                   value="{{ $pokedex->image_url }}">
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="/pokedexs" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
