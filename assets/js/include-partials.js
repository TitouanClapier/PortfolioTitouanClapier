async function includeHTML(id, url) {
  const placeholder = document.getElementById(id);
  if (!placeholder) return;
  try {
    const response = await fetch(url);
    if (!response.ok) return;
    placeholder.innerHTML = await response.text();
  } catch (error) {
    console.error('Error including HTML partial:', error);
  }
}

window.addEventListener('DOMContentLoaded', () => {
  includeHTML('header-placeholder', 'partials/header.html');
  includeHTML('footer-placeholder', 'partials/footer.html');
});
