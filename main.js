window.addEventListener("DOMContentLoaded",() => {
  const horas = parseInt(document.getElementById("horas").textContent) || 0;
  const minutos = parseInt(document.getElementById("minutos").textContent) || 0;
  const segundos = parseInt(document.getElementById("segundos").textContent) || 0;

  let totalSegundos = horas * 3600 + minutos * 60 + segundos;

  const display = document.getElementById("temporizador");
  const displayHoras = document.getElementById("horas");
  const displayMinutos = document.getElementById("minutos");
  const displaySegundos = document.getElementById("segundos");


  const updateDisplay = () => {
    const h = String(Math.floor(totalSegundos / 3600)).padStart(2, "0");
    const m = String(Math.floor(totalSegundos % 3600 / 60)).padStart(2, "0");
    const s = String(Math.floor(totalSegundos % 60)).padStart(2, "0");

    displayHoras.textContent = `${h}`;
    displayMinutos.textContent = `${m}`;
    displaySegundos.textContent = `${s}`;



  };

  updateDisplay();

  const timer = setInterval(() => {
    if(totalSegundos <= 0 ){
      clearInterval(timer);
      display.textContent = "!Tiempo terminado";
      return;
    }
    totalSegundos--;
    updateDisplay();
  },1000);

});

