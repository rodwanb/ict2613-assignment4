<?php
    /****************************************************************
     * Author:  Rodwan Barbier
     * Purpose: Assignment 4 - Task 3
     * 
     ****************************************************************/

    //////////////////////////////Task 3(a) //////////////////////////
    
    // list of emails to use as input for task 3a
    const EMAILS = [
        "ICT2613@unisa.ac.za",
        "someone@gmail.com",
        "test_email@isa.it.uk"
    ];
    
    // function that accepts email address and displays local and domain
    // parts of it.
    function examineEmail(string $email) {
        $components = explode('@', $email);
        $local_part = $components[0];
        $domain_part = explode('.', $components[1]);
        $first_domain_part = array_shift($domain_part);
        $remaining_domain_parts = implode(', ', array_reverse($domain_part));
        
        return "The local part is $local_part, and the domain parts are $remaining_domain_parts and $first_domain_part.";
    }
    
    //////////////////////////////Task 3(b) //////////////////////////
    // List of input date formats to use in task 3b
    const DATE_FORMATS = [
        'd-m-Y', 
        'D j M Y',
        'l, d, F, Y'
    ];
    
    // Current date
    $now = new DateTime();
    
    // Next monday
    $next_monday = new DateTime('next monday');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Assignment 4 - Task 3</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php include 'menu.inc'; ?>
    <br>
    <br>
    <table>
        <tr>
            <!--//////////////////////////////Task 3(a) //////////////////////////-->
            <td>
                <label>a)</label>
            </td>
            <td>
                <table border="1" style="border-collapse: collapse;">
                    <?php foreach (EMAILS as $email): ?>
                        <tr>
                            <td>
                                <label><?php echo $email; ?></label>
                            </td>
                            <td>
                                <label><?php echo examineEmail($email); ?></label>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </td>
        </tr>
        <tr>
            <!--//////////////////////////////Task 3(b) //////////////////////////-->
            <td>
                <label>b)</label>
            </td>
            <td>
                <table border="1" style="border-collapse: collapse;">
                    <tr>
                        <th>Format</th>
                        <th>Today</th>
                        <th>Next Monday</th>
                    </tr>
                    <?php foreach (DATE_FORMATS as $format): ?>
                        <tr>
                            <td>
                                <label><?php echo $format; ?></label>
                            </td>
                            <td>
                                <label><?php echo $now->format($format); ?></label>
                            </td>
                            <td>
                                <label><?php echo $next_monday->format($format); ?></label>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </td>
        </tr>
    </table>
    <br>

</body>
<footer>
    <iframe src="task3.txt" height="400" width="1200">
        Your browser does not support iframes. 
    </iframe> 
</footer>
</html>