<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Team 1418</title>
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/png" href="/favicon.png">
    <link rel="stylesheet" href="/css/style.css">
    <style>
        p {
            text-align: center;
        }
    </style>
</head>

<body>

<?php
  include_once("../header.php");
  $pagename = "contact";
?>

  <article>
      <img src="/img/numbers.jpg">
      <h1>Get in touch!</h1>

      <p>There are several ways you can contact team 1418!</p>

      <table>
          <tbody>
              <tr>
                  <td>
                      <h5>Emails</h5>
                      <ul>
                          <!-- Emails MUST use ATSYMBOL and PERIOD. This protects against address harvesting. @s and .s are inserted with JS, see js/scripts.js -->
                          <li><a href="mailto:robotics1418ATSYMBOLgmailPERIODcom">Team email</a></li>
                          <li>Mentor <a href="mailto:balloujATSYMBOLfccpsPERIODorg">John Ballou</a></li>
                          <li>Mentor <a href="mailto:cricket.mooreATSYMBOLverizonPERIODnet">Cricket Moore</a></li>
                          <li>Mentor <a href="mailto:dbrobstATSYMBOLusfirstPERIODorg">Don Brobst</a></li>
                      </ul>
                  </td>
                  <td>
                      <h5>Social</h5>
                      <ul>
                          <li><a href="https://facebook.com/robotics1418">Facebook</a></li>
                          <li><a href="https://twitter.com/Robotics1418">Twitter</a></li>
                          <li><a href="https://github.com/frc1418">GitHub</a></li>
                          <li><a href="https://www.youtube.com/user/Robotics1418">YouTube</a></li>
                      </ul>
                  </td>
                  <td>
                      <h5>Mail</h5>
                      <p>George Mason High School
                          <br>7124 Leesburg Pike
                          <br>Falls Church, VA 22043</p>
                  </td>
              </tr>
          </tbody>
      </table>
  </article>
<?php include_once("../footer.php"); ?>
</body>
</html>
