<?php include('header.php'); ?>
<main>
    <aside style="float: left; padding-right: 20px;">
        <br>
        <h1>Navigation</h1>
        <?php include 'view/main_nav.php'; ?>
    </aside>

    <section style="float: left;">
        <br>
        <h1>Book Event</h1>
        <form action="task4.php" method="post">
            <input type="hidden" name="action" value="add_booking">
            <input type="hidden" name="event_id" value="<?php echo $event['eventID']; ?>">
            
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
                <td>
                    <label>Associated learner:</label>
                    </td>
                    <td>
                        <select name="learner_id">
                            <?php foreach ($learners as $learner) : ?>
                                <option value="<?php echo $learner['learnerID']; ?>">
                                    <?php echo $learner['name'] . " " . $learner['surname']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                <tr>
                    <td>
                        <label>Booker name:</label>
                    </td>
                    <td>
                        <input type="text" name="booker_name" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Booker email:</label>
                    </td>
                    <td>
                        <input type="email" name="booker_email" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Booker cell Number:</label>
                    </td>
                    <td>
                        <input type="text" name="booker_cell_number" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Number of attendees:</label>
                    </td>
                    <td>
                        <input type="number" name="number_of_attendees" />
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <label>&nbsp;</label>
                    </td>
                    <td>
                        <input type="submit" value="Book Event" />
                    </td>
                </tr>
            </table>            
        </form>
        <p>
            <a href="?action=list_upcoming_event">Cancel</a>
        </p>
    </section>
</main>
<?php include('footer.php'); ?>