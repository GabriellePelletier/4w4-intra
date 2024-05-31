# 4w4-Intra | TP2

### _Auteur: Gabrielle pelletier_

Voici le tp2 pour l'examen intra affichant la page d'erreur 404 lorsque
l'utilisateur cherche du contenu qui n'existe pas.

## Profil Étudiant sur Github: https://github.com/GabriellePelletier

## LIEN VERS LE NOUVEAU DÉPÔT DU TP2: https://github.com/GabriellePelletier/4w4-intra

## LIEN VERS LE DÉPÔT DU CARROUSEL: https://github.com/GabriellePelletier/carrousel-2024

## LIEN VERS LE DÉPÔT DU WP-CONTENT: https://github.com/GabriellePelletier/wp-content-2024

## Lien vers le Web Hosting Canada : https://gftnth00.mywhc.ca/tim23/

# Instructions

Épreuve finale du cours de :
Conception d’interfaces et développement Web - 4W4
Durée de l’épreuve : 3 heures  
Compte pour 20% de la note globale du cours
À remettre :
• Sur Github dans votre dépôt 4W4, une branche epreuve-finale qui contiendra au minimum 5 commits.
• Un nouveau dépôt « ef-pays » qui contiendra au minimum 5 commits
• Les commits s’étalent pendant toutes la durée de l’épreuve. Faite les deux push vers votre Github seulement à la fin de l’épreuve
• Sur WHC.ca votre site est fonctionnel avec
o Le modèle de page template-pays.php
o Plugin API-REST « pays »
Ce qui est fourni :
• L’adresse du placeholder 150x150 : https://via.placeholder.com/150
Objectifs : Utilisez la structure de thème de votre TP2 pour réaliser le développement de l’épreuve finale.
Ce que vous devez réaliser

1. Une page décrivant par pays les plus belles destinations de voyages la page sera créé à partir du modèle « template-pays.php »
2. Une extension basée sur API REST de Wordpress qui génère un menu constitué des noms des pays et selon le pays sélectionné affiche l’ensemble des destinations de ce pays. L’extension sera intégré dans le modèle de page à partir d’un « short-code »
   a. "France","États-Unis", "Canada", "Argentine", "Chili", "Belgique", "Maroc", "Mexique", "Japon", "Italie", "Islande", "Chine", "Grèce", "Suisse



Barème de correction sur 20 points

1. Le choix Pays est ajouté dans le menu principal (1 point)
2. La page pays contient un titre, une introduction, une galerie d’images et deux vagues (6 points)
   Titre : Les plus beaux pays
   a. Titre
   b. Introduction :
   c. Galerie d’images
   d. Une vague sépare la section intro et la section REST-API
   e. Une vague sépare la section REST-API et le pied de page

3. La section REST API (10 points)
   a. Un menu affichant l’ensemble des pays comme sur la maquette
   b. Le contenu par défaut est constitué des destinations de la France
   c. En cliquant sur un bouton « Pays » les nouvelles destination s’affichent
   d. Le format d’affichage est le même que celui décrit sur les maquettes
   e. L’image associée à une destination est une image mise en avant à partir de l’éditeur de Wordpress
   f. Si la destination ne contient pas d’image mise-en-avant on affiche une image temporaire « placeholder » accessible à partir de cette adresse : : https://via.placeholder.com/150
   g. Les destinations proviennent de votre base de données se trouvant sur votre compte WHC.CA

4. Github : (3 points)
   a. Vous devez créer une branche EF sur votre dépôt de thème
   b. Vous devez créer un nouveau dépôt qui contiendra l’extension API-REST « Pays »
   c. Étalement des commits pendant les trois heures de EF (pas dans les 5 dernières minutes de l’EF)
   d. Chaque commit devrait contenir un état fonctionnel de votre développement
   e. Chaque commit est commenté et préfixé par «ef-vos initial» et un commentaire décrivant la modification
   f. Un readme.md contenant une description de l’épreuve et des modification apportés, le nom de l’auteur un lien vers votre site distant WHC.CA
   g. Le lien vers votre dépôt github est indiqué dans la section footer de votre site
