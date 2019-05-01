#!/usr/bin/env bash

set -e

rm -rf var/cache/*
chmod -R 777 var/cache

composer install --no-dev --classmap-authoritative --ansi
