<?php

session_start();

$conn = new mysqli('localhost', 'root', '', 'registration');
if ($conn->connect_error) {
  die("Connection failed: (" . $conn->connect_errno . ") " . $conn->connect_error);
}

$vars = [];

foreach ($_POST as $key => $value) {
  $vars[$key] = $conn->real_escape_string(htmlspecialchars($value));
}

$vars['userID'] = $_SESSION['userID'];
echo var_export($vars);

switch ($vars['table']) {
  case 'personal':
    $stmt = $conn->prepare("INSERT INTO personaldetails VALUES(?, ?, ?, ?, ?, ?, ?, ?);");
    $stmt->bind_param("ssssssss",
                      $vars['userID'],
                      $vars['fName'],
                      $vars['mName'],
                      $vars['lName'],
                      $vars['popName'],
                      $vars['momName'],
                      $vars['gender'],
                      $vars['dob']);
    $stmt->execute();

    $stmt = $conn->prepare("INSERT INTO addressdetails VALUES(?, ?, ?, ?, ?, ?, ?, ?);");
    $stmt->bind_param("ssssissi",
                      $vars['userID'],
                      $vars['address'],
                      $vars['state'],
                      $vars['city'],
                      $vars['pincode'],
                      $vars['email'],
                      $vars['altEmail'],
                      $vars['mobNo']);
    $stmt->execute();

    $stmt = $conn->prepare("INSERT INTO religiondetails VALUES(?, ?, ?);");
    $stmt->bind_param("sss",
                      $vars['userID'],
                      $vars['religion'],
                      $vars['category']);
    $stmt->execute();
    $file_path = '../../files/';

    $content = [];

    foreach ($_FILES['photo']['error'] as $key => $error) {
      if ($error === UPLOAD_ERR_OK) {
        $tmp_name = $_FILES['photo']['tmp_name'][$key];
        $name = $key . '_' . $conn->real_escape_string(htmlspecialchars($_FILES['photo']['name'][$key]));
        move_uploaded_file($tmp_name, $file_path . $name);
        $content[$key] = $name;
      }
    }

    $stmt = $conn->prepare("INSERT INTO personalphoto VALUES(?, ?, ?);");
    $stmt->bind_param("sss",
                      $vars['userID'],
                      $content[0],
                      $content[1]);
    $stmt->execute();
    break;

  case 'academic':
    $stmt = $conn->prepare("INSERT INTO sscdetails VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
    $stmt->bind_param("sssssiiiid",
                      $vars['userID'],
                      $vars['sscNo'],
                      $vars['sscSchool'],
                      $vars['sscBoard'],
                      $vars['sscYear'],
                      $vars['sscEng'],
                      $vars['sscMat'],
                      $vars['sscSci'],
                      $vars['sscObtMks'],
                      $vars['sscPer']);
    $stmt->execute();

    $stmt = $conn->prepare("INSERT INTO hscdetails VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
    $stmt->bind_param("sssssiiiiiid",
                      $vars['userID'],
                      $vars['hscNo'],
                      $vars['hscSchool'],
                      $vars['hscBoard'],
                      $vars['hscYear'],
                      $vars['hscEng'],
                      $vars['hscPhy'],
                      $vars['hscChe'],
                      $vars['hscMat'],
                      $vars['hscVoc'],
                      $vars['hscObtMks'],
                      $vars['hscPer']);
    $stmt->execute();

    $stmt = $conn->prepare("INSERT INTO jeedetails VALUES(?, ?, ?, ?, ?, ?);");
    $stmt->bind_param("siiiid",
                      $vars['userID'],
                      $vars['jeePhy'],
                      $vars['jeeChe'],
                      $vars['jeeMat'],
                      $vars['jeeObtMks'],
                      $vars['jeePer']);
    $stmt->execute();
    break;

  case 'documents':
    # code...
    break;

  default:
    break;
}

?>
