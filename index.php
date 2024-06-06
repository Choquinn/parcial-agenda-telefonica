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
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="prjoduct__item">
                            <div class="product__item__pic set-bg" data-setbg=" '. $row->cover .'">
                                <div class="ep">18 / 18</div>
                                <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                <div class="view"><i class="fa fa-eye"></i> '. $row->views .'</div>
                            </div>
                            <div class="product__item__text">
                                <ul>
                                    <li>Active</li>
                                    <li>Movie</li>
                                </ul>
                                <h5 style="text-transform: uppercase;"><a href="anime-details.php?anime='. $row->id .'">'. $row->name .'</a></h5>
                            </div>
                        </div>
                    </div>
                ';
                    }
                ?>                            
                    <!-- Adicione mais linhas conforme necessário -->
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
