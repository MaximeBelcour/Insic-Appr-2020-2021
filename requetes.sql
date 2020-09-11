--Liste des voitures avec ID et nom
SELECT voiture.IDVoiture, voiture.Nom
FROM voiture;

--Liste des voitures avec toutes les colonnes
SELECT * FROM voiture;

--Liste triée des noms des marques
SELECT marques.NomMarque
FROM marques
WHERE marques.NomMarque = '';