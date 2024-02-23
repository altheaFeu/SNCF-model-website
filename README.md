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

Le site intègre plusieurs éléments créés en "vanilla" (JavaScript vanilla, CSS basique, PHP basique) :
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

Un serveur est nécessaire pour faire fonctionner le site. J'utilise un serveur WAMP, mais vous pouvez également utiliser d'autres serveurs tels que XAMPP.

Pour utiliser ce projet, vous pouvez le télécharger manuellement ou utiliser la ligne de commande git :

```bash
git clone https://github.com/nom-utilisateur/nom-projet.git
```

## Gestion de la base de données

Pour utiliser la page de connexion et de déconnexion, vous aurez besoin d'un serveur MySQL. Allez dans le dossier `php -> config.php` et modifiez la variable `$bdd` en fonction de vos paramètres :

```php
$bdd = new PDO('mysql:host=localhost;dbname=projet_html;charset=utf8', 'root', '');
```

## Page secrète

Pour accéder à la page secrète (`bulles.html`), tapez "bulles" dans la barre de recherche.
