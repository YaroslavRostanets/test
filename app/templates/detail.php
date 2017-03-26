

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Детальная</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="<?= TEMP_PATH ?>/style.css">
    <script src="https://use.fontawesome.com/35f65baac5.js"></script>
    <script
        src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
        crossorigin="anonymous">
    </script>
    <script src="<?= TEMP_PATH ?>/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="main">
        <h2 class="task-headline">
            Детальная страница
        </h2>
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>birthdate</th>
                <th>marital_status</th>
                <th>language</th>
                <th>quantity</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?=$resultArr[id]?></td>
                <td><?=$resultArr[first_name]?></td>
                <td><?=$resultArr[last_name]?></td>
                <td><?=$resultArr[birthdate]?></td>
                <td><? echo ($value['marital_status'])? 'Женат': 'Не женат' ?></td>
                <td><?=$resultArr[language]?></td>
                <td><?=$resultArr[quantity]?></td>
            </tr>
            <tr>
                <td colspan="7">
                    <?=$resultArr[description]?>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <script src="<?= TEMP_PATH ?>/js/main.js"></script>
</body>
</html>



