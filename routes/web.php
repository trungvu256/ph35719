<?php

use App\Http\Controllers\BookController;
use \App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('admin.categories.home');
});
Route::prefix('category')->group(function () {
    Route::get('/list',[CategoryController::class, 'list'])->name('category.index');
    Route::get('/product',[CategoryController::class, 'getAll'])->name('category.index');
});

Route::get('/about-us', function () {
    return "TRANG GIỚI THIỆU";
})->name('page.about');

//Route::view('/contact', 'contact');
//Route::get('/product/{id}', function (int $id) {
//    return "PRODUCT ID: $id";
//});
Route::get(
    '/product/{id}/comment/{comment_id}',
    function ($id, $comment_id) {
        return "Product ID: $id - Comment id: $comment_id";
    }
)->where('id', '[0-9]+');

//Nhóm tiền tố đường dẫn
Route::prefix('admin')->group(function () {
    Route::get('product', function () {
        return "PRODUCT";
    });

    Route::get('/users', function () {
        return "USERS";
    });
});
Route::get('/', function () {
    $highestPricedBooks = DB::table('books')->orderBy('price', 'desc')->take(8)->get();
    $lowestPricedBooks = DB::table('books')->orderBy('price', 'asc')->take(8)->get();
    $categories = DB::table('categories')->get();
    return view('index', compact('highestPricedBooks', 'lowestPricedBooks', 'categories'));
});
Route::get('/', [BookController::class, 'index'])->name('book.index');
Route::get('/create', [BookController::class, 'create'])->name('book.create');
Route::post('/create', [BookController::class, 'store'])->name('book.store');
Route::get('/edit/{id}', [BookController::class, 'edit'])->name('book.edit');
Route::put('/edit/{id}', [BookController::class, 'update'])->name('book.update');
Route::delete('/delete/{id}', [BookController::class, 'destroy'])->name('book.destroy');
Route::get('/category/{id}', function ($id) {
    $category = DB::table('categories')->find($id);
    $books = DB::table('books')->where('category_id', $id)->get();
    return view('category', compact('category', 'books'));
});

Route::get('/detail/{id}', function ($id) {
    $book = DB::table('books')->find($id);
    return view('detail', compact('book'));
});
//Route::prefix('category')->group(function () {
//Route::get('/list',[CategoryController::class, 'index'])->name('category.index');
//});

//Áp dụng query builder
Route::get('/posts', function () {
    // $posts = DB::table('posts')->get(); //lấy dữ liệu bảng posts
    //Lấy dữ liệu theo số lượng bản ghi
    // $posts = DB::table('posts')
    //     ->limit(10)
    //     ->get();
    //Lấy ra tất cả các bài viết có lượt xem (view) > 800

    //Cập nhật dữ liệu
    // DB::table('posts')
    //     ->where('id', '=', 2)
    //     ->update([
    //         'title' => 'Bài viết đươc cập nhật'
    //     ]);
    //Xóa dữ liệu
    // DB::table('posts')->where('id', '=', 6)->delete();

    // $posts = DB::table('posts')
    //     ->where('view', '>', 800)
    //     ->get();
    //Nối 2 bảng categories và posts
    $posts = DB::table('posts')
        ->join('categories', 'cate_id', '=', 'categories.id')
        ->get();
    return $posts;
});




