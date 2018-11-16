<?php
    $query = $conn->prepare("SELECT * FROM users");
    $query->execute();
?>
<h1>Page 2</h1>

<table>
    <tr>
        <td>ID</td>
        <td>Email</td>
        <td>First name</td>
        <td>Last name</td>
        <td>Date registered</td>
    </tr>
<?php
    foreach ($query->fetchAll() as $user) {
        ?>
            <tr>
                <td><?= $user['id']; ?></td>
                <td><?= $user['email']; ?></td>
                <td><?= $user['name']; ?></td>
                <td><?= $user['last_name']; ?></td>
                <td><?= $user['created_at']; ?></td>
            </tr>
        <?php
    }
?>
</table>