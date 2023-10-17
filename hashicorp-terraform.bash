#!/bin/zsh -ex
SCRIPT_DIR=$(cd $(dirname $0); pwd)

CLI=hashicorp/terraform:1.4.7

docker run -rm --volume `pwd`:/pwd --workdir /pwd/aws/... \
 --env AWS_ACCESS_KEY_ID=$AWS_KEY  \
 --env AWS_SECRET_ACCESS_KEY=$AWS_SECRET  \
 --env AWS_REGION=$AWS_REGION  \
 --env-file aws/.../.env  \
 $CLI plan

