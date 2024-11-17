<!doctype html>
<html>
    <head>
        <title>MySQL with PHP</title>
    </head>
    <body>
        <form action="mysql.php" method="post">
            First Name:
            <input type="text" name="fname" required>
            <br>
            Last Name:
            <input type="text" name="lname" required>
            <input type="submit" value="send" name="send">
        </form>
        <br>
        <table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Action</th>
            </tr>
            <?php 
            $conn = mysqli_connect('localhost', 'root', 'root', 'form', 8889);
            if (mysqli_connect_error()) {
                die("Connection failed: " . mysqli_connect_error());
            }
            
            // Insert new record
            if (isset($_POST['send'])) {
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $sql = "INSERT INTO form_data (fname, lname) VALUES ('$fname', '$lname')";
                if (mysqli_query($conn, $sql)) {
                    echo "New record added";
                }
            }

            // Delete record based on fname and lname
            if (isset($_POST['delete'])) {
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $delete_sql = "DELETE FROM form_data WHERE fname = '$fname' AND lname = '$lname'";
                mysqli_query($conn, $delete_sql);
            }

            // Retrieve and display records
            $result = mysqli_query($conn, 'SELECT * FROM form_data');
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row['fname'] . "</td>
                            <td>" . $row['lname'] . "</td>
                            <td>
                                <form action='mysql.php' method='post' style='display:inline;'>
                                    <input type='hidden' name='fname' value='" . $row['fname'] . "'>
                                    <input type='hidden' name='lname' value='" . $row['lname'] . "'>
                                    <input type='submit' name='delete' value='Delete'>
                                </form>
                            </td>
                          </tr>";
                }
            }
            $conn->close();
            ?>
        </table>
    </body>
</html>