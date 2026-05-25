<?php
include '../includes/auth.php';
include '../includes/header.php';
include '../includes/sidebar.php';
?>

<div class="main">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h1>
                Bucles en Python 🔄
            </h1>

            <p>
                Aprende a repetir instrucciones
            </p>

        </div>

        <div class="topbar-icons">

            <div class="icon-box">
                XP +15
            </div>

            <div class="icon-box">
                ❤️ 5/5
            </div>

        </div>

    </div>

    <!-- EXPLICACION -->

    <div class="row">

        <div class="col-md-5">

            <div class="exercise-card">

                <h3>
                    ¿Qué son los bucles?
                </h3>

                <p class="mt-3">

                    Los bucles permiten repetir
                    instrucciones varias veces.

                </p>

                <p>

                    Ejemplo:

                </p>

<pre>
for i in range(5):
    print(i)
</pre>

                <div class="alert alert-info mt-3">

                    🔄 Usa:
                    <b>for</b>

                </div>

            </div>

        </div>

        <!-- TERMINAL -->

        <div class="col-md-7">

            <div class="terminal">

                <h4 class="mb-4">
                    Terminal Interactiva 💻
                </h4>

<textarea
id="code"
rows="10"
>
for i in range(5):
    print(i)
</textarea>

            </div>

            <button
                class="exercise-btn btn-orange mt-3"
                onclick="validarBucle()"
            >
                Ejecutar Código 🚀
            </button>

            <div
                id="resultado"
                class="exercise-card mt-3"
            >

                Esperando código...

            </div>

        </div>

    </div>

</div>

<script>

function validarBucle(){

    let code =
        document.getElementById(
            "code"
        ).value;

    let resultado =
        document.getElementById(
            "resultado"
        );

    if(
        code.includes("for") &&
        code.includes("print")
    ){

        resultado.innerHTML = `

            <h3>
                ✅ ¡Muy bien!
            </h3>

            <p>

                Aprendiste a usar bucles.

            </p>

            <h2>
                +15 XP 🎉
            </h2>

        `;
    }

    else{

        resultado.innerHTML = `

            <h3>
                ❌ Error
            </h3>

            <p>

                Debes usar:
                for y print()

            </p>

        `;
    }
}

</script>

<?php include '../includes/footer.php'; ?>