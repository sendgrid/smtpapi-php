.PHONY: clean install ci-install test bundle lint

clean:
	@rm -rf vendor composer.lock smtpapi-php.zip

install: clean
	composer install

ci-install: clean
	composer install --no-dev

test: install lint
	vendor/bin/phpunit test

bundle: ci-install
	zip -r smtpapi-php.zip . -x \*.git\* \*composer.json\* \*scripts\* \*test\*

lint:
	php ./vendor/bin/phpcs -n --exclude=PEAR.Commenting.FileComment,PEAR.Commenting.ClassComment,PEAR.Commenting.FunctionComment ./lib/ ./test/
