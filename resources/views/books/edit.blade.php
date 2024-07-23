<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container">
    <h1>Cập nhập sách sách</h1>
    <form action="{{ route('book.update', $book->id) }}" method="post">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $book->id }}">
        <div class="mb-3">
            <label for="" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $book->title }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Url thumbnail</label>
            <input type="text" name="thumbnail" class="form-control" value="{{ $book->thumbnail }}"
                   id="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Author</label>
            <input type="text" name="author" class="form-control" value="{{ $book->author }}" id="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Publisher</label>
            <input type="text" name="publisher" class="form-control" value="{{ $book->publisher }}"
                   id="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Publication</label>
            <input type="date" name="publication" class="form-control" value="{{ $book->publication }}"
                   id="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Price</label>
            <input type="number" step="0.1" name="price" class="form-control" value="{{ $book->price }}"
                   id="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Quantity</label>
            <input type="number" name="quantity" class="form-control" value="{{ $book->quantity }}" id="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Category Name</label>
            <select name="category_id" class="form-control" id="">
                @foreach ($categories as $cate)
                    <option value="{{ $cate->id }}" @if ($cate->id ===
                        $book->category_id) selected @endif>
                        {{ $cate->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-success">Update Book</button>
            <a href="{{ route('book.index') }}" class="btn btn-success">List</a>
        </div>
    </form>
</div>
</body>

</html>
