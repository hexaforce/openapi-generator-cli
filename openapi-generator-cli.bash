#!/bin/bash

SCRIPT_DIR=$(cd $(dirname $0); pwd)

CLI=openapitools/openapi-generator-cli

# docker run $CLI help generate

openapi-generator-cli() {
 local generator=$1 
 docker run --rm --volume `pwd`:/pwd $CLI generate \
  --skip-operation-example --skip-validate-spec --http-user-agent curl/8.1.2 \
  --package-name FpvJapan \
  --input-spec /pwd/api.yaml \
  --generator-name $generator \
  --output /pwd/$generator
}

# openapi-generator-cli "php-laravel"
# openapi-generator-cli "php-lumen"
# openapi-generator-cli "php-mezzio-ph"
openapi-generator-cli "php-slim4"
# openapi-generator-cli "php-symfony"
# openapi-generator-cli "php-nextgen"

openapi-generator-cli "mysql-schema"
openapi-generator-cli "typescript-fetch"

find . -name .openapi-generator-ignore -type f | xargs rm

find . -name .openapi-generator -type d | xargs rm -rf

cd $SCRIPT_DIR
npm install
npm run formatter

cd $SCRIPT_DIR/php-nextgen
composer install
vendor/bin/php-cs-fixer fix --allow-risky=yes . 
