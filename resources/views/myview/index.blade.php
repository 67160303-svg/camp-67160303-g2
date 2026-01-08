@extends('template.default')

@section('content')
<div class="container mt-4">
    <h2>Pokedex List</h2>

    <a href="/pokedexs/create" class="btn btn-primary mb-3">+ Add Pokemon</a>

    <table class="table table-bordered">
        <tr class="table-primary">
            <th>Name</th>
            <th>Type</th>
            <th>HP</th>
            <th>Attack</th>
            <th>Defense</th>
            <th>Image</th>
            <th>Action</th>
        </tr>

        @foreach($pokedexs as $p)
        <tr>
            <td>{{ $p->name }}</td>
            <td>{{ $p->type }}</td>
            <td>{{ $p->hp }}</td>
            <td>{{ $p->attack }}</td>
            <td>{{ $p->defense }}</td>
            <td>
                <img src="{{ $p->image_url }}" width="80">
            </td>
            <td>
                <a href="/pokedexs/{{ $p->id }}/edit" class="btn btn-warning btn-sm">Edit</a>

                <form action="/pokedexs/{{ $p->id }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
