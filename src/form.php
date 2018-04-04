<?php

$pdo = new PDO(
  'mysql:host=localhost;dbname=cinema_booking','root', 'rootroot'
);


if (count($_POST) > 0)
{
  $seatNumber = filter_input(INPUT_POST, 'seatNumber', FILTER_VALIDATE_INT);
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL); // is the given value a email?
  $name = filter_input(INPUT_POST, 'name');

  if (!$seatNumber || !$email || $name == ' ')
  {
      header('Location: ?success=no');
  } else {
      //future INSERT into bookings table
      $statement = $pdo->prepare('INSERT INTO bookings (Name, Email, SeatNumber ) VALUES (?, ?, ?)');
      $result = $statement->execute([$name, $email, $seatNumber]);
      //update the Seats table

      //An array of all the seats that were booked in bookings:
      $booked = [];

      // read from the Bookings table to have an array
      //SELECT bookings.SeatNumber FROM `bookings` WHERE bookings.SeatNumber !=0

      $statement = $pdo->query("SELECT bookings.SeatNumber FROM `bookings` WHERE bookings.SeatNumber !=0");
      while (false !== ($seat_number = $statement->fetchColumn())) {
      $booked[]= $seat_number;}

      //loop through the array to update the seats table
      //UPDATE `seats` SET `token`=1 WHERE id = 3

      foreach($booked as $bookedseat){
        $statement = $pdo->prepare("UPDATE `seats` SET `token`= 1 WHERE id = ?");
        $result = $statement->execute([$bookedseat]);
      }

      $statement = $pdo->prepare('UPDATE seats SET

      WHERE bookings.

       (Name, Email, SeatNumber ) VALUES (?, ?, ?)');
      $result = $statement->execute([$name, $email, $seatNumber]);

  header('Location: ?success=yes');
  }
}


$success = filter_input(INPUT_GET, 'success');
if ($success == 'no') echo '<p style="color: red">fail</p>';
if ($success == 'yes') echo '<p style="color: green">success</p>';
?>




<form method="post">

    <!-- <div class="form-group col-md-6">
      <label for="inputId">ID</label>
      <input type="text" name="id" class="form-control" id="inputId" placeholder="ID">
    </div> -->
                <div class="form-group col-md-6">
                  <label for="inputName">Name</label>
                  <input type="text" name="name" class="form-control" id="inputName" placeholder="First and last name">
                </div>

  <div class="form-group">
    <label for="inputEmail">Email</label>
    <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="inputSeatNumber">Seat number</label>
    <input type="text" name="seatNumber" class="form-control" id="inputSeatNumber" placeholder="Seat Number">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>