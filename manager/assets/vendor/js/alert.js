document.addEventListener('DOMContentLoaded', function () {
  var alerts = document.querySelectorAll('.alert-fly');

  alerts.forEach(function (alert) {
    setTimeout(function () {
      alert.style.transition = 'opacity 0.5s ease-in-out';
      alert.style.opacity = '0';
      setTimeout(function () {
        alert.remove();
      }, 500);
    }, 3000);
  });
  var alertz = document.querySelectorAll('.alert-fly2');

  alertz.forEach(function (alert) {
    setTimeout(function () {
      alertz.style.transition = 'opacity 0.5s ease-in-out';
      alertz.style.opacity = '0';
      setTimeout(function () {
        alert.remove();
      }, 500);
    }, 3000);
  });
});
