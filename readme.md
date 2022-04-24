Readme
======

## Run the local development server

```shell
php -S localhost:8000
```

Actually, what you **exactly** have to do is either to `cd` to your `public` folder
and only then you should start the server. Or, you could use the `-t` option available
with the PHP built-in server to let it point there:
```shell
php -S localhost:8000 -t public
```

By the way, there is a few prerequisites:
 - of course you do have to have PHP installed, at least `7.2`
 - you have to have Composer installed
 - and you should definitely have some SQL interface at your disposal

## Clone the repository and steal it

Well, to tell the least, you should also clone the project from its GitHub repository:
https://github.com/xmeltrut/doctrine-orm-project

Second, you can remove the `origin` and point the project folder to your own GitHub repository.
First, check who is the owner of the original repo:
```shell
git remote -v
```
In this case, you obtain something like this:
```shell
jirka@jirka-HP-EliteBook-850-G5 ~/public_html/doctrine-orm-project (project) $ git remote -v
origin  git@github.com:xmeltrut/doctrine-orm-project.git (fetch)
origin  git@github.com:xmeltrut/doctrine-orm-project.git (push)
```
Then, you create your own repo and check its SSH or HTTPS remotes and reset it:
```shell
git remote set-url origin git@github.com:JorgeSquared/doctrine-orm-project.git
```

Ok, now the repo is yours!

## Go!

The do exactly as the guy says. It is working up to Section 4 included. You can go along 
only Phpstorm and its database plugin if you manually create a database from terminal:

```shell
mysql -u root -p
CREATE DATABASE doctrineorm
```

or, if you need another user, you first need to create a new user, grant privileges on him
and then go to previous step (it is perfectly googleable).

Sometimes, there are errors like DateTimeZone in database has to be set to UTC and do on,
but generally it really works.

And it is based on a microframework, called SLIM:
https://www.slimframework.com/

which is SOOO NICE!!! It is strange that in GitHub, I can not see the `master` branch
