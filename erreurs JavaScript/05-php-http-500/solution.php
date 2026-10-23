<?php
// Correction : retourner une réponse JSON valide au client.
header('Content-Type: application/json; charset=utf-8');

$posts = [
    ['id' => 1, 'title' => 'Premier article']
];

echo json_encode([
    'success' => true,
    'data' => $posts
]);
