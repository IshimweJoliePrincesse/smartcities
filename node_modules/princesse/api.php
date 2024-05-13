<?php
$server="localhost";
$username="root";
$password="";
$db="ishimwe";

$conn = new mysqli($server, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
header('Content-Type: application/json');

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'GET':
        $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
        $limit = isset($_GET['limit']) ? intval($_GET['limit']) : 10;
        $offset = ($page - 1) * $limit;
        $search = isset($_GET['search']) ? $_GET['search'] : '';
        $query = "SELECT * FROM jolie";
        if (!empty($search)) {
            $query .= " WHERE names LIKE '%$search%' OR email LIKE '%$search%'";
        }
        $query .= " LIMIT $limit OFFSET $offset";
        $result = $conn->query($query);
        $jolie = array();
        while ($row = $result->fetch_assoc()) {
            $jolie[] = $row;
        }
        echo json_encode($jolie);
        break;
    

    case 'POST':
       
        parse_str(file_get_contents("php://input"), $_POST);
   
       $names=$_POST['names'];
        $email = $_POST['email'];
        $password = $_POST['password'];
       
        $conn->query("INSERT INTO jolie (names, email, password) VALUES ('$names', '$email','$password')");
        echo json_encode(array('status' => 'success'));
        break;
        case 'PUT':
            parse_str(file_get_contents("php://input"), $put_data);
            if(isset($put_data["id"])) {
                $id = $put_data["id"];
                $names = $put_data["names"];
                $email = $put_data["email"];
                $password = $put_data["password"];
                $sql = "UPDATE jolie SET names='$names', email='$email', password='$password' WHERE id=$id ";
                if ($conn->query($sql) === TRUE) {
                    echo json_encode(array('status' => 'success'));
                } else {
                    echo json_encode(array('status' => 'error', 'message' => $conn->error));
                }
            } else {
                echo json_encode(array('status' => 'error', 'message' => 'ID not provided'));
            }
            break;
            case 'DELETE':
                parse_str(file_get_contents("php://input"), $_DELETE);
               
               
 $conn->query("DELETE FROM jolie ");
                echo json_encode(array('status' => 'success'));
                break;

            }
$conn->close();


