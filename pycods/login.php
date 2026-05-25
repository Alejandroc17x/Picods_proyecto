<?php
session_start();
include 'config/db.php';

if(isset($_POST['login'])){

    $email = $_POST['email'];

    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios
            WHERE email='$email'";

    $resultado = mysqli_query($conn, $sql);

    if(mysqli_num_rows($resultado) > 0){

        $usuario = mysqli_fetch_assoc($resultado);

        if(password_verify(
            $password,
            $usuario['password']
        )){

            $_SESSION['usuario'] = $usuario;

            header("Location: dashboard.php");
        }
    }
}
?>

<?php include 'includes/header.php'; ?>

<div class="auth-container">

    <div class="auth-card">

        <h2>
            Bienvenido a PYCODS 🚀
        </h2>

        <form method="POST">

            <input
                type="email"
                name="email"
                class="form-control mb-3"
                placeholder="Correo"
            >

            <input
                type="password"
                name="password"
                class="form-control mb-3"
                placeholder="Contraseña"
            >

            <button
                name="login"
                class="auth-btn"
            >
                Iniciar Sesión
            </button>

        </form>

    </div>

</div>

<?php include 'includes/footer.php'; ?>