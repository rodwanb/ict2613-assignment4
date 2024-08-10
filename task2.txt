<?php

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Assignment 4 - Task 2</title>
        <style>
            tr, td {
                padding: 5px;
            } 
            
            tr {
                vertical-align:top
            }
        </style>
    </head>

    <body>
        <?php include 'menu.inc'; ?>
        
        <br>
        <br>
        <table>
            <tr>
                <!--//////////////////////////////Task 2(a) //////////////////////////-->
                <td>
                    <label>a)</label>
                </td>
                <td>
                    <table id="tableA" border="1" style="border-collapse: collapse;">
                        <?php 
                        const MULTIPLIER = 5;
                        $index = 1;
                        while ($index <= 12): ?>
                            <tr>
                                <td>
                                    <label><?php echo $index; ?></label>
                                </td>
                                <td>
                                    <label><?php echo $index * MULTIPLIER; ?></label>
                                </td>
                            </tr>
                        <?php 
                            $index = $index + 1; 
                            endwhile; ?>
                    </table>
                </td>
            </tr>
            <tr>
                <!--//////////////////////////////Task 2(b) //////////////////////////-->
                <td>
                    <label>b)</label>
                </td>
                <td >
                    
                </td>
            </tr>
        </table>
        <br>

    </body>
    <footer>
        <iframe src="task2.txt" height="400" width="1200">
            Your browser does not support iframes. 
        </iframe> 
    </footer>
</html>