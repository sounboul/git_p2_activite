/////////////////////////////////////////////////////////////////
// 				Exemple pour activit� git & github             //
/////////////////////////////////////////////////////////////////

*****************************************************************
*****************************************************************

* Enonc� de l'exercice

Un libraire a beaucoup de livres class�s dans 26 cat�gories �tiquet�es A, B, ... Z. Chaque livre a un code c de 3, 4, 5 lettres majuscules ou plus. La premi�re lettre d'un code est la lettre majuscule de la cat�gorie de livre. Dans la stocklist du libraire, chaque code c est suivi d'un espace et d'un entier positif n (int n> = 0) qui indique la quantit� de livres de ce code en stock.

Dans une liste de stock donn�e, tous les codes ont la m�me longueur et tous les num�ros ont leur propre m�me longueur (peut �tre diff�rente de la longueur du code).

Par exemple, un extrait de l'une des listes de stock pourrait �tre:

Dans cette liste de stock tous les codes ont une longueur de cinq et tous les nombres ont une longueur de deux.

Vous recevrez une liste de stock (par exemple: L) et une liste de cat�gories en lettres majuscules, par exemple:

Et votre t�che consiste � trouver tous les livres de L avec des codes appartenant � chaque cat�gorie de M et � additionner leur quantit� selon chaque cat�gorie. Vous devrez d'abord d�terminer la longueur commune des codes et la longueur commune des quantit�s dans L.

Pour les listes L et M par exemple vous devez retourner la cha�ne (dans Haskell / Clojure une liste de paires):

  (A: 20) - (B: 114) - (C: 50) - (W: 0)

O� A, B, C, W sont les cat�gories, 20 est la somme du livre unique de la cat�gorie A, 114 la somme correspondant � �BKWRK� et �BTSQZ�, 50 correspondant � �CDXEF� et 0 � la cat�gorie �W�, Car il n'y a pas de code commen�ant par W.

Si L ou M sont vide, la cha�ne de retour est "" (Clojure devrait retourner un tableau vide � la place).