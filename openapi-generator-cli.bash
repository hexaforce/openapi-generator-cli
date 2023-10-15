#!/bin/zsh -ex
SCRIPT_DIR=$(cd $(dirname $0); pwd)

# docker run openapitools/openapi-generator-cli help generate

docker run --rm --volume `pwd`:/docker-local openapitools/openapi-generator-cli generate \
 --input-spec /docker-local/api.yaml \
 --generator-name php-nextgen \
 --output /docker-local/php-nextgen

docker run --rm --volume `pwd`:/docker-local openapitools/openapi-generator-cli generate \
 --input-spec /docker-local/api.yaml \
 --generator-name typescript-fetch \
 --output /docker-local/typescript-fetch

docker run --rm --volume `pwd`:/docker-local openapitools/openapi-generator-cli generate \
 --input-spec /docker-local/api.yaml \
 --generator-name mysql-schema \
 --output /docker-local/mysql-schema

find . -name .openapi-generator-ignore -type f | xargs rm

find . -name .openapi-generator -type d | xargs rm -rf

cd $SCRIPT_DIR
npm install
npm run formatter

cd $SCRIPT_DIR/php-nextgen
composer install
vendor/bin/php-cs-fixer fix --allow-risky=yes . 
