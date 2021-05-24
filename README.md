# Test  CRUD :  Create,Read,Update,Delete)

- [Installation](#installation)
- [Prérequis](#Prérequis)
- [Importation](#Importation)
- [Configuration](#Confi)
- [Exécuter](#Exécuter)

<a name="installation"></a>
## Installation

<a name="Prérequis"></a>
## Prérequis
-	Le framework Laravel version 8 
-	PHPmyAdmin
-	Une Base de données (le nom ici : « hellocse »

<a name="Importation"></a>
## Importation 

-	Télécharger le projet  via le lien https://github.com/rezahello/Test.git  (la partie «master» ) 
-	Dézipper le fichier pour avoir le projet dans un dossier souhaité <br>
-	Dans le terminal de Laravel, tapez : 
<h6>
 Composer update --lock <br>
 npm install <br>
 cp .env.example .env  <br>
 php artisan key:generate <br>
 </h6> 

<a name="Confi"></a>
## Configuration
-	Créer une base de données ( ici le nom est : « hellocse »
-	Configurer le fichier .env :<br>ici : 
<h6>
DB_CONNECTION=mysql <br>
DB_HOST=127.0.0.1 <br>
DB_PORT=3306 <br>
DB_DATABASE=hellocse<br>
DB_USERNAME=root<br>
DB_PASSWORD= <br> </h6>

-	Sur le terminal , taper : php artisan migrate  

<h5> Note : Vous pouvez télécharger la BDD « hellocse » via " https://github.com/rezahello/Test.git "</h5>

<a name="Exécuter"></a>
## Exécuter le projet 
-	Back :  http://127.0.0.1:8000/admin
-	Fron : http://127.0.0.1:8000
