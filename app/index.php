<?php
$host = "mysql-db";
$user = "root";
$pass = "password";
$db = "guclukol_test_database";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Guclukol Docker Localhost</title>
    <link rel="icon" href="favicon.svg"/>
    <link rel="stylesheet" href="src/output.css">
</head>
<body class="bg-slate-100">
    <div class="border-slate-200 bg-slate-50 m-6 rounded shadow-xl border shadow-slate-300 p-6">
        <div class="flex items-center justify-center mb-4">
            <img src="docker_logo.svg" width="250" alt="">
        </div>
        <h4 class="text-center text-slate-700 font-bold text-3xl mb-4">
            Welcome to Docker Localhost.
        </h4>
        <p class="mb-4 text-center text-slate-500 font-semibold">
            PHP Version: <?=phpversion()?>
        </p>
        <p class="m-4 text-center text-slate-500 font-semibold">
            MySQL Version: <?=$conn->server_version?> - <a class="text-blue-400" href="http://localhost:8081/" title="phpMyAdmin Panel" target="_blank">phpMyAdmin Panel</a>
        </p>
        <p class="m-4 text-center text-slate-500 font-semibold">

        </p>
        <p class="m-0 text-sm text-center text-slate-400 font-medium">
            Prepared by B.G.
            You can click <a class="text-blue-400" href="https://guclukol.net" title="Berk Guclukol Offical Web Page" target="_blank">here</a> for the website and
            <a class="text-blue-400" href="https://github.com/berkguclukol" title="Berk Guclukol Offical Github page" target="_blank">here</a>
            for my github account.
        </p>
    </div>
<?php
$conn->close();
?>
</body>
</html>