<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <title>Home</title>
<body>
<div class="banner">
    <h1>IAI TOGO LARAVEL</h1>
</div>
<div style="display: flex; flex-grow: 1;">
    <!-- Sidebar menu -->
    <div class="sidebar">
        <ul>
            <li><a href="{{ url('/page1') }}">Page 1</a></li>
            <li><a href="{{ url('/page2') }}">Page 2</a></li>
            <li><a href="{{ url('/page3') }}">Page 3</a></li>
        </ul>
    </div>
    <!-- Page Content -->
    <div class="page-content">
        @yield('content')
    </div>
</div>

<style>
    *{
        list-style: none;
        box-sizing: border-box;
        text-decoration: none;
        margin: 0;
        padding: 0;

    }

    body {
    font-family: "Nunito", sans-serif;
    display: flex;
    flex-direction: column;
    height: 100vh;
}
.banner {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 10px 0;
}
.sidebar {
    width: 200px;
    background-color: #f4f4f4;
    height: calc(100%);
    overflow-y: auto;
}
.sidebar ul {
    list-style: none;
    padding: 0;
    margin: 0;
}
.sidebar ul li a {
    display: block;
    padding: 10px;
    color: #333;
    text-decoration: none;
    transition: background-color 0.3s;
}
.sidebar ul li a:hover {
    background-color: #ddd;
}
.page-content {
    flex-grow: 1;
    padding: 20px;
    background-color: #fff;
    height: calc(100% - 40px); 
    overflow-y: auto;
}
</style>
    
</body>
</html>