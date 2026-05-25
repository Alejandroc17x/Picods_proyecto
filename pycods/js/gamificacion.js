function ganarXP(cantidad){

    let xp = parseInt(
        document.getElementById("xp").innerText
    );

    xp += cantidad;

    document.getElementById("xp").innerText = xp;
}