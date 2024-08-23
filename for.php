<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGINA INICIAL DO SITE</title>
    <link href="bootstrap.css" rel="stylesheet" />
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">AULA PWII</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Pagina inicial</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="variavel.php">variavel.php</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="if.php">if</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="while.php">while</a></li>
            <li><a class="dropdown-item" href="for.php">for</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="foreach.php">Foreach</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="bootstrap.php">"Bootstrap"</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<div class="container">                 
 <h1> Laço de repetição for </h1>
 <p> Esse laço de repetição é mais utilizado e mais pratico </p>
<pre>
    for($i = 0; $i < 10; $i++ ) {
        echo "$i";
    }
</pre>
<?php
for($i = 0; $i<= 10; $i++) {
    echo "<b>OI <b> </br>";
}
?>
 
</div>
    <script src="bootstrap.bundle.min.js"> </script>
</body>
</html>