<html> 
  <head> 
       <meta charset="utf-8"> 
       <title>My first jQuery Mobile code</title> 
       <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css">
       <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script> 
       <script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
       <meta name="viewport" content="width=device-width, initial-scale=1">
 </head> 
 <body> 
<div data-role="page" id="page1">
   <div data-role="header">
      <h1>Page 1</h1>
   </div>
   <div data-role="content">
      <div data-role="controlgroup" data-direction="horizontal">

        <a href="#page2" data-transition="flow" data-role="button" data-corners="false">Go to Page 2</a>

        <a href="#page3" data-transition="flip" data-role="button" data-corners="false">Go to page3</a>

        <a href="testpage.html" data-transition="flip" data-role="button" data-corners="false">Go to external page</a>

      </div>  
   </div>
</div>

<div data-role="page" id="page2">
   <div data-role="header">
      <h1>Page 2</h1>
   </div>
   <div data-role="content">

      <a href="#page1" data-transition="flow" data-role="button" data-corners="false">Go to Page 1</a>

      <a href="#page3" data-transition="flow" data-role="button" data-corners="false">Go to Page 3</a>

   </div> 
</div>

<div data-role="page" id="page3">
   <div data-role="header">
      <h1>Page 3</h1>
   </div>
   <div data-role="content">

      <a href="#page1" data-transition="flow" data-role="button" data-corners="false">Go to Page 1</a>

      <a href="#page2" data-transition="flow" data-role="button" data-corners="false">Go to Page 2</a>

      <div data-role="navbar">
          <ul>
              <li><a href="#">Option 1</a></li>
              <li><a href="#">Option 2</a></li>
              <li><a href="#">Option 3</a></li>
          </ul> 
      </div>   

      <div data-role="collapsible">
          <h2>Heading</h2>
            <ul data-role="listview" data-filter="true">
               <li><a href="fixture.html">Full fixture</a>
               <li data-role="list-divider">Group A
               <li>Argentina
               <li>Nigeria
               <li>England
               <li>Japan
               <li data-role="list-divider">Group B
               <li>United States
                   <span class="ui-li-count">4</span>
               <li>Mexico
               <li>Korea
               <li>Greece
               <li data-role="list-divider">Group C
               <li>Germany
               <li>Finland
               <li>Chile
               <li>South Africa
            </ul>  
      </div>
   </div> 
</div>
    </body> 
    </html>