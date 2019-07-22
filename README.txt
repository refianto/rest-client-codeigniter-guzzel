1. install composer
	-intall guzzle => composer require guzzlehttp/guzzle:~6.0

2. set REST url
	-open dir -> '/application/models/booksModel.php' -> __construct -> client -> base_uri

3. set base_uri as root url
	-open dir -> '/application/config/config.php' -> $config['base_url']