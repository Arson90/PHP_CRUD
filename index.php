<?php include('server.php'); ?>
<!DOCTYPE html>
<head>
    <title>Library -> PHP $ MySQL</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php if(isset($_SESSION['message'])):?>
        <div class="message">
            <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            ?>
        </div>
    <?php endif ?>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Book Name</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
        while($row = mysqli_fetch_assoc($result)) {
            echo '<tr><td>'.$row['firstname'].'</td>
                      <td>'.$row['lastname'].'</td>
                      <td>'.$row['bookname'].'</td>
                      <td><a href="#">Edit</a></td>
                      <td><a href="#">Delete</a></td></tr>';
        }
        ?>
        </tbody>
    </table>

    <form method="post" action="server.php">
        <div class="input-data">
            <label>First name</label>
            <input type="text" name="firstname">
        </div>
        <div class="input-data">
            <label>Last name</label>
            <input type="text" name="lastname">
        </div>
        <div class="input-data">
            <label>Book name</label>
            <input type="text" name="bookname">
        </div>
        <div class="input-data">
            <button type="submit" name="save" class="button">Save</button>
        </div>
    </form>
</body>
</html>
