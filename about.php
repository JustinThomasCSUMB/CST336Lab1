<!DOCTYPE html>
<html>
<!--

First Website
and comment
in html
(comments can span multiple lines)

-->

<!-- This is the head -->
<!-- All styles and javascript go inside the head -->
    <head>
        <meta charset="utf-8"/>
        <title> Justin Thomas: Personal Website</title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
<!-- closing head -->

    <!-- This is the body -->
    <!-- This is where we place the content of our website -->
    <body>
        <header>
            <h1> Justin Thomas </h1>
        </header>
        <hr/>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php" class="current-page">About</a>
            <a href="contact.php">Contact</a>
        </nav>
        <br/>
       
       <div id="content">
           <table>
               <tr id="table-header">
                   <td><strong>Programming Language</strong></td>
                   <td><strong>Yeas Experience</strong></td>
               </tr>
               <tr class="table-row">
                   <td>Java</td>
                   <td>1</td>
               </tr>
               <tr class="table-row">
                   <td>C#</td>
                   <td>5</td>
               </tr>
           </table>
           
           <ul>
               <li><span class="hobby">Video Games:</span> I love to game on PC</li>
               <li><span class="hobby">Snowboarding:</span> Tahoe bound every winder</li>
               <li><span class="hobby">School:</span> Can't wait to be done</li>
           </ul>
       </div>
        <!-- This is the footer -->
        <!-- The footer goes inside the body but not always -->
        <footer>
            <hr>
            CST336 Internet Programming. 2020&copy; Thomas <br/>
            <strong>Disclaimer:</strong> The information in this page is fictitious.
            <br/>
            It is used for academic purposes only.
            <figure>
                <img src="img/csumbLogoWhite.png"/>
            </figure>
        </footer>
        <!-- closing footer -->
        
    </body>
    <!-- closing body -->

</html>