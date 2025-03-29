# Use PHP image
FROM php:8.1-apache

# Set the working directory
WORKDIR /var/www/html

# Copy your PHP files to the container
COPY . .

# Expose port 80
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]
