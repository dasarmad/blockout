const set = document.querySelector('#set');
const pit = document.querySelector('#pit');
const level = document.querySelector('#level');
const sbFiltersForm = document.querySelector('#sbFiltersForm');
const sbTbody = document.querySelector('#sbTbody');

function loadScores(setValue, pitValue, levelValue) {
  // AJAX Request
  var xhttp = new XMLHttpRequest();
  xhttp.open("POST", "api/read-scores.php", true);
  xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhttp.onreadystatechange = function() {
    if(this.readyState == 4 && this.status == 200) {
      sbTbody.innerHTML = this.responseText;
    }
  };
  xhttp.send(`setValue=${setValue}&pitValue=${pitValue}&levelValue=${levelValue}`);
}

sbFiltersForm.addEventListener('submit', e => {
  e.preventDefault();
  loadScores(set.value, pit.value, level.value); // Invoking loadScores()
});

loadScores(set.value, pit.value, level.value); // Invoking loadScores() after page load
