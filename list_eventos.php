<?php

include 'conexao.php';

$query_events = "SELECT id, title, color, start, end FROM tb_events";

$resultado_events = mysqli_query($conn, $query_events);

$eventos = [];

while($row_event = mysqli_fetch_assoc($resultado_events)){
    $id = $row_event['id'];
    $title = $row_event['title'];
    $color = $row_event['color'];
    $start = $row_event['start'];
    $end = $row_event['end'];
    
    $eventos[] = [
        'id' => $id,
        'title' => $title,
        'color' => $color,
        'start' => $start,
        'end' => $end
    ];
}

echo json_encode($eventos);