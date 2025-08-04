<?php
// Set header to return XML
header("Content-Type: text/xml");

// Get the caller ID (ANI)
$caller = $_GET['NmsAni'] ?? '';

// Define routing rules based on ANI
$routes = [
    '2010' => '2042',
    '2020' => '2043',
    '2030' => '2044',
    // Add more as needed
];

// Fallback extension if no match
$defaultTarget = '2049';

// Determine where to forward the call
$target = $routes[$caller] ?? $defaultTarget;

// Start XML response
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<Response>
    <Say>Hello, please hold while we forward your call.</Say>
    <Forward ByCaller="yes"><?= htmlspecialchars($target) ?></Forward>
</Response>

