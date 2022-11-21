<?php
session_start();
if(!isset($_SESSION['correo'])){
echo ' <script> alert("vuelve a inicar sesion");';
header("location: ../login.html");

die(); 
}
?>

<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CookBook</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./assets/css/tailwind.output.css" />

    <link
      href="../css/index.css"
      rel="stylesheet"
    />
    

    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src="./assets/js/init-alpine.js"></script>
  </head>
  <link rel="icon" href="../images/cookbook.png">
  <body>
    <div
      class="flex h-screen bg-gray-50 dark:bg-gray-900"
      :class="{ 'overflow-hidden': isSideMenuOpen}"
    >
    
      <!-- Desktop sidebar -->
      <?php
        require_once('menu_lateral.php');
                ?>
      <!-- Mobile sidebar -->

      <!-- Backdrop -->
      
      <div class="flex flex-col flex-1">
      <?php
        require_once('menu.php');
                ?>
                
        <main class="h-full pb-16 overflow-y-auto"> <hr>
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-3 text-2xl font-semibold text-gray-1000 dark:text-gray-200">
              <div class="card text-bg-secondary mb-3" style="max-width: 8rem;">  Notificaciones  </h2>
            <!-- Notificaciones -->
            <hr class="border-radius: 10px 0px 39px 22px;">    
           <hr class="border-top-right-radius: 20px;">
            <br>

<div  class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
          <div class="foto-perfil p-3 mr-4 text-orange-500 rounded-full dark:text-orange-100 dark:bg-orange-500">
            
          <svg class="w-3 h-3"> </svg>
          <img src="../images/memo.jpg">
                </div>
               
                  
              <center><h3 class="mb-2 text-sm font-medium text-gray-1000 dark:text-gray-200"></center>  
                    Luis Brayan a reaccionado a tu receta ❤ </h3>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
     <span class="d-block p-2 text-bg-primary"></span>
<span class="d-block p-2 text-bg-dark"></span>


            
          </div>
        </main>
      </div>
    </div>
  </body>
</html>
