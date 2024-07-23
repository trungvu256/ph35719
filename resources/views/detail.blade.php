@extends('layouts')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ $book->thumbnail }}" class="img-fluid" alt="{{ $book->title }}">
            </div>
            <div class="col-md-6">
                <h1>{{ $book->title }}</h1>
                <p>Tác giả: {{ $book->author }}</p>
                <p>Nhà xuất bản: {{ $book->publisher }}</p>
                <p>Ngày xuất bản: {{ $book->publication }}</p>
                <p>Giá bán: {{ $book->price }} VND</p>
                <p>Số lượng: {{ $book->quantity }}</p>
            </div>
        </div>
    </div>
@endsection
