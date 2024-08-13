<?php
    require('model/database.php');
    require('model/learner_db.php');
    
    $events = [
        [
            'title' => 'Art exhibition',
            'description' => 'display of art by learners',
            'date' => '12-08-2024',
            'start_time' => '19h00',
            'end_time' => '21h00'
        ],
        [
            'title' => 'Art exhibition',
            'description' => 'display of art by learners',
            'date' => '12-08-2024',
            'start_time' => '19h00',
            'end_time' => '21h00'],
        [
            'title' => 'Art exhibition',
            'description' => 'display of art by learners',
            'date' => '12-08-2024',
            'start_time' => '19h00',
            'end_time' => '21h00'
        ]
    ];

    $action = filter_input(INPUT_POST, 'action');
    if ($action == NULL) {
        $action = filter_input(INPUT_GET, 'action');
        if ($action == NULL) {
            $action = 'list_upcoming_event';
        }
    }

    switch ($action) {
        case 'list_upcoming_event':
            include('view/upcoming_event_list.php');
            break;
        case 'list_past_event':
            include('view/past_event_list.php');
            break;
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
                $error_message = "learner_id = $learner_id; name = $name; surname = $surname; gender = $gender; date_of_birth = $date_of_birth";
//                $error_message = "Invalid learner data. Check all fields and try again.";
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
