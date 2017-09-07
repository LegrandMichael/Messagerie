# Projet messagerie

- Travail en groupe de 2/3 pour la réalisation de la messagerie

- Possibilité de se séparer le travail Vue(HTML)/Logique(PHP) ou de travailler en pair programming

- Les groupes sont envoyés sur slack

- Définition du modèle

    - Faire un Modèle Conceptuel de données pour la mise en oeuvre d'une messagerie. Deux entités nécessaires: utilisateur et message.

    - En déduire le Modèle Physique des tables.

    - Reprise de la modélisation au tableau afin d'être tous synchronisé sur une même base.

    - Création d'une base de donnée "messagerie" avec les tables nécessaires.

- Préalable à lire:
    - Hormis les pages index.php et connexion.php toutes les autres pages ne sont accessible que si l'utilisateur est connecté ( c'est à dire qu'au moins la variable de session $_SESSION['uti_oid'] soit setté et contienne une valeur).

- Pour la mise en place de la connexion vous pouvez vous inspirer du cours précédent et si non le formateur vous donnera des indications.

- Création de votre repository avec les fichiers suivants

    - index.php : redirige vers connexion.php
    - connexion.php : affiche un formulaire pour se connecter
    - deconnexion.php : n'affiche rien, cette page à pour but de détruire les variables de session et la session puis redirige vers connexion.php
    - utilisateurs.php : affiche la liste des utilisateurs avec un bouton
    - create_message.php?uti_oid=1 : création d'un message à destination de l'uti_oid 1
    - sent_messages.php?uti_oid=1 : affiche tous les messages envoyé par l'uti_oid 1
    - received_messages.php?uti_oid=1: affiche tous les messages reçus par l'uti_oid 1
    - message.php?mes_oid=1 : affiche le message mes_oid=1