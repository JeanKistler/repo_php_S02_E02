# :movie_camera: Exercice Cinéma

Une intégration a été réalisée par un prestataire externe pour le site du cinéma Rodia de la ville d'Haut-Cloques. La directrice du cinéma nous a choisi pour finaliser le travail. :handshake:

Pour le moment, nous disposons uniquement des fichiers HTML et CSS, et pourtant c'est tout ce qu'il nous faut pour commencer à pratiquer PHP et mieux comprendre ce que ce langage va nous apporter. :+1:

3, 2, 1... première mise en situation avec PHP, moteur ! :clapper:

## Etape 1

### Objectif

Ne pas répéter le code HTML et afficher le tarif pour [l'âge du capitaine](https://fr.wikipedia.org/wiki/%C3%82ge_du_capitaine) (43 ans).

### Comment faire ?

- créer les fichiers PHP correspondants aux fichiers HTML fournis
- pour ne pas répéter le code source **HTML** dans nos fichiers, il faut utiliser l'inclusion de fichiers
- dans le fichier PHP générant la page des tarifs :
  - reprendre les conditions écrites dans le challenge
  - créer une variable `$age` avec la valeur 43
  - afficher l'_âge_ et le _tarif_

## Etape 2

### Objectif

Lister tous les âges (1 à 99) et afficher à côté le tarif correspondant

### Comment faire ?

- écrire une boucle de 1 à 99
- pour chaque âge, calculer le tarif
- générer le code HTML pour afficher l'âge et le tarif

## Etape 3

### Objectif

Afficher la liste des films en salle

### Comment faire ?

- créer un fichier pour la page `En salle`
- modifier la navigation pour faire le lien vers la page `En salle`
- créer un tableau (array) PHP contenant la liste de 5 films actuellement en salle (=> tableau de 5 titres de film)
- parcourir ce tableau avec la boucle `for` afin d'afficher ces 5 titres de films dans la page (HTML)

## Etape 4

### Objectif

Afficher le tarif de la carte d'abonnement 5 places pour tous les âges (1 à 99 ans)

### Comment faire ?

- écrire une boucle de 1 à 99
- pour chaque âge, calculer le tarif de la place, avec la réduction de l'abonnement
  - le pourcentage de réduction n'est pas le même selon l'âge
  - le pourcentage de réduction s'applique sur le tarif plein, réduit ou enfant, selon l'âge
- générer le code HTML pour afficher le tarif (à droite du tarif du ticket)

## Etape 5

### Objectif

Afficher les tarifs de tickets et des réductions des cartes d'abonnement dynamiquement

### Comment faire ?

- créer un tableau associatif contenant le nom de chaque tarif, et le montant
- parcourir ce tableau pour générer le même code HTML qu'avant
- créer un tableau associatif contenant le nom de chaque carte d'abonnement, et la réduction
- parcourir ce tableau pour générer le même code HTML qu'avant

## Etape 6

### Objectif

Pouvoir indiquer la diffusion de plus de 5 films dans le cinéma

### Comment faire ?

- ajouter un film dans le tableau de films existant
- modifier la ou les boucles afin que le nombre d'index/clé soit automatiquement calculé

## Etape 7

### Objectif

Mieux structurer notre code et bien respecter la séparation des concepts (déjà vu avec CSS/forme séparée de HTML/fond)

### Comment faire ?

- les fichiers PHP "appelés" par le navigateur ne contiennent que du PHP
- ces fichiers incluent les fichiers de _templates_ nécessaires à générer un code source HTML correct
- dans les templates, il ne doit plus y avoir de calculs ou traitement, mais uniquement de la lecture
  - effectuer les calculs dans le fichier PHP "appelé"
  - stocker les calculs dans une ou plusieurs variables, sous forme de tableau
  - dans la template, parcourir le tableau
