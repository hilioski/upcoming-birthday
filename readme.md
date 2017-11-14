## Test case: Upcoming Birthdays

We have few users inserted in our `users` table with the `name` and `birth_date` values. We need to list all of our users sorted by UPCOMING BIRTHDAYS.

<b>For example:</b> If John birthday is on March 3th, Anna birthday is on April 10th and today is March 15th then Anna will be listed first and then John because the Anaa's birthday is next birthday.

We have the following users in our database:
1. John Doe	-> 1994-01-21
2. Theresa A. Carstensen -> 1986-07-29
3. Ashley I. Anderson -> 1988-12-01
4. Katherine J. Jacobs -> 1995-12-12
5. Sherie T. Wilson -> 1991-01-15

If today is 2017-11-14 (14th November 2017) the list of users after sorting by upcoming birthdays needs to be:
1. Ashley I. Anderson -> 1988-12-01
2. Katherine J. Jacobs -> 1995-12-12
3. Sherie T. Wilson -> 1991-01-15
4. John Doe	-> 1994-01-21
5. Theresa A. Carstensen -> 1986-07-29



#### Initial setup:
Run the following commands to make initial setup for this Test Case

1. Copy `.env.example` to `.env` and change DB connection parameters
```bash
    cp .env.example .env
```

2. Install composer dependencies
```bash
    composer install
```

3. Generate `APP_KEY` with the following command
```bash
    php artisan key:generate
```

4. Run database migrations and seeds
```bash
    php artisan migrate --seed
```
