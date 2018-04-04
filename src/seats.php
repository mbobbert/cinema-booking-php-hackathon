<?php

//Display the seats
// Read from the database
// Change the class according to the database

?>
<html>
 <body>
        <div id="seat-area">

        <table>
<?php
$seats = [];
$statement = $pdo->query("SELECT token FROM seats");
while (false !== ($token = $statement->fetchColumn())) {
    $seats[]= $token;
}

foreach($seats as $seat)
{
    $seatstatus = 'available';

    if ($seat == 1){
        $seatstatus = 'occupied';
    }

    echo '<img src="img/seat.png" alt="">
    <div class="'.
    $seatstatus
    .'"></div>';
}

// testing if the next few lines work

// $booked = [];
// $statement = $pdo->query("SELECT bookings.SeatNumber FROM `bookings` WHERE bookings.SeatNumber !=0");
// while (false !== ($seat_number = $statement->fetchColumn())) {
// $booked[]= $seat_number;}


// // loop through the array to update the seats table
//     //   UPDATE `seats` SET `token`=1 WHERE id = 3

//       foreach($booked as $bookedseat){


//           $statement = $pdo->prepare("UPDATE `seats` SET `token`= 1 WHERE id = ?");
//           $result = $statement->execute([$bookedseat]);
//         }






?>
</table>

        <!-- <img src="img/seat.png" alt="">
        <div class="occupied"></div>
        <img src="img/seat.png" alt="">
        <div class="available"></div>
        <img src="img/seat.png" alt="">
        <div class="occupied"></div>
        <img src="img/seat.png" alt="">
        <div class="available"></div>
        <img src="img/seat.png" alt="">
        <div class="available"></div>
        <img src="img/seat.png" alt="">
        <div class="available"></div>
        <img src="img/seat.png" alt="">
        <div class="occupied"></div>
        <img src="img/seat.png" alt="">
        <div class="available"></div> -->
        </div>
 </body>
</html>