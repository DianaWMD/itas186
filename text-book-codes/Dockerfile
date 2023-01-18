FROM php:8.0-apache
COPY . /var/www/html

# To build a container using this Dockerfile, you'll need the command:
#
# docker build -t apachephp . 
# (or call the container whatever you want, here I am using apachephp)
#
# And then to run and be able to edit files, we use a volume:
#
# docker run --rm --volume "$(pwd):/var/www/html" -d -p 8080:80 --name apachephp apachephp