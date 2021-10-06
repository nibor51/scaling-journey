function getResults() {

    // Result
    let amountCorrect = 0;
    let result = 0;
  
  // Boucle pour aller dans chaque questions
    for(let i = 0; i <= 4; i++) {
      let radiosName = document.getElementsByName('question'+i);
  
  // Boucles pour regarder les réponses
  
      for(let j = 0; j < radiosName.length; j++) {
        let radiosValue = radiosName[j];
        if(radiosValue.value == "correct" && radiosValue.checked) {
          amountCorrect++;
          
        }
      }
    }
  document.getElementById('resultat').innerHTML =
  amountCorrect;
  }


function resultOne(int) {   

    let inner = document.getElementById("resultatyes");
    let radiosName = document.getElementsByName('question'+int);

// Boucles pour regarder les réponses

    for(let j = 0; j < radiosName.length; j++) {
      let radiosValue = radiosName[j];
      if(radiosValue.value == "correct" && radiosValue.checked) {
        inner.innerHTML = "Lets go";
        break;
      }
      else {
         inner.innerHTML = "Dommage..";
      }
    }
  } 
