# Template pour : Quête PHP Cookies & Sessions

Ce Template html va te permettre de réaliser ta quête sur la gestion des cookies et des sessions avec PHP.

Sont inclus :

* la page de connexion,
* la page des produits disponibles à l'achat,
* la page panier, affichant à partir de la session les produits sélectionnés par l'utilisateur.

Tu n'as que du script PHP à fournir !

Après, si l'envie te prend de refondre le CSS, nous ne ferons rien pour t'en empêcher !

# CHALLENGE
À partir des ressources ci-dessus et du template que tu peux récupérer sur github tu vas pouvoir commencer le développement du site e-commerce : "The Cookie Factory"

Il s'agit d'une petite application qui permet de s'identifier avec seulement un nom d'utilisateur, sans appel à une base de données.

Voici les tâches à réaliser pour mettre en place le système de login et de gestion de panier d'achat :

# Partie 1 - Gestion du login
Sur la page login.php, lorsqu'un utilisateur entre un nom, enregistre ce nom en session (ne demande pas de mot de passe pour cet exercice). Une fois identifié, redirige l'utilisateur sur la page index.php

Gérer les droits d'accès aux URLs : Si l'utilisateur n'est pas identifié (si la variable de session contenant le nom d'utilisateur n'est pas définie) : Il n'a accès qu'aux pages login.php et index.php. Les autres pages redirigent vers login.php.

Comme tu peux le voir, dans la barre de menu, on souhaite la bienvenue à "Wilder". Remplace Wilder par le nom de l'utilisateur (s'il est identifié !)

Pour terminer la partie login, gère le logout : créé dans la barre de navigation un lien vers une page logout.php. Cette page permettra de détruire la session en cours, ainsi que toutes les informations, puis redirigera vers login.php

# Partie 2 - Gestion du panier d'achat
Sur la page index.php, la liste des biscuits mis en vente est affichée. Lorsqu'un utilisateur clique sur le bouton d'ajout au panier, enregistre cet article dans tes données de session. La gestion des quantités est optionnelle pour cet exercice.

Affiche le nom des biscuits ajoutés au panier dans la page cart.php

# [BONUS] Gérer les quantités de biscuits dans ton panier. Cette tâche est assez complexe, tu peux tenter de la faire, mais ce n’est pas le but de la quête. Ne perds pas plus de temps que de raison là-dessus.
