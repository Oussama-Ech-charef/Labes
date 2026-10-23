<?php
// Erreur : HTTP 500 provoquée par une fonction inexistante.
header('Content-Type: application/json; charset=utf-8');

$posts = getPosts();
echo json_encode(['success' => true, 'data' => $posts]);
