<?php
//Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/Database.php';
include_once '../../models/UserModel.php';

//instantiate db and connect
$database = new Database();
$db = $database->connect();

// Instantiate user object
$um = new UserModel($db);

//user query
$result = $um->read();

//get row count
$num = $result->rowCount();

//Check if any user
if ($num > 0) {
    // user array
    // $user_arr = array();
    $user_arr['data'] = array();

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);

        $user_item = array(
            'userId' => $userId,
            'userName' => $userName,
            'userFname' => $userFname,
            'userLname' => $userLname
        );

        //push to "data"
        array_push($user_arr['data'], $user_item);
    }

    //turn into JSON output
    echo json_encode($user_arr);
} else {
    echo json_encode (
        array('message' => 'No user found')
    );
}

?>