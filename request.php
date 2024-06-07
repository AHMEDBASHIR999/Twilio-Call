<?php
header('Content-type: text/xml');
?>
<Response>
    <Dial callerId="+18288091746"><?php  echo $_POST['To'];?></Dial>
</Response>
