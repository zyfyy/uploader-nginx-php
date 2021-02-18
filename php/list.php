<?php
$files = scandir('./uploads');
echo json_encode($files);