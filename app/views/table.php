<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body>
    <?php if (count ($data) > 0): ?>
        <table border="1" cellspacing="1" cellpadding="5">
            <?php foreach ($data as $years => $decades): ?>
                <tr> 
                    <td><?= $years ?></td>           
                    <?php foreach ($decades as $decade => $userCount): ?> 
                        <td><?= $decade ?></td>
                        <td><?= $userCount ?></td>
                    <?php endforeach ?>
                </tr>
            <?php endforeach ?>
        </table>
    <?php else: ?>
        <p>Sorry, no data found...</p>
    <?php endif ?>
</body>
</html>