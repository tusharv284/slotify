<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
    <style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>

</head>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>USER NAME</th>
        <th>First Name </th>
        <th>Last Name</th>
        <th>Email</th>
        
        <th>signupdate</th>

    </tr?
    <?php
        $conn=mysqli_connect("localhost","root","","slotify");
        if ($conn-> connect_error)
        {
            die("Connection Failed:" . $conn->connect_error);
        }
        $sql = "SELECT id,username,firstName,lastName,email,signUpDate from users";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
           
            while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["username"] . "</td><td>" . $row["firstName"]. "</td><td>" . $row["lastName"]. "</td><td>" . $row["email"] . "</td><td>"  . $row["signUpDate"]. "</td></tr>";
            }
            echo "</table>";
        }
        else
        {
            echo "0 results";
        }
    
      


    ?>
</table>    
</body>
</html>

