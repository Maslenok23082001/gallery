<?php
    require_once "database.php";
    if (isset($_POST['done'])) {
        $name = $_FILES['file']['name'];
        if ($name != "" && $name != "." && $name != ".."){
            $arr1 = array();
            $arr1 = explode(".", $name);
            $rashirenie = strtolower(array_pop($arr1));
            $arr2 = array('png', 'jpg', 'jpeg', 'gif');
            if (in_array($rashirenie, $arr2)) {
                $tmp_name = $_FILES['file']['tmp_name'];
                $directory = "../images_galery/";
                $target = "../images_galery/".$name;
                if (move_uploaded_file($tmp_name, $directory.$name)) {
                    $base->query("INSERT INTO `galery`(`img_file`) VALUES ('".$target."')");
                }
            }
        }

    }
    $result = $base->query("SELECT * FROM `galery`");
    while ($row=$result->fetch_assoc()) {
        echo "<img src='".$row['img_file']."'>";
    };
?>