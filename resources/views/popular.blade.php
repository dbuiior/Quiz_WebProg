<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popular</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/popular.css')}}">

    <link rel="stylesheet" href="{{asset('css/homePage.css')}}">
</head>
<body>
     <!-- Navbar -->
     <nav class="navbar navbar-expand-lg navbar-light shadow-lg">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a href=""><img src="{{ asset('assets/EF.png') }}" alt="logo-img"></a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ms-auto gap-5 me-3">
            <li class="nav-item">
                <a class="nav-link" href="{{route ('homePage')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route ('category')}}">Category</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{route ('writers')}}">Writers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route ('aboutUs')}}">About us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-primary" href="{{route ('popular')}}">Popular</a>
            </li>
            </ul>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Main -->
    <main>
    <div class="main-content mt-5">
    <div class="content d-flex justify-content-center align-items-start">
        <ul class="list-unstyled">
            @foreach ($articles as $article)
                <li class="content d-flex align-items-start mb-3">
                    <img src="{{ $article->image }}" alt="images" class="article-img" style="width: 150px; height: auto; margin-right: 15px;">
                    <div class="d-flex flex-column justify-content-between" style="flex-grow: 1;">
                        <div>
                            <strong>{{ $article->title }}</strong>
                            <p>Release Date: {{ $article->release_date }} by {{ $article->writer->writer_name }}</p>
                            <p class="short">{{ $article->description }}</p>
                        </div>
                        <a href="{{ route('details.show', $article->article_id) }}"><button class="btn btn-dark align-self-end">Read more</button></a>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>

 </main>

    <!-- Main End -->


    <!-- Footer -->
    <footer class="footer pt-3 bg-dark">
        <div class="text-center text-light">
            &copy; EduFun 2024 | Web Programming | Adior Gandawidjaja | 2602061725
        </div>
    </footer>
    <!-- Footer End -->
</body>
</html>