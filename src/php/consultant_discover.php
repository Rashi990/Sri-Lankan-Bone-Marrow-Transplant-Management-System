<?php
session_start();
if($_SESSION['userlevel']=1)
{
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HLA News</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/consultant_disease.css?v=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body>
    <div class="hero">
      <div class="top">
        <div class="empty">
          <p>HLA News</p>
        </div>
        <div class="profile">
          <abbr title="Notifications">
            <a href="../../public/html/consultant_notifications.html">
              <div class="icon">
                <span class="material-icons">
                  notifications
                </span>
              </div>
            </a>
          </abbr>
          <abbr title="Messages">
            <a href="../../public/html/consultant_messages.html">
              <div class="icon">
                <span class="material-icons">
                  chat_bubble
                </span>
              </div>
            </a>
          </abbr>
          <abbr title="Welcome!">
            <div class="greet">
              <h3 class="greet-text">Welcome!, Dr.<?php echo $_SESSION['username'];?></h3>
            </div>
          </abbr>
          <abbr title="Profile">
            <a href="../../public/html/consultant_profile.html">
              <div class="pp">
                <span class="material-icons">
                  account_circle
                </span>
              </div>
            </a>
          </abbr>
        </div>
      </div>
      <div class="middle">
      </div>
      <div class="bottom">
        <div class="bottom-input">
          <span>© 2022 SLBMTMS. All rights reserved.</span>
        </div>
        <div class="bottom-input">
          <span>Terms and conditions</span>
        </div>
      </div>
    </div>
  </body>
</html>

<?php
}
?>
