#!/bin/sh
# Clear the cache
rm -rf /var/www/html/storage/cache/*

# Run migrations
if [ -z "$APP_ENV" -o "$APP_ENV" != 'production' ]; then
	# check database connection
	until nc -z -v -w30 $DB_HOST 3306 > /dev/null 2>&1
	do
	  echo "Waiting for database connection..."
	  # wait for 5 seconds before check again
	  sleep 10
	done

	# Set APP_KEY env var if has not set or is empty
	if [ -z "$APP_KEY" ]; then
		unset APP_KEY
		echo "APP_KEY=" >> /var/www/html/.env
		/usr/local/bin/php /var/www/html/artisan key:generate
	fi

	/usr/local/bin/php /var/www/html/artisan ecommerce:install
	/usr/local/bin/php /var/www/html/artisan admin:install
fi

/usr/local/sbin/php-fpm -F