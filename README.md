# _Anagram Checker_

#### _Web app that checks to see if two words are anagrams of one another._

#### By _**Kyle Fisher, Rebecca Allen**_


## Description

_Users will enter two separate words. The program will check whether or not the words are anagrams of one another and display the results._


## Setup/Installation Requirements

* _If you wish to view the source code locally on your machine please follow the following steps:_

  +  _1). Navigate to the directory in which you want the addressBookPHP project to reside._

  +  _2). Enter the following command into your terminal:_
        _git clone https://github.com/FisherKyle/AnagramChecker.git_

  +  _3). Navigate to the titleCase directory, and execute the following command in the terminal:_
          _composer install_

  +  _4). Navigate to the web directory and start your local host by executing the following command in your terminal:_
          _php -S localhost:8000_

  +  _5). Open up the browser of your choice and go to the following url:_
          _http://localhost:8000/_

  +  _6). If you wish to look at the source code, feel free to browse through the files in the titleCase directory_

## Specs

* _User is provided two form fields for the input of two separate words._

* _A single letter is provided for each word that matches._
    + _word one: a_
    + _word two: a_
    + _result: "Your words are anagrams!"_

* _A single letter is provided for each word that does not match._
    + _word one: a_
    + _word two: b_
    + _result: "Your words are not anagrams."_

* _Multiple letters are provided for each word._
    + _word one: abc_
    + _word two: bac_
    + _result: "Your words are anagrams!"_

* _Multiple letters are provided for each word._
    + _word one: abc_
    + _word two: bad_
    + _result: "Your words are not anagrams."_

* _Two words containing the same letters will return a result of an anagram regardless of case._
    + _word one: Research_
    + _word two: searcher_
    + _result: "Your words are anagrams!"_

* _If there are any other possible anagrams for the two words provided, they will be returned to the user._
    + _word one: oxf_
    + _word two: fox_
    + _result: "Your words are anagrams! These may all be anagrams of each other: fox, fxo, ofx, oxf, xfo, xof."_

* _If the user provides more than one word for either input field, they'll be instructed to do otherwise._

* _If the user does not enter anything in to the field they will be directed to enter a word._

## Known Bugs

_None yet_


## Support and Contact Details

_Please feel free to contact us through github accounts (FisherKyle, RAAllen) or at the following email:_
    _kyle@kylefisher.com_
    _rebeccazarsky@gmail.com_

## Technologies Used

* _PHP_
* _CSS_
* _HTML_
* _silex v~2.0_
* _twig v~1.24.1_
* _bootstrap v3.3.7_


### License

* GPLV3

addressBookPHP Copyright (c) 2016 **_Kyle Fisher, Rebecca Allen_**
