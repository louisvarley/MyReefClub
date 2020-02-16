# MyReefClub
## Sales and Swap Listings.

Latest Deployment @ https://myreef.club

![Publish Website](https://github.com/louisvarley/MyReefClub/workflows/Publish%20Website/badge.svg)

### Why?
Facebook does not like you to list livestock for sale on their site anymore, and quite right so. 
The market of exotic animals being sold to unscrupulous owners as well as giving puppy farms an avenue to sell is a real problem
One if which i am directly against as a respectable breeding and owner of exotic rodents.

The Reefing community has seen the biggest negative to this. Selling, swapping and rehoming of fish, corals, frags etc
has always been a huge benefit for the community as well the species themselves, allowing owners to share their success with
other reefers, ultimately ending with a larger number of home-grown, hardy corals. Which one day may help re-populate the wild reefs.

### What
This is a simple website with one goal. List what you got! This is Version 2 of MyReef Club. It's goal was always for an easy process of

- Login
- Complete a new advert
- Upload your photos
- Share the link

### This Project
It's opensource as far as i see it. If you want to use it, do so. If you want to make a change, do so. If you want to host your own version
and re-brand it for another group or community. Do it. 

### The Code
I knocked this code together in a couple of days. Its a simple MVCS design of which i normally use. No Frameworks, nothing complex. 

- Most of the views are hard coded with their content so it's easier to find than loading from a HTML template
- The Defines.php file contains much of the bits and pieaces which need to be changed. 
- Images, JS and CSS is all in static. 
- Loading of controllers and views is simple. take the first part of the URL, turn in to camel case and look for matching view or controller. Easy
- View.php and Controller.php contain most of the global elements such as the HEAD and FOOTER
- New Articles are saved as JSON files in the listings directory. They are tied to a Facebook user ID and only they can edit them
- New Images are resized and uploaded to uploads. 
- All Articles and Images are assigned a GUID. (Because incrementing ID numbers is so 2010)
- Composer is used to manage classes, there is a lovley SH file which reloads classes without needing to even get up SHELL
- Theres only 1 service which is used for getting listings, it has a lovley simple filtering engine built in. 

```php

\myReef\services\listings::getListings(array(
			'limit' => 6, 
			array('property'    => 'user',
				  'comparison'  => 'eq',
				  'value'		=> userID(),
			)
		));
````

### Limit
How Many to Return (Always in Created Date order)

### Array of Filters

#### property
The Property you want to filter, matches something in the model

#### comparison
[neq,ne,gt,ln,nn,lne, gte, in] AKA [Not Equal, Equal, Greater Than, Less Than, Greater or Equal, Less or Equal, Not Null, Is Null]

#### value
What value to filter by

