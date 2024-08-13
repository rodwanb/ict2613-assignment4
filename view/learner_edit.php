<?php include('header.php'); ?>
<main>
    <aside style="float: left; padding-right: 20px;">
        <br>
        <h1>Navigation</h1>
        <?php include 'view/main_nav.php'; ?>
    </aside>

    <section style="float: left;">
        <br>
        <h1>Edit Learner</h1>
        <form action="task4.php" method="post">
            <input type="hidden" name="action" value="update_learner">
            <input type="hidden" name="learner_id" value="<?php echo $learner['learnerID'] ?>">
            
            <table border="0">
                <tr>
                    <td>
                        <label>Name:</label>
                    </td>
                    <td>
                        <input type="text" name="name" value="<?php echo htmlspecialchars($learner['name']); ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Surname:</label>
                    </td>
                    <td>
                        <input type="text" name="surname" value="<?php echo htmlspecialchars($learner['surname']); ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Gender:</label>
                    </td>
                    <td>
                        <select name="gender">
                            <option value="Male" <?php if ($learner['gender'] == "Male") echo 'selected'; ?> >Male</option>
                            <option value="Female" <?php if ($learner['gender'] == "Female") echo 'selected'; ?> >Female</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Date of birth:</label>
                    </td>
                    <td>
                        <input type="date" name="date_of_birth" value="<?php echo htmlspecialchars($learner['dateOfBirth']); ?>" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>&nbsp;</label>
                    </td>
                    <td>
                        <input type="submit" value="Update Learner" />
                    </td>
                </tr>
            </table>            
        </form>
        <p>
            <a href="?action=list_learner">Back to list</a>
        </p>
    </section>
</main>
<?php include('footer.php'); ?>