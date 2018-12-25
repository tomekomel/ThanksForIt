@extends('layouts.master')

@section('main')

<div>
    <h1>Dodaj powód wdzięczności</h1>

    <form method="POST" action="/causes">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="body">Jest wdzięczny za:</label>
            <input type="text" name="body" id="body">
        </div>
        <div class="form-group">
            <input type="submit" value="Zapisz to!">
        </div>
    </form>
</div>

@endsection('main')
