<!DOCTYPE html>
<html lang="en">

<head>

  <?php
  include_once "helpers/help_meta.php";
  require_once "helpers/help_css.php";
  ?>

  <title>Bloop | </title>


</head>




<body>








  <?php
  require_once "components/cp_main.php";
  ?>


  <script>
    //script para mudar de tabcontent na página de eventos (Home - Pessoas - Tarefas - Chat)
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





<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>




  
</body>

</html>