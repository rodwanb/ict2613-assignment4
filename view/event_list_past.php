<?php include('header.php'); ?>
<main>
    <aside style="float: left; padding-right: 20px;">
        <br>
        <h1>Navigation</h1>
        <?php include 'view/main_nav.php'; ?>
    </aside>

    <section style="float: left;">
        <br>
        <h1>Past events</h1>
        <table border="1" style="border-collapse: collapse;">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Date</th>
                <th>Start time</th>
                <th>End time</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($events as $event) : ?>
                <tr>
                    <td><?php echo $event['eventID']; ?></td>
                    <td><?php echo $event['title']; ?></td>
                    <td><?php echo $event['description']; ?></td>
                    <td><?php echo date('j F Y', strtotime($event['startDateTime'])); ?></td>
                    <td><?php echo date('H:i', strtotime($event['startDateTime'])); ?></td>
                    <td><?php echo date('H:i', strtotime($event['endDateTime'])) ?></td>
                    <td>
                        <label>
                            <form method="get" style="float: left; margin: 2px;">
                                <input type="hidden" name="action" value="show_edit_event">
                                <input type="hidden" name="event_id" value="<?php echo $event['eventID']; ?>">
                                <input type="submit" value="View" >
                            </form>
                        </label>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <br><br>
    </section>
</main>
<?php include('footer.php'); ?>