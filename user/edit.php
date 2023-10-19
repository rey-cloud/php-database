<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    <a class="addUser addBtn" href="../index.php" >Back</a>
    <h3>Edit User</h3>

    <?php
    require('../php/user/user.php');
    while($row = $result->fetch_assoc()){
    ?>

    <form action="../php/user/edit-user.php" method="POST">
        <div>
            <label for="">First Name:</label> <br>
            <input type="text" name="first_name" value="<?php echo $row['first_name']; ?>">
        </div>
        <div>
            <label for="">Last Name:</label> <br>
            <input type="text" name="last_name" placeholder="Last Name" value="<?php echo $row['last_name']; ?>">
        </div>
        <div>
            <label for="">Gender</label> <br>
            <input type="radio" name="gender" value="male" <?php if ($row['gender'] == 'male') echo 'checked'?>> Male
            <input type="radio" name="gender" value="female" <?php if ($row['gender'] == 'female') echo 'checked'?>> Female
            <input type="radio" name="gender" value="others" <?php if ($row['gender'] == 'others') echo 'checked'?>> Others
        </div>
        <div>
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <button type="submit">Update</button>
        </div>
    </form>
    <?php } ?>
</body>
</html>