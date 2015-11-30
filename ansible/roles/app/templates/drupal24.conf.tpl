# Default drupal virtualhost template

<VirtualHost *:80>
    ServerAdmin webmaster@localhost
    DocumentRoot {{ drupal.docroot }}
    ServerName {{ drupal.servername }}

    <Directory {{ drupal.docroot }}>
        AllowOverride All
        Options -Indexes +FollowSymLinks
        Require all granted
    </Directory>
</VirtualHost>
