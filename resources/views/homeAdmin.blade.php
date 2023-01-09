<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>K&I - Home</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <div class="navbar">
            <nav class="fixed-top navbar navbar-expand-lg navbar-light bg-light">
                <div class="collapse navbar-collapse " id="navbarNav">
                    <ul class="navbar-nav container justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" href="/homeAdmin">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/viewAdmin">Books</a>
                        </li>
                        <li class="nav-item">
                            <form action="{{route('logout')}}" method="post">
                                @csrf
                                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Log Out</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>    
        </div>

        <div class="content" style="padding: 50px">
            <h1 class="text-center">Knowledge & Innovation Center</h1>
            <p>
                Knowledge & Innovation Center adalah wadah, terutama para mahasiswa untuk mencari buku dengan gratis dan mudah.
            </p>
        </div>

        <footer class="absolute-bottom text-center bg-success">
            <div class="text-center p-4 text-white">
                <b>© Kelompok 6 - Web Programming</b> 
            </div>
        </footer>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>