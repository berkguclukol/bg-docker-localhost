<?php
try {
    $db = new PDO("mysql:host=mysql-db;dbname=docker_test_database", "root", "password");
} catch ( PDOException $e ){
    print $e->getMessage();
}
$users = $db->query("SELECT * FROM users", PDO::FETCH_OBJ)->fetchAll();
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
            MySQL Version: <?=$db->query('select version()')->fetchColumn();?> - <a class="text-blue-400" href="http://localhost:8081/" title="phpMyAdmin Panel" target="_blank">phpMyAdmin Panel</a>
        </p>
        <div class="flex items-center justify-center m-4">
            <div class="flex flex-col w-1/2">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="border rounded-lg overflow-hidden">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">#</th>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Name</th>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Surname</th>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Email</th>
                                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                <?php foreach ($users as $user) : ?>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                            <img src="<?=$user->avatar?>" width="75" class="rounded-full" alt="">
                                            
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800"><?=$user->name?></td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800"><?=$user->surname?></td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800"><?=$user->email?></td>
                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <button type="button" class="py-1 px-2 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700">
                                                Edit
                                            </button>
                                            <button type="button" class="py-1 px-2 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-500 text-white hover:bg-red-600">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="m-0 text-sm text-center text-slate-400 font-medium">
            Prepared by B.G.
            You can click <a class="text-blue-400" href="https://guclukol.net" title="Berk Guclukol Offical Web Page" target="_blank">here</a> for the website and
            <a class="text-blue-400" href="https://github.com/berkguclukol" title="Berk Guclukol Offical Github page" target="_blank">here</a>
            for my github account.
        </p>
    </div>
<?php
?>
</body>
</html>