<ul>
    <?php foreach ($users as $user): ?>
        <li><?= $user['name'] ?></li>
        <li><?= $user['lastname'] ?></li>
        <li><?= $user['email'] ?></li>
    <?php endforeach; ?>
</ul>