### Custom 404 ###

Contributors: Godefroy
Tags: 404, custom error page, redirect, WordPress
Requires at least: 5.0
Tested up to: 6.0
Stable tag: 1.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Redirige les utilisateurs vers différents modèles de pages 404 personnalisés.


# Description

Custom 404 est un plugin WordPress qui redirige les utilisateurs vers des pages 404 personnalisées. Il sélectionne aléatoirement un modèle de page 404 à chaque fois qu'une page inexistante est visitée. Ce plugin est utile pour améliorer l'expérience utilisateur sur des pages introuvables.




## Features

* Redirection aléatoire vers des modèles de pages 404 personnalisés.
* Simple à installer et à utiliser.
* Modèles faciles à modifier et à personnaliser.


## Installation

1. Télécharge et extrait le fichier ZIP du plugin.
2. Transfère le dossier `404` dans le répertoire `/wp-content/plugins/`.
3. Ajouter cette ligne dans le .htaccess : "ErrorDocument 404 /wordpress/".
4. Modification du httpd.conf : "AllowOverride none" par "AllowOverride All".
5. Active le plugin via le menu **Extensions** dans WordPress.
6. (Optionnel) Personnalise les fichiers HTML des modèles 404 dans le répertoire `/wp-content/plugins/404/templates/`.
    
## FAQ

#### Où se trouvent les modèles de pages 404 ? 

Les modèles se trouvent dans le répertoire `/wp-content/plugins/404/templates/`. Il y a plusieurs sous-dossiers (ex : `burning`, `desert`, etc.) chacun contenant un fichier `404.html` modifiable.
####  Puis-je ajouter mes propres modèles de page 404 ?

Oui, tu peux ajouter tes propres modèles. Crée simplement un nouveau dossier dans `/wp-content/plugins/404/templates/`, et ajoute un fichier `404.html`. Le plugin sélectionnera ce modèle aléatoirement pour les pages introuvables.

