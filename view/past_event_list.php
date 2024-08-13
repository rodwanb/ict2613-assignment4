<?php include('header.php'); ?>
<main>
    <aside style="float: left; padding-right: 20px;">
        <br>
        <h1>Navigation</h1>
        <?php include 'view/main_nav.php'; ?>
    </aside>

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
                            </form>
                        </label>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="index.php?action=show_add_form">Add Event</a></p>
    </section>
</main>
<?php include('footer.php'); ?>