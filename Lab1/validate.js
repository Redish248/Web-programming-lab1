var form = document.querySelector('.form');
var y_form = form.querySelector('.input_Y');
var x_form = form.querySelector('.X_element');

var generateError = function (text) {
  var error = document.createElement('div');
  error.className = 'error';
  error.innerHTML = text;
  return error;
}
  
var removeValidation = function () {
  var errors = form.querySelectorAll('.error');
  for (var i = 0; i < errors.length; i++) {
    errors[i].parentElement.removeChild(errors[i]);
  }
}
  
var checkFieldsPresence = function () {
  var check = true;
  var point = false; 
  if (y_form.value.indexOf(",") != -1) {
     y_form.value = y_form.value.replace(",",".");
     point = true;
  }
  if (!y_form.value || y_form.value <= -3 || y_form.value >= 5 || isNaN(y_form.value) || y_form.value > 10 || y_form.value.charAt(0).localeCompare(".") == 0) {
    var error = generateError('Некорректно задано значение Y. Y ∈ (-3;5). Y должно быть числом.');
    y_form.parentElement.insertBefore(error, null);
    check = false;
  } 
  if (!((x_form.value >= -5) && (x_form.value <= 3))) {
    var error = generateError('Выберите значение X');
    x_form.parentElement.insertBefore(error, null);
    check = false;
  }
      
     if (point) {
        y_form.value = y_form.value.replace(".",",");
     }
  if (check) {
    createForm(form)
  }
}

  

form.addEventListener('submit', function (event) {
   removeValidation(); 
  checkFieldsPresence(); 
})

  