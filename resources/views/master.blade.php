<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('user.include.style')
    <title>@yield('title')
    </title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand font" href="#">Blog-Site</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active font mx-3" aria-current="page" href="{{route ('home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active font mx-3" aria-current="page" href="{{route ('addProduct')}}">Add-Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active font mx-3" aria-current="page" href="{{route ('viewProduct')}}">View-Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active font mx-3" aria-current="page" href="{{route ('donateProduct')}}">Donate</a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link active font mx-3" aria-current="page" href="{{route ('insertBlog')}}">InsertBlog</a>
              </li> --}}
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-light textFont" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

      @yield('content')
    <footer>
        <footer class="bg-dark text-white text-center font"><br><p>@copy Design and Developed by Taslim Kabir <br><br></p></footer>
    </footer>
    @include('user.include.script')
</body>
</html>