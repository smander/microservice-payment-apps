#!/usr/bin/env bash

# Destroy and Recreate Database
php bin/console doctrine:schema:update --force -vv
php bin/console doctrine:schema:validate -vvv

php bin/console cache:clear
