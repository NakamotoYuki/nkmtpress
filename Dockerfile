FROM ghcr.io/nakamotoyuki/nkmtpress/nkmtpress
ENTRYPOINT service php8.1-fpm start & service mariadb start & service nginx start & tail -f /dev/null