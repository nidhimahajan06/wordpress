<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Custom Theme</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" >
</head>
<body class="home blog logged-in admin-bar no-customize-support">
<header class="site-header">
</head>
<br>
<body style="background-color:rgb(255, 229, 229);">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CUSTOM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    </header>
<?php
if ( function_exists( 'soliloquy' ) ) { soliloquy( '41' ); }
?>
<br>
<center><h2  style="background-color: #ffb3d9;">Paragraph 1</h2></center>
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui officia est quod numquam maiores, aspernatur voluptatum ratione! Quo esse consequatur doloremque cumque quaerat animi quidem, explicabo dolore modi neque sapiente?</p>
<center><h2 style="background-color: #ffb3d9;">Paragraph 2</h2></center>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit, voluptates asperiores repellendus voluptatibus ea quod in autem quisquam consectetur blanditiis, et omnis reiciendis aliquid ducimus voluptatum. Dolorum ducimus veniam fuga?</p>
<hr>
<div class="container">
<div class="row">
<div class="col-sm-4">
<img src="http://localhost/wordpress1/wordpress/wp-content/uploads/2021/05/bg10-e1622191303836.jpg">
</div>
<div class="col-sm-4">
<img src="http://localhost/wordpress1/wordpress/wp-content/uploads/2021/05/bg10-e1622191303836.jpg">
</div>
<div class="col-sm-4">
<img src="http://localhost/wordpress1/wordpress/wp-content/uploads/2021/05/bg10-e1622191303836.jpg">
</div>
</div>
</div>
<hr>
<div class="container">
  <div class="row">
    <div class="col-md-2">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, ducimus?</p>
    </div>
    <div class="col-md-4">
      <h3 style="background-color:  #e6b3cc;"><b>Paragraph 3</b></h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus dolore eos nulla excepturi similique. Est.</p>
    </div>
    <div class="col-md-4">
      <h3 style="background-color:  #e6b3cc;"><b>Paragraph 4</b></h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus dolore eos nulla excepturi similique. Est.</p>
    </div>
    <div class="col-md-2">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, ducimus?</p>
    </div>
  </div>
</div>
<hr>
<div>
<h4 style="color:#660033;">Heading</h4>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis excepturi magnam nulla magni unde possimus necessitatibus quisquam quos nobis animi! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum esse excepturi exercitationem suscipit iste ex fugiat quidem odio molestias, neque vel tenetur accusantium. Voluptates dignissimos quibusdam placeat libero voluptatibus eaque.</p>
<h4 style="color:#660033;">Heading</h4>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis excepturi magnam nulla magni unde possimus necessitatibus quisquam quos nobis animi! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum esse excepturi exercitationem suscipit iste ex fugiat quidem odio molestias, neque vel tenetur accusantium. Voluptates dignissimos quibusdam placeat libero voluptatibus eaque.</p>
</div>
<hr>
<div>&nbsp;&nbsp;&nbsp;<img src="http://localhost/wordpress1/wordpress/wp-content/uploads/2021/05/bg5-e1622195447769.jpg";><span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, aspernatur. Lorem ipsum dolor sit lorem </span></div><br>
<div>&nbsp;&nbsp;&nbsp;<span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, aspernatur. Lorem ipsum dolor sit lorem </span><img src="http://localhost/wordpress1/wordpress/wp-content/uploads/2021/05/bg5-e1622195447769.jpg";></div>
</body>
</html>
<hr>