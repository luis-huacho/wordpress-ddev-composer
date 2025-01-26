1. ddev config --project-type=wordpress --docroot="web" --php-version=8.2 --webserver-type=nginx-fpm --database=mysql:8.0
2. ddev composer create-project johnpbloch/wordpress . --remove-vcs
3. ddev start
4. ddev ssh
5. composer config repositories.wpackagist composer https://wpackagist.org
6. composer config "extra.installer-paths.wp-content/plugins/{$name}/" "['type:wordpress-plugin']"
7. composer config "extra.installer-paths.wp-content/themes/{$name}/" "['type:wordpress-theme']"
8. composer config extra.wordpress-install-dir wordpress
9. mkdir -p wp-content/{themes,plugins,mu-plugins,uploads}
10. ddev exec sudo chown -R www-data:www-data /var/www/html/wp-content
11. ddev exec "sudo find /var/www/html/web/wp-content -type d -exec chmod 755 {} \;"
12. ddev exec "sudo find /var/www/html/web/wp-content -type f -exec chmod 644 {} \;"
13. mv wordpress web/
14. ddev config --docroot="web/wordpress"
15. ddev restart
16. cp Docs/wordpress.yaml .ddev/nginx_full/
17. cp Docs/post-start .ddev/commands/host/
18. Validar semejanza entre .ddev/config.yaml y Docs/config.yaml
19. Para despliegue local revisat .env.local