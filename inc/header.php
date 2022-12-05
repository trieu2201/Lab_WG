
<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <title>Web Programming</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Staatliches">
    <script src="index.js"></script>
</head>
<body>
  <div>
  <div class="bg-info p-3">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
      <a href="http://localhost/trieu.com/" class="col-md-4 d-flex align-item-left justify-content-left ">
        <img src="https://e-learning.hcmut.edu.vn/pluginfile.php/1/core_admin/logocompact/300x300/1664529688/logoBK.png" class="logo mr-1" alt="BKEL" style="width:77px;">
      </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
        <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="http://localhost/trieu.com/index.php?page=home">Home</a>
            </li>
            
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="http://localhost/trieu.com/index.php?page=product"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
              Products
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="http://localhost/trieu.com/index.php?page=product/chuot">Mouse</a></li>
                <li><a class="dropdown-item" href="http://localhost/trieu.com/index.php?page=product/tainghe">Headphone</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="http://localhost/trieu.com/index.php?page=product">All Products</a>
                </li>
              </ul>
            </li>
            <?php if (!isset($_SESSION['usernames'])) { ?>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/trieu.com/index.php?page=login">Login</a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="http://localhost/trieu.com/index.php?page=register"
                >Register</a
              >
            </li>

            <?php } else { ?>
              <li class="nav-item">
              <a class="nav-link" href="http://localhost/trieu.com/index.php?page=logout">Log Out</a>
            </li>
            <?php } ?>
            
          </ul>
          <form action="function/search.php" method="post" class="d-flex">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
              name="search-name"
            />
            <button class="btn btn-outline-success" name="search-submit" type="submit">
              Search
            </button>
          </form>
        </div>

      </div>
    </nav>
  </div>
