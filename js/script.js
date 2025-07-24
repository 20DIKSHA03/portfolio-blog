document.addEventListener('DOMContentLoaded', () => {
  const toggleBtn = document.getElementById('darkModeToggle');
  const body = document.body;
  const icon = document.getElementById('darkIcon');

function updateIcon() {
  if (!icon) return;  // exit if icon element not found

  if (body.classList.contains('dark-mode')) {
    icon.textContent = '☀️';
  } else {
    icon.textContent = '🌙';
  }
}

  // On page load
  if (localStorage.getItem('darkMode') === 'enabled') {
    body.classList.add('dark-mode');
    updateIcon();
  }

  toggleBtn.addEventListener('click', () => {
    body.classList.toggle('dark-mode');
    if (body.classList.contains('dark-mode')) {
      localStorage.setItem('darkMode', 'enabled');
    } else {
      localStorage.removeItem('darkMode');
    }
    updateIcon();
  });
});