# POC for social login in Symfony 6 - PHP 8.1

$ symfony new --webapp --version=stable symfony-social-login
$ cd symfony-social-login
$ touch .env.dev.local
$ composer req --dev maker-bundle
$ bin/console make:controller MainController
$ bin/console make:user # accept all default options
$ bin/console make:auth
> choose [1] Login form authenticator

$ console make:migration
$ console doctrine:migrations:migrate
> check with console d:s:v

$ yarn && yarn build
$ symfony serve


adjust config/packages/security.yaml

    access_control:
        # { path: ^/login, roles: IS_AUTHENTICATED_ANONYMOUSLY }
        - { path: ^/, roles: IS_AUTHENTICATED_REMEMBERED }
