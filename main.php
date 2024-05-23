<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>TAIFF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">   
     <link rel="stylesheet" href="style3.css">
</head>
<body>
<header>
    <nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
      <img src="img/logo-taiff.png" alt="Logo">
      <h1><span>Aula 1</span></h1>
    <form class="d-flex">
      <input class="input-search" type="search" placeholder="Search" aria-label="Search">
      <button class="search-btn" type="submit">
          <img src="img/search_FILL0_wght400_GRAD0_opsz24.png" alt="Search">
      </button>
    </form>
      <div class="dropdown">
          <button onclick="myFunction()" class="dropbtn">
              <img src="img/trophy_FILL0_wght400_GRAD0_opsz24.png" alt="Trophy">
          </button>
          <div id="myDropdown" class="dropdown-content">
              <h1>SEU PROGRESSO:</h1>
          </div>
          <script> 
              function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
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
}</script>
              
          
      </div>
      <a href="sair.php"><button class="sair">Sair</button></a>
  </div>
</nav>
</header>
    <main>
        <section> <!--LOCAL EM QUE O VIDEO E O OS COMENTARIOS IRAO FICAR -->
        <div class="main-videbox">
            <div class="left-box">
                <div class="video-box">
                    <iframe width="796" height="315" src="https://www.youtube.com/embed/6r7SYxEjkfM?si=Jn-6e3e8oqC8ugyK" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                
        </div>
      </section>
 
       <div class="right-box">
           <div class="tab">
               
               <div class="tab-itens">
              <div class="tab-title">
               <h1>Aulas</h1>
               </div>
                    <a href="#">Aula 1</a>
                    <a href="#">Aula 1</a>
                    <a href="#">Aula 1</a>
                    <a href="#">Aula 1</a>
                   <a href="#">Aula 1</a>
                   <a href="#">Aula 1</a>
                   <a href="#">Aula 1</a>
                   <a href="#">Aula 1</a>
                   <a href="#">Aula 1</a>
                   <a href="#">Aula 1</a>
                   <a href="#">Aula 1</a>
               </div>
           </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>