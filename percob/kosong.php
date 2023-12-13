<!-- fetch user.php  -->
<?php
    include("../conneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fetch user</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
</head>
<body>
    <table border="3">
        <thread>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>username</th>
                <th>password</th>
                <th>status</th>
                <th>options</th>
            </tr>
        </thread>
        <tbody>
            <?php
                $fetch_user = mysqli_query($conn, "SELECT * FROM tbl_user");
                foreach($fetch_user as $user)
                {
                    echo "<tr>";
                        echo "<td>$user[id]</td>";
                        echo "<td>$user[name]</td>";
                        echo "<td>$user[username]</td>";
                        echo "<td>$user[password]</td>";
                        
                        echo "<td>";
                            if($user['status']==1)
                            {
                                echo "aktiv";
                            }
                            else
                            {
                                echo "deaktif";
                            }      
                        "</td>";

                        echo "<td>";
                        if($user['status']==1)
                        {
                            echo "<a href='deactif.php?id=$user[id]'>
                            <button>deaktive</button></a>";
                        }
                        else
                        {
                            echo "<a href='actif.php?id=$user[id]'>
                            <button>aktive</button></a>";
                        }      
                        "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>