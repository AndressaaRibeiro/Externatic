## Project 3 - Starter Kit - Symfony

Project Description This website is designed to allow candidates to search and apply for job offers in the field of IT. Users willing to apply can register, connect and bookmark offers. Candidates can upload CV, update their profile and locate offers on a map depending on their home and mobility.

Externatic's consultants can reach job offers and check candidates' data in order to find the best match.

Admin can fully manage the website with dedicated pages that allows creation, update and deletion of candidates, consultants, companies and job offers.

## TEAM
@AndressaaRibeiro 
@FouadTebi
@Roger0753 
@HauvillerCedric
@Sebus07

## Prerequisites
Check composer is installed
Check yarn & node are installed

## Install
Clone this project
Run composer install
Run yarn install
Run yarn encore dev to build assets

## Working
Run symfony server:start to launch your local php web server
Run yarn run dev --watch to launch your local server for assets (or yarn dev-server do the same with Hot Module Reload activated)

## Windows Users
If you develop on Windows, you should edit you git configuration to change your end of line rules with this command:

git config --global core.autocrlf true

The .editorconfig file in root directory do this for you. You probably need EditorConfig extension if your IDE is VSCode.

## Run locally with Docker
Fill DATABASE_URL variable in .env.local file with DATABASE_URL="mysql://root:password@externatic:3306/<choose_a_db_name>"
Install Docker Desktop an run the command:
docker-compose up -d
Wait a moment and visit http://localhost:8000

## Deployment
Some files are used to manage automatic deployments (using tools as Caprover, Docker and Github Action). Please do not modify them.

Dockerfile Web app configuration for Docker container
docker-entry.sh shell instruction to execute when docker image is built
nginx.conf Nginx server configuration
php.ini Php configuration

## Built With
Symfony
GrumPHP
PHP_CodeSniffer
PHPStan
PHPMD
ESLint
Sass-Lint

## License
MIT License

Copyright (c) 2019 aurelien@wildcodeschool.fr

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

## Acknowledgments



