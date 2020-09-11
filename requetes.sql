--Liste des voitures avec ID et nom
SELECT voiture.IDVoiture, voiture.Nom
FROM voiture;

--Liste des voitures avec toutes les colonnes
SELECT * FROM voiture;

--Liste triée des noms des marques
SELECT marques.NomMarque
FROM marques
ORDER BY marques.NomMarque ASC

-- produit cartésien de 2 tables
SELECT marques.IDMarque, marques.NomMarque, voiture.Marque, voiture.Nom
FROM marques, voiture
WHERE marques.IDMarque = voiture.Marque

-- join de 2 tables avec égalité sur les ID
SELECT marques.IDMarque, marques.NomMarque, voiture.Marque, voiture.Nom
FROM marques, voiture
WHERE marques.IDMarque = voiture.Marque