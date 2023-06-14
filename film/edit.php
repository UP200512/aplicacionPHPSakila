
<?php
print_r($_POST);
include_once "../includes/data_base_connect.php";
$id = $_POST["input_id"];
$title = $_POST["title"];
$rental_duration = $_POST["rental_duration"];
$rental_rate = $_POST["rental_rate"];
echo ($rental_rate);
$replacement_cost = $_POST["replacement_cost"];
echo ($replacement_cost);


if (empty($_POST["description"])) { //los no recorridos llevan el if else
    $description = NULL;
} else {
    $description = $_POST["description"];
}

if (empty($_POST["release_year"])) { //los no recorridos llevan el if else
    $release_year = NULL;
} else {
    $release_year = $_POST["release_year"];
}

if (empty($_POST["original_language_id"])) { //los no recorridos llevan el if else
    $original_language_id = NULL;
} else {
    $original_language_id = $_POST["original_language_id"];
}

if (empty($_POST["length"])) { //los no recorridos llevan el if else
    $length = NULL;
} else {
    $length = $_POST["length"];
}
if (empty($_POST["language_id"])) { //los no recorridos llevan el if else
    $language_id = NULL;
} else {
    $language_id = $_POST["language_id"];
}
// $language_id = $_POST["language_id"];

if (empty($_POST["rating"])) { //los no recorridos llevan el if else
    $rating = NULL;
} else {
    $rating = $_POST["rating"];
}
$special_features = NULL;
$cont = 0;
if (!empty($_POST["Trailers"])) { //los no recorridos llevan el if else
    $special_features = $special_features .  $_POST["Trailers"];
    $cont++;
}
if (!empty($_POST["Commentaries"])) { //los no recorridos llevan el if else
    if ($cont == 0) {
        $special_features = $special_features .  $_POST["Commentaries"];
    } else {
        $special_features = $special_features . "," . $_POST["Commentaries"];
    }
    $cont++;
}
if (!empty($_POST["Deleted_Scenes"])) { //los no recorridos llevan el if else
    if ($cont == 0) {
        $special_features = $special_features .  $_POST["Deleted_Scenes"];
    } else {
        $special_features = $special_features . "," . $_POST["Deleted_Scenes"];
    }
    $cont++;
}
if (!empty($_POST["Behind_the_Scenes"])) { //los no recorridos llevan el if else
    if ($cont == 0) {
        $special_features = $special_features .  $_POST["Behind_the_Scenes"];
    } else {
        $special_features = $special_features . "," . $_POST["Behind_the_Scenes"];
    }
    $cont++;
}
echo ($special_features);
echo ($language_id);


// //$sql = $conn->prepare("UPDATE tipo_usuario set (nombre, nivel, n2) VALUES (?, ?, ?);");
$sql = $connection->prepare("UPDATE film set title=?, description=?, release_year=?, language_id=?, original_language_id=?, 
rental_duration=?, rental_rate=?, length=?, replacement_cost=?, rating=?, special_features=?
where film_id=?;");
$result = $sql-> execute([$title,$description,$release_year,$language_id, $original_language_id, $rental_duration,$rental_rate, $length, $replacement_cost, $rating, $special_features, $id]);
if ($result == true){
  header("Location: index.php?mensaje=registrado"); 
}else{
  header("Location: index.php?mensaje=error"); 
  exit();
}
?>

