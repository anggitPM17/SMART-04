// js/auth-check.js
if (!localStorage.getItem('loggedIn')) {
  window.location.href = 'login.html';
}
