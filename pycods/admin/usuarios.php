<?php
include '../includes/auth.php';
include '../config/db.php';

$sql = "SELECT * FROM usuarios";

$usuarios = mysqli_query($conn, $sql);

include '../includes/header.php';
?>

<h2>Usuarios</h2>

<table class="table">

    <tr>

        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>

    </tr>

    <?php while($u = mysqli_fetch_assoc($usuarios)): ?>

    <tr>

        <td><?= $u['id'] ?></td>

        <td><?= $u['nombre'] ?></td>

        <td><?= $u['email'] ?></td>

    </tr>

    <?php endwhile; ?>

</table>

<?php include '../includes/footer.php'; ?>