document.addEventListener('DOMContentLoaded', ()=>{
  // Simple progressive enhancement: lazy load images
  const imgs = document.querySelectorAll('img[data-src]');
  imgs.forEach(img=>{img.src = img.dataset.src; img.removeAttribute('data-src')});

  // Smooth scroll for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(a=>{
    a.addEventListener('click', e=>{e.preventDefault();document.querySelector(a.getAttribute('href')).scrollIntoView({behavior:'smooth'})});
  });
});
