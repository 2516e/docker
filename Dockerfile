# Utilise l'image PHP officielle
FROM php:8.0-apache

# Copie tous les fichiers du dossier courant dans /var/www/html du conteneur
COPY . /var/www/html