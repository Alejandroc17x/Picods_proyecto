<?php
include '../includes/header.php';
include '../includes/sidebar.php';
?>

<div class="main">

    <!-- TOP -->

    <div class="memory-top">

        <div>

            <h1>
                Juego de Memoria 🧠
            </h1>

            <p>
                Encuentra las parejas de programación
            </p>

        </div>

        <div class="memory-stats">

            <div class="memory-box">
                ⭐ XP +20
            </div>

            <div class="memory-box">
                🎯 <span id="movimientos">0</span>
            </div>

        </div>

    </div>

    <!-- TABLERO -->

    <div class="memory-board">

        <!-- CARD -->

        <div class="memory-card" data-card="1">

            <div class="card-inner">

                <div class="card-front">
                    ❓
                </div>

                <div class="card-back">
                    print()
                </div>

            </div>

        </div>

        <div class="memory-card" data-card="1">

            <div class="card-inner">

                <div class="card-front">
                    ❓
                </div>

                <div class="card-back">
                    Mostrar Texto
                </div>

            </div>

        </div>

        <!-- CARD -->

        <div class="memory-card" data-card="2">

            <div class="card-inner">

                <div class="card-front">
                    ❓
                </div>

                <div class="card-back">
                    if
                </div>

            </div>

        </div>

        <div class="memory-card" data-card="2">

            <div class="card-inner">

                <div class="card-front">
                    ❓
                </div>

                <div class="card-back">
                    Decisión
                </div>

            </div>

        </div>

        <!-- CARD -->

        <div class="memory-card" data-card="3">

            <div class="card-inner">

                <div class="card-front">
                    ❓
                </div>

                <div class="card-back">
                    for
                </div>

            </div>

        </div>

        <div class="memory-card" data-card="3">

            <div class="card-inner">

                <div class="card-front">
                    ❓
                </div>

                <div class="card-back">
                    Repetir
                </div>

            </div>

        </div>

        <!-- CARD -->

        <div class="memory-card" data-card="4">

            <div class="card-inner">

                <div class="card-front">
                    ❓
                </div>

                <div class="card-back">
                    variable
                </div>

            </div>

        </div>

        <div class="memory-card" data-card="4">

            <div class="card-inner">

                <div class="card-front">
                    ❓
                </div>

                <div class="card-back">
                    Guardar Datos
                </div>

            </div>

        </div>

    </div>

    <!-- RESULTADO -->

    <div
        id="resultado"
        class="memory-result"
    >

        Encuentra todas las parejas 🚀

    </div>

</div>

<script>

const cards =
document.querySelectorAll(".memory-card");

let firstCard = null;
let secondCard = null;
let lockBoard = false;
let matches = 0;
let movimientos = 0;

cards.forEach(card => {

    card.addEventListener(
        "click",
        flipCard
    );

});

function flipCard(){

    if(lockBoard) return;

    if(this === firstCard) return;

    this.classList.add("flip");

    if(!firstCard){

        firstCard = this;

        return;
    }

    secondCard = this;

    movimientos++;

    document.getElementById(
        "movimientos"
    ).innerText = movimientos;

    checkMatch();
}

function checkMatch(){

    let isMatch =

    firstCard.dataset.card ===
    secondCard.dataset.card;

    if(isMatch){

        disableCards();

        matches++;

        if(matches === 4){

            document.getElementById(
                "resultado"
            ).innerHTML = `

                <h2>
                    🎉 ¡INCREÍBLE!
                </h2>

                <p>

                    Completaste el juego
                    de memoria.

                </p>

                <h1>
                    ⭐ +20 XP
                </h1>

            `;

            confettiEffect();
        }

    }else{

        unflipCards();
    }
}

function disableCards(){

    firstCard.removeEventListener(
        "click",
        flipCard
    );

    secondCard.removeEventListener(
        "click",
        flipCard
    );

    resetBoard();
}

function unflipCards(){

    lockBoard = true;

    setTimeout(() => {

        firstCard.classList.remove(
            "flip"
        );

        secondCard.classList.remove(
            "flip"
        );

        resetBoard();

    }, 900);
}

function resetBoard(){

    firstCard = null;
    secondCard = null;
    lockBoard = false;
}

function confettiEffect(){

    document.body.style.background =
    "linear-gradient(135deg,#6c5ce7,#00cec9)";
}

</script>

<?php include '../includes/footer.php'; ?>