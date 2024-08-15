<?php include('header.php'); ?>
<main>
    <aside style="float: left; padding-right: 20px;">
        <br>
        <h1>Navigation</h1>
        <?php include 'view/main_nav.php'; ?>
    </aside>

    <section style="float: left;">
        <br>
        <h1>Add Learner</h1>
        <form action="task4.php" method="post">
            <input type="hidden" name="action" value="add_learner">
            
            <table border="0">
                <tr>
                    <td>
                        <label>Name:</label>
                    </td>
                    <td>
                        <input type="text" name="name" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Surname:</label>
                    </td>
                    <td>
                        <input type="text" name="surname" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Gender:</label>
                    </td>
                    <td>
                        <select name="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Date of birth:</label>
                    </td>
                    <td>
                        <input type="date" name="dateOfBirth" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>&nbsp;</label>
                    </td>
                    <td>
                        <input type="submit" value="Add Learner" />
                    </td>
                </tr>
            </table>            
        </form>
        <p>
            <a href="?action=list_learner">Cancel</a>
        </p>
    </section>
</main>
<?php include('footer.php'); ?>