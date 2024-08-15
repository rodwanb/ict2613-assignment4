<?php include('header.php'); ?>
<main>
    <aside style="float: left; padding-right: 20px;">
        <br>
        <h1>Navigation</h1>
        <?php include 'view/main_nav.php'; ?>
    </aside>

    <section style="float: left;">
        <br>
        <h1>Add Event</h1>
        <form action="task4.php" method="post">
            <input type="hidden" name="action" value="add_event">
            
            <table border="0">
                <tr>
                    <td>
                        <label>Title:</label>
                    </td>
                    <td>
                        <input type="text" name="title" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Description:</label>
                    </td>
                    <td>
                        <!--<input type="text" name="description" />-->
                        <textarea name="description" rows="5" cols="16"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Date:</label>
                    </td>
                    <td>
                        <input type="date" name="date" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Start time:</label>
                    </td>
                    <td>
                        <input type="time" name="start_time" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>End time:</label>
                    </td>
                    <td>
                        <input type="time" name="end_time" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>&nbsp;</label>
                    </td>
                    <td>
                        <input type="submit" value="Add Event" />
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