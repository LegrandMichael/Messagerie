# Service Shipping Project

- Create database "messagerie" with necessary tables.

- Apart from the pages index.php and connexion.php all other pages are only accessible if the user is logged in (ie at least the session variable $ _SESSION ['users_id'] is set and contains a value).

- Set up shipping service connection.

- Creation of the repository with the following files:

    - index.php : redirects to connect_shipping_service.php
    - connect_shipping_service.php : affiche un formulaire pour se connecter
    - disconnect.php : does not display anything, this page aims to destroy session variables and session and then redirects to connect_shipping_service.php
    - users.php : displays the list of users with a button
    - create_message.php?uti_id=1 :
    creation of a message to the users_id 1
    - sent_messages.php?uti_id=1 : displays all sent message by users_id 1
    - received_messages.php?uti_id=1: displays all received message by users_id 1
    - message.php?mes_id=1 : displays message mes_id=1