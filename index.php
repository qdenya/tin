<html>
<head>
    <title>Rozwiązanie zadania PZC 1.1</title>
</head>
<body>
<? //echo date_format(time(), 'Y-m-d H:i:s');

//2021-07-29T11:15:02+00:00
$date = new DateTime('now');
echo $date->format('c');

?>
</body>