if (window.location.href.includes('/ko')) {
  document.getElementById('kor').classList.add('active');
  document.getElementById('eng').classList.remove('active');
} else {
  document.getElementById('kor').classList.remove('active');
  document.getElementById('eng').classList.add('active');
}
