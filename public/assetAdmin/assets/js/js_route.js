$(function()
{


var loader = '<div class="d-flex justify-content-between mx-5 mt-5 mb-5"><div class="spinner-border text-success align-self-center ">Loading...</div><div class="spinner-border text-danger align-self-center">Loading...</div><div class="spinner-border text-warning align-self-center  ">Loading...</div><div class="spinner-border text-primary align-self-center  ">Loading...</div></div>';
 
loader = loader+loader;
   /*
  |--------------------------------------------------------------------------
  | MENU DE GESTION DES INTERFACES FONCTIONNELLES CLIENTS
  |--------------------------------------------------------------------------
  |
  | Ici nous gérons les routes du menu
  |
  */

        /*--------- --------------------
            GESTION DES MENU CLIENTS
        --------------------------------*/
       /*Profile*/
         //Infos
          $("#dashClt").click(function(){

            $("#conteneur").load('/dashClt');
          });

      // liste covid
          $("#covid").click(function(){

            $("#conteneur").html(loader);
            $("#conteneur").load('/covid');
          });

      // liste stcd
          $("#stcd").click(function(){
            $("#conteneur").html(loader);

            $("#conteneur").load('/stcd');
          });

      // liste stld
          $("#stld").click(function(){
            $("#conteneur").html(loader);

            $("#conteneur").load('/stld');
          });

      // liste jour
          $("#jour").click(function(){
            $("#conteneur").html(loader);

            $("#conteneur").load('/jour');
          });

      // liste hbdo
          $("#hbdo").click(function(){
            $("#conteneur").html(loader);

            $("#conteneur").load('/hbdo');
          });

      // liste stat
          $("#stat").click(function(){
            $("#conteneur").html(loader);

            $("#conteneur").load('/stat');
          });


      // liste stage
          $("#stage").click(function(){
            $("#conteneur").html(loader);
            
            $("#conteneur").load('/stage');
          });



});

