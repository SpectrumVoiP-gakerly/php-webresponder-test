<?php
header('Content-Type: text/xml');
echo "<?xml version='1.0' encoding='UTF-8'?>\n";
?>
<Response>
  <Say>Hello, this is a message before forwarding your call.</Say>
  <Forward ByCaller='yes'>2042</Forward>
</Response>

