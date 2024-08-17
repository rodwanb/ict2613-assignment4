<?php
function get_events() {
    global $db;
    $query = 'SELECT * FROM events
              ORDER BY eventID';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;    
}

function get_upcoming_events() {
    global $db;
    $query = 'SELECT * FROM events
              WHERE endDateTime >= CURDATE()
              ORDER BY eventID';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;    
}

function get_past_events() {
    global $db;
    $query = 'SELECT * FROM events
              WHERE endDateTime < CURDATE()
              ORDER BY eventID';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;    
}

function get_event($event_id) {
    global $db;
    $query = 'SELECT * FROM events
              WHERE eventID = :event_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':event_id', $event_id);
    $statement->execute();
    $result = $statement->fetch();
    $statement->closeCursor();
    return $result;
}

function get_event_with_booking_summary($event_id) {
    global $db;
    $query = 'SELECT title, description, startDateTime, endDateTime, COALESCE(SUM(numberOfAttendees), 0) AS numberOfAttendees
              FROM events 
              LEFT JOIN bookings 
              ON bookings.eventID = events.eventID 
              WHERE events.eventID = :event_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':event_id', $event_id);
    $statement->execute();
    $result = $statement->fetch();
    $statement->closeCursor();
    return $result;
}

function add_event($title, $description, $start_date_time, $end_date_time) {
    global $db;
    $query = 'INSERT INTO events
                 (title, description, startDateTime, endDateTime)
              VALUES
                 (:title, :description, :start_date_time, :end_date_time)';
    $statement = $db->prepare($query);
    $statement->bindValue(':title', $title);
    $statement->bindValue(':description', $description);
    $statement->bindValue(':start_date_time', $start_date_time);
    $statement->bindValue(':end_date_time', $end_date_time);
    $statement->execute();
    $statement->closeCursor();
}

function update_event($event_id, $title, $description, $start_date_time, $end_date_time) {
    global $db;
    $query = 'UPDATE 
                events
              SET 
                title = :title,
                description = :description,
                startDateTime = :start_date_time,
                endDateTime = :end_date_time
              WHERE
                eventID = :event_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':event_id', $event_id);
    $statement->bindValue(':title', $title);
    $statement->bindValue(':description', $description);
    $statement->bindValue(':start_date_time', $start_date_time);
    $statement->bindValue(':end_date_time', $end_date_time);
    $statement->execute();
    $statement->closeCursor();
}

function delete_event($event_id) {
    global $db;
    $query = 'DELETE FROM events
              WHERE eventID = :event_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':event_id', $event_id);
    $statement->execute();
    $statement->closeCursor();
}
?>
