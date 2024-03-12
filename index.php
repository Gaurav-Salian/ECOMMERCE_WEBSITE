<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-com site using php and my sql</title>
    <!---------------------------- BOOTSTRAP LINK---------------- -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!------------------------ CONTENT DELIVERY NETWORK------------------------------- -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!----------------------------- LINK CSS-------------------- -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-------------------------- NAVBAR----------- -->
    <div class="container-fluid p-0">
      <!-- FIRST CHILD  -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <img src="images/logo.png" alt="" class="logo">    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cart<i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price:100/-</a>
        </li>
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- SECOND CHILD -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a href="#" class="nav-link">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Login</a>
        </li>
      </ul>
    </nav>
<!----------- THIRD CHILD--------------------- -->
    <div class="bg-light">
      <h3 class="text-center">Hidden Store</h3>
      <p class="text-center">This is subtitle</p>
    </div>

<!-- FORTH CHILD -->
    <div class="row">
      <div class="col-md-10">
        <!-- PRODUCTS -->
        <div class="row">
          <div class="col-md-4 mb-2">
            <div class="card" style="width: 18rem;">
              <img src="images/apple.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-info">Add to cart</a>
                  <a href="#" class="btn btn-secondary">view more</a>
                </div>
            </div>
          </div>
          <div class="col-md-4 mb-2">
            <div class="card" style="width: 18rem;">
              <img src="images/capsicum1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-info">Add to cart</a>
                  <a href="#" class="btn btn-secondary">view more</a>
                </div>                
            </div>
          </div>
          <div class="col-md-4 mb-2">
          <div class="card" style="width: 18rem;">
            <img src="images/dairy1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-info">Add to cart</a>
                <a href="#" class="btn btn-secondary">view more</a>              
              </div>
          </div>
          </div>
          <div class="col-md-4 mb-2">
            <div class="card" style="width: 18rem;">
              <img src="images/dairy1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-info">Add to cart</a>
                  <a href="#" class="btn btn-secondary">view more</a>                
                </div>
            </div>
          </div>
          <div class="col-md-4 mb-2">
            <div class="card" style="width: 18rem;">
              <img src="images/dairy1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-info">Add to cart</a>
                  <a href="#" class="btn btn-secondary">view more</a>
                </div>
            </div>
          </div>
          <div class="col-md-4 mb-2">
            <div class="card" style="width: 18rem;">
              <img src="images/dairy1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-info">Add to cart</a>
                  <a href="#" class="btn btn-secondary">view more</a>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-2 bg-secondary p-0">
        <!-- sidenav -->
        <!-- BRANDS -->
        <ul class="navbar-nav me-auto text-center">
          <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4></a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-light">Brand1</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-light">Brand2</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-light">Brand3</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-light">Brand4</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-light">Brand5</a>
          </li>
        </ul>

        <!-- CATEGORIES -->
        <ul class="navbar-nav me-auto text-center">
          <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-light">Categories1</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-light">Categories2</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-light">Categories3</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-light">Categories4</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-light">Categories5</a>
          </li>
        </ul>

      </div>
    </div>


    <!-- LAST CHILD -->
    <div class="bg-info p-3 text-center footer">
      <p>All rights reserved  designed by Gaurav</p>
    </div>
  </div>
</body>
<!-- -------------------------------BOOTSTRAP----------------------- -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>

