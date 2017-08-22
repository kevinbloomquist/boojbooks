# Booj Reading List
*Beware of the person of one book. -- Thomas Aquinas*
## Task
Compose a site using the [Laravel](https://laravel.com/) framework that allows the user to create a list of books they would like to read. Users should be able to perform the following actions:
* Add or remove books from the list
* Change the order of the books in the list
* Sort the list of books by their author
* Display a book detail page with a minimum of author, publication date, and title

Please use the [ORM](https://laravel.com/docs/5.2/eloquent) rather than crafting queries by hand. 

##### Bonus points!

* Deploy it for real so we can play with it! (and then tell us about how you deployed it)
* Handle image uploading while adding books to the list
* Do something fancy like integrating an external API or handling user authentication

### Deployed link
(coming soon)

### To run (locally)
*!!!(need to edit procedures)!!!
* Fork & clone
* Edit .env
* CLI: 
	- `npm install`
	- `php artisan db:seed`
	- `php artisan serve`
* Go to http://localhost:8000/

### Fishbowl


### Punch-list:
* ~~Add Sort link and function~~
* Ask about "Change the order of the books in the list" (if hard change:build order by route with input. If soft change jquery: $(.card).draggable())
* add `<ul>` and `<li>` tags to convert books loop to a "list" per the instuctions
* Improve auth_sort functionality
	- `$books` are alreadypresent figure out how to sort browser side using `sortby()` without extra route, method, and query to DB
* Make all books link in nav retain sort preference if changed
* Deploy to heroku!!!
* Change create/edit redirect to new or updated show view and add links back to home/index
* Add styling and CSS/Sass (Front end work)
* Figure out how to work with jQuery through build paks and add animations.
* Give nav bar some attention - details, alignment, brand.
* Work on REMOVE/CHANGE problems: 
	- Make script links lighter/ more efficient (look in views)
	- Model and migrations (look in `create_books_table` )
* Expand model (migrations/ seeder/ books.php/ create & edit view forms)
	- Change `pub_date` data type to proper date format
	- Use forms to control input formats
	- Add function to controller methods to "sterilize" data
* Play with video loop functionality
* Work on login/ user functionality
* Hit Amazon API for link info and image uniformity



