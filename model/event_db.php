<?php
function get_events() {
    global $db;
    $query = 'SELECT * FROM events
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

function add_event($title, $description, $date, $start_time, $end_time) {
    global $db;
    $query = 'INSERT INTO events
                 (title, description, date, startTime, endTime)
              VALUES
                 (:title, :description, :date, :start_time, :end_time)';
    $statement = $db->prepare($query);
    $statement->bindValue(':title', $title);
    $statement->bindValue(':description', $description);
    $statement->bindValue(':date', $date);
    $statement->bindValue(':start_time', $start_time);
    $statement->bindValue(':end_time', $end_time);
    $statement->execute();
    $statement->closeCursor();
}

function update_event($event_id, $title, $description, $date, $start_time, $end_time) {
    global $db;
    $query = 'UPDATE 
                events
              SET 
                title = :title,
                description = :description,
                date = :date,
                startTime = :start_time,
                endTime = :end_time
              WHERE
                eventID = :event_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':event_id', $event_id);
    $statement->bindValue(':title', $title);
    $statement->bindValue(':description', $description);
    $statement->bindValue(':date', $date);
    $statement->bindValue(':start_time', $start_time);
    $statement->bindValue(':end_time', $end_time);
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
