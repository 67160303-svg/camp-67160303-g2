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
    <h2 class="mb-4">เพิ่มข้อมูล Pokémon</h2>

    <form action="/pokedexs" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Type</label>
            <input type="text" name="type" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Species</label>
            <input type="text" name="species" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Height</label>
            <input type="number" step="0.01" name="height" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Weight</label>
            <input type="number" step="0.01" name="weight" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">HP</label>
            <input type="number" name="hp" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Attack</label>
            <input type="number" name="attack" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Defense</label>
            <input type="number" name="defense" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Image URL</label>
            <input type="text" name="image_url" class="form-control" required>
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-success">
                💾 บันทึกข้อมูล
            </button>
            <a href="/pokedexs" class="btn btn-secondary">
                ↩ กลับหน้ารายการ
            </a>
        </div>
    </form>
</div>
@endsection
