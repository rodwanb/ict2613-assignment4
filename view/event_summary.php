<?php include('header.php'); ?>
<main>
    <aside style="float: left; padding-right: 20px;">
        <br>
        <h1>Navigation</h1>
        <?php include 'view/main_nav.php'; ?>
    </aside>

    <section style="float: left;">
        <br>
        <h1>Event Summary</h1>            
            <table border="0">
                <tr>
                    <td>
                        <label>Title:</label>
                    </td>
                    <td>
                        <label><?php echo htmlspecialchars($event['title']); ?></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Description:</label>
                    </td>
                    <td>
                        <label><?php echo htmlspecialchars($event['description']); ?></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>When:</label>
                    </td>
                    <td>
                        <label><?php echo date('d F Y', strtotime($event['startDateTime'])) 
                                . " from " . date('H:i', strtotime(htmlspecialchars($event['startDateTime'])))
                                . " till " . date('H:i', strtotime(htmlspecialchars($event['endDateTime']))); ?></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Number of attendees:</label>
                    </td>
                    <td>
                        <label><?php echo htmlspecialchars($event['numberOfAttendees']); ?></label>
                    </td>
                </tr>
            </table>            
        <p>
            <a href="?action=list_upcoming_event">Cancel</a>
        </p>
    </section>
</main>
<?php include('footer.php'); ?>