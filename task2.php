<?php
    /****************************************************************
     * Author:  Rodwan Barbier
     * Purpose: Assignment 4 - Task 2
     * 
     ****************************************************************/

    //////////////////////////////Task 2(a) //////////////////////////
    // Multiplier to be used in times table
    const MULTIPLIER = 5;
    
    //////////////////////////////Task 2(b) //////////////////////////
    // function to evaluate outcome based on proctoring status and 
    // suspicious activity of student
    function evaluateAssessment(string $proc_status, bool $sus_activity) {
        return $proc_status == "pass" 
                ? "Release marks" 
                : ($sus_activity 
                    ? "Disciplinary case" 
                    : "Supplementary/cancel exam");
    }
    
    //////////////////////////////Task 2(c) //////////////////////////
    // 11 official languages to be used in form selection
    const LANGUAGES = [
        "English", "Afrikaans", "Northern Sotho", "IsiZulu",
        "IsiXhosa", "Sesotho", "IsiNdebele", "Setswana",
        "SiSwati", "Tshivenda", "Xitsonga"
    ];
    
    // incoming action from form submission
    $action = filter_input(INPUT_POST, 'action');
    
    // determine greeting based on selected language.
    if ($action == 'greet') {
        $selected_language = filter_input(INPUT_POST, 'language');
        switch ($selected_language) {
            case 'English': 
                $greeting = "Hello";
                break;
            case 'Afrikaans':
                $greeting = "Hallo";
                break;
            case 'Northern Sotho':
            case 'Sesotho':
            case 'Setswana':
                $greeting = "Dumela";
                break;
            case 'IsiZulu':
            case 'SiSwati':
                $greeting = "Sawubona";
                break;
            case 'IsiXhosa':
                $greeting = "Molo";
                break;
            case 'IsiNdebele':
                $greeting = "Lotjhani/Salibonani";
                break;
            case 'Tshivenda':
                $greeting = "Ndaa!/Aa! ";
                break;
            case 'Xitsonga':
                $greeting = "Xewani";
                break;
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Assignment 4 - Task 2</title>
        <style>
            tr, td, th {
                padding: 5px;
            } 
            
            tr {
                vertical-align:top;
            }
            
            th {
                text-align:left;
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
                <td>
                    <table id="tableA" border="1" style="border-collapse: collapse;">
                        <tr>
                            <th>Proctoring status</th>
                            <th>Suspicious activity status</th>
                            <th>Outcome</th>
                        </tr>
                        <tr>
                            <td>
                                <label>fail</label>
                            </td>
                            <td>
                                <label>false</label>
                            </td>
                            <td>
                                <label><?php echo evaluateAssessment("fail", false); ?></label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>fail</label>
                            </td>
                            <td>
                                <label>true</label>
                            </td>
                            <td>
                                <label><?php echo evaluateAssessment("fail", true); ?></label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>pass</label>
                            </td>
                            <td>
                                <label>false</label>
                            </td>
                            <td>
                                <label><?php echo evaluateAssessment("pass", false); ?></label>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <!--//////////////////////////////Task 2(c) //////////////////////////-->
                <td>
                    <label>c)</label>
                </td>
                <td>
                    <form action="task2.php" method="post" id="2c_form">
                        <input type="hidden" name="action" value="greet">
                        
                        <select name="language">
                            <?php foreach (LANGUAGES as $language) : ?>
                            <option value="<?php echo $language; ?>" <?php if (filter_input(INPUT_POST, 'language') == $language) echo 'selected="selected" '; ?> >
                                    <?php echo $language; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                      
                        <input type="submit" value="Submit" />
                        
                        <label>&nbsp;</label>
                        
                        <label><?php echo $greeting; ?></label>
                    </form>
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