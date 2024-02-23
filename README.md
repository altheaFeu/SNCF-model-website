# Un site web ferroviaire 🚂

[![CSS](https://img.shields.io/badge/CSS-3-blue.svg)](https://developer.mozilla.org/en-US/docs/Web/CSS)
[![JavaScript](https://img.shields.io/badge/JavaScript-ES6-yellow.svg)](https://developer.mozilla.org/en-US/docs/Web/JavaScript)
[![jQuery](https://img.shields.io/badge/jQuery-3.6.3-blue.svg)](https://jquery.com/)
[![PHP](https://img.shields.io/badge/PHP-7.4.3-blue.svg)](https://www.php.net/)
[![Open Source](https://img.shields.io/badge/Open%20Source-Yes-brightgreen.svg)](LICENSE.md)
[![Build By](https://img.shields.io/badge/Build%20By-Althéa_Feuillet-orange.svg)](https://yourportfolio.com)
[![En Cours de Modification](https://img.shields.io/badge/En%20Cours%20de%20Modification-Oui-green.svg)](LICENSE.md)


## Présentation

Ce site web s'inspire du design du site de la SNCF et a été réalisé dans le cadre du cours de web dynamique de la 1<sup>ère</sup> année de master.

## Composition

Le site comprend divers éléments conçus en utilisant les bases de développement web, incluant :
- Un carousel
- Une page de connexion et d'inscription
- Un bouton "Back to Top"
- Un accordéon

## Arborescence

```
.
├── css/
│   ├── global-variable/
│   ├── ├── global-acceuil.css
│   ├── ├── ...
│   ├── head-main/
│   ├── ├── carousel.css
│   ├── main-text/
│   ├── ├── main-acceuil.css
│   ├── ├── ...
│   ├── back2top.css
│   ├── bulles.css
│   ├── footer.css
│   ├── header.css
│   ├── polices.css
├── img/
│   ├── illustrations/
│   ├── ├── ...
│   ├── images/
│   ├── ├── ...
│   ├── logos/
│   ├── ├── ...
├── js/
│   ├── back2top/
│   ├── ├── ...
│   ├── searchbar/
│   ├── ├── ...
│   ├── accordeon.js
│   ├── carousel.js
│   ├── eye.js
│   ├── jquery-3.6.3.min.js
├── page-site/
│   ├── bulles.html
│   ├── cgu.html
│   ├── contact.html
│   ├── cookies.html
│   ├── home.html
│   ├── malveillance.html
│   ├── sncf-reseau.html
│   ├── videos.surete.html
├── php/
│   ├── confi.php
│   ├── connexion.php
│   ├── deconnexion.php
│   ├── formulaire.php
│   ├── index.php
│   ├── inscription_traitement.php
│   ├── landing.php
├── polices/
│   ├── ....TTF
└── .gitattributes
└── README.md
```

## Installation

La mise en place de votre environnement de développement web est une étape cruciale pour faire fonctionner ce projet. Actuellement, j'utilise WAMP, mais vous avez également la possibilité d'opter pour d'autres solutions telles que XAMPP, en fonction de vos préférences.

Pour obtenir le code source du projet, vous avez deux options : télécharger manuellement les fichiers ou utiliser la ligne de commande Git. Si vous choisissez la seconde option, exécutez la commande suivante dans l'interpréteur git :

```bash
git clone https://github.com/altheaFeu/SNCF-model-website.git
```

## Gestion de la base de données

Pour utiliser la page de connexion et de déconnexion, vous aurez besoin d'un serveur MySQL. Allez dans le dossier `php -> config.php` et modifiez la variable `$bdd` en fonction de vos paramètres :

```php
$bdd = new PDO('mysql:host=localhost;dbname=your-dbname;charset=utf8', 'your-user', 'your-password');
```

Assurez-vous que votre base de données comprend la table **Utilisateurs**, avec les colonnes "cp" (qui correspond à l'identifiant des agents de la SNCF), "email" et "password".

Voici comment vous pourriez créer cette table : 

```sql
CREATE TABLE Utilisateurs (
    id SERIAL PRIMARY KEY,
    cp VARCHAR(8) UNIQUE NOT NULL CHECK (cp ~ '^[0-9]{7}[A-Z]{1}$'),
    email VARCHAR(100) CHECK (email ~ '^\w{1,100}\.[\w.]+@reseau\.sncf\.fr$'),
    password VARCHAR(255) NOT NULL
);
```

## Page secrète

Pour accéder à la page secrète (`bulles.html`), tapez "bulles" dans la barre de recherche.
