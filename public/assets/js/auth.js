document.addEventListener('DOMContentLoaded', ()=>{
  const login = document.getElementById('loginForm');
  const register = document.getElementById('registerForm');

  if (login){
    login.addEventListener('submit', e=>{
      const email = login.querySelector('[name="email"]').value.trim();
      const password = login.querySelector('[name="password"]').value;
      if (!email || !password){
        e.preventDefault(); alert('Veuillez remplir tous les champs');
      }
    });
  }

  if (register){
    register.addEventListener('submit', e=>{
      const name = register.querySelector('[name="name"]').value.trim();
      const email = register.querySelector('[name="email"]').value.trim();
      const password = register.querySelector('[name="password"]').value;
      if (!name || !email || password.length < 6){
        e.preventDefault(); alert('Nom, email et mot de passe (6 caractères minimum) requis');
      }
    });
  }
});
