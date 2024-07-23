<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee House</title>
    <link rel="stylesheet" href="{{ asset('resources/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<script>
    var album = [];
    for (var i = 0; i < 3; i++) {
        album[i] = new Image();
        album[i].src = "layout/images/anh" + i + ".jpg";
    }
    var interval = setInterval(slideshow, 4000);
    index = 0;

    function slideshow() {
        index++;
        if (index > 3) {
            index = 0;
        }
        document.getElementById("banner").src = album[index].src;
    }

    function next() {
        index++;
        if (index > 3) {
            index = 0;
        }
        document.getElementById("banner").src = album[index].src;
    }

    function pre() {
        index--;
        if (index < 0) {
            index = 3;
        }
        document.getElementById("banner").src = album[index].src;
    }

    document.querySelector(".menu-icon").addEventListener("click", function () {
        document.querySelector(".menu").classList.toggle("show");
    });

</script>
<style>
    body {
        font-family: "Montserrat", sans-serif;
        margin: 0 auto;
        padding: 0;
    }

    nav {
        color: #fff;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .menu-icon {
        color: black;
        display: none;
        font-size: 1.5em;
        cursor: pointer;
    }

    .header {
        background-color: #fff;
        display: flex !important;
        justify-content: space-between !important;
        align-items: center;
        position: relative;
        z-index: 1;
        margin-bottom: -20px;
    }

    .header_inner {
        width: 100%;
        height: 50px;

        /* Để logo và menu chiếm toàn bộ width */
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    /* Chỉnh lại style cho menu */
    .menu {
        display: flex;
        align-items: center;
        margin: 0;
        padding: 0;
    }

    @media screen and (max-width: 1490px) {
        .menu {
            display: none;
        }

        .menu-icon {
            color: black;
            display: block;
            /* Hoặc display: inline; hoặc display: inline-block; */
            font-size: 1.5em;
            cursor: pointer;
        }

        .menu.show {
            display: flex;
            flex-direction: column;
            position: absolute;
            background-color: #fff;
            /* Đặt màu nền trắng */
            top: 100px;
            left: 0;
            right: 0;
            z-index: 2;
            transition: .25s linear;
        }
    }

    .menu_item {
        margin: 0 1rem;
        /* Giới hạn chiều rộng tối đa của menu_item */
        max-width: 200px;
        white-space: nowrap;
        /* Ngăn chữ xuống dòng */
        /* Ẩn nội dung bị tràn */
        text-overflow: ellipsis;
        /* Hiển thị dấu ba chấm (...) khi nội dung bị tràn */
    }

    .menu_item a {
        text-decoration: none;
        font-size: 1rem;
        font-weight: 600;
        color: #ed763b;
    }

    .menu_item a:hover {
        color: brown;
        font-size: 1.2rem;
    }

    .menu_child {
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background-color: white;
        display: flex;
        opacity: 0;
        visibility: hidden;
        transition: .25s linear;
    }

    .menu_child-item {
        width: 100%;
        padding: 2rem;
    }

    .menu_child-item h4 {
        color: white;
        font-size: 1.4rem;
        text-align: center;
    }

    .menu_child-item h4 a {
        text-decoration: underline;
        color: black;
    }

    .menu_child-item h4 a:hover {
        color: #993300;
    }

    .menu_child-list li a {
        color: gray;
    }

    .menu_child-list li a:hover {
        color: #993300;
    }

    .menu_child-item li {}

    .menudoc {
        width: 300px;
    }

    .menudoc .menu_child-list {
        padding-left: 7rem;
    }

    .menu-link {
        color: black;

    }

    footer {
        height: 300px;
    }

    .footer-left img {
        width: 300px;
        height: 130px;
    }

    #footer {
        width: 1440px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 60% 40%;
    }

    ul {
        list-style: none;
    }

    .card_2 ul,
    .card_3 ul {
        padding-left: 0;
    }

    .card_2 ul li,
    .card_3 ul li,
    .card_1 ul li {
        margin: 5px 0;
    }

    .card_1 i p {
        font-family: tahoma;
    }


    .tt ul li {
        margin: 10px 0;
    }

    .tt ul {
        padding-left: 0;
    }

    .footer-left {
        display: grid;
        grid-template-columns: 30% 70%;
    }

    .footer-right {
        display: grid;
        grid-template-columns: 80% 20%;
    }



    .ww {
        height: 460px;
        background-color: #715445;
    }

    .images .image img {
        width: 170px;
        height: 65px;
        border-radius: 5px;
    }

    .images {
        display: grid;
        grid-template-columns: 1fr 1fr;
        width: 360px;
    }

    .icons {
        margin-bottom: 20px;
    }

    .fb-page {
        margin: auto;
    }

    .card_2 ul li a,
    .card_3 ul li a {
        color: #fff;
        font-weight: 400;
    }

    .card_2 {
        width: 120px;
    }

    .card_2 ul li a:hover,
    .card_3 ul li a:hover {
        color: #000;

    }

    .gt {
        display: grid;
        grid-template-columns: 30% 70%;
        gap: 20px;
        width: 380px;
    }
</style>

<body>
<div class="header">
    <div class="header_inner">
        <div class="logo">
            <a href="{{ url('/') }}">
                <img src="{{ asset('layout/images/Web_Photo_Editor.jpg') }}" alt="">
            </a>
        </div>
        <nav>
            <div class="menu-icon">☰</div>
            <ul class="menu">
                <li class="menu_item"><a href="{{ url('/home') }}" class="menu_link">TRANG CHỦ</a></li>
                <li class="menu_item">
                    <a href="{{ url('category/list') }}" class="menu_link">SẢN PHẨM</a>
                    <div class="menu_child">
                        <div class="menu_child-item">
                            <h4><a href="#">Tất cả</a></h4>
                        </div>
                        <div class="menu_child-item">
                            <div class="menudoc">
                                <h4><a href="#">Tea</a></h4>
                                <ul class="menu_child-list">
                                    <li><a href="#">Trà trái cây</a></li>
                                    <li><a href="#">Trà thái</a></li>
                                    <li><a href="#">Trà sữa Matcha</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Add more menu_child-item as needed -->
                    </div>
                </li>
                <li class="menu_item"><a href="{{ url('#') }}" class="menu_link">DANH MỤC</a></li>
                <li class="menu_item"><a href="{{ url('#') }}" class="menu_link">GIỎ HÀNG</a></li>
                <li class="menu_item"><a href="{{ url('#') }}" class="menu_link">ĐƠN CỦA TÔI</a></li>
            </ul>
        </nav>
