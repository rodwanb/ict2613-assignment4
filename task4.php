<?php
    require('model/database.php');
    require('model/learner_db.php');
    require('model/event_db.php');
    
    $action = filter_input(INPUT_POST, 'action');
    if ($action == NULL) {
        $action = filter_input(INPUT_GET, 'action');
        if ($action == NULL) {
            $action = 'list_upcoming_event';
        }
    }

    switch ($action) {
        //////////////// events //////////////////
        case 'list_upcoming_event':
            $events = get_upcoming_events();
            include('view/event_list_upcoming.php');
            break;
        case 'list_past_event':
            $events = get_past_events();
            include('view/event_list_past.php');
            break;
        case 'show_add_event':
            include('view/event_add.php');
            break;
        case 'add_event':
            $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
            $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
            $date = filter_input(INPUT_POST, 'date');            
            $start_time = date('H:i:s', strtotime(filter_input(INPUT_POST, 'start_time')));
            $end_time = date('H:i:s', strtotime(filter_input(INPUT_POST, 'end_time')));
                    
            $start_date_time = date('Y-m-d H:i:s', strtotime("$date $start_time"));            
            $end_date_time = date('Y-m-d H:i:s', strtotime("$date $end_time"));
            
            if ($title == NULL || $description == NULL || $start_date_time == NULL ||  $end_date_time == NULL) {
                $error_message = "Invalid event data. Check all fields and try again.";
                include('view/error.php');
            } else { 
                add_event($title, $description, $start_date_time, $end_date_time);
                header("Location: task4.php?action=list_upcoming_event");
            }
            break;
        case 'show_edit_event':
            $event_id = filter_input(INPUT_GET, 'event_id');
            $event = get_event($event_id);
            include('view/event_edit.php');
            break;
        case 'update_event':
            $event_id = filter_input(INPUT_POST, 'event_id', FILTER_SANITIZE_STRING);
            $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
            $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
            $date = filter_input(INPUT_POST, 'date');            
            $start_time = date('H:i:s', strtotime(filter_input(INPUT_POST, 'start_time')));
            $end_time = date('H:i:s', strtotime(filter_input(INPUT_POST, 'end_time')));
                    
            $start_date_time = date('Y-m-d H:i:s', strtotime("$date $start_time"));            
            $end_date_time = date('Y-m-d H:i:s', strtotime("$date $end_time"));
            
            if ($event_id == NULL || $title == NULL || $description == NULL || $start_date_time == NULL ||  $end_date_time == NULL) {
                $error_message = "Invalid event data. Check all fields and try again.";
                include('view/error.php');
            } else { 
                update_event($event_id, $title, $description, $start_date_time, $end_date_time);
                header("Location: task4.php?action=list_upcoming_event");
            }
            break;
        case 'delete_event':
            $event_id = filter_input(INPUT_POST, 'event_id', FILTER_VALIDATE_INT);
            if ($event_id == NULL || $event_id == FALSE) {
                $error_message = "Missing or incorrect event id";
                include('view/error.php');
            } else {
                delete_event($event_id);
                header('Location: task4.php?action=list_upcoming_event');
            }
            break;
        //////////////// events //////////////////
        case 'list_learner':
            $learners = get_learners();
            include('view/learner_list.php');
            break;
        case 'show_add_learner':
            include('view/learner_add.php');
            break;
        case 'add_learner':
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $surname = filter_input(INPUT_POST, 'surname', FILTER_SANITIZE_STRING);
            $gender = filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_STRING);
            $dateOfBirth = filter_input(INPUT_POST, 'dateOfBirth');
            if ($name == NULL || $surname == NULL || $gender == NULL ||  $dateOfBirth == NULL) {
                $error_message = "Invalid learner data. Check all fields and try again.";
                include('view/error.php');
            } else { 
                add_learner($name, $surname, $gender, $dateOfBirth);
                header("Location: task4.php?action=list_learner");
            }
            break;
        case 'show_edit_learner':
            $learner_id = filter_input(INPUT_GET, 'learner_id');
            $learner = get_learner($learner_id);
            include('view/learner_edit.php');
            break;
        case 'update_learner':
            $learner_id = filter_input(INPUT_POST, 'learner_id', FILTER_SANITIZE_STRING);
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $surname = filter_input(INPUT_POST, 'surname', FILTER_SANITIZE_STRING);
            $gender = filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_STRING);
            $date_of_birth = filter_input(INPUT_POST, 'date_of_birth');
            if ($learner_id == NULL || $name == NULL || $surname == NULL || $gender == NULL || $date_of_birth == NULL) {
//                $error_message = "learner_id = $learner_id; name = $name; surname = $surname; gender = $gender; date_of_birth = $date_of_birth";
                $error_message = "Invalid learner data. Check all fields and try again.";
                include('view/error.php');
            } else { 
                update_learner($learner_id, $name, $surname, $gender, $date_of_birth);
                header("Location: task4.php?action=list_learner");
            }
            break;
        case 'delete_learner':
            $learner_id = filter_input(INPUT_POST, 'learner_id', FILTER_VALIDATE_INT);
            if ($learner_id == NULL || $learner_id == FALSE) {
                $error_message = "Missing or incorrect learner id";
                include('view/error.php');
            } else {
                delete_learner($learner_id);
                header('Location: task4.php?action=list_learner');
            }
            break;
    }
?>
