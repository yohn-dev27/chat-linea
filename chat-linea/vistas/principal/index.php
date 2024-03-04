<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $data_title ?></title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4 class="title"><?= $data_content ?></h4>
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= $data_content ?></h5>
                <p class="card-text"><?=$data_info?></p>
                <a href="?c=Inicio&a=chat" class="btn btn-primary">Ir al chat</a>
            </div>
        </div>
    </div>
</body>

</html>