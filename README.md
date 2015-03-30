# jquery.tabledataslider
jQuery plugin for sliding data in a table

As as far as we know, sliding in and out, showing and hiding of contentblocks is not supported for data in a html table. 
This project is supposed to provide for this functionality.

The plugin enables  TR-elements (A) (by click event) to open/close corresponding detail data in TD-elements (B) in the same or other rows.
	
How to use?
Include jquery.tabledataslider.js in the head of the webpage: 
<script src="pathto/jquery.tabledataslider.js"></script> where pathto is the relative path to the directory where the script is stored.

TR-elements A must have an id composed of a prefix (ig 'data') and a number (ig '567'). 
For example: <tr id="data567">
TD-elements B must have an id composed of a prefix (ig 'detail') and a number (ig '567'). 
For example: <td id="detail567">
Numbers in id's of TR-elements A and corresponding TD-elements B should match.
For example: '567' in <tr id="data567"> matches '567' in <td id="detail567">

TR-elements A can have a class attribute to be used as a selector. For example: <tr class="data" ... >
	
Activate them by invoking: $(selector).tabledataslider(options) where options is an object. For example: $('tr.data').tabledataslider({detailIdPrefix:'detail'})
Possible options and its defaults: see below.

After activating you can also open/close elements by invoking: $(selector).tabledataPerformSlide(open); where open: true or false.
For example: $('tr#data4').tabledataPerformSlide(true);
CSS style can be applied to the TR elements in 4 states:
	tr[tabledata-slider=opened]
	tr[tabledata-slider=closed] 
	tr[tabledata-slider=opening] 
	tr[tabledata-slider=closing] 
