<?php
// Устанавливаем код ответа 502
http_response_code(502);
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>502 Bad Gateway</title>
<style>
body {
    background-color: #ffffff;
    color: #000000;
    font-family: Arial, sans-serif;
    font-size: 14px;
    margin: 0;
    padding: 20px;
}
h1 {
    font-size: 24px;
    font-weight: normal;
    margin: 0 0 20px 0;
    padding: 0;
}
hr {
    border: 0;
    border-top: 1px solid #e0e0e0;
    margin: 20px 0;
}
.center { text-align: center; }
.nginx { color: #666666; }
</style>
</head>
<body>
<center><h1>502 Bad Gateway</h1></center>
<hr><center>nginx</center>
</body>
</html>
