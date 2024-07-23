@extends('layouts')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="my-4">Sản phẩm có giá cao nhất</h1>
                <div class="row">
                    @foreach($highestPricedBooks as $book)
                        <div class="col-md-3">
                            <div class="card mb-4 shadow-sm">
                                <img src="{{ $book->thumbnail }}" class="card-img-top" alt="{{ $book->title }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $book->title }}</h5>
                                    <p class="card-text">{{ $book->price }} VND</p>
                                    <a href="{{ url('/detail', ['id' => $book->id]) }}" class="btn btn-primary">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-md-12">
                <h1 class="my-4">Sản phẩm có giá thấp nhất</h1>
                <div class="row">
                    @foreach($lowestPricedBooks as $book)
                        <div class="col-md-3">
                            <div class="card mb-4 shadow-sm">
                                <img src="{{ $book->thumbnail }}" class="card-img-top" alt="{{ $book->title }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $book->title }}</h5>
                                    <p class="card-text">{{ $book->price }} VND</p>
                                    <a href="{{ url('/detail', ['id' => $book->id]) }}" class="btn btn-primary">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
