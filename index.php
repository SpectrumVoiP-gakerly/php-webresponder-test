<?php
// Set header to return XML
header("Content-Type: text/xml");

// Get the caller ID (ANI)
$caller = $_GET['NmsAni'] ?? '';

// Define routing rules based on ANI
$routes = [
    '2010' => 'sip:19728240064@*',
    '+19728240064' => '	user_2010',
    '2030' => '2044',
    // Add more as needed
];

// Fallback extension if no match
$defaultTarget = 'sip:14694292500@*';

// Determine where to forward the call
$target = $routes[$caller] ?? $defaultTarget;

// Start XML response
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<Response>
    <Say>Hello, please hold while we forward your call.</Say>
    <Forward><?= htmlspecialchars($target) ?></Forward>
</Response>

