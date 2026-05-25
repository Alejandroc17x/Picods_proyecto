<?php
include 'config/db.php';

if(isset($_POST['register'])){

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    $password = password_hash(
        $_POST['password'],
        PASSWORD_DEFAULT
    );

    $sql = "INSERT INTO usuarios(
        nombre,
        email,
        password
    )

    VALUES(
        '$nombre',
        '$email',
        '$password'
    )";

    mysqli_query($conn, $sql);

    header("Location: login.php");
}
?>

<?php include 'includes/header.php'; ?>

<div class="row justify-content-center">

    <div class="col-md-5">

        <div class="card shadow">

            <div class="card-body">

                <h2 class="text-center">
                    Registro
                </h2>

                <form method="POST">

                    <input
                        type="text"
                        name="nombre"
                        class="form-control mb-3"
                        placeholder="Nombre"
                        required
                    >

                    <input
                        type="email"
                        name="email"
                        class="form-control mb-3"
                        placeholder="Correo"
                        required
                    >

                    <input
                        type="password"
                        name="password"
                        class="form-control mb-3"
                        placeholder="Contraseña"
                        required
                    >

                    <button
                        name="register"
                        class="btn btn-success w-100"
                    >
                        Registrarse
                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

<?php include 'includes/footer.php'; ?>