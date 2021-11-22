#  RESTfulAPI_PHP_Practice

For this activity, you will build PHP pages to query the OpenLibray.org [OpenLibrary.org](https://openlibrary.org/developers/api) API to display information about the selected book to the user.  The file chooseBook.html is written for you and will allow the user to search by title or by ISBN.

To search the [Book API](https://openlibrary.org/dev/docs/api/books) with an ISBN use a URL like: https://openlibrary.org/api/books?bibkeys=ISBN:9780062073570&format=json&jscmd=data

To search the [Search API](https://openlibrary.org/dev/docs/api/search) with a title use a URL like: https://openlibrary.org/search.json?title=Contact

You can add more data for your users  querying the [Author API](https://openlibrary.org/dev/docs/api/authors)

For further practice, you can implement getORSocMediaSite.php to allow the user to search [data.oregon.gov](https://dev.socrata.com/foundry/data.oregon.gov/hqhe-shsc) to find social media sites run by the State of Oregon.

## Files

 * chooseBook.html - main form page to allow a user to search for a book
 * getBook.php - target for the drop down box on chooseBook.html.  Display a page describing one book
 * getBookByTitle.php - target for the text box search on chooseBook.html.  Display a list of books, link to getBook.php per book.
 * chooseSM.html - main form page to allow a user to search for a social media site run by the state of Oregon
 * getORSocMediaSite.php - target for chooseSM.html. Display a link and description for each site returned by the search.

## VS Code

Use VS Code to open the folder PHP inside this project.  This folder contains an example PHP file and the necessary configuration to get the debugger working.

## HTML

Visual Studio Code provides [basic HTML support](https://code.visualstudio.com/Docs/languages/html).

## PHP

Install the [PHP-Debug extension](https://marketplace.visualstudio.com/items?itemName=felixfbecker.php-debug).

You don't need to do any further configuration to get PHP or the debugger to work.

* The Debug configuration _Launch currently open script_ will launch the current script in the debugger.  This is useful to testing small scripts and examples.
* The Debug configuration _Listen for Xdebug_ will start the debugger and wait for your local webserver to launch a PHP script and connect to the running debugger.  Once you start developing your website, this will be the easiest deubg method to use.

## Copy code to webserver

In the terminal, type 
```
make copy
```

This will copy your PHP code to /srv/www/htdocs/php/PUNETID/RESTfulAPI_PHP_Practice

You can open this website in your VM via:

http://localhost/php/PUNETID/RESTfulAPI_PHP_Practice/

(hint: you can edit this README file to change PUNETID to your actual PUNETID so you can use the link above.)
