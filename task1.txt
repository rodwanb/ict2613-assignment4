<?php
    $schools = [
       "Bellville Primary School", 
       "Kasselsvlei Primary",
       "Rouxville Primary School",
       "Soneike Private School",
       "Good Hope Primary School"
       ];
   
    $grades = range(1, 9);
   
    $action = filter_input(INPUT_POST, 'action');
    
    if ($action == 'register') {
        $name = filter_input(INPUT_POST, 'name');
        $surname = filter_input(INPUT_POST, 'surname');
        $school = filter_input(INPUT_POST, 'school');
        $grade = filter_input(INPUT_POST, 'grade', FILTER_VALIDATE_INT);
        $subjects = filter_input(INPUT_POST, 'subjects', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
        
        if ($name == NULL || $surname == FALSE || $school == NULL || $grade == NULL || $subjects === NULL) {
            $error = "Form is incomplete. Check all fields and try again.";
        } else { 
            $amount_due = 40.00 + (count($subjects) * 20.00);
            $message = "Registration successful! See below for details: \n\n"
                . "Name: $name \n"
                . "Surname: $surname \n"
                . "School: $school \n"
                . "Grade: $grade \n"
                . "Subject(s): " . implode(', ', $subjects) . "\n"
                . "Amount due: R $amount_due "; 
        }
    }
   
?>

<!DOCTYPE html>
<html>
<head>
    <title>Assignment 4 - Task 1</title>
</head>

<body>
    <?php include 'menu.inc'; ?>
    <h1>School learners national Olympiads registration</h1>
    <form action="task1.php" method="post" id="register_form">
        <input type="hidden" name="action" value="register">

        <table border="0">
        <tr>
            <td>
                <label>Name:</label>
            </td>
            <td>
                <input type="text" name="name" />
            </td>
        </tr>
        <tr>
            <td>
                <label>Surname:</label>
            </td>
            <td>
                <input type="text" name="surname" />
            </td>
        </tr>
        <tr>
            <td>
                <label>School name:</label>
            </td>
            <td>
                <select name="school">
                <?php foreach ( $schools as $school ) : ?>
                    <option value="<?php echo $school; ?>">
                        <?php echo $school; ?>
                    </option>
                <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <label>Grade:</label>
            </td>
            <td>
                <select name="grade">
                <?php foreach ($grades as $grade) : ?>
                    <option value="<?php echo $grade; ?>">
                        <?php echo $grade; ?>
                    </option>
                <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr style="vertical-align:top">
            <td>
                <label>Subjects:</label>
            </td>
            <td>
                <input type="checkbox" name="subjects[]" value="Mathematics"> 
                <label>Mathematics</label>
                <br>
                
                <input type="checkbox" name="subjects[]" value="Robotics"> 
                <label>Robotics</label>
                <br>
                
                <input type="checkbox" name="subjects[]" value="Life skills"> 
                <label>Life Skills</label>
                <br>
                
                <input type="checkbox" name="subjects[]" value="General knowledge"> 
                <label>General Knowledge</label>
                <br>
                
                <input type="checkbox" name="subjects[]" value="Arts"> 
                <label>Arts</label>
                <br>
                
                <input type="checkbox" name="subjects[]" value="Bible study"> 
                <label>Bible Study</label>
                <br>
            </td>
        </tr>
        <tr>
            <td>
                <label>&nbsp;</label>
            </td>
            <td>
                <input type="submit" value="Submit" />
            </td>
        </tr>
        </table>
    </form>
    
    <?php if($error !== NULL): ?>
        <h2>Error:</h2>
        <p><?php echo $error; ?></p>
    <?php elseif ($message !== NULL) : ?>
        <h2>Message:</h2>
        <p><?php echo nl2br(htmlspecialchars($message)); ?></p>
    <?php endif; ?>
    
    <br>
    
</body>
<footer>
    <iframe src="task1.txt" height="400" width="1200">
 Your browser does not support iframes. 
    </iframe> 
</footer>
</html>