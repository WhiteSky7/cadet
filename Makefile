

start: # Launch project without docker
	php artisan serve

findErr: # Find errors in code with phpcd
	vendor/bin/phpcs ${rootToFile}
fixErr: # Fix errors in code with phpcbf
	vendor/bin/phpcbf ${rootToFile}
