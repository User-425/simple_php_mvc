<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
</head>
<body>
    <h1>User List</h1>
    <ul>
        <?php foreach ($users as $user): ?>
            <li><?= htmlspecialchars($user['nama']) ?> (Email: <?= htmlspecialchars($user['email']) ?>)</li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
