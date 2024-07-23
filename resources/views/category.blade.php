@extends('layouts')

@section('content')
    <div class="container">
        <h1 class="my-4">Books in {{ $category->name }}</h1>
        <div class="row">
            @foreach($books as $book)
                <div class="col-md-3">
                    <div class="card mb-4 shadow-sm">
                        <img src="{{ $book->thumbnail }}" class="card-img-top" alt="{{ $book->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->title }}</h5>
                            <a href="{{ url('/detail', ['id' => $book->id]) }}" class="btn btn-primary">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
