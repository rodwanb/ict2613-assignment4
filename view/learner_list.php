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
        <h1>Learners</h1>
        <table border="1" style="border-collapse: collapse;">
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>Gender</th>
                <th>Date of birth</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($learners as $learner) : ?>
                <tr>
                    <td><?php echo $learner['name']; ?></td>
                    <td><?php echo $learner['surname']; ?></td>
                    <td><?php echo $learner['gender']; ?></td>
                    <td><?php echo $learner['dateOfBirth']; ?></td>
                    <td>
                        <label>
                            <form method="post">
                                <input type="hidden" name="action" value="delete_learner">
                                <input type="hidden" name="learner_id" value="<?php echo $learner['learnerID']; ?>">
                                <input type="submit" value="Delete">
                            </form>
                        </label>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="?action=show_add_learner">Add Learner</a></p>
    </section>
</main>
<?php include('footer.php'); ?>