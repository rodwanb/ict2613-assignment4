<?php
   $schools = [
       "Bellville Primary School", 
       "Kasselsvlei Primary",
       "Rouxville Primary School",
       "Soneike Private School",
       "Good Hope Primary School"
       ];
   
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
                <?php foreach (range(1, 9) as $grade) : ?>
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
                <input type="checkbox" name="mathematics"> 
                <label>Mathematics</label>
                <br>
                
                <input type="checkbox" name="robotics"> 
                <label>Robotics</label>
                <br>
                
                <input type="checkbox" name="life_skills"> 
                <label>Life Skills</label>
                <br>
                
                <input type="checkbox" name="general_knowledge"> 
                <label>General Knowledge</label>
                <br>
                
                <input type="checkbox" name="arts"> 
                <label>Arts</label>
                <br>
                
                <input type="checkbox" name="bible_study"> 
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
        <br>
    </form>
    
</body>
<footer>
    <iframe src="task1.txt" height="400" width="1200">
 Your browser does not support iframes. 
    </iframe> 
</footer>
</html>