SELECT salles.nom, etage.nom FROM `salles`, `etage` WHERE etage.id = salles.id_etage
                        ou
SELECT salles.nom, etage.nom FROM salles INNER JOIN etage