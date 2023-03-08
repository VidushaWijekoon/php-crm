 <?php ob_start();
    function access_denied()
    { ?>
     <div class="abc">
         <h1 class="access">Access Forbidden!</h1>
         <h2 class="ms403">Code 403</h2>
         <h3 class="massage">Sorry You Don't have access to this page</h3>
     </div>

 <?php } ?>
 <style>
     .access {
         font-size: 15vmin;
         margin-bottom: 0;
     }

     .ms403 {
         font-size: 5vmin;
         margin-top: 0;
         margin-bottom: 40px;
     }

     .massage {
         font-size: 2.5vmin;
         margin-top: 0;
         margin-bottom: 40px;
         text-transform: capitalize;
     }

     .abc {
         height: 100vh;
         display: flex;
         flex-direction: column;
         background-color: white;
         align-items: center;
         justify-content: center;

     }
 </style>