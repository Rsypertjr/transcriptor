<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
  <h1>My First Bootstrap Page</h1>
  <p>This is some text.</p> 
</div>
<div class="row">
  <div class="col-sm-4">.col-sm-4</div>
  <div class="col-sm-4">.col-sm-4</div>
  <div class="col-sm-4">.col-sm-4</div>
</div>
<div class="row">
  <div class="col-sm-4">.col-sm-4</div>
  <div class="col-sm-8">.col-sm-8</div>
</div>
 
 <div class="container">
  <h1>h1 Bootstrap heading (36px)</h1>
  <h2>h2 Bootstrap heading (30px)</h2>
  <h3>h3 Bootstrap heading (24px)</h3>
  <h4>h4 Bootstrap heading (18px)</h4>
  <h5>h5 Bootstrap heading (14px)</h5>
  <h6>h6 Bootstrap heading (12px)</h6>
</div>

<div class="container">
  <h1>Lighter, Secondary Text</h1>
  <p>The small element is used to create a lighter, secondary text in any heading:</p>       
  <h1>h1 heading <small>secondary text</small></h1>
  <h2>h2 heading <small>secondary text</small></h2>
  <h3>h3 heading <small>secondary text</small></h3>
  <h4>h4 heading <small>secondary text</small></h4>
  <h5>h5 heading <small>secondary text</small></h5>
  <h6>h6 heading <small>secondary text</small></h6>
</div> 

<div class="container">
  <h1>Highlight Text</h1>    
  <p>Use the mark element to <mark>highlight</mark> text.</p>
</div>

<div class="container">
  <h1>Abbreviations</h1>
  <p>The abbr element is used to mark up an abbreviation or acronym:</p>
  <p>The <abbr title="World Health Organization">WHO</abbr> was founded in 1948.</p>
</div>

<div class="container">
  <h1>Blockquotes</h1>
  <p>The blockquote element is used to present content from another source:</p>
  <blockquote>
    <p>For 50 years, WWF has been protecting the future of nature. The world's leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.</p>
    <footer>From WWF's website</footer>
  </blockquote>
</div>

<div class="container">
  <h1>Blockquotes</h1>
  <p>To show the quote on the right use the class .blockquote-reverse:</p>
  <blockquote class="blockquote-reverse">
    <p>For 50 years, WWF has been protecting the future of nature. The world's leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.</p>
    <footer>From WWF's website</footer>
  </blockquote>
</div>

<div class="container">
  <h1>Description Lists</h1>    
  <p>The dl element indicates a description list:</p>
  <dl>
    <dt>Coffee</dt>
    <dd>- black hot drink</dd>
    <dt>Milk</dt>
    <dd>- white cold drink</dd>
  </dl>     
</div>

<div class="container">
  <h1>Code Snippets</h1>
  <p>Inline snippets of code should be embedded in the code element:</p>
  <p>The following HTML elements: <code>span</code>, <code>section</code>, and <code>div</code> defines a section in a document.</p>
</div>

<div class="container">
  <h1>Keyboard Inputs</h1>
  <p>To indicate input that is typically entered via the keyboard, use the kbd element:</p>
  <p>Use <kbd>ctrl + p</kbd> to open the Print dialog box.</p>
</div>

<div class="container">
<h1>Multiple Code Lines</h1>
<p>For multiple lines of code, use the pre element:</p>
<pre>
Text in a pre element
is displayed in a fixed-width
font, and it preserves
both      spaces and
line breaks.
</pre>
</div>

<div class="container">
  <h2>Contextual Colors</h2>
  <p>Use the contextual classes to provide "meaning through colors":</p>
  <p class="text-muted">This text is muted.</p>
  <p class="text-primary">This text is important.</p>
  <p class="text-success">This text indicates success.</p>
  <p class="text-info">This text represents some information.</p>
  <p class="text-warning">This text represents a warning.</p>
  <p class="text-danger">This text represents danger.</p>
</div>

<div class="container">
  <h2>Contextual Backgrounds</h2>
  <p>Use the contextual background classes to provide "meaning through colors":</p>
  <p class="bg-primary">This text is important.</p>
  <p class="bg-success">This text indicates success.</p>
  <p class="bg-info">This text represents some information.</p>
  <p class="bg-warning">This text represents a warning.</p>
  <p class="bg-danger">This text represents danger.</p>
</div>

<div class="container">
  <h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
</div>


<div class="container">
  <h2>Striped Rows</h2>
  <p>The .table-striped class adds zebra-stripes to a table:</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
</div>

<div class="container">
  <h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders to a table:</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>

  <div class="container">
  <h2>Condensed Table</h2>
  <p>The .table-condensed class makes a table more compact by cutting cell padding in half:</p>            
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
</div>

 <div class="container">
  <h2>Contextual Classes</h2>
  <p>Contextual classes can be used to color table rows or table cells. The classes that can be used are: .active, .success, .info, .warning, and .danger.</p>
  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Default</td>
        <td>Defaultson</td>
        <td>def@somemail.com</td>
      </tr>      
      <tr class="success">
        <td>Success</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr class="danger">
        <td>Danger</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr class="info">
        <td>Info</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
      <tr class="warning">
        <td>Warning</td>
        <td>Refs</td>
        <td>bo@example.com</td>
      </tr>
      <tr class="active">
        <td>Active</td>
        <td>Activeson</td>
        <td>act@example.com</td>
      </tr>
    </tbody>
  </table>
</div> 
  
<div class="container">
  <h2>Table</h2>
  <p>The .table-responsive class creates a responsive table which will scroll horizontally on small devices (under 768px). When viewing on anything larger than 768px wide, there is no difference:</p>                                                                                      
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Age</th>
        <th>City</th>
        <th>Country</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>35</td>
        <td>New York</td>
        <td>USA</td>
      </tr>
    </tbody>
  </table>
  </div>
</div>

 <div class="container">
  <h2>Rounded Corners</h2>
  <p>The .img-rounded class adds rounded corners to an image (not available in IE8):</p>            
  <img src="vegas4.jpg" class="img-rounded" alt="Hover Overpass" width="304" height="236"> 
</div>
 
 <div class="container">
  <h2>Circle</h2>
  <p>The .img-circle class shapes the image to a circle (not available in IE8):</p>            
  <img src="vegas4.jpg" class="img-circle" alt="Hoover Overpass" width="304" height="236"> 
</div> 

<div class="container">
  <h2>Thumbnail</h2>
  <p>The .img-thumbnail class creates a thumbnail of the image:</p>            
  <img src="vegas4.jpg" class="img-thumbnail" alt="Hoover Overpass" width="304" height="236"> 
</div>


<div class="container">
  <h2>Image</h2>
  <p>The .img-responsive class makes the image scale nicely to the parent element (resize the browser window to see the effect):</p>
  <img class="img-responsive" src="vegas4.jpg" alt="Hoover Overpass" width="460" height="345"> 
</div>

<div class="container">
  <h2>Image Gallery</h2>
  <p>The .thumbnail class can be used to display an image gallery.</p>
  <p>The .caption class adds proper padding and a dark grey color to text inside thumbnails.</p>
  <p>Click on the images to enlarge them.</p>
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/lights.jpg" target="_blank">
          <img src="/w3images/lights.jpg" alt="Lights" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/nature.jpg" target="_blank">
          <img src="/w3images/nature.jpg" alt="Nature" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/fjords.jpg" target="_blank">
          <img src="/w3images/fjords.jpg" alt="Fjords" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>


<div class="container">
  <h2>Responsive Embed</h2>
  <p>Create a responsive video and scale it nicely to the parent element with an 16:9 aspect ratio</p>
  <!-- 16:9 aspect ratio -->
<div class="embed-responsive embed-responsive-16by9">
   <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/XGSy3_Czz8k"></iframe>
</div>

<!-- 4:3 aspect ratio -->
<div class="embed-responsive embed-responsive-4by3">
   <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/XGSy3_Czz8k"></iframe>
</div>
</div>

<div class="container">
  <div class="jumbotron">
    <h1>Bootstrap Tutorial</h1>      
    <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile-first projects on the web.</p>
  </div>
  <p>This is some text.</p>      
  <p>This is another text.</p>      
</div>

<div class="jumbotron">
  <h1>Bootstrap Tutorial</h1>      
  <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile-first projects on the web.</p>
</div>

<div class="container">
  <p>This is some text.</p>      
  <p>This is another text.</p>      
</div>

<div class="container">
  <div class="page-header">
    <h1>Example Page Header</h1>      
  </div>
  <p>This is some text.</p>      
  <p>This is another text.</p>      
</div>


<div class="container">
  <h2>Well</h2>
  <div class="well">Basic Well</div>
</div>

<div class="container">
  <h2>Well Size</h2>
  <div class="well well-sm">Small Well</div>
  <div class="well">Normal Well</div>
  <div class="well well-lg">Large Well</div>
</div>

<div class="container">
  <h2>Alerts</h2>
  <div class="alert alert-success">
    <strong>Success!</strong> This alert box could indicate a successful or positive action.
  </div>
  <div class="alert alert-info">
    <strong>Info!</strong> This alert box could indicate a neutral informative change or action.
  </div>
  <div class="alert alert-warning">
    <strong>Warning!</strong> This alert box could indicate a warning that might need attention.
  </div>
  <div class="alert alert-danger">
    <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
  </div>
</div>


<div class="container">
  <h2>Alert Links</h2>
  <p>Add the alert-link class to any links inside the alert box to create "matching colored links".</p>
  <div class="alert alert-success">
    <strong>Success!</strong> You should <a href="#" class="alert-link">read this message</a>.
  </div>
  <div class="alert alert-info">
    <strong>Info!</strong> You should <a href="#" class="alert-link">read this message</a>.
  </div>
  <div class="alert alert-warning">
    <strong>Warning!</strong> You should <a href="#" class="alert-link">read this message</a>.
  </div>
  <div class="alert alert-danger">
    <strong>Danger!</strong> You should <a href="#" class="alert-link">read this message</a>.
  </div>
</div>


<div class="container">
  <h2>Alerts</h2>
  <p>The a element with class="close" and data-dismiss="alert" is used to close the alert box.</p>
  <p>The alert-dismissible class adds some extra padding to the close button.</p>
  <div class="alert alert-success alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    <strong>Success!</strong> This alert box could indicate a successful or positive action.
  </div>
  <div class="alert alert-info alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    <strong>Info!</strong> This alert box could indicate a neutral informative change or action.
  </div>
  <div class="alert alert-warning alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    <strong>Warning!</strong> This alert box could indicate a warning that might need attention.
  </div>
  <div class="alert alert-danger alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
  </div>
</div>

<div class="container">
  <h2>Animated Alerts</h2>
  <p>The .fade and .in classes adds a fading effect when closing the alert message.</p>
  <div class="alert alert-success alert-dismissable fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> This alert box could indicate a successful or positive action.
  </div>
  <div class="alert alert-info alert-dismissable fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Info!</strong> This alert box could indicate a neutral informative change or action.
  </div>
  <div class="alert alert-warning alert-dismissable fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Warning!</strong> This alert box could indicate a warning that might need attention.
  </div>
  <div class="alert alert-danger alert-dismissable fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
  </div>
</div>

<div class="container">
  <h2>Button Styles</h2>
  <button type="button" class="btn">Basic</button>
  <button type="button" class="btn btn-default">Default</button>
  <button type="button" class="btn btn-primary">Primary</button>
  <button type="button" class="btn btn-success">Success</button>
  <button type="button" class="btn btn-info">Info</button>
  <button type="button" class="btn btn-warning">Warning</button>
  <button type="button" class="btn btn-danger">Danger</button>
  <button type="button" class="btn btn-link">Link</button>      
</div>

<div class="container">
  <h2>Button Tags</h2>
  <a href="#" class="btn btn-info" role="button">Link Button</a>
  <button type="button" class="btn btn-info">Button</button>
  <input type="button" class="btn btn-info" value="Input Button">
  <input type="submit" class="btn btn-info" value="Submit Button">
</div>

<div class="container">
  <h2>Button Sizes</h2>
  <button type="button" class="btn btn-primary btn-lg">Large</button>
  <button type="button" class="btn btn-primary btn-md">Medium</button>    
  <button type="button" class="btn btn-primary btn-sm">Small</button>
  <button type="button" class="btn btn-primary btn-xs">XSmall</button>
</div>

<div class="container">
  <h2>Block Level Buttons</h2>
  <button type="button" class="btn btn-primary btn-block">Button 1</button>
  <button type="button" class="btn btn-default btn-block">Button 2</button>

  <h2>Large Block Level Buttons</h2>
  <button type="button" class="btn btn-primary btn-lg btn-block">Button 1</button>
  <button type="button" class="btn btn-default btn-lg btn-block">Button 2</button>

  <h2>Small Block Level Buttons</h2>
  <button type="button" class="btn btn-primary btn-sm btn-block">Button 1</button>
  <button type="button" class="btn btn-default btn-sm btn-block">Button 2</button>
</div>

<div class="container">
  <h2>Button States</h2>
  <button type="button" class="btn btn-primary">Primary Button</button>
  <button type="button" class="btn btn-primary active">Active Primary</button>
  <button type="button" class="btn btn-primary disabled">Disabled Primary</button>
</div>

<div class="container">
  <h2>Button Group</h2>
  <p>The .btn-group class creates a button group:</p>
  <div class="btn-group">
    <button type="button" class="btn btn-primary">Apple</button>
    <button type="button" class="btn btn-primary">Samsung</button>
    <button type="button" class="btn btn-primary">Sony</button>
  </div>
</div>


<div class="container">
  <h2>Button Groups - Set Sizes</h2>
  <p>Add class .btn-group-* to size all buttons in a button group.</p>
  <h3>Large Buttons:</h3>
  <div class="btn-group btn-group-lg">
    <button type="button" class="btn btn-primary">Apple</button>
    <button type="button" class="btn btn-primary">Samsung</button>
    <button type="button" class="btn btn-primary">Sony</button>
  </div>
  <h3>Default Buttons:</h3>
  <div class="btn-group">
    <button type="button" class="btn btn-primary">Apple</button>
    <button type="button" class="btn btn-primary">Samsung</button>
    <button type="button" class="btn btn-primary">Sony</button>
  </div>
  <h3>Small Buttons:</h3>
  <div class="btn-group btn-group-sm">
    <button type="button" class="btn btn-primary">Apple</button>
    <button type="button" class="btn btn-primary">Samsung</button>
    <button type="button" class="btn btn-primary">Sony</button>
  </div>
  <h3>Extra Small Buttons:</h3>
  <div class="btn-group btn-group-xs">
    <button type="button" class="btn btn-primary">Apple</button>
    <button type="button" class="btn btn-primary">Samsung</button>
    <button type="button" class="btn btn-primary">Sony</button>
  </div>
</div>


<div class="container">
  <h2>Vertical Button Group</h2>
  <p>Use the .btn-group-vertical class to create a vertical button group:</p>
  <div class="btn-group-vertical">
    <button type="button" class="btn btn-primary">Apple</button>
    <button type="button" class="btn btn-primary">Samsung</button>
    <button type="button" class="btn btn-primary">Sony</button>
  </div>
</div>


<div class="container">
  <h2>Justified Button Groups</h2>
  <p>To span the entire width of the screen, use the .btn-group-justified class:</p>
  <div class="btn-group btn-group-justified">
    <a href="#" class="btn btn-primary">Apple</a>
    <a href="#" class="btn btn-primary">Samsung</a>
    <a href="#" class="btn btn-primary">Sony</a>
  </div>
</div>

<div class="container">
  <h2>Justified Button Groups</h2>
  <div class="btn-group btn-group-justified">
    <div class="btn-group">
      <button type="button" class="btn btn-primary">Apple</button>
    </div>
    <div class="btn-group">
      <button type="button" class="btn btn-primary">Samsung</button>
    </div>
    <div class="btn-group">
      <button type="button" class="btn btn-primary">Sony</button>
    </div>
  </div>
</div>


<div class="container">
  <h2>Nesting Button Groups</h2>
  <p>Nest button groups to create drop down menus:</p>
  <div class="btn-group">
    <button type="button" class="btn btn-primary">Apple</button>
    <button type="button" class="btn btn-primary">Samsung</button>
    <div class="btn-group">
      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Sony <span class="caret"></span></button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#">Tablet</a></li>
        <li><a href="#">Smartphone</a></li>
      </ul>
    </div>
  </div>
</div>


<div class="container">
  <h2>Split Buttons</h2>
  <div class="btn-group">
    <button type="button" class="btn btn-primary">Sony</button>
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="#">Tablet</a></li>
      <li><a href="#">Smartphone</a></li>
    </ul>
  </div>
</div>


<div class="container">
  <h2>Glyphicon Examples</h2>
  <p>Envelope icon: <span class="glyphicon glyphicon-envelope"></span></p>    
  <p>Envelope icon as a link:
    <a href="#"><span class="glyphicon glyphicon-envelope"></span></a>
  </p>
  <p>Search icon: <span class="glyphicon glyphicon-search"></span></p>
  <p>Search icon on a button:
    <button type="button" class="btn btn-default">
      <span class="glyphicon glyphicon-search"></span> Search
    </button>
  </p>
  <p>Search icon on a styled button:
    <button type="button" class="btn btn-info">
      <span class="glyphicon glyphicon-search"></span> Search
    </button>
  </p>
  <p>Print icon: <span class="glyphicon glyphicon-print"></span></p>      
  <p>Print icon on a styled link button:
    <a href="#" class="btn btn-success btn-lg">
      <span class="glyphicon glyphicon-print"></span> Print 
    </a>
  </p> 
</div>

<div class="container">
  <h2>Badges</h2>
  <a href="#">News <span class="badge">5</span></a><br>
  <a href="#">Comments <span class="badge">10</span></a><br>
  <a href="#">Updates <span class="badge">2</span></a>
</div>


<div class="container">
  <h2>Badges on Buttons</h2>
  <button type="button" class="btn btn-primary">Primary <span class="badge">7</span></button>
  <button type="button" class="btn btn-success">Success <span class="badge">3</span></button>    
  <button type="button" class="btn btn-danger">Danger <span class="badge">5</span></button>        
</div>

<div class="container">
  <h2>Labels</h2>
  <h1>Example <span class="label label-default">New</span></h1>
  <h2>Example <span class="label label-default">New</span></h2>
  <h3>Example <span class="label label-default">New</span></h3>
  <h4>Example <span class="label label-default">New</span></h4>
  <h5>Example <span class="label label-default">New</span></h5>
  <h6>Example <span class="label label-default">New</span></h6>
</div>

 
<div class="container">
  <h2>Contextual Label Classes</h2>
  <p>Contextual classes can be used to color the label.</p>  
  <span class="label label-default">Default Label</span>
  <span class="label label-primary">Primary Label</span>
  <span class="label label-success">Success Label</span>
  <span class="label label-info">Info Label</span>
  <span class="label label-warning">Warning Label</span>
  <span class="label label-danger">Danger Label</span>
</div>


<div class="container">
  <h2>Basic Progress Bar</h2>
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
      <span class="sr-only">70% Complete</span>
    </div>
  </div>
</div>


<div class="container">
  <h2>Progress Bar With Label</h2>
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
      70%
    </div>
  </div>
</div>



<div class="container">
  <h2>Colored Progress Bars</h2>
  <p>The contextual classes colors the progress bars:</p> 
  <div class="progress">
    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
      40% Complete (success)
    </div>
  </div>
  <div class="progress">
    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
      50% Complete (info)
    </div>
  </div>
  <div class="progress">
    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
      60% Complete (warning)
    </div>
  </div>
  <div class="progress">
    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
      70% Complete (danger)
    </div>
  </div>
</div>


<div class="container">
  <h2>Striped Progress Bars</h2>
  <p>The .progress-bar-striped class adds stripes to the progress bars:</p> 
  <div class="progress">
    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
      40% Complete (success)
    </div>
  </div>
  <div class="progress">
    <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
      50% Complete (info)
    </div>
  </div>
  <div class="progress">
    <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
      60% Complete (warning)
    </div>
  </div>
  <div class="progress">
    <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
      70% Complete (danger)
    </div>
  </div>
</div>


<div class="container">
  <h2>Animated Progress Bar</h2>
  <p>The .active class animates the progress bar:</p> 
  <div class="progress">
    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
      40%
    </div>
  </div>
</div>



<div class="container">
  <h2>Stacked Progress Bars</h2>
  <p>Create a stacked progress bar by placing multiple bars into the same div with class .progress:</p> 
  <div class="progress">
    <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" style="width:40%">
      Free Space
    </div>
    <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" style="width:10%">
      Warning
    </div>
    <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" style="width:20%">
      Danger
    </div>
  </div>
</div>

<div class="container">
  <h2>Pagination</h2>
  <p>The .pagination class provides pagination links:</p>                  
  <ul class="pagination">
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
  </ul>
</div>

<div class="container">
  <h2>Pagination - Active State</h2>
  <p>Add class .active to let the user know which page he/she is on:</p>
  <ul class="pagination">
    <li><a href="#">1</a></li>
    <li class="active"><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
  </ul>
</div>


<div class="container">
  <h2>Pagination - Disabled State</h2>
  <p>Add class .disabled if a page for some reason is disabled:</p>
  <ul class="pagination">
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li class="disabled"><a href="#">4</a></li>
    <li><a href="#">5</a></li>
  </ul>
</div>


<div class="container">
  <h2>Pagination - Sizing</h2>
  <p>Add class .pagination-lg for larger blocks or .pagination-sm for smaller blocks.</p>

  <p>Large:</p>
  <ul class="pagination pagination-lg">
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
  </ul>

  <p>Default:</p>
  <ul class="pagination pagination">
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
  </ul>

  <p>Small:</p>
  <ul class="pagination pagination-sm">
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
  </ul>
</div>


<div class="container">
  <h2>Breadcrumbs</h2>
  <p>The .breadcrumb class indicates the current page's location within a navigational hierarchy:</p>                  
  <ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">Private</a></li>
    <li><a href="#">Pictures</a></li>
    <li class="active">Vacation</li>        
  </ul>
</div>

<div class="container">
  <h2>Pager</h2>
  <p>The .pager class provides previous and next buttons (links):</p>                  
  <ul class="pager">
    <li><a href="#">Previous</a></li>
    <li><a href="#">Next</a></li>
  </ul>
</div>

<div class="container">
  <h2>Pager</h2>
  <p>The .previous and .next classes align each link to the sides of the page:</p>                  
  <ul class="pager">
    <li class="previous"><a href="#">Previous</a></li>
    <li class="next"><a href="#">Next</a></li>
  </ul>
</div>

<div class="container">
  <h2>Basic List Group</h2>
  <ul class="list-group">
    <li class="list-group-item">First item</li>
    <li class="list-group-item">Second item</li>
    <li class="list-group-item">Third item</li>
  </ul>
</div>


<div class="container">
  <h2>List Group With Badges</h2>
  <ul class="list-group">
    <li class="list-group-item">New <span class="badge">12</span></li>
    <li class="list-group-item">Deleted <span class="badge">5</span></li>
    <li class="list-group-item">Warnings <span class="badge">3</span></li>
  </ul>
</div>


<div class="container">
  <h2>List Group With Linked Items</h2>
  <div class="list-group">
    <a href="#" class="list-group-item">First item</a>
    <a href="#" class="list-group-item">Second item</a>
    <a href="#" class="list-group-item">Third item</a>
  </div>
</div>


<div class="container">
  <h2>Active Item in a List Group</h2>
  <div class="list-group">
    <a href="#" class="list-group-item active">First item</a>
    <a href="#" class="list-group-item">Second item</a>
    <a href="#" class="list-group-item">Third item</a>
  </div>
</div>

<div class="container">
  <h2>List Group With a Disabled Item</h2>
  <div class="list-group">
    <a href="#" class="list-group-item disabled">First item</a>
    <a href="#" class="list-group-item">Second item</a>
    <a href="#" class="list-group-item">Third item</a>
  </div>
</div>

<div class="container">
  <h2>List Group With Contextual Classes</h2>
  <ul class="list-group">
    <li class="list-group-item list-group-item-success">First item</li>
    <li class="list-group-item list-group-item-info">Second item</li>
    <li class="list-group-item list-group-item-warning">Third item</li>
    <li class="list-group-item list-group-item-danger">Fourth item</li>
  </ul>
  
  <h2>Linked Items With Contextual Classes</h2>
  <p>Move the mouse over the linked items to see the hover effect:</p>
  <div class="list-group">
    <a href="#" class="list-group-item list-group-item-success">First item</a>
    <a href="#" class="list-group-item list-group-item-info">Second item</a>
    <a href="#" class="list-group-item list-group-item-warning">Third item</a>
    <a href="#" class="list-group-item list-group-item-danger">Fourth item</a>
  </div>
</div>


<div class="container">
  <h2>List Group With Custom Content</h2>
  <div class="list-group">
    <a href="#" class="list-group-item active">
      <h4 class="list-group-item-heading">First List Group Item Heading</h4>
      <p class="list-group-item-text">List Group Item Text</p>
    </a>
    <a href="#" class="list-group-item">
      <h4 class="list-group-item-heading">Second List Group Item Heading</h4>
      <p class="list-group-item-text">List Group Item Text</p>
    </a>
    <a href="#" class="list-group-item">
      <h4 class="list-group-item-heading">Third List Group Item Heading</h4>
      <p class="list-group-item-text">List Group Item Text</p>
    </a>
  </div>
</div>

<div class="container">
  <h2>Basic Panel</h2>
  <div class="panel panel-default">
    <div class="panel-body">A Basic Panel</div>
  </div>
</div>


<div class="container">
  <h2>Panel Heading</h2>
  <div class="panel panel-default">
    <div class="panel-heading">Panel Heading</div>
    <div class="panel-body">Panel Content</div>
  </div>
</div>


<div class="container">
  <h2>Panel Footer</h2>
  <div class="panel panel-default">
    <div class="panel-heading">Panel Heading</div>
    <div class="panel-body">Panel Content</div>
    <div class="panel-footer">Panel Footer</div>
  </div>
</div>

<div class="container">
  <h2>Panel Group</h2>
  <p>The panel-group class clears the bottom-margin. Try to remove the class and see what happens.</p>
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">Panel Header</div>
      <div class="panel-body">Panel Content</div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">Panel Header</div>
      <div class="panel-body">Panel Content</div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">Panel Header</div>
      <div class="panel-body">Panel Content</div>
    </div>
  </div>
</div>



<div class="container">
  <h2>Panels with Contextual Classes</h2>
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">Panel with panel-default class</div>
      <div class="panel-body">Panel Content</div>
    </div>

    <div class="panel panel-primary">
      <div class="panel-heading">Panel with panel-primary class</div>
      <div class="panel-body">Panel Content</div>
    </div>

    <div class="panel panel-success">
      <div class="panel-heading">Panel with panel-success class</div>
      <div class="panel-body">Panel Content</div>
    </div>

    <div class="panel panel-info">
      <div class="panel-heading">Panel with panel-info class</div>
      <div class="panel-body">Panel Content</div>
    </div>

    <div class="panel panel-warning">
      <div class="panel-heading">Panel with panel-warning class</div>
      <div class="panel-body">Panel Content</div>
    </div>

    <div class="panel panel-danger">
      <div class="panel-heading">Panel with panel-danger class</div>
      <div class="panel-body">Panel Content</div>
    </div>
  </div>
</div>


<div class="container">
  <h2>Dropdowns</h2>
  <p>The .dropdown class is used to indicate a dropdown menu.</p>
  <p>Use the .dropdown-menu class to actually build the dropdown menu.</p>
  <p>To open the dropdown menu, use a button or a link with a class of .dropdown-toggle and data-toggle="dropdown".</p>                                          
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">HTML</a></li>
      <li><a href="#">CSS</a></li>
      <li><a href="#">JavaScript</a></li>
    </ul>
  </div>
</div>


<div class="container">
  <h2>Dropdowns</h2>
  <p>The .divider class is used to separate links inside the dropdown menu with a thin horizontal line:</p>
  <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Tutorials
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">HTML</a></li>
      <li><a href="#">CSS</a></li>
      <li><a href="#">JavaScript</a></li>
      <li class="divider"></li>
      <li><a href="#">About Us</a></li>
    </ul>
  </div>
</div>


<div class="container">
  <h2>Dropdowns</h2>
  <p>The .dropdown-header class is used to add headers inside the dropdown menu:</p>
  <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Tutorials
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li class="dropdown-header">Dropdown header 1</li>
      <li><a href="#">HTML</a></li>
      <li><a href="#">CSS</a></li>
      <li><a href="#">JavaScript</a></li>
      <li class="divider"></li>
      <li class="dropdown-header">Dropdown header 2</li>
      <li><a href="#">About Us</a></li>
    </ul>
  </div>
</div>

<div class="container">
  <h2>Dropdowns</h2>
  <p>The .active class adds a blue background color to the active link.</p>
  <p>The .disabled class disables a dropdown item (grey text color).</p>
  <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Tutorials
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">Normal</a></li>
      <li class="disabled"><a href="#">Disabled</a></li>
      <li class="active"><a href="#">Active</a></li>
      <li><a href="#">Normal</a></li>
    </ul>
  </div>
</div>

<div class="container">
  <h2>Dropdowns</h2>
  <p>Add the .dropdown-menu-right class to .dropdown-menu to right-align the dropdown menu:</p>
  <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
    <span class="caret"></span></button>
    <ul class="dropdown-menu dropdown-menu-right">
      <li><a href="#">HTML</a></li>
      <li><a href="#">CSS</a></li>
      <li><a href="#">JavaScript</a></li>
      <li class="divider"></li>
      <li><a href="#">About Us</a></li>
    </ul>
  </div>
</div>

<div class="container">
  <h2>Dropdowns</h2>
  <p>The .dropup class makes the dropdown menu expand upwards instead of downwards:</p>
  <div class="dropup">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Dropup Example
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">HTML</a></li>
      <li><a href="#">CSS</a></li>
      <li><a href="#">JavaScript</a></li>
      <li class="divider"></li>
      <li><a href="#">About Us</a></li>
    </ul>
  </div>
</div>


<div class="container">
  <h2>Dropdowns</h2>
  <p>The .dropdown class is used to indicate a dropdown menu.</p>
  <p>Use the .dropdown-menu class to actually build the dropdown menu.</p>                                          
  <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Tutorials
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">HTML</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CSS</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">JavaScript</a></li>
      <li role="presentation" class="divider"></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>
    </ul>
  </div>
</div>

<div class="container">
  <h2>Simple Collapsible</h2>
  <p>Click on the button to toggle between showing and hiding content.</p>
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Simple collapsible</button>
  <div id="demo" class="collapse">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  </div>
</div>

<div class="container">
  <h2>Simple Collapsible</h2>
  <p>Click on the button to toggle between showing and hiding content.</p>
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Simple collapsible</button>
  <div id="demo" class="collapse in">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  </div>
</div>

<div class="container">
  <h2>Collapsible Panel</h2>
  <p>Click on the collapsible panel to open and close it.</p>
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse1">Collapsible panel</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body">Panel Body</div>
        <div class="panel-footer">Panel Footer</div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <h2>Collapsible List Group</h2>
  <p>Click on the collapsible panel to open and close it.</p>
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse2">Collapsible list group</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <ul class="list-group">
          <li class="list-group-item">One</li>
          <li class="list-group-item">Two</li>
          <li class="list-group-item">Three</li>
        </ul>
        <div class="panel-footer">Footer</div>
      </div>
    </div>
  </div>
</div>


<div class="container">
  <h2>Accordion Example</h2>
  <p><strong>Note:</strong> The <strong>data-parent</strong> attribute makes sure that all collapsible elements under the specified parent will be closed when one of the collapsible item is shown.</p>
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1a">Collapsible Group 1</a>
        </h4>
      </div>
      <div id="collapse1a" class="panel-collapse collapse in">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2a">Collapsible Group 2</a>
        </h4>
      </div>
      <div id="collapse2a" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3a">Collapsible Group 3</a>
        </h4>
      </div>
      <div id="collapse3a" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>
  </div> 
</div>


<div class="container">
  <h3>Inline List</h3>
  <ul class="list-inline">
    <li><a href="#">Home</a></li>
    <li><a href="#">Menu 1</a></li>
    <li><a href="#">Menu 2</a></li>
    <li><a href="#">Menu 3</a></li>
  </ul>
</div>

<div class="container">
  <h3>Tabs</h3>
  <ul class="nav nav-tabs">
    <li class="active"><a href="#">Home</a></li>
    <li><a href="#">Menu 1</a></li>
    <li><a href="#">Menu 2</a></li>
    <li><a href="#">Menu 3</a></li>
  </ul>
  <br>
  <p><strong>Note:</strong> This example shows how to create a basic navigation tab. It is not toggleable/dynamic yet (you can't click on the links to display different content)- see the last example in the Bootstrap Tabs and Pills Tutorial to find out how this can be done.</p>
</div>

<div class="container">
  <h3>Tabs With Dropdown Menu</h3>
  <ul class="nav nav-tabs">
    <li class="active"><a href="#">Home</a></li>
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu 1 <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="#">Submenu 1-1</a></li>
        <li><a href="#">Submenu 1-2</a></li>
        <li><a href="#">Submenu 1-3</a></li>                        
      </ul>
    </li>
    <li><a href="#">Menu 2</a></li>
    <li><a href="#">Menu 3</a></li>
  </ul>
</div>

<div class="container">
  <h3>Pills</h3>
  <ul class="nav nav-pills">
    <li class="active"><a href="#">Home</a></li>
    <li><a href="#">Menu 1</a></li>
    <li><a href="#">Menu 2</a></li>
    <li><a href="#">Menu 3</a></li>
  </ul>
</div>

<div class="container">
  <h3>Vertical Pills</h3>
  <p>Use the .nav-stacked class to vertically stack pills:</p>
  <ul class="nav nav-pills nav-stacked">
    <li class="active"><a href="#">Home</a></li>
    <li><a href="#">Menu 1</a></li>
    <li><a href="#">Menu 2</a></li>
    <li><a href="#">Menu 3</a></li>
  </ul>
</div>

<div class="container">
  <h3>Vertical Pills</h3>
  <div class="row">
    <div class="col-md-3">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div class="col-md-3"> 
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div class="col-md-3"> 
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div class="col-md-3">
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Menu 1</a></li>
        <li><a href="#">Menu 2</a></li>
        <li><a href="#">Menu 3</a></li>
      </ul>
    </div>
    <div class="clearfix visible-lg"></div>
  </div>
</div>

<ul class="nav nav-pills nav-stacked">
  <li class="active"><a href="#">Home</a></li>
  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu 1
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="#">Submenu 1-1</a></li>
      <li><a href="#">Submenu 1-2</a></li>
      <li><a href="#">Submenu 1-3</a></li> 
    </ul>
  </li>
  <li><a href="#">Menu 2</a></li>
  <li><a href="#">Menu 3</a></li>
</ul>

<div class="container">
  <h3>Centered Tabs</h3>
  <p>To center/justify the tabs and pills, use the .nav-justified class. Note that on screens that are smaller than 768px, the list items are stacked (content will remain centered).</p>
  <ul class="nav nav-tabs nav-justified">
    <li class="active"><a href="#">Home</a></li>
    <li><a href="#">Menu 1</a></li>
    <li><a href="#">Menu 2</a></li>
    <li><a href="#">Menu 3</a></li>
  </ul>
  <br>
  <h3>Centered Pills</h3>
  <ul class="nav nav-pills nav-justified">
    <li class="active"><a href="#">Home</a></li>
    <li><a href="#">Menu 1</a></li>
    <li><a href="#">Menu 2</a></li>
    <li><a href="#">Menu 3</a></li>
  </ul>
</div>


<div class="container">
  <h2>Dynamic Tabs</h2>
  <p>To make the tabs toggleable, add the data-toggle="tab" attribute to each link. Then add a .tab-pane class with a unique ID for every tab and wrap them inside a div element with class .tab-content.</p>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1a">Menu 1</a></li>
    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
    <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="menu1a" class="tab-pane fade">
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>


<div class="container">
  <h2>Dynamic Pills</h2>
  <p>To make the tabs toggleable, add the data-toggle="pill" attribute to each link. Then add a .tab-pane class with a unique ID for every tab and wrap them inside a div element with class .tab-content.</p>
  <ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#homeb">Home</a></li>
    <li><a data-toggle="pill" href="#menu1b">Menu 1</a></li>
    <li><a data-toggle="pill" href="#menu2b ">Menu 2</a></li>
    <li><a data-toggle="pill" href="#menu3b">Menu 3</a></li>
  </ul>
  
  <div class="tab-content">
    <div id="homeb" class="tab-pane fade in active">
      <h3>HOME</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="menu1b" class="tab-pane fade">
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2b" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3b" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3>Basic Navbar Example</h3>
  <p>A navigation bar is a navigation header that is placed at the top of the page.</p>
</div>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>
  
  
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav> 


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
  

 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Link</a></li>
      <li><a href="#">Link</a></li>
    </ul>
    <button class="btn btn-danger navbar-btn">Button</button>
  </div>
</nav>

<div class="container">
  <h2>Navbar Button</h2>
  <p>Use the navbar-btn class on a button to vertically align (same padding as links) it inside the navbar.</p>
</div>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <form class="navbar-form navbar-left">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>
</nav>

<div class="container">
  <h3>Navbar Forms</h3>
  <p>Use the .navbar-form class to vertically align form elements (same padding as links) inside the navbar.</p>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <form class="navbar-form navbar-left">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</nav>


<nav class="navbar navbar-inverse">
  <ul class="nav navbar-nav">
    <li><a href="#">Link</a></li>
    <li><a href="#">Link</a></li>
  </ul>
  <p class="navbar-text">Some text</p>
</nav>

<div class="container">
  <h3>Navbar Text</h3>
  <p>Use the .navbar-text class to vertical align any elements inside the navbar that are not links (ensures proper padding).</p>
</div>
 
  
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>
  
<div class="container" style="margin-top:50px">
  <h3>Fixed Navbar</h3>
  <div class="row">
    <div class="col-md-4">
      <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
      <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>    
    </div>
    <div class="col-md-4"> 
      <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
      <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
    </div>
    <div class="col-md-4"> 
      <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
      <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p> 
    </div>
  </div>
</div>

<h1>Scroll this page to see the effect</h1>
  
  
 <div class="container">
  <div class="row">
    <div class="col-md-3">
      <p>The .navbar-fixed-bottom class makes the navigation bar stay at the bottom.</p>
    </div>
    <div class="col-md-3"> 
      <p>The .navbar-fixed-bottom class makes the navigation bar stay at the bottom.</p>
    </div>
    <div class="col-md-3"> 
      <p>The .navbar-fixed-bottom class makes the navigation bar stay at the bottom.</p>
    </div>
    <div class="col-md-3">
      <p>The .navbar-fixed-bottom class makes the navigation bar stay at the bottom.</p>
    </div>
    <div class="clearfix visible-lg"></div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-3">
      <p>The .navbar-fixed-bottom class makes the navigation bar stay at the bottom.</p>
    </div>
    <div class="col-md-3"> 
      <p>The .navbar-fixed-bottom class makes the navigation bar stay at the bottom.</p>
    </div>
    <div class="col-md-3"> 
      <p>The .navbar-fixed-bottom class makes the navigation bar stay at the bottom.</p>
    </div>
    <div class="col-md-3">
      <p>The .navbar-fixed-bottom class makes the navigation bar stay at the bottom.</p>
    </div>
    <div class="clearfix visible-lg"></div>
  </div>
</div>
 
  
 
 <nav class="navbar navbar-inverse navbar-fixed-bottom">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3>Fixed Bottom Navbar</h3>
  <div class="row">
    <div class="col-md-3">
      <p>The .navbar-fixed-bottom class makes the navigation bar stay at the bottom.</p>
    </div>
    <div class="col-md-3"> 
      <p>The .navbar-fixed-bottom class makes the navigation bar stay at the bottom.</p>
    </div>
    <div class="col-md-3"> 
      <p>The .navbar-fixed-bottom class makes the navigation bar stay at the bottom.</p>
    </div>
    <div class="col-md-3">
      <p>The .navbar-fixed-bottom class makes the navigation bar stay at the bottom.</p>
    </div>
    <div class="clearfix visible-lg"></div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-3">
      <p>The .navbar-fixed-bottom class makes the navigation bar stay at the bottom.</p>
    </div>
    <div class="col-md-3"> 
      <p>The .navbar-fixed-bottom class makes the navigation bar stay at the bottom.</p>
    </div>
    <div class="col-md-3"> 
      <p>The .navbar-fixed-bottom class makes the navigation bar stay at the bottom.</p>
    </div>
    <div class="col-md-3">
      <p>The .navbar-fixed-bottom class makes the navigation bar stay at the bottom.</p>
    </div>
    <div class="clearfix visible-lg"></div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-3">
      <p>The .navbar-fixed-bottom class makes the navigation bar stay at the bottom.</p>
    </div>
    <div class="col-md-3"> 
      <p>The .navbar-fixed-bottom class makes the navigation bar stay at the bottom.</p>
    </div>
    <div class="col-md-3"> 
      <p>The .navbar-fixed-bottom class makes the navigation bar stay at the bottom.</p>
    </div>
    <div class="col-md-3">
      <p>The .navbar-fixed-bottom class makes the navigation bar stay at the bottom.</p>
    </div>
    <div class="clearfix visible-lg"></div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-3">
      <p>The .navbar-fixed-bottom class makes the navigation bar stay at the bottom.</p>
    </div>
    <div class="col-md-3"> 
      <p>The .navbar-fixed-bottom class makes the navigation bar stay at the bottom.</p>
    </div>
    <div class="col-md-3"> 
      <p>The .navbar-fixed-bottom class makes the navigation bar stay at the bottom.</p>
    </div>
    <div class="col-md-3">
      <p>The .navbar-fixed-bottom class makes the navigation bar stay at the bottom.</p>
    </div>
    <div class="clearfix visible-lg"></div>
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container">
  <h3>Collapsible Navbar</h3>
  <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).
  <p>Only when the button is clicked, the navigation bar will be displayed.</p>
</div>
 

<div class="container">
  <h2>Vertical (basic) form</h2>
  <form>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  
  
  <div class="container">
  <h2>Inline form</h2>
  <p>Make the viewport larger than 768px wide to see that all of the form elements are inline, left aligned, and the labels are alongside.</p>
  <form class="form-inline">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

  
 <div class="container">
  <h2>Inline form with .sr-only class</h2>
  <p>Make the viewport larger than 768px wide to see that all of the form elements are inline, left aligned, and the labels are alongside.</p>
  <form class="form-inline">
    <div class="form-group">
      <label class="sr-only" for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label class="sr-only" for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div> 


<div class="container">
  <h2>Horizontal form</h2>
  <form class="form-horizontal">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>
  
  
<div class="container">
  <h2>Form control: input</h2>
  <p>The form below contains two input elements; one of type text and one of type password:</p>
  <form>
    <div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" class="form-control" id="usr">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd">
    </div>
  </form>
</div>
  

<div class="container">
  <h2>Form control: textarea</h2>
  <p>The form below contains a textarea for comments:</p>
  <form>
    <div class="form-group">
      <label for="comment">Comment:</label>
      <textarea class="form-control" rows="5" id="comment"></textarea>
    </div>
  </form>
</div> 
  

<div class="container">
  <h2>Form control: checkbox</h2>
  <p>The form below contains three checkboxes. The last option is disabled:</p>
  <form>
    <div class="checkbox">
      <label><input type="checkbox" value="">Option 1</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Option 2</label>
    </div>
    <div class="checkbox disabled">
      <label><input type="checkbox" value="" disabled>Option 3</label>
    </div>
  </form>
</div>  

<div class="container">
  <h2>Form control: inline checkbox</h2>
  <p>The form below contains three inline checkboxes:</p>
  <form>
    <label class="checkbox-inline">
      <input type="checkbox" value="">Option 1
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" value="">Option 2
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" value="">Option 3
    </label>
  </form>
</div>

  
 
<div class="container">
  <h2>Form control: radio buttons</h2>
  <p>The form below contains three radio buttons. The last option is disabled:</p>
  <form>
    <div class="radio">
      <label><input type="radio" name="optradio">Option 1</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="optradio">Option 2</label>
    </div>
    <div class="radio disabled">
      <label><input type="radio" name="optradio" disabled>Option 3</label>
    </div>
  </form>
</div> 


<div class="container">
  <h2>Form control: inline radio buttons</h2>
  <p>The form below contains three inline radio buttons:</p>
  <form>
    <label class="radio-inline">
      <input type="radio" name="optradio">Option 1
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">Option 2
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">Option 3
    </label>
  </form>
</div>



<div class="container">
  <h2>Form control: select</h2>
  <p>The form below contains two dropdown menus (select lists):</p>
  <form>
    <div class="form-group">
      <label for="sel1">Select list (select one):</label>
      <select class="form-control" id="sel1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
      <br>
      <label for="sel2">Mutiple select list (hold shift to select more than one):</label>
      <select multiple class="form-control" id="sel2">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
  </form>
</div>

<div class="container">
  <h2>Horizontal form with static control</h2>
  <form class="form-horizontal">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <p class="form-control-static">someone@example.com</p>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>
  
  
 <div class="container">
  <h3>Input Groups</h3>
  <p>The .input-group class is a container to enhance an input by adding an icon, text or a button in front or behind it as a "help text".</p>
  <p>The .input-group-addon class attaches an icon or help text next to the input field.</p>
  
  <form>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="email" type="text" class="form-control" name="email" placeholder="Email">
    </div>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input id="password" type="password" class="form-control" name="password" placeholder="Password">
    </div>
    <br>
    <div class="input-group">
      <span class="input-group-addon">Text</span>
      <input id="msg" type="text" class="form-control" name="msg" placeholder="Additional Info">
    </div>
  </form>
  <br>

  <p>It can also be used on the right side of the input:</p>
  <form>
    <div class="input-group">
      <input id="email" type="text" class="form-control" name="email" placeholder="Email">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>   
    </div>
    <div class="input-group">
      <input id="password" type="password" class="form-control" name="password" placeholder="Password">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    </div>
  </form>
</div> 
  
 <div class="container">
  <h1>Input Group Button</h1>
  <p>The .input-group class is a container to enhance an input by adding an icon, text or a button in front or behind it as a "help text".</p>
  <p>The .input-group-btn class attaches a button next to an input field. This is often used as a search bar:</p>
  <form>
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search">
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
      </div>
    </div>
  </form>
</div>

<div class="container">
  <h2>Horizontal form: control states</h2>
  <form class="form-horizontal">
    <div class="form-group">
      <label class="col-sm-2 control-label">Focused</label>
      <div class="col-sm-10">
        <input class="form-control" id="focusedInput" type="text" value="Click to focus...">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-sm-2 control-label">Disabled</label>
      <div class="col-sm-10">
        <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled>
      </div>
    </div>
    <fieldset disabled>
      <div class="form-group">
        <label for="disabledTextInput" class="col-sm-2 control-label">Disabled input and select list (Fieldset disabled)</label>
        <div class="col-sm-10">
          <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
        </div>
      </div>
      <div class="form-group">
        <label for="disabledSelect" class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
          <select id="disabledSelect" class="form-control">
            <option>Disabled select</option>
          </select>
        </div>
      </div>
    </fieldset>
    <div class="form-group has-success has-feedback">
      <label class="col-sm-2 control-label" for="inputSuccess">Input with success and glyphicon</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputSuccess">
        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
      </div>
    </div>
    <div class="form-group has-warning has-feedback">
      <label class="col-sm-2 control-label" for="inputWarning">Input with warning and glyphicon</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputWarning">
        <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
      </div>
    </div>
    <div class="form-group has-error has-feedback">
      <label class="col-sm-2 control-label" for="inputError">Input with error and glyphicon</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputError">
        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
      </div>
    </div>
  </form>
</div>


<div class="container">
  <h2>Inline form: control states</h2>
  <form class="form-inline">
    <div class="form-group">
      <label for="focusedInput">Focused</label>
      <input class="form-control" id="focusedInput" type="text">
    </div>
    <div class="form-group">
      <label for="inputPassword">Disabled</label>
      <input class="form-control" id="disabledInput" type="text" disabled>
    </div>
    <div class="form-group has-success has-feedback">
      <label for="inputSuccess2">Input with success</label>
      <input type="text" class="form-control" id="inputSuccess2">
      <span class="glyphicon glyphicon-ok form-control-feedback"></span>
    </div>
    <div class="form-group has-warning has-feedback">
      <label for="inputWarning2">Input with warning</label>
      <input type="text" class="form-control" id="inputWarning2">
      <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
    </div>
    <div class="form-group has-error has-feedback">
      <label for="inputError2">Input with error</label>
      <input type="text" class="form-control" id="inputError2">
      <span class="glyphicon glyphicon-remove form-control-feedback"></span>
    </div>
  </form>
</div>
  
  
 <div class="container">
  <h2>Input Sizing</h2>
  <p>The form below shows input elements with different heights using .input-lg and .input-sm:</p>
  <form>
    <div class="form-group">
      <label for="inputdefault">Default input</label>
      <input class="form-control" id="inputdefault" type="text">
    </div>
    <div class="form-group">
      <label for="inputlg">input-lg</label>
      <input class="form-control input-lg" id="inputlg" type="text">
    </div>
    <div class="form-group">
      <label for="inputsm">input-sm</label>
      <input class="form-control input-sm" id="inputsm" type="text">
    </div>
    <div class="form-group">
      <label for="sel1">Default select list</label>
      <select class="form-control" id="sel1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
    </div>
    <div class="form-group">
      <label for="sel2">input-lg</label>
      <select class="form-control input-lg" id="sel2">
        <option>1</option>
        <option>2</option>
        <option>3</option>
      </select>
    </div>
    <div class="form-group">
      <label for="sel3">input-sm</label>
      <select class="form-control input-sm" id="sel3">
        <option>1</option>
        <option>2</option>
        <option>3</option>
      </select>
    </div>
  </form>
</div> 
  
  
 <div class="container">
  <h2>Input Sizing</h2>
  <p>You can quickly size labels and form controls within a Horizontal form by adding .form-group-lg or .form-group-sm to the div class="form-group" element:</p>
  <form class="form-horizontal">
    <div class="form-group form-group-lg">
      <label class="col-sm-2 control-label" for="lg">form-group-lg</label>
      <div class="col-sm-10">
        <input class="form-control" type="text" id="lg">
      </div>
    </div>
    <div class="form-group form-group-sm">
      <label class="col-sm-2 control-label" for="sm">form-group-sm</label>
      <div class="col-sm-10">
        <input class="form-control" type="text" id="sm">
      </div>
    </div>
  </form>
</div> 
  
 <div class="container">
  <h1>Input Group Size</h1>
  <p>The .input-group class is a container to enhance an input by adding an icon, text or a button in front or behind it as a "help text".</p>
  <p>Use the .input-group-lg if you want a large input group:</p>
  <form>
    <div class="input-group input-group-lg">
      <input type="text" class="form-control" placeholder="Search">
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
      </div>
    </div>
  </form>
  <br>

  <p>Use the .input-group-sm if you want a small input group:</p>
  <form>
    <div class="input-group input-group-sm">
      <input type="text" class="form-control" placeholder="Search">
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
      </div>
    </div>
  </form>
</div> 
  
  
 <div class="container">
  <h2>Column Sizing</h2>
  <p>The form below shows input elements with different widths using different .col-xs-* classes:</p>
  <form>
    <div class="form-group">
      <div class="col-xs-2">
        <label for="ex1">col-xs-2</label>
        <input class="form-control" id="ex1" type="text">
      </div>
      <div class="col-xs-3">
        <label for="ex2">col-xs-3</label>
        <input class="form-control" id="ex2" type="text">
      </div>
      <div class="col-xs-4">
        <label for="ex3">col-xs-4</label>
        <input class="form-control" id="ex3" type="text">
      </div>
    </div>
  </form>
</div>


<div class="container">
  <h2>Help text</h2>
  <p>Use the .help-block class to add a block level help text in forms:</p>
  <form>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
      <span class="help-block">This is some help text that breaks onto a new line and may extend more than one line.</span>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

<div class="container">
  <h2>Media Object</h2>
  <p>Use the "media-left" class to left-align a media object. Text that should appear next to the image, is placed inside a container with class="media-body".</p>
  <p>Tip: Use the "media-right" class to right-align the media object.</p><br>
  
  <!-- Left-aligned media object -->
  <div class="media">
    <div class="media-left">
      <img src="img_avatar1.png" class="media-object" style="width:60px">
    </div>
    <div class="media-body">
      <h4 class="media-heading">Left-aligned</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
  </div>
  <hr>
  
  <!-- Right-aligned media object -->
  <div class="media">
    <div class="media-body">
      <h4 class="media-heading">Right-aligned</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div class="media-right">
      <img src="img_avatar1.png" class="media-object" style="width:60px">
    </div>
  </div>
</div>

  
  <div class="container">
  <h2>Media Object</h2>
  <p>The media object can also be top, middle or bottom-aligned with the "media-top", "media-middle" or "media-bottom" class:</p><br>
  <div class="media">
    <div class="media-left media-top">
      <img src="img_avatar1.png" class="media-object" style="width:80px">
    </div>
    <div class="media-body">
      <h4 class="media-heading">Media Top</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
  </div>
  <hr>
  <div class="media">
    <div class="media-left media-middle">
      <img src="img_avatar1.png" class="media-object" style="width:80px">
    </div>
    <div class="media-body">
      <h4 class="media-heading">Media Middle</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
  </div>
  <hr>
  <div class="media">
    <div class="media-left media-bottom">
      <img src="img_avatar1.png" class="media-object" style="width:80px">
    </div>
    <div class="media-body">
      <h4 class="media-heading">Media Bottom</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
  </div>
</div>


<div class="container">
  <h2>Nested Media Objects</h2>
  <p>Media objects can also be nested (a media object inside a media object):</p><br>
  <div class="media">
    <div class="media-left">
      <img src="img_avatar1.png" class="media-object" style="width:45px">
    </div>
    <div class="media-body">
      <h4 class="media-heading">John Doe <small><i>Posted on February 19, 2016</i></small></h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      
      <!-- Nested media object -->
      <div class="media">
        <div class="media-left">
          <img src="img_avatar2.png" class="media-object" style="width:45px">
        </div>
        <div class="media-body">
          <h4 class="media-heading">John Doe <small><i>Posted on February 19, 2016</i></small></h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

          <!-- Nested media object -->
          <div class="media">
            <div class="media-left">
              <img src="img_avatar3.png" class="media-object" style="width:45px">
            </div>
            <div class="media-body">
              <h4 class="media-heading">John Doe <small><i>Posted on February 19, 2016</i></small></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          
        </div>
      </div>
      
    </div>
  </div>
</div>

  
  
  <div class="container">
  <h2>Nested Media Objects</h2>
  <p>Media objects can also be nested (a media object inside a media object):</p><br>
  <div class="media">
    <div class="media-left">
      <img src="img_avatar1.png" class="media-object" style="width:45px">
    </div>
    <div class="media-body">
      <h4 class="media-heading">John Doe <small><i>Posted on February 19, 2016</i></small></h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      
      <!-- Nested media object -->
      <div class="media">
        <div class="media-left">
          <img src="img_avatar2.png" class="media-object" style="width:45px">
        </div>
        <div class="media-body">
          <h4 class="media-heading">John Doe <small><i>Posted on February 20, 2016</i></small></h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

          <!-- Nested media object -->
          <div class="media">
            <div class="media-left">
              <img src="img_avatar3.png" class="media-object" style="width:45px">
            </div>
            <div class="media-body">
              <h4 class="media-heading">John Doe <small><i>Posted on February 21, 2016</i></small></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          
        </div>
        
        <!-- Nested media object -->
        <div class="media">
          <div class="media-left">
            <img src="img_avatar4.png" class="media-object" style="width:45px">
          </div>
          <div class="media-body">
            <h4 class="media-heading">Jane Doe <small><i>Posted on February 20, 2016</i></small></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
        
      </div>
    </div>
    
    <!-- Nested media object -->    
    <div class="media">
      <div class="media-left">
        <img src="img_avatar5.png" class="media-object" style="width:45px">
      </div>
      <div class="media-body">
        <h4 class="media-heading">Jane Doe <small><i>Posted on February 19, 2016</i></small></h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
    </div>

  </div>
</div>



<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="vegas3.jpg" alt="Vegas 3" width="280" height="172">
      </div>

      <div class="item">
        <img src="vegas4.jpg" alt="Vegas 4" width="280" height="172">
      </div>
    
      <div class="item">
        <img src="vac1.jpg" alt="Vacation 1" width="280" height="172">
      </div>

      <div class="item">
        <img src="vac2.jpg" alt="Vacation 2" width="280" height="172">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<div class="container">
  <br>
  <div id="myCarousel2" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel2" data-slide-to="1"></li>
      <li data-target="#myCarousel2" data-slide-to="2"></li>
      <li data-target="#myCarousel2" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="vegas3.jpg" alt="Vegas 3" width="460" height="345">
        <div class="carousel-caption">
          <h3>Chania</h3>
          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
        </div>
      </div>

      <div class="item">
        <img src="vegas4.jpg" alt="Vegas 4" width="460" height="345">
        <div class="carousel-caption">
          <h3>Chania</h3>
          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="vac1.jpg" alt="vacation 1" width="460" height="345">
        <div class="carousel-caption">
          <h3>Flowers</h3>
          <p>Beatiful flowers in Kolymbari, Crete.</p>
        </div>
      </div>

      <div class="item">
        <img src="vac2.jpg" alt="vacation 2" width="460" height="345">
        <div class="carousel-caption">
          <h3>Flowers</h3>
          <p>Beatiful flowers in Kolymbari, Crete.</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

  
  <div class="container">
  <h2>Small Modal</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Small Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>This is a small modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

  
  
 <div class="container">
  <h2>Large Modal</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Large Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>This is a large modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
 
 
 <div class="container">
  <h3>Tooltip Example</h3>
  <a href="#" data-toggle="tooltip" title="Hooray!">Hover over me</a>
</div>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>

 

 
 
 <div class="container">
  <h3>Tooltip Example</h3>
  <p>The data-placement attribute specifies the tooltip position.</p>
  <ul class="list-inline">
    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Hooray!">Top</a></li>
    <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Hooray!">Bottom</a></li>
    <li><a href="#" data-toggle="tooltip" data-placement="left" title="Hooray!">Left</a></li>
    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Hooray!">Right</a></li>
  </ul>
</div>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>

 
<div class="container">
  <h3>Popover Example</h3>
  <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">Toggle popover</a>
</div>

<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>

 
  
  <div class="container">
  <h3>Popover Example</h3>
  <ul class="list-inline">
    <li><a href="#" title="Header" data-toggle="popover" data-placement="top" data-content="Content">Top</a></li>
    <li><a href="#" title="Header" data-toggle="popover" data-placement="bottom" data-content="Content">Bottom</a></li>
    <li><a href="#" title="Header" data-toggle="popover" data-placement="left" data-content="Content">Left</a></li>
    <li><a href="#" title="Header" data-toggle="popover" data-placement="right" data-content="Content">Right</a></li>
  </ul>
</div>

<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>

 

<div class="container">
  <h3>Popover Example</h3>
    <a href="#" title="Dismissible popover" data-toggle="popover" data-trigger="focus" data-content="Click anywhere in the document to close this popover">Click me</a>
</div>

<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>


<div class="container">
  <h3>Popover Example</h3>
  <a href="#" title="Header" data-toggle="popover" data-content="Some content">Click Me</a><br>
  <a href="#" title="Header" data-toggle="popover" data-trigger="hover" data-content="Some content">Hover over me</a>
</div>

<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>

 
 
 
 
 
 
  
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
</div> 
  
  
  
  
  
</body>
</html>