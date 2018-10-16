# symfony-job-interview-test

We had a great idea of business: we should do the same thing than bit.ly! And here we are

# Install notes

    composer install
    docker-compose up

# Database structure

    docker-compose exec db  mysql -uroot -pnotsecret symfony-job-interview -e "DROP TABLE IF EXISTS uri; CREATE TABLE uri (id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, url VARCHAR(1000) NOT NULL, token VARCHAR(255) NOT NULL, times_used INT UNSIGNED NOT NULL);"

# Fixtures

    docker-compose exec db  mysql -uroot -pnotsecret symfony-job-interview -e "INSERT INTO uri VALUES (NULL, 'https://www.youtube.com/watch?v=dQw4w9WgXcQ', 'some_token', 0);"

# How to test

Go to https://127.0.0.1/redirect?token=some_token
