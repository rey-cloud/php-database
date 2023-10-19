<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    <a class="addUser addBtn"  href="../index.php">Back</a>
    <h3>Add User</h3>
    <form action="../php/user/save-user.php" method="POST">
        <div>
            <label for="">First Name:</label> <br>
            <input type="text" name="first_name" placeholder="First Name">
        </div>
        <div>
            <label for="">Last Name:</label> <br>
            <input type="text" name="last_name" placeholder="Last Name">
        </div>
        <div>
            <label for="">Gender</label> <br>
            <input type="radio" name="gender" value="male" checked> Male
            <input type="radio" name="gender" value="female"> Female
            <input type="radio" name="gender" value="others"> Others
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>