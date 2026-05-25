<?php
include '../includes/auth.php';
include '../includes/header.php';
include '../includes/sidebar.php';
?>

<div class="main">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h1>
                Condicionales en Python 🤖
            </h1>

            <p>
                Aprende a tomar decisiones usando if y else
            </p>

        </div>

        <div class="topbar-icons">

            <div class="icon-box">
                XP +10
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
                    ¿Qué son los condicionales?
                </h3>

                <p class="mt-3">

                    Los condicionales permiten
                    que el programa tome decisiones.

                </p>

                <p>

                    Ejemplo:

                </p>

<pre>
edad = 18

if edad >= 18:
    print("Eres mayor")
else:
    print("Eres menor")
</pre>

                <div class="alert alert-warning mt-3">

                    💡 Recuerda usar:
                    <b>if</b>

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
edad = 18

if edad >= 18:
    print("Eres mayor")
</textarea>

            </div>

            <button
                class="exercise-btn btn-purple mt-3"
                onclick="validarCondicional()"
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

function validarCondicional(){

    let code =
        document.getElementById(
            "code"
        ).value;

    let resultado =
        document.getElementById(
            "resultado"
        );

    if(
        code.includes("if") &&
        code.includes("print")
    ){

        resultado.innerHTML = `

            <h3>
                ✅ ¡Excelente!
            </h3>

            <p>

                Aprendiste a usar condicionales.

            </p>

            <h2>
                +10 XP 🎉
            </h2>

        `;
    }

    else{

        resultado.innerHTML = `

            <h3>
                ❌ Intenta nuevamente
            </h3>

            <p>

                Debes usar:
                if y print()

            </p>

        `;
    }
}

</script>

<?php include '../includes/footer.php'; ?>