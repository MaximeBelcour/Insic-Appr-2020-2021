-- Liste des voitures avec ID et nom
SELECT voiture.IDVoiture, voiture.Nom
FROM voiture;

-- Liste des voitures avec toutes les colonnes
SELECT * FROM voiture;

-- Liste triée des noms des marques
SELECT marques.NomMarque
FROM marques
ORDER BY marques.NomMarque ASC;

-- produit cartésien de 2 tables
SELECT marques.IDMarque, marques.NomMarque, voiture.Marque, voiture.Nom
FROM marques, voiture
WHERE marques.IDMarque = voiture.Marque;

-- join (jointure) de 2 tables avec égalité sur les ID
SELECT marques.IDMarque, marques.NomMarque, voiture.Marque, voiture.Nom
FROM marques, voiture
WHERE marques.IDMarque = voiture.Marque;

-- Même chose sans l'affichage des IDs
SELECT marques.NomMarque, voiture.Nom
FROM marques, voiture
WHERE marques.IDMarque = voiture.Marque;

-- Liste triée des voiture de plus 300cv
SELECT voiture.Puissance, voiture.Nom
FROM voiture
WHERE voiture.Puissance > '300';
ORDER BY Puissance ASC;

-- Quelle est la voiture la moins chère ?
SELECT voitures.Nom FROM voiture
ORDER BY Prix ASC
Limit 1
