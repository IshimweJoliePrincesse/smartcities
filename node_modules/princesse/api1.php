<?php
$host = 'localhost'; 
$username = 'root'; 
$password = ''; 
$database = 'ishimwe'; 

$connect = new mysqli($host, $username, $password, $database);


if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

$output = '';

if(isset($_POST['search'])) {
    $search = $_POST['search'];
   
    $sql = "SELECT * FROM jolie WHERE names LIKE '%$search%' OR email LIKE '%$search%'";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        $output .= '<table>
                        <tr>
                            <th>Names</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                        <tbody>';

        while ($row = $result->fetch_assoc()) {
            $output .= '<tr>
                            <td>' . $row["names"] . '</td>
                            <td>' . $row["email"] . '</td>
                            <td>' . $row["password"] . '</td>
                            <td>
                                <button class="delete" data-id="' . $row["id"] . '" type="button">Delete</button>
                                <button class="edit" data-id="' . $row["id"] . '" type="button">Edit</button>
                            </td>
                        </tr>';
        }

        $output .= '</tbody></table>';
        echo $output;
    } else {
        echo "Data not found";
    }
}


$connect->close();
?>
