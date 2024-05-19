
/* Funcion de letas dinámicas  */
document.addEventListener("DOMContentLoaded", function () {
    const gamerText = document.getElementById("gamerText");

    const messages = [
        "¡Bienvenido al Mundo Gamer!",
        "Explora emocionantes aventuras.",
        "Derrota a tus enemigos.",
        "¡Consigue la victoria!",
        "Diviértete al máximo."
    ];

    function showText(message) {
        gamerText.innerHTML = "";
        message.split('').forEach((char, index) => {
            if (char !== ' ') {
                const span = document.createElement('span');
                span.textContent = char;
                span.style.animationDelay = `${index * 0.1}s`;
                gamerText.appendChild(span);
            } else {
                gamerText.appendChild(document.createTextNode(' '));
            }
        });

        gamerText.classList.add('animate');
    }

    function changeMessage() {
        const currentMessage = messages.shift();
        messages.push(currentMessage);
        showText(currentMessage);
        setTimeout(changeMessage, 4000); 
    }

    changeMessage();
});
