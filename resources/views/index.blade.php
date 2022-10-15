<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        header {
            background: yellowgreen;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
<header>
    <h1><?=$greeting;?></h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Completed</th>
        </tr>
        <?php foreach ($tasques as $tasca):?>
            <tr>
                <td><?=$tasca->id;?></td>
                <td><?=$tasca->title;?></td>
                <td><?=$tasca->description;?></td>
                <td><?=$tasca->done;?></td>
            </tr>
        <?php endforeach; ?>
    </table>


</header>
<!--Separar les coses en seccions -> components-->
<!--MVC -> Model Vista Controlador -> FC-->



</body>
</html>