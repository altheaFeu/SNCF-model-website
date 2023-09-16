const f = document.getElementById('form-search');
const q = document.getElementById('searchBar');
const google = 'https://www.google.com/search?q=SNCF%3A+';

// Fonction qui tourne dès que quelqu'un presse le bouton de recherche
function submitted(event) {
  event.preventDefault();

  // Envoie vers la page d'acceuil
  if(q.value == 'Acceuil' || q.value=='acceuil' || q.value=='home'){
    const url = './config.php';
    const win = window.open(url, '_top');
    win.focus();
  
  // Envoie vers la page de présentation de la SNCF Réseau
  } else if(q.value == 'SNCF Réseau' || q.value=='réseau' || q.value=='Présentation' || q.value=='Qui sommes-nous ?'){
    const url = './sncf-reseau.html';
    const win = window.open(url, '_top');
    win.focus();
  
  // Envoie vers la page de connexion
  }else if(q.value == 'Connexion' || q.value=='Mon compte'){
    const url = '../php/index.php';
    const win = window.open(url, '_top');
    win.focus();
  
  // Envoie vers la page sur la malveillance ferroviaire
  }else if(q.value == 'Malveillance' || q.value=='malveillance'){
    const url = './malveillance.html';
    const win = window.open(url, '_top');
    win.focus();
  
  // Envoie vers la page sur les vidéos sûreté
  }else if(q.value == 'Vidéos sûreté' || q.value=='vidéos' || q.value=='sûreté'){
    const url = './videos-surete.html';
    const win = window.open(url, '_top');
    win.focus();
  
  // Envoie vers la page sur les mentions légales
  }else if(q.value == 'Mentions légales' || q.value=='CGU'){
    const url = './cgu.html';
    const win = window.open(url, '_top');
    win.focus();
  
  // Envoie vers la page sur les cookies
  }else if(q.value == 'Cookies' || q.value=='Données personnelles' || q.value=='Droits utilisateur'){
    const url = './cookies.html';
    const win = window.open(url, '_top');
    win.focus();
  
  // Envoie vers la page contacts
  }else if(q.value == 'Contacts' || q.value=='Nous contacter'){
    const url = './contact.html';
    const win = window.open(url, '_top');
    win.focus();
  
  // Autre : envoie vers google SNCF : "Recherche"
  }else if(q.value == 'Bulles'){
  const url = './bulles.html';
  const win = window.open(url, '_top');
  win.focus();

  }else{
    const url = google + '+' + q.value;
    const win = window.open(url, '_top');
    win.focus();
  }
}

f.addEventListener('submit', submitted);