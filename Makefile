.PHONY: clean install ci-install test bundle

clean:
	@rm -rf vendor composer.lock smtpapi-php.zip

install: clean
	composer install

ci-install: clean
	composer install --no-dev

test: install
	vendor/bin/phpunit test --coverage-clover=coverage.xml

bundle: ci-install
	zip -r smtpapi-php.zip . -x \*.git\* \*composer.json\* \*scripts\* \*test\* \*.travis.yml\*
