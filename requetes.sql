--Liste des voitures avec ID et nom
SELECT voiture.IDVoiture, voiture.Nom
FROM voiture;

--Liste des voitures avec toutes les colonnes
SELECT * FROM voiture;

--Liste triée des noms des marques
SELECT marques.NomMarque
FROM marques
ORDER BY marques.NomMarque ASC

-- xxxx de table
SELECT marques.IDMarque, marques.NomMarque, voiture.Marque, voiture.Nom
FROM marques, voiture;