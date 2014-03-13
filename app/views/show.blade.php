<!DOCTYPE html> 
<html> 
<head> 
    <title>My Page</title> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
    <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head> 
<body> 

<div data-role="page" id="page1">

    <div data-role="header">
        <h1>Class Project.... Hello {{ $name }}</h1>
    </div>

    <div data-role="navbar">
          <ul>
              <li><a href="#page1" data-transition="none">Choose</a></li>
              <li><a href="#page2" data-transition="none">Page 2</a></li>
              <li><a href="#page3" data-transition="none">Page 3</a></li>
          </ul> 
    </div>  

    <div data-role="content" data-theme="a">    
        <div class="ui-grid-a">

            <div class="ui-block-a">
                <a href="#" data-theme="a" data-role="button">
                <img src="img/pictureButton.jpg" width="300" height="400">
                </a>
            </div>

            <div class="ui-block-b">
                <a href="#" data-theme="a" data-role="button">
                <img src="img/pictureButton.jpg" width="300" height="400">
                </a>
            </div>
        </div>
    </div>

</div>

<div data-role="page" id="page2">

    <div data-role="header">
        <h1>Class Project</h1>
    </div>

    <div data-role="navbar">
          <ul>
              <li><a href="#page1" data-transition="none">Choose</a></li>
              <li><a href="#page2" data-transition="none">Page 2</a></li>
              <li><a href="#page3" data-transition="none">Page 3</a></li>
          </ul> 
    </div>  

    <div data-role="content" data-theme="a">    
        Page 2
    </div>

</div>

<div data-role="page" id="page3">

    <div data-role="header">
        <h1>Class Project</h1>
    </div>

    <div data-role="navbar">
          <ul>
              <li><a href="#page1" data-transition="none">Choose</a></li>
              <li><a href="#page2" data-transition="none">Page 2</a></li>
              <li><a href="#page3" data-transition="none">Page 3</a></li>
          </ul> 
    </div>  

    <div data-role="content" data-theme="a">    
        Page 3
    </div>

</div>

</body>
</html>