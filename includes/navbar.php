<!-- top navbar -->
<div class="top-navbar">
  <p>WELCOME TO OUR SHOP</p>
  <div class="icons">
    <a href="login.html"><img src="./images/register.png" alt="" width="18px" />Login</a>
    <a href="register.html"><img src="./images/register.png" alt="" width="18px" />Register</a>
  </div>
</div>
<!-- top navbar -->
<!-- navbar -->
<nav class="navbar navbar-expand-lg" id="navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.html" id="logo"><span id="span1"></span>
      <?php echo $tilte; ?> <span></span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span><img src="./images/menu.png" alt="" width="30px" /></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#product-cards">Product</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Saler
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown2" style="background-color: rgb(67 0 86)">
            <li><a class="dropdown-item" href="#">Whole saler</a></li>
            <li><a class="dropdown-item" href="#">Retailer</a></li>
            <li><a class="dropdown-item" href="#">Resaler</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: rgb(67 0 86)">
            <li><a class="dropdown-item" href="#">Samrt Phone</a></li>
            <li><a class="dropdown-item" href="#">Mobile Phone</a></li>
            <li><a class="dropdown-item" href="#">Cameras</a></li>
            <li><a class="dropdown-item" href="#">Fridge</a></li>
            <li><a class="dropdown-item" href="#">AC</a></li>
            <li><a class="dropdown-item" href="#">Samrt Watch</a></li>
            <li><a class="dropdown-item" href="#">Headphone</a></li>
            <li><a class="dropdown-item" href="#">Laptop</a></li>
            <li><a class="dropdown-item" href="#">PC Moniter</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html">Contact</a>
        </li>
      </ul>
      <form class="d-flex" id="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
        <button class="btn btn-outline-success" type="submit">
          Search
        </button>
      </form>
    </div>
  </div>
</nav>
<!-- navbar -->