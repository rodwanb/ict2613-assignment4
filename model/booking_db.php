<?php
//function get_learners() {
//    global $db;
//    $query = 'SELECT * FROM learners
//              ORDER BY learnerID';
//    $statement = $db->prepare($query);
//    $statement->execute();
//    return $statement;    
//}
//
//function get_learner($learner_id) {
//    global $db;
//    $query = 'SELECT * FROM learners
//              WHERE learnerID = :learner_id';
//    $statement = $db->prepare($query);
//    $statement->bindValue(':learner_id', $learner_id);
//    $statement->execute();
//    $result = $statement->fetch();
//    $statement->closeCursor();
//    return $result;
//}

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

//function update_learner($learner_id, $name, $surname, $gender, $date_of_birth) {
//    global $db;
//    $query = 'UPDATE 
//                learners
//              SET 
//                name = :name,
//                surname = :surname,
//                gender = :gender,
//                dateOfBirth = :date_of_birth
//              WHERE
//                learnerID = :learner_id';
//    $statement = $db->prepare($query);
//    $statement->bindValue(':learner_id', $learner_id);
//    $statement->bindValue(':name', $name);
//    $statement->bindValue(':surname', $surname);
//    $statement->bindValue(':gender', $gender);
//    $statement->bindValue(':date_of_birth', $date_of_birth);
//    $statement->execute();
//    $statement->closeCursor();
//}
//
//function delete_learner($learner_id) {
//    global $db;
//    $query = 'DELETE FROM learners
//              WHERE learnerID = :learner_id';
//    $statement = $db->prepare($query);
//    $statement->bindValue(':learner_id', $learner_id);
//    $statement->execute();
//    $statement->closeCursor();
//}
?>
