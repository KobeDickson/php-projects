<?php

$title = 'Playful Plants';

$db = open_sqlite_db('db/db_filename.sqlite')

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" type="text/css" href="/public/styles/site.css"/>
</head>

<body>
  <main>

  <?php include("includes/header.php") ?>

  <section>
    <h2> Welcome to Our Catalogue!
    <div class="heady">
    Healthy, adequately nourished and emotionally secure young children, if they have the opportunity, will spend most of their waking hours actively involved in play, and this is an essential component of their development.
The way children play and what they play with are determined quite directly by the environment.
Bartlett et al, 1999
</br>
Time children spend outdoors and in nature has declined dramatically within the last generation outdoor childhood
Source: Karsten, 2006
</br>
Children spending significantly less time outdoors than parents / previous generations
</br>
Plants can significantly increase the play opportunities available to children in many different types of outdoor settings including parks, playgrounds, conservation areas, public gardens & plazas, etc.

Plants & natural features can support children’s play & learning, promote diverse types of nature play & engagement, and be combined to create unique nature play experiences

</div>
 </h2>



  </section>


  <?php

  $name = NULL;
  $email = NULL;
  $plant = NULL;

  $fb_name = 'hidden';
  $fb_email = 'hidden';
  $fb_plant = 'hidden';

  $name_sticky = '';
  $email_sticky = '';
  $plant_sticky = '';

    if (isset($_POST['submit_rec'])){
      $name = trim($_POST['cname']);
      $email = trim($_POST['email']);
      $plant = trim($_POST['plant']);

    $form_valid = True;

    if (empty($name)) {
      $form_valid = False;
      $fb_name = '';
    }

    if (empty($email)) {
      $form_valid = False;
      $fb_email = '';
    }

    if (empty($plant)) {
      $form_valid = False;
      $fb_plant = '';
    }

    if ($form_valid) {

    }
    else {
      $name_sticky = $name;
      $email_sticky = $email;
      $plant_sticky = $plant;
    }

    }
  ?>
  <div class="main">
    <div class="child">
        <div class="content">

          <?php

          if ($form_valid) {
            echo '<p><strong> Your recommendation for '. htmlspecialchars($plant) .' has been received!</strong></p>';
          }

          ?>

              <p>Want to see a new item added to the catalog?</p>
              <p>Fill out this form:</p>
              <form class = "insert" method = "post" novalidate>

              <div class="form">

              <p class = "feedback <?php echo $fb_name; ?>"> Please provide your name. </p>
               <label for="cname">Name:</label>
               <input type="text" id="cname" name="cname" value = "<?php echo htmlspecialchars($name_sticky); ?>"/><br>
              </div>

              <div class="form">

                <p class = "feedback <?php echo $fb_email;?>"> Please provide your email. </p>
                <label for="email">Email:</label>
               <input type="text" id="email" name="email" value = "<?php echo htmlspecialchars($email_sticky); ?>"/>
              </div>

              <div class="form">

                <p class = "feedback <?php echo $fb_plant;?>"> Please provide an interesting plant. </p>
                <label for="plant">Plant:</label>
                <input type="text" id="plant" name="plant" value = "<?php echo htmlspecialchars($plant_sticky); ?>"/>


              <div class="submit">
                <button type="submit" name="submit_rec"value="Submit">Submit</button>
              </div>
              </div>

              </form>

         </div>
      </div>


    <div class="child2">

    <?php


      $sql_base_query = 'SELECT * FROM plants';

      $sql_where = '';
      $sql_sort = ' ORDER BY name ASC;';
      $sql_filter = array();


      $visual_filter = (bool)($_GET['visual_interest'] ?? NULL);
      $physical_filter = (bool)($_GET['physical_play_presence'] ?? NULL);
      $imagine_filter = (bool)($_GET['imaginative_play_presence'] ?? NULL);

      $sticky_visual_filter = ($visual_filter ? 'checked' : '');
      $sticky_physical_filter = ($physical_filter ? 'checked' : '');
      $sticky_imagine_filter = ($imagine_filter ? 'checked' : '');

      if ($physical_filter) {
        array_push($sql_filter, "(visual_interest = 'Yes')");
      }

      if ($physical_filter) {
        array_push($sql_filter, "(physical_play_presence = 'Yes')");
      }

      if ($imagine_filter) {
        array_push($sql_filter, "(imaginative_play_presence = 'Yes')");
      }

      if (count($sql_filter) > 0){
        $sql_where = ' Where ' . implode(' AND ', $sql_filter);
      }

      $sql_main_query = $sql_base_query . $sql_where . $sql_sort;

      $records = exec_sql_query($db, $sql_main_query)->fetchAll();

    if (count($records)==0) { ?>
    <p>No plant information available</p>
    <?php
    }
    ?>

    <form class = "filter" method="get" novalidate>
      <h3> Filter by Availability </h4>

      </br>

      <label>
        <input type = "checkbox" name = "visual_interest" value= "1" <?php echo $sticky_visual_filter; ?> />
        Visual Interest
      </label>

      <lablel>
        <input type = "checkbox" name = "physical_play_presence" value = "1" <?php echo $sticky_physical_filter; ?> />
        Physical Play
      </lablel>

      <label>
        <input type = "checkbox" name= "imaginative_play_presence" value ="1" <?php echo $sticky_imagine_filter; ?> />
        Imaginative Play
      </label>

      <button type ="submit">Go</button>


    </form>

      <table>
        <tr>
          <th>Name </th>
          <th>Species </th>
          <th>Plant ID</th>
          <th>Edible?</th>
          <th>Visually Interesting?</th>
          <th>Description</th>
          <th>Physical Play?</th>
          <th>Description</th>
          <th>Imaginative Play?</th>

        </tr>

        <?php

        foreach ($records as $record) { ?>
          <tr>
            <td><?php echo htmlspecialchars($record['name']); ?></td>

            <td><?php echo htmlspecialchars($record['species']); ?></td>

            <td><?php echo htmlspecialchars($record['plantid']); ?></td>

            <td><?php echo htmlspecialchars($record['edible']); ?></td>

            <td><?php echo htmlspecialchars($record['visual_interest']); ?></td>

            <td><?php echo htmlspecialchars($record['vi_description']); ?></td>

            <td><?php echo htmlspecialchars($record['physical_play_presence']); ?></td>

            <td><?php echo htmlspecialchars($record['pp_description']); ?></td>

            <td><?php echo htmlspecialchars($record['imaginative_play_presence']); ?></td>

          </tr>
        <?php }
        ?>
      </table>
    </div>
  </div>
</main>
</body>

</html>
