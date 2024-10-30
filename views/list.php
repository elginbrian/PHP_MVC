<h2>User List</h2>
<a href="index.php?controller=user&action=create">Add New User</a>
<table>
    <tr><th>Name</th><th>Email</th><th>Actions</th></tr>
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?= $user['name'] ?></td>
        <td><?= $user['email'] ?></td>
        <td>
            <a href="index.php?controller=user&action=edit&id=<?= $user['id'] ?>">Edit</a> |
            <a href="index.php?controller=user&action=delete&id=<?= $user['id'] ?>">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
