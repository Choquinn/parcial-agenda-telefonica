<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Telefônica</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    
    <?php

    include_once('config/database.php');
    
    ?>

    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Agenda Telefônica</h1>
        <div class="bg-white shadow-md rounded my-6 overflow-x-auto">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="w-1/3 py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Imagem</th>
                        <th class="w-1/3 py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Nome</th>
                        <th class="w-1/3 py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Email</th>
                        <th class="w-1/3 py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Telefone</th>
                    </tr>
                </thead>
                <tbody>
                <?php

                $rs = $con->query("SELECT * FROM agenda");
                while($row = $rs->fetch(PDO::FETCH_OBJ)){
                    echo '
                    <tr class="border-b">
                    <td class="py-2 px-4"><img class="w-20 h-20 object-cover" src="'. $row->imagem .'" alt="João Silva"></td>
                   <td class="py-2 px-4 text-sm text-gray-700">'. $row->nome .'</td>
                   <td class="py-2 px-4 text-sm text-gray-700">'. $row->email .'</td>
                   <td class="py-2 px-4 text-sm text-gray-700">'. $row->telefone.'</td>
                    </tr>
                    ';
                }
                ?>                            
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
