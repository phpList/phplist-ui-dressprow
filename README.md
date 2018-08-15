# Dressprow

A theme for [phpList 3](https://github.com/phpList/phplist3/)

[![Build Status](https://travis-ci.org/phpList/phplist-ui-dressprow.svg?branch=master)](https://travis-ci.org/phpList/phplist-ui-dressprow)

### Getting started

Prerequisite: nodejs & npm. See https://nodejs.org for instructions.

* Install Grunt globally
```
npm install -g grunt-cli
```
* Grunt plugins

We use [cssmin](https://github.com/gruntjs/grunt-contrib-cssmin) to minify css files and [uglify](https://github.com/gruntjs/grunt-contrib-uglify) to minify js files.


### Installation

Clone this repository to the following directory of phpList :

`` lists/admin/ui ``

Rename the repository name to dressprow and then change the working directory to:

```
cd  dressprow
```
then install project dependecies:

```
sudo npm install
```
#### Minify CSS
To minify css files, please run:
````javascript
grunt cssmin
````


#### Minify js
To minify js files please run:
````javascript
grunt uglify
````
