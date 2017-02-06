# :fr: BapMarine2017 :fr:

Continuation du projet [BapMarineNationale](https://github.com/NicolasGauvin/BapMarineNationale).

**Editeur de Code :**  
[Brackets](http://brackets.io/) 

# Configuration Brackets

:warning: *Nous demandons a tous nos codeurs de bien vouloir être rigoureux  (voir maniaques) dans la presentation de leur code.* :warning:


## Ajustage des paramètres :

1. Ouvrir les paramètres.
2. Deux fichiers s’ouvrent alors. Dans “brackets.json” chercher  (CMD+F) “useTabChar”.
4. *Si vous avez un resultat* : changer sa valeur a “true”.
5. *Si vous n’avez pas de resultats* :  
	• Chercher ”wordWrap”.  
	• Ajouter une ligne en dessous (sans oublier d’ajouter une virgule si “wordWrap” est en fin de bloc).  
	• Ecrivez `"useTabChar": true` (et ajouter une virgule si cette ligne n’est **PAS** en fin de bloc).

## Les Plugins Brackets :

*Comment Installer des Plugins ? Cliquez [ICI](https://www.youtube.com/watch?v=xL0XZ33E7uI)*

### Les plugins OBLIGATOIRES :

1. **Brackets Git** (par Martin Zagora) | [GitHub](https://github.com/zaggino/brackets-git)
2. **Todo** (par Mikael Jorhult) | [GitHub](https://github.com/mikaeljorhult/brackets-todo)
3. **EMMET** | [Website](http://emmet.io/)
4. **brackets-typescript** (par Martin Zagora) | [GitHub](https://github.com/zaggino/brackets-typescript)

### Les plugins conseillés :

1. *Beautify* | Permet de rendre le code plus lisible avec CMD+L (Mac).
2. *Show Whitespace* | Affiche les espaces (pratique pour s’assurer que les indentations sont en tabs).
3. *Indent Guides* | Pour bien aligner les blocs.



# GIT

## Installation de Git (Mac) :

1. Téléchargez et installez [Git for Mac](https://git-scm.com/downloads)
2. Téléchargez et installez [iTerm 2](https://www.iterm2.com/downloads.html). Ceci est votre **Terminal** dans laquelle vous ferez vos commandes Git.
3. Passez à la [mise en place des fichiers.](#anchor1)

## Installation de Git for Windows (Windows):

1. Téléchargez [Git for Windows](https://github.com/git-for-windows/git/releases/v2.10.2.windows.1) (en bas de la page).
2. Installez dans "C:/Program Files/Git", puis séléctionnez toutes les cases sauf la dernière, puis séléctionnez "Use Git from Git Bash only", puis laissez tout par défault.
3. Trouvez Git Bash sur votre Bureau et lancez-le. Ceci est votre **Terminal** dans laquelle vous ferez vos commandes Git.
4. Passez à la [mise en place des fichiers.](#anchor1)

## Mise en place des fichiers : 

:heavy_exclamation_mark: **ATTENTION le chemin vers htdocs est :**  
• "C:/MAMP/htdocs" pour Windows  
• "/Applications/MAMP/htdocs" pour Mac 

1. Dans le dossier htdocs , créez un dossier qui sera votre dossier du projet.
2. Ouvrez votre le Terminal et tapez  
	• `cd C:/MAMP/htdocs/votre_dossier` (Windows)  
	• `cd /Applications/MAMP/htdocs/votre_dossier` (Mac)  
et appuyez sur Entrée.
3. Puis tapez `git clone https://jblafon@bitbucket.org/tmn2017/bapmarine2017.git` et appuyez sur Entrée.

## Commandes Git 

Git va nous permettre de travailler sur le même projet en même temps mais **NE JAMAIS MODIFIER SUR LES MÊMES LIGNE D'UN MÊME FICHIER EN MÊME TEMPS !!!**

### Envoyer un fichier vers le git :

1. ouvrir le Terminal
2. tapez  
	• `cd C:/MAMP/htdocs/votre_dossier/BapMarine2017` (Windows)  
	• `cd /Applications/MAMP/htdocs/votre_dossier/BapMarine2017` (Mac)
3. tapez `git add le_fichier_modifié.html` pour ajouter le fichier à la liste de push (répetez si vous avez modifié plusieurs fichiers)
4. tapez `git commit -m "descriptif de vos modifs"` **N'oubliez pas de décrire vos modifs svp**
5. tapez `git origin master`

### Récuperer les fichier depuis le Git :

1. ouvrir le Terminal
2. tapez  
	• `cd C:/MAMP/htdocs/Votre_dossier/BapMarine2017` (Windows)  
	• `cd /Applications/MAMP/htdocs//Votre_dossier/BapMarine2017` (Mac) 
3. tapez `git pull`

## Mise en place de la base de donnée :

### Importation de la base de données:

1. Allez sur PhpMyAdmin de votre localhost.
2. Créez une nouvelle base de donnée nommée `marinedb` en collation `utf8_general_ci`.
3. Cliquez sur la base de donnée puis sur l'onglet "Import" et importez le fichier "votre_dossier/BapMarine2017/sql/marine_nationale_db.sql".

### Changement des identifiants de connection à la base de donnée:

1. Dans "BapMarine2017", créez un fichier "db.php"
2. Ouvrez le fichier "db.php.example" et copiez le contenu dans "db.php"
3. Remplacer la ligne 6 par `$db = 'marinedb';` (_ATTENTION_ : ne pas supprimer ou renommer le fichier initial)



# Architecture du code :

_index.php_|page d'accueil  
_load.php_|script php récupérant les informations d'une sauvagarde si la page actuelle est une carte sauvagardée  
_map.php_|page principale du projet; c'est la page où on trouve la carte  
_sauveguarde.php_|script php permettant de sauveguarder une nouvelle carte ou d'écraser une sauvegarde existant  
_delete.php_|script php permettant de supprimer une carte  
_db.php.example_|voir setup de l'installation partie 2  
_.gitignore_|fichier empechant le partage de db.php (voir setup) pour ne pas créer des conflits  
**dossier sql**  
_save_marine_db.sql_|fichier d'export de la base de données  
_save_marine_table.sql_|fichier d'export de la table sql  
**dossier image**  
toutes les pictos, les image d'unités ou d'éléments  
**dossier js**  
_coord.js_|fichier comprenant les coordonnées de la carte ainsi que la fonctionalité de filtres  
_function.js_|fichier comprenant des scripts de de mise en page (sidebar...) et une partie de la fonctionnalité de radar  
_icone.js_|fichier comprenant toutes les icones (principalement les icones d'unités)  
_jquery.tubular.js_|script d'affichage de la vidéo d'index  
_leaflet.js_|fichier js de la librairie leaflet  
_leaflet-src.js_|fichier js de la librairie leaflet  
_map.js_|fichier principale de js. Gestion des bateaux, des formes, du radar, du chargement de la sauvegarde...  
_onglet.js_|fichier js de gestion des onglets dans les paramètres  
_sauveguarde.js_|fichier de sauveguarde (principalement de preparation de la save des bateaux)  
_scriptIndex.js_|divers scripts d'affichage de la page index.php  
**dossier css**  
_leaflet.css_|fichier de style de la librairie leaflet  
_reset.css_|ficher de style pour reste les charactéristiques de chaque naviguateurs  
_screen.css_|fichier de style du plugin de vidéo tubular  
_style.css_|fichier de style d ela page map.php
_styleIndex.css_|fichier de style de la page index.php

# :penguin:
