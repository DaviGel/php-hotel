<?php
    $hotels = [
        [
          'name' => 'Hotel Belvedere',
          'description' => 'Hotel Belvedere Descrizione',
          'parking' => true,
          'vote' => 4,
          'distance_to_center' => 10.4
        ],
        [
          'name' => 'Hotel Futuro',
          'description' => 'Hotel Futuro Descrizione',
          'parking' => true,
          'vote' => 2,
          'distance_to_center' => 2
        ],
        [
          'name' => 'Hotel Rivamare',
          'description' => 'Hotel Rivamare Descrizione',
          'parking' => false,
          'vote' => 1,
          'distance_to_center' => 1
        ],
        [
          'name' => 'Hotel Bellavista',
          'description' => 'Hotel Bellavista Descrizione',
          'parking' => false,
          'vote' => 5,
          'distance_to_center' => 5.5
        ],
        [
          'name' => 'Hotel Milano',
          'description' => 'Hotel Milano Descrizione',
          'parking' => true,
          'vote' => 2,
          'distance_to_center' => 50
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
    <!-- /Bootstrap -->
    <title>PHP Hotel</title>
  </head>
  <body>
    <div class="container mt-5">
      <h1>Hotel</h1>
      <form action="" method="GET" class="my-4">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="true" id="flexCheckDefault" name="parking">
          <label class="form-check-label" for="flexCheckDefault">
            Parking
          </label>
          <button type="submit" class="btn btn-primary btn-sm">Small button</button>
        </div>
      </form>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Parking</th>
            <th scope="col">Vote</th>
            <th scope="col">Distance to center</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $parking = $_GET['parking'] ?? false;
            foreach($hotels as $hotel) {
              echo '<tr>';
              foreach($hotel as $key => $informations) {
                if($parking == true) {
                  if($key === 'parking' && $informations === true) {
                    echo "<td>$informations</td>";
                  } 
                } else {
                  if($key === 'parking') {
                    echo ($informations ? "<td>Yes</td>" : "<td>No</td>");
                  } else {
                    echo "<td>$informations</td>";
                  }
                }
              }
              echo '</tr>';
            }
          ?>
        </tbody>
      </table>
    </div>
  </body>
</html>

<!-- 
  foreach($hotels as $hotel) {
    echo '<tr>';
    foreach($hotel as $key => $informations) {
      if($key === 'parking') {
        echo ($informations ? "<td>Yes</td>" : "<td>No</td>");
      } else {
        echo "<td>$informations</td>";
      }
    }
    echo '</tr>';
  }
-->