<?php 
    require_once __DIR__ . "/database.php";

    $sql = "SELECT * 
    FROM `students`
    INNER JOIN `degrees`
    ON `students`.`degree_id`=`degrees`.`id`
    WHERE `degrees`.`name` = 'Corso di Laurea in Ingegneria Informatica';";
    $result = $conn->query($sql);
    $students = [];
    while($row = $result->fetch_assoc()) {
        $students[] = $row;
    }
    var_dump($students);
    echo json_encode($students);

?>
