<?php
include 'includes/auth.php';
include 'includes/header.php';
include 'includes/sidebar.php';

$usuario = $_SESSION['usuario'];
?>

<div class="main-content">

    <div class="topbar">

        <div>

            <h1>
                Hola <?= $usuario['nombre'] ?> 👋
            </h1>

            <p>
                Continúa tu aventura de programación
            </p>

        </div>

    </div>

    <!-- PROGRESO -->

    <div class="progress-container">

        <h4>Tu progreso 🚀</h4>

        <div class="progress mt-3">

            <div
                class="progress-bar"
                style="width:65%"
            >
                65%
            </div>

        </div>

    </div>

    <!-- TARJETAS -->

    <div class="row g-4">

        <div class="col-md-3">

            <div class="stats-card bg1">

                <h5>Nivel</h5>

                <h1>
                    <?= $usuario['nivel'] ?>
                </h1>

            </div>

        </div>

        <div class="col-md-3">

            <div class="stats-card bg2">

                <h5>XP</h5>

                <h1>
                    <?= $usuario['xp'] ?>
                </h1>

            </div>

        </div>

        <div class="col-md-3">

            <div class="stats-card bg3">

                <h5>Monedas</h5>

                <h1>
                    <?= $usuario['monedas'] ?>
                </h1>

            </div>

        </div>

        <div class="col-md-3">

            <div class="stats-card bg4">

                <h5>Vidas</h5>

                <h1>
                    <?= $usuario['vidas'] ?>
                </h1>

            </div>

        </div>

    </div>

    <!-- EJERCICIOS -->

    <div class="row mt-5 g-4">

        <div class="col-md-4">

            <div class="exercise-card">

                <h4>
                    Variables
                </h4>

                <p>
                    Aprende cómo guardar información
                    en Python.
                </p>

                <a
                    href="ejercicios/variables.php"
                    class="btn btn-game"
                >
                    Jugar 🚀
                </a>

            </div>

        </div>

        <div class="col-md-4">

            <div class="exercise-card">

                <h4>
                    Condicionales
                </h4>

                <p>
                    Aprende decisiones con if y else.
                </p>

                <a
                    href="ejercicios/condicionales.php"
                    class="btn btn-game"
                >
                    Jugar 🚀
                </a>
            </div>

        </div>

        <div class="col-md-4">

            <div class="exercise-card">

                <h4>
                    Bucles
                </h4>

                <p>
                    Aprende ciclos y repeticiones.
                </p>

                <a
                    href="ejercicios/bucles.php"
                    class="btn btn-game"
                >
                    Jugar 🚀
                </a>

            </div>

        </div>

    </div>

</div>

<?php include 'includes/footer.php'; ?>