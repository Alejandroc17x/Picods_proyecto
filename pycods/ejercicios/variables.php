<?php
include '../includes/auth.php';
include '../includes/header.php';
include '../includes/sidebar.php';
?>

<div class="main-content">

    <h1>
        Variables en Python 🚀
    </h1>

    <div class="exercise-card mt-4">

        <h4>
            ¿Qué son las variables?
        </h4>

        <p>

            Las variables sirven para guardar
            información.

            Ejemplo:

        </p>

<pre>
nombre = "Samuel"
edad = 10
</pre>

        <p>

            Ahora escribe un código que
            muestre tu nombre.

        </p>

    </div>

    <!-- TERMINAL -->

    <div class="terminal mt-4">

<textarea id="code" rows="10">
nombre = "Samuel"

print(nombre)
</textarea>

    </div>

    <button
        class="btn btn-game mt-3"
        onclick="ejecutarCodigo()"
    >
        Ejecutar Código 🚀
    </button>

    <div
        id="resultado"
        class="exercise-card mt-4"
    >

        Resultado aparecerá aquí...

    </div>

</div>

<script>

function ejecutarCodigo(){

    let code =
        document.getElementById(
            "code"
        ).value;

    let resultado =
        document.getElementById(
            "resultado"
        );

    if(code.includes("print")){

        resultado.innerHTML = `
            <h4>✅ ¡Muy bien!</h4>

            <p>
                Tu código funciona correctamente.
            </p>

            <h3>+10 XP 🎉</h3>
        `;
    }

    else{

        resultado.innerHTML = `
            <h4>❌ Intenta nuevamente</h4>

            <p>
                Debes usar print()
            </p>
        `;
    }
}

</script>

<?php include '../includes/footer.php'; ?>