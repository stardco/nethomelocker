<?php
$current_portStatus = snmpget($switchIP, $communityName, $oidPort);
$new_portStatus = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_STRING);
if (! str_contains($current_portStatus, $new_portStatus)) {
    snmpset($switchIP, $communityName, $oidPort, "i", $new_portStatus);
    echo "<small class=\"error\">Modification faite</small>";  
}
?>
