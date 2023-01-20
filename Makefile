install:
		composer install

brain-games:
		./bin/brain-games
	
brain-even:
		./bin/brain-even

brain-calc:
		brain-calc

brain-gcd:
		brain-gcd

validate:
		composer validate

autoload:
		composer dump-autoload

lint:
		composer exec --verbose phpcs -- --standard=PSR12 src bin