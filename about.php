<!DOCTYPE html>
<html lang="en">

<head>

  <?php
  require_once "helpers/help_css.php";
  ?>

  <title>Bloop | </title>


</head>




<body>


  <?php
  require_once "components/cp_main.php";
  ?>


  <script>
    function openPage(pageName, elmnt) {
      // Hide all elements with class="tabcontent" by default */
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }

      // Remove todos os font weight's para apenas ficar selecionado o atual
      tablinks = document.getElementsByClassName("tablink");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.fontWeight = "";
      }

      // Show the specific tab content
      document.getElementById(pageName).style.display = "block";

      // Por a bold a tab em que estamos
      elmnt.style.fontWeight = "bold";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
  </script>
</body>

</html>