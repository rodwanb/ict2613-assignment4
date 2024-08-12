<?php
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
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Assignment 4 - Task 4</title>
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <?php include 'menu.inc'; ?>


        <aside style="float: left; padding-right: 10px;">
            <!--            <h1>Categories</h1>-->
            <br><br><br><br>
            <nav>
                <ul>
                    <li>
                        <a href="task4.php">Upcoming events</a>
                    </li>
                    <li>
                        <a href="task4.php">Past events</a>
                    </li>
                    <li>
                        <a href="task4.php">Learners</a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!--        <div style="text-align: center">
                    <a href="task1.php">Events</a> | <a href="task1.php">Learners</a>
                </div>-->

        <section style="float: left;">
            <!-- display a table of events -->
            <br>
            <h1>Upcoming events</h1>
            <table border="1" style="border-collapse: collapse;">
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Start time</th>
                    <th>End time</th>
                    <th>&nbsp;</th>
                </tr>
                <?php foreach ($events as $event) : ?>
                    <tr>
                        <td><?php echo $event['title']; ?></td>
                        <td><?php echo $event['description']; ?></td>
                        <td><?php echo $event['date']; ?></td>
                        <td><?php echo $event['start_time']; ?></td>
                        <td><?php echo $event['end_time']; ?></td>
                        <td>
                            <label>
                                <form action="." method="post">
                                    <input type="hidden" name="action"
                                           value="delete_product">
                                    <input type="hidden" name="product_id"
                                           value="<?php echo $product['productID']; ?>">
                                    <input type="hidden" name="category_id"
                                           value="<?php echo $product['categoryID']; ?>">
                                    <input type="submit" value="Edit">
                                    <input type="submit" value="Delete">
                                    <input type="submit" value="Book">
                                </form>
                            </label>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <p><a href="index.php?action=show_add_form">Add Event</a></p>
        </section>

    </body>
</html>