document.addEventListener('DOMContentLoaded', function () {
    var myClassLink = document.querySelector('.my-class');
  
    myClassLink.addEventListener('click', function (event) {
      event.preventDefault(); 
  
      
      document.documentElement.classList.add('disable-animations');
    });
  });
  
  function handleButtonClick(button, divToShow, divsToHide) {
    button.addEventListener('click', function() {
      divToShow.style.display = 'block';
      divsToHide.forEach(div => (div.style.display = 'none'));
      buttons.forEach(b => changeButtonClassBack(b));
      changeButtonClass(button);
    });
  }
  
  document.getElementById('specialButton').addEventListener('click', function() {
    var buttonsContainer = document.querySelector('.buttons');
    buttonsContainer.innerHTML = `
      <button class="blob-btn normal" id="prog1-button">Общеобразовательные программы</button>
      <button class="blob-btn normal" id="prog2-button">Повышение квалификации</button>
      <button class="blob-btn normal" id="prog3-button">Профессиональная переподготовка</button>
      <button class="blob-btn normal" id="prog4-button">Программы стажировок</button>
    `;
  
    const newButton1 = document.getElementById('prog1-button');
    const newButton2 = document.getElementById('prog2-button');
    const newButton3 = document.getElementById('prog3-button');
    const newButton4 = document.getElementById('prog4-button');
  
    handleButtonClick(newButton1, div1, [div2, div3, div4]);
    handleButtonClick(newButton2, div2, [div1, div3, div4]);
    handleButtonClick(newButton3, div3, [div1, div2, div4]);
    handleButtonClick(newButton4, div4, [div1, div2, div3]);
  });
  
  
  
  
  
  
  document.getElementById('specialButton').addEventListener('click', function() {
    var buttonsContainer = document.querySelector('.caption-inner');
    buttonsContainer.innerHTML = `
    <h4>Программы профессиональной переподготовки</h4>
    <p>Включите дополнительное образование в свои планы развития!</p>
    <br>
    <a href="about_center.php" class="btn-illumination-normal" id="customButton">Подробнее</a>
    `;
  });






