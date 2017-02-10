/////////////////////////////////////////////////////////////////
// 				Exemple pour activité git & github             //
/////////////////////////////////////////////////////////////////

*****************************************************************
*****************************************************************

* Enoncé de l'exercice

Un libraire a beaucoup de livres classés dans 26 catégories étiquetées A, B, ... Z. Chaque livre a un code c de 3, 4, 5 lettres majuscules ou plus. La première lettre d'un code est la lettre majuscule de la catégorie de livre. Dans la stocklist du libraire, chaque code c est suivi d'un espace et d'un entier positif n (int n> = 0) qui indique la quantité de livres de ce code en stock.

Dans une liste de stock donnée, tous les codes ont la même longueur et tous les numéros ont leur propre même longueur (peut être différente de la longueur du code).

Par exemple, un extrait de l'une des listes de stock pourrait être:

Dans cette liste de stock tous les codes ont une longueur de cinq et tous les nombres ont une longueur de deux.

Vous recevrez une liste de stock (par exemple: L) et une liste de catégories en lettres majuscules, par exemple:

Et votre tâche consiste à trouver tous les livres de L avec des codes appartenant à chaque catégorie de M et à additionner leur quantité selon chaque catégorie. Vous devrez d'abord déterminer la longueur commune des codes et la longueur commune des quantités dans L.

Pour les listes L et M par exemple vous devez retourner la chaîne (dans Haskell / Clojure une liste de paires):

  (A: 20) - (B: 114) - (C: 50) - (W: 0)

Où A, B, C, W sont les catégories, 20 est la somme du livre unique de la catégorie A, 114 la somme correspondant à «BKWRK» et «BTSQZ», 50 correspondant à «CDXEF» et 0 à la catégorie «W», Car il n'y a pas de code commençant par W.

Si L ou M sont vide, la chaîne de retour est "" (Clojure devrait retourner un tableau vide à la place).