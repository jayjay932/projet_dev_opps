# Code Citations

## License: inconnu
https://github.com/tacohoho/CT_marvel_character_api/tree/396132b600cf49a1501a852e68b5cc8735a758d3/marvel_collection/site/site_templates/index.html

```
class="alert alert-success alert-dismissible fade show" role="alert">
                {{ msg }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
```

## License: inconnu
https://github.com/lib-paul/sibrat-flask/tree/147079b2de073589e9902d02467b82aa141b3a55/builder/templates/armador-manual.html

```
>

        {% if msg %}
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ msg }}
                <button type="button" class="btn-close" data-bs-dismiss="alert
```

## License: inconnu
https://github.com/IonGorincioi/bestmotoserv/tree/9e838df2c3a1e9360db517f0fb1dc0f94bd0fc09/templates/base.html

```
="alert">
                {{ msg }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        {% endif %}

        <
```

## License: MIT
https://github.com/jap-patel/Bharat_Bhashya/tree/4daff01ae67c021fca62b8e7422e09b10bb52799/BharatBhashya/templates/update_detail.html

```
alert">
                {{ msg }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        {% endif %}

        <div class
```

## License: inconnu
https://github.com/someguy235/webspace/tree/a2cbfe9a7febb5af9d6d3cf82ae7eb53fa297c87/src/index.html

```
DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content
```

## Administrateurs

- Peuvent gérer les utilisateurs (ajouter/supprimer des techniciens et employés).
- Peuvent attribuer un technicien manuellement à un ticket.
- Ont accès à un tableau de bord pour suivre les statistiques :
  - Nombre total de tickets ouverts/résolus.
  - Temps moyen de résolution par technicien.
  - Priorisation des tickets critiques.

Chaque utilisateur est caractérisé par les informations suivantes :
- un identifiant unique (id)
- un nom (nom)
- un e-mail (email)
- mot de passe crypté (mot_de_passe)
- rôle ("Employé", "Technicien", "Admin")
- date d’enregistrement de l’utilisateur (date_inscription)

