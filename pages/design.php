<p>This page is for development purpose only. You will find here all the current styles and UI elements that can help you with you theme or plugin design.</p>

<br /><br />
<hr />
<h1 class="pagetitle" style="background:#000;padding-left:10px;margin-bottom:5px;color:#FFF">Common Text styles</h1>
<hr />
<br />
<h1>Heading 1</h1>
<h2>Heading 2</h2>
<h3>Heading 3</h3>
<h4>Heading 4</h4>
<h5>Heading 5</h5>
<h6>Heading 6</h6>
<p>Paragraph</p>
<pre>preformatted</pre>
<p><strong>Bold</strong></p>
<p><em>Italic</em></p>
<p><del>Deleted</del></p>
<p><mark>Highlighted</mark></p>
<p><u>Underlined</u></p>
<br /><br />
<hr />
<h1 class="pagetitle" style="background:#000;padding-left:10px;margin-bottom:5px;color:#FFF">Custom text style</h1>
<hr />
<br />
<h1 class="pagetitle">Page title style </h1>
<h4 class="pagetitle">Page title style </h4>
<p class="pagetitle">Page title style </p>
<p>You can use this style with any heading of paragraph. Just add the class <mark><code>.pagetitle</code></mark> inline the html tag.</p>

<br /><br />
<hr />
<h1 class="pagetitle" style="background:#000;padding-left:10px;margin-bottom:5px;color:#FFF">Lists</h1>
<hr />
<br />

<h4>Unordered list</h4>
<ul>
  <li>First element</li>
  <li>Second element</li>
  <li>Third element</li>
</ul>
<h4>Orderer list</h4>
<ol>
  <li>First element</li>
  <li>Second element</li>
  <li>Third element</li>
</ol>

<br /><br />
<hr />
<h1 class="pagetitle" style="background:#000;padding-left:10px;margin-bottom:5px;color:#FFF">Boxes</h1>
<hr />
<br />
<div class="note">This box is for notification messages. Just add the class <mark><code>.note</code></mark> to a div.</div>
<div class="error">This box is for error messages. Just add the class <mark><code>.error</code></mark> to a div.</div>
<div class="result">This box is for result messages. Just add the class <mark><code>.result</code></mark> to a div.</div>
<p><small>NOTE: There is a black box for "result messages" that go invisible after a few seconds. Reload this page to see it.</small></p>


<br /><br />
<hr />
<h1 class="pagetitle" style="background:#000;padding-left:10px;margin-bottom:5px;color:#FFF">The panel</h1>
<hr />
<br />
<p>Most of the screens are structured with a div named <mark><code>.panel</code></mark>, including a <mark><code>.header</code></mark> div, a <mark><code>.content</code></mark> div and a <mark><code>.footer</code></mark> div (usually empty).</p>
<div class="panel">
    <div class="header"><h2>The header of the panel</h2></div>
    <div class="content">The content of the panel</div>
    <div class="footer">The footer of the panel</div>
</div>
<br />
<p>You can add inside the <code>.content</code> div of the panel all kind of information elemnts, like tables, forms, tabs, accordions, etc.</p>

<br /><br />
<hr />
<h1 class="pagetitle" style="background:#000;padding-left:10px;margin-bottom:5px;color:#FFF">Helper classes</h1>
<hr />
<br />
<h3>Show & Hide</h3>
<p>Thare are 3 items in this list below. You can modify your browser window size to see the effect.</p>
<ul>
<li>1- THIS ITEM WILL BE VISIBLE ON All SCREENS</li>
<li class="show-on-mobile"><ins>2 - THIS ITEM WILL BE VISIBLE ONLY ON SCREENS SMALLER THAN 768px</ins></li>
<li class="hide-on-mobile"><strong>3 - THIS ITEM WILL BE VISIBLE ONLY ON SCREENS BIGGER THAN 768px</strong></li>
</ul>
<p>The first item one has no class and will be visible on all screens. <br />
The second has the class <mark><code>.show-on-mobile</code></mark> and will be visible only on screens smaller than 768px width.<br />
The third has the class <mark><code>.hide-on-mobile</code></mark> and will be visible only on screens bigger than 768px width.<br />
You can apply this two classes to any element, like cell tables, row tables, complete tables, divs, form elements, paragraphs, etc.</p>

<br /><br />
<hr />
<h1 class="pagetitle" style="background:#000;padding-left:10px;margin-bottom:5px;color:#FFF">Tables</h1>
<hr />
<br />
<p>The first columns of tables has class <code>.listinghdname</code> for th, and <code>.listingrowname</code> for tds.<br />
The rest of the columns has class <code>.listinghdelement</code> for th, and <code>.listingelement</code> for tds.<br />
The grey rows of tables has class <code>.row1</code> and the white rows has class <code>.rowelement</code>. </p>
<table>
    <thead>
        <tr>
            <th class="listinghdname"> th class="listinghdname" </th>
            <th  class="listinghdelement">th class="listinghdelement"</th>
            <th  class="listinghdelement"> </th>
        </tr>
    </thead>
    <tbody>
        <tr class="row1">
            <td class="listingrowname">td class="listingrowname"</td>
            <td class="listingelement">td class="listingelement"</td>
            <td class="listingelement"><mark> tr class="row1"</mark></td>
        </tr>
        <tr class="rowelement ">
            <td class="listingrowname">td class="listingrowname"</td>
            <td class="listingelement" >td class="listingelement"</td>
            <td class="listingelement"><mark> tr class="rowelement"</mark></td>
        </tr>
    </tbody>
</table>
<br />
<br /><br />
<hr />
<h1 class="pagetitle" style="background:#000;padding-left:10px;margin-bottom:5px;color:#FFF">ACCORDION</h1>
<hr />
<br />

<p>To use an accordion, creat a div class <mark><code>.accordion</code></mark>. 
Inside that div add, for each item, a <code>h3 + a</code> with the item title, and a div with the item text. Like this:</p>
<textarea readonly style="resize:none;height:100px;padding:10px;overflow:hidden">
<div class="accordion">
    <h3><a>First item title</a></h3>
    <div>First item text </div>
    <h3><a>Second item title</a></h3>
    <div>Second item text</div>
</div>
</textarea>

The result should look like this:
<div class="accordion">
    <h3><a>First item title</a></h3>
    <div>First item text </div>
    <h3><a>Second item title</a></h3>
    <div>Second item text</div>
</div>
<br />
<br /><br />
<hr />
<h1 class="pagetitle" style="background:#000;padding-left:10px;margin-bottom:5px;color:#FFF">Buttons</h1>
<hr />
<br />
<a class="action-button">Class .action-button</a><br />
<a class="button ">Class .button</a><br />
<a class="reset ">Class .reset</a><br />
<table style="width:auto;">
<tr><td><code>a.hide</code>: </td><td style="padding:5px 10px"> <div style="width:40px;"> <a class="hide"></a></div></td></tr>
<tr><td><code>a.del</code>: </td><td style="padding:5px 10px"><a class="del"> </a></td></tr>
<tr><td><code>a.helpdialog</code>: </td><td style="padding:5px 10px"><a class="helpdialog"> </a></td></tr>
<tr><td><code>span.send-list</code> + <code>a.button</code>: </td><td style="padding:5px 10px"><span class="send-list"><a class="button"> </a></span></td></tr>
<tr><td><code>span.edit-list</code> + <code>a.button</code>: </td><td style="padding:5px 10px"><span class="edit-list"><a class="button"> </a></span></td></tr>
<tr><td><code>span.add_member</code> + <code>a.opendialog</code>: </td><td style="padding:5px 10px"><span class="add_member"><a class="opendialog"> </a></span></td></tr>
<tr><td><code>span.delete</code> + <code>a.confirm</code>: </td><td style="padding:5px 10px"><span class="delete"><a class="confirm"> </a></span></td></tr>
<tr><td><code>span.view</code> + <code>a.button</code>: </td><td style="padding:5px 10px"><span class="view"><a class="button"> </a></span></td></tr>
<tr><td><code>span.resend</code> + <code>a.button</code>: </td><td style="padding:5px 10px"><span class="resend"><a class="button"> </a></span></td></tr>
<tr><td><code>span.edit</code> + <code>a.button</code>: </td><td style="padding:5px 10px"><span class="edit"><a class="button"> </a></span></td></tr>
<tr><td><code>span.delete</code> + <code>a.button</code>: </td><td style="padding:5px 10px"><span class="delete"><a class="button"> </a></span></td></tr>
<tr><td><code>span.suspend</code> + <code>a.button</code>: </td><td style="padding:5px 10px"><span class="suspend"><a class="button"> </a></span></td></tr>
<tr><td><code>span.marksent</code> + <code>a.button</code>: </td><td style="padding:5px 10px"><span class="marksent"><a class="button"> </a></span></td></tr>
</table>
<br />


<!--
<div class="panel">
<div class="header"> </div>
<div class="content">
<table class="listing">
<tr class="send-campaign"><td class="listingname"><span class="listingname"><a class="listingname">send acampaing</a></span></td><td class="listingelement"><code>tr.send-campaign td.listingname a</code></td></tr>
</table>
</div>
<div class="footer"></div>
</div>
-->