<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Apple Harvest Festival</title>
  <link rel="stylesheet" type="text/css" href="styles/site1.css"/>
  <script src="scripts/jquery-3.5.1.js" type="text/javascript"></script>
  <script src="scripts/validation.js" type="text/javascript" async></script>
</head>

<body>
  <div id="container">
    <header>
      <nav>
        <ul>
          <li><a href="about.php">About</a></li>
          <li><a href="stands.php">Stands</a></li>
          <li><a href="activities.php">Activities</a></li>
        </ul>
      </nav>
      <h1>Apple Harvest Festival</h1>
      <h2>October 2020</h2>

    </header>

    <div class="page-middle">
      <main>

        <p>Enjoy cider tasting & food pairing events, a farmer showcase featuring Upstate New York 4-H, the First Peoples Festival celebrating our indigenous people of New York State, and cider & pomology master talks.  Take in the regional artist craft fair featuring work by 100+ artists, New York State apple growers & farmers selling crisp delicious apples, fall harvest inspired festival food favorites including tasty cider donuts, live music & family fun entertainment!  Enjoy shopping for fall clothing & gifts inside local shops downtown during your visit! </p>
        <h3><a href="about.php">About</a></h3>
        <img src="images/af-about.jpeg"
          alt="Image of a crowd at applefest"/>
          <!--Source: https://escapemaker.com/category/newsletter/page/3/-->
        <cite> via: <a href="https://escapemaker.com/category/newsletter/page/3/" class="cite">Escape Maker</a></cite>
        <p>
            The Apple Harvest Festival has been around since 1982. Click the links to learn more!
        </p>


        <h3><a href="stands.php">Stands</a></h3>
        <img src="images/applefest-stand.jpg"
          alt="Image of a crowd at applefest"/>
          <!--Source:https://sunspots.cornellsun.com/2017/09/28/ithaca-week-the-little-apple/-->
        <cite>via: <a href="https://sunspots.cornellsun.com/2017/09/28/ithaca-week-the-little-apple//" class="cite">Cornell Sun</a></cite>
        <p>
            There are many stands available during the festival. Visit this section for a description and map!
        </p>

        <h3><a href="activities.php">Activities</a></h3>
        <img src="images/af-activities.jpeg"
          alt="Image of a child playing a game"/>
          <!--Source:https://www.onlyinyourstate.com/new-york/apple-harvest-festival-ny//-->
        <cite>via: <a href="https://www.onlyinyourstate.com/new-york/apple-harvest-festival-ny//" class="cite">Only In Your State</a></cite>
        <p>
            There are many activities to do while visiting the Festival. Visit this page to learn more!
        </p>
      </main>


    <form id="feedback" action="https://www.cs.cornell.edu/courses/cs1300/2020fa/submit.php" method="post" novalidate><span>Let Us Hear Your Feedback!</span>

        <div id="wrapper1">
        <div id="username-feedback" class="hidden feedback">
            *Please Enter Your Name
        </div>
        <label>Name:
        <input id="username" type="text" name="name" required/>
        </label>
        </div>

        <div id="wrapper2">
        <div id="useremail-feedback" class="hidden feedback">
            *Please Enter Your Email
        </div>
        <label>Email:
        <input id="useremail" type="email" name="email" required/>
        </label>
        </div>

        <div id="visit-date">
        <div id="radio-feedback" class="hidden feedback">
            *Please Select A Day
        </div>

        Visit Date:

        <label class="block container">
        <input type="radio" name="visit-date" value="Friday" id="friday"/>
        Friday
      </label>

      <label class="block container">
        <input type="radio" name="visit-date" value="Saturday" id="saturday"/>
        Saturday
      </label>

      <label class="block container">
        <input type="radio" name="visit-date" value="Sunday" id="sunday"/>
        Sunday
      </label>
        </div>

        <div id="wrapper4">

        <label>Issues:
        <textarea id="textbox1" name="issues">
        </textarea>
        </label>
        </div>

        <div id="wrapper5">

        <label>Reccomendations:
        <textarea id="reccomendations"  name="reccomendations">

        </textarea>
        </label>
        </div>

        <div id="submit-feedback" class="hidden feedback">
            *Please Make Sure There Are No Errors
        </div>

        <input type="submit" class="submit" value="Submit"/>

    </form>

    </div>
  </div>
</body>
</html>
