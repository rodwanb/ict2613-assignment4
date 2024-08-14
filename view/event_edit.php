<?php include('header.php'); ?>
<main>
    <aside style="float: left; padding-right: 20px;">
        <br>
        <h1>Navigation</h1>
        <?php include 'view/main_nav.php'; ?>
    </aside>

    <section style="float: left;">
        <br>
        <h1>Edit Event</h1>
        <form action="task4.php" method="post">
            <input type="hidden" name="action" value="update_event">
            <input type="hidden" name="event_id" value="<?php echo $event["eventID"]; ?>">
            
            <table border="0">
                <tr>
                    <td>
                        <label>Title:</label>
                    </td>
                    <td>
                        <input type="text" name="title" value="<?php echo htmlspecialchars($event['title']); ?>" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Description:</label>
                    </td>
                    <td>
                        <input type="text" name="description" value="<?php echo htmlspecialchars($event['description']); ?>" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Date:</label>
                    </td>
                    <td>
                        <input type="date" name="date" value="<?php echo htmlspecialchars($event['date']); ?>" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Start time:</label>
                    </td>
                    <td>
                        <input type="time" name="start_time" value="<?php echo date('H:i', strtotime(htmlspecialchars($event['startTime']))); ?>" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>End time:</label>
                    </td>
                    <td>
                        <input type="time" name="end_time" value="<?php echo date('H:i', strtotime(htmlspecialchars($event['endTime']))); ?>" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>&nbsp;</label>
                    </td>
                    <td>
                        <input type="submit" value="Save" />
                    </td>
                </tr>
            </table>            
        </form>
        <p>
            <a href="?action=list_upcoming_events">Cancel</a>
        </p>
    </section>
</main>
<?php include('footer.php'); ?>