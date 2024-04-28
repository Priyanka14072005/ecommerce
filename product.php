<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">

    <title>PRIDE MAX</title>
</head>
<body>
    <header class="bg-light">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="/">
                    <img src="logo.jpg" alt="PRIDE MAX" width="400">
                </a>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
<h1> <li class="nav-item"><a class="nav-link" href="product.php">Products</a></li></h1>
                        <h1><li class="nav-item"><a class="nav-link" href="cart.html"><i class="fas fa-shopping-cart"></i></a></li></h1>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    
    <!--- Products Section -->
    <div class="container my-5">
        <h2 class="text-center mb-4">Our Products</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            <!-- Product 1 -->
            <div class="col">
                <div class="card h-100">
                    <img src="dress1.jpeg" class="card-img-top" alt="Kurti sets">
                    <div class="card-body">
                        <h5 class="card-title">Kurti sets</h5>
                        <p class="card-text">$299.00</p>
                        <form action="cart.html" method="GET">
                            <input type="hidden" name="product" value="Kurti sets">
                            <input type="hidden" name="price" value="299.00">
                            <input type="hidden" name="quantity" value="1">
                            <input type="submit" class="btn btn-warning"  value="Add to Cart">
                        </form>
                    </div>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="col">
                <div class="card h-100">
                    <img src="dress2.jpeg" class="card-img-top" alt="Kurti sets">
                    <div class="card-body">
                        <h5 class="card-title">Kurti sets</h5>
                        <p class="card-text">$449.00</p>
                        <form action="cart.html" method="GET">
                            <input type="hidden" name="product" value="Kurti sets">
                            <input type="hidden" name="price" value="449.00">
                            <input type="hidden" name="quantity" value="1">
                            <input type="submit" class="btn btn-warning" value="Add to Cart">
                        </form>
                    </div>
                </div>
            </div>
            <!-- Product 3 -->
            <div class="col">
                <div class="card h-100">
                    <img src="dress3.jpeg" class="card-img-top" alt="Kurti sets">
                    <div class="card-body">
                        <h5 class="card-title">Kurti sets</h5>
                        <p class="card-text">$745.00</p>
                        <form action="cart.html" method="GET">
                            <input type="hidden" name="product" value="Kurti sets">
                            <input type="hidden" name="price" value="$745.00">
                            <input type="hidden" name="quantity" value="1">
                            <input type="submit" class="btn btn-warning" value="Add to Cart">
                        </form>
                    </div>
                </div>
            </div>
             <!-- Product 4 -->
             <div class="col">
                <div class="card h-100">
                    <img src="dress4.jpeg" class="card-img-top" alt="Kurti sets">
                    <div class="card-body">
                        <h5 class="card-title">Kurti sets</h5>
                        <p class="card-text">$699.00</p>
                        <form action="cart.html" method="GET">
                            <input type="hidden" name="product" value="Kurti sets">
                            <input type="hidden" name="price" value="$699.00">
                            <input type="hidden" name="quantity" value="1">
                            <input type="submit" class="btn btn-warning" value="Add to Cart">
                        </form>
                    </div>
                </div>
            </div>
             <!-- Product 5 -->
             <div class="col">
                <div class="card h-100">
                    <img src="dress5.jpeg" class="card-img-top" alt="Kurti sets">
                    <div class="card-body">
                        <h5 class="card-title">Kurti sets</h5>
                        <p class="card-text">$349.00</p>
                        <form action="cart.html" method="GET">
                            <input type="hidden" name="product" value="Kurti sets">
                            <input type="hidden" name="price" value="$349.00">
                            <input type="hidden" name="quantity" value="1">
                            <input type="submit" class="btn btn-warning" value="Add to Cart">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!--- Footer -->
     <footer class="bg-dark text-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="main 2.jpeg" class="mb-2" width="100">
                    <p>Explore the Fashion<br> With PRIDE MAX!</p>
                </div>
                </div>
                </div>
                <div class="col-md-3">
                    <h3>Follow Us</h3>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none text-light">Facebook</a></li>
                        <li><a href="#" class="text-decoration-none text-light">Twitter</a></li>
                        <li><a href="#" class="text-decoration-none text-light">Instagram</a></li>
                        <li><a href="#" class="text-decoration-none text-light">YouTube</a></li>
                    </ul>
                </div>
            </div>
</footer>
</body>

</body>
   