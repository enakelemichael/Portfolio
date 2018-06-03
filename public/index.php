<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="">
    <title>Form</title>
    <style>
        body {
            font-family: sans-serif;
        }
        table,
        th,
        td {
            border: 1px solid;
        }
        th,
        td {
            padding: .600px 16px;
        }
    </style>
</head>
<body>
    <h1>Form data</h1>
    <?php $data = []; ?>
    <?php if(isset($_GET) && !empty($_GET)): ?>
        <?php $data = $_GET; ?>
    <?php elseif(isset($_POST) && !empty($_POST)): ?>
        <?php $data = $_POST; ?>
    <?php else: ?>
        <p>No input.</p>
        <?php exit; ?>
    <?php endif ?>
    <?php if(isset($data) && !empty($data)): ?>
        <table>
            <thead>
                <tr>
                    <th>name</th>
                    <th>value</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $key => $value): ?>
                    <tr>
                        <td><code><?=$key;?></code></td>
                        <td><?=$value;?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    <?php endif ?>
    <a href="<?=$_SERVER["HTTP_REFERER"];?>">Back</a>
</body>
</html>