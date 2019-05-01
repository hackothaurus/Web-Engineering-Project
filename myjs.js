$(document).ready(function (){
      $("#tab1").click(function(e){
        $("#works").addClass("d-block");
        $("#about").addClass("d-none");
        $("#works").removeClass("d-none");
        $("#about").removeClass("d-block");
        $(this).addClass("active");
        $("#tab2").removeClass("active");
      });

      
      $("#tab2").click(function(e){
        $("#about").addClass("d-block");
        $("#works").addClass("d-none");
        $("#works").removeClass("d-block");
        $("#about").removeClass("d-none");
        $(this).addClass("active")
        $("#tab1").removeClass("active");

      });

      $("#tab2btn").hover(function(e){
        $(this).addClass("bg-dark");
      });

    });