# jquery.tabledataslider
<h2>jQuery plugin for sliding data in a table</h2>

<p>As as far as we know, sliding in and out, showing and hiding of contentblocks is not supported by jQuery of known plugins for data in a html table.<p>
<p>This project is supposed to provide for this functionality.</p>
<p>The plugin enables  TR-elements (A) (by click event) to open/close corresponding detail data in TD-elements (B) in the same or other rows.</p>
	
<h3>How to use?</h3>
<h4>The plugin script</h4>
<p>Include jquery.tabledataslider.js in the head of the webpage:<br>
&lt;script src="pathto/jquery.tabledataslider.js"&gt;&lt;/script&gt; where pathto is the relative path to the directory where the script is stored.</p>
<h4>Requirements</h4>
<ol>
<li>TR-elements (A) must have an id composed of a prefix (ig 'data') and a number (ig '567').<br>
	For example: &lt;tr id="data567"&gt;</li>
<li>TD-elements (B) must have an id composed of a prefix (ig 'detail') and a number (ig '567').<br>
	For example: &lt;td id="detail567"&gt; If prefix is not 'detail' then use option detailIdPrefix, see below </li>
<li>Numbers in id's of TR-elements (A) and corresponding TD-elements (B) should match.<br>
	For example: '567' in &lt;tr id="data567"&gt; matches '567' in &lt;td id="detail567"&gt;<br></li>
<li>TR-elements (A) can have a class attribute to be used as a selector. For example: &lt;tr class="data" ... &gt;</li>
</ol>
<h4>Activation</h4>
<p>Activate them (after page loading) by invoking: $(selector).tabledataslider(options) where options is an object.<br>For example: $('tr.data').tabledataslider({detailIdPrefix:'detail'})<br>
Possible options and its defaults: see below...</p>

<p>After activating you can also open/close elements by invoking: $(selector).tabledataPerformSlide(open); where open: true or false.</p>
For example: $('tr#data4').tabledataPerformSlide(true);

<h4>CSS hooks</h4>
<p>CSS style can be applied to the TR elements in 4 states:</p>
<ul style="list-style:none;">
	<li>tr[tabledata-slider=opened]</li>
	<li>tr[tabledata-slider=closed]</li>
	<li>tr[tabledata-slider=opening]</li>
	<li>tr[tabledata-slider=closing]</li>
</ul>
<h4>Errors</h4>
<p>The plugin can throw errors in the console:</p>
<ol>
	<li>Only TR elements can trigger a tabledata slider.</li>
	<li>TR elements must have an id to trigger a tabledata slider.</li>
	<li>TR element id must contain a number to trigger a tabledata slider.</li>
	<li>No TD element found to be a tabledata slider. Check its id.</li>
	<li>Only TD elements can be a tabledata slider.</li>
</ol>

