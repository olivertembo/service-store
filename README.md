## PHP Test

## About the Project

This projects highlights use of php with a modern mvc framework(Laravel). It utilize:

1. PHP 8
2. Laravel framework
3. MySQL
4. Bootstrap css framework
5. docker
6. composer

## Prerequisites

1. MacOs/Windows/Linux
2. Composer
3. Docker

## STARTING LOCAL Environment

### On MacOs

-- Clone repo
-- run: 'composer update' in terminal

### On Windows | using command prompt

-- Clone repo
-- run: 'composer update' in terminal
-- run 'docker-compose up' That should start local

##

APP_NAME="PHP TEST"
APP_ENV=local
APP_KEY=base64:s9xEkDOHUb4lJBrJxM7riqJVR8RoYUfPDjI/hZPv2B0=
APP_DEBUG=true
APP_URL=http://example-app.test

LOG_CHANNEL=stack
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=example_app
DB_USERNAME=sail
DB_PASSWORD=password

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DRIVER=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=memcached

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

SCOUT_DRIVER=meilisearch
MEILISEARCH_HOST=http://meilisearch:7700
