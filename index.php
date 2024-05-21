<?php

$hotels = [

  [
    'name' => 'Hotel Belvedere',
    'description' => 'Hotel Belvedere Descrizione',
    'parking' => true,
    'vote' => 4,
    'distance_to_center' => 10.4,
    'photos' => 'https://i.pinimg.com/474x/7a/a1/94/7aa19415266b8ad0ad570b7d2ecc3e8e.jpg'
  ],
  [
    'name' => 'Hotel Futuro',
    'description' => 'Hotel Futuro Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 2,
    'photos' => 'https://i.pinimg.com/474x/2a/11/2f/2a112f695462f797da807fa7a03b6f39.jpg'
  ],
  [
    'name' => 'Hotel Rivamare',
    'description' => 'Hotel Rivamare Descrizione',
    'parking' => false,
    'vote' => 1,
    'distance_to_center' => 1,
    'photos' => 'https://i.pinimg.com/474x/83/e1/be/83e1be3c454085429418d6b455b98280.jpg'
  ],
  [
    'name' => 'Hotel Bellavista',
    'description' => 'Hotel Bellavista Descrizione',
    'parking' => false,
    'vote' => 5,
    'distance_to_center' => 5.5,
    'photos' => 'https://i.pinimg.com/474x/3a/f8/d8/3af8d8edd38b45f806bba278f00ff5a1.jpg',
  ],
  [
    'name' => 'Hotel Milano',
    'description' => 'Hotel Milano Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 50,
    'photos' => 'https://i.pinimg.com/474x/52/eb/bb/52ebbb41ad6bd5bee8f889e2fbd6ef19.jpg',
  ],

];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Hotel</title>

  <!-- Bootstrap  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-5 g-3">

      <?php foreach ($hotels as $hotel) { ?>
        <div class="col">
          <div class="card">
            <img src="<?php echo $hotel['photos'] ?>" class="card-img-top img-fluid" alt="<?php echo $hotel['name'] ?>">
            <div class="card-body">
              <h5 class="card-title"><?php echo $hotel["name"] ?></h5>
              <p class="card-text"><?php echo $hotel["description"]  ?></p>

              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      <?php } ?>

    </div>

  </div>
</body>

</html>