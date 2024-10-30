<h2>Edit User</h2>
<form method="POST" action="">
    <label>Name:</label><input type="text" name="name" value="<?= $user['name'] ?>" required><br>
    <label>Email:</label><input type="email" name="email" value="<?= $user['email'] ?>" required><br>
    <button type="submit">Update</button>
</form>
