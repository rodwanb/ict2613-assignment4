<?php

function add_booking($learnerID, $eventID, $booker_name, $booker_email, $booker_cell_number, $number_of_attendees) {
    global $db;
    $query = 'INSERT INTO bookings
                 (learnerID, eventID, bookerName, bookerEmail, bookerCellNumber, numberOfAttendees)
              VALUES
                 (:learnerID, :eventID, :booker_name, :booker_email, :booker_cell_number, :number_of_attendees)';
    $statement = $db->prepare($query);
    $statement->bindValue(':learnerID', $learnerID);
    $statement->bindValue(':eventID', $eventID);
    $statement->bindValue(':booker_name', $booker_name);
    $statement->bindValue(':booker_email', $booker_email);
    $statement->bindValue(':booker_cell_number', $booker_cell_number);
    $statement->bindValue(':number_of_attendees', $number_of_attendees);
    $statement->execute();
    $statement->closeCursor();
}
?>
