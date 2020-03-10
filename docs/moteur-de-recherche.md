Moteur de recherche du site labonne formation
=============================================

## Autcomplétion

1. Autocomplétion du champs "Je chercher une formation de"

Les mots clés proposés à l'autocomplention sont issus de la liste de codes ROME. Nous avons une table de correspondances ROME => FORMACODE. Lorsque l'internaute va choisir un mot clé d'un métier ROME de la liste suggérée nous allons en déduire les codes FORMACAODE associés qui vont nous permettre de recherche les formations concernées.

Il est possible également de saisir un mot clé qui n'est pas présent dans la liste d'autocomplétion.

2. Autocomplétions du champs "Où"

Il existe quelques règles simple pour prendre en compte les diffirentes appélation d'un lieu. Comme les déclinaisons de "Saint", "Sainte", "Saintes", etc.. Mais aussi des alias tel que "paca" qui sera reconnu et porposera la région "Provence Alpe Côte d'Azur".

La recherche se fait sur des termes normalisés, sans accents et en minuscule.

## Règle de gestion

* Si le mot clé est un mot clé provenant de la liste de l'autocomplétion alors la recherche se fera avec un formacode
* Si le mot clé ne fait pas partie de la liste alors le mot clé sera recherché dans le titre de la formation

### Liste des filtres pris en compte ###

* Lieu (via code insee donné par l'autocomplétion)
* Niveau de sortie
* Formation certifiante
* Financée pour le DE
* Financée pour un salarié
* Financement PIC
* Contrat d'apprentissage
* Contrat de professionalisation
* Modalité : à distance, en organisme

### Tri des résultats ###

Pour les formations dont le mot clé match:

Si le lieu est fourni :
1. Date de début de session
2. Lieu
3. Type de convention (financée PE)
4. Ordre de classement

Si le lieu n'est pas fourni:
1. Date de début de session
2. Type de convention (financée PE)
3. Ordre de classement

### Note sur le match par lieu ###

Toutes formations dont le lieux de formations se trouvent à 30km au plus du lieux de recherche est éligible à figurer dans la liste de résultats.

Autrement dit selon les règles du tris de résultats pour un lieu donnée, un formation dont lieux serait à 20km du lieu recherché mais qui commencera avant une formation à moins de 5 km de lieu recherché sera présenté en premier devant la formaition plus proche du lieu recherché.


