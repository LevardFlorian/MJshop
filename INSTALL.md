# Installation template

`composer require johnpbloch/wordpress`

Puis entrer Y pour `Do you trust "johnpbloch/wordpress-core-installer" to execute code and wish to enable it now?`


## WP CLI

https://wp-cli.org/fr/

```
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar
sudo mv wp-cli.phar /usr/local/bin/wp
```

https://make.wordpress.org/cli/handbook/

## Installation de WP

Au lieu d'utiliser le formulaire d'installation, on peut utiliser wp-cli :

https://make.wordpress.org/cli/handbook/how-to-install/

`wp core install --url=http://localhost/Boson/wordpress-install --title="Wordpress" --admin_user=wpadmin --admin_password=wpadminpass --admin_email=admin@bidon.zut`

Réponse attendue : 
`Success: WordPress installed successfully.`


## utiliser wpackagist

Nous permet d'utiliser des thèmes et plugins avec composer

https://wpackagist.org/

ex.:
`composer require wpackagist-plugin/wordpress-seo`

On peut trouver les noms des plugins et themes fournis par WP dans l'url https://fr.wordpress.org/themes/hello-elementor/ => ici hello-elementor
