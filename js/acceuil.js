
$(document).ready(function(){

    $("#Rocket1").on("mouseenter",function(){
        $("#AudioRocket1")[0].play();
    });
    $("#Rocket2").on("mouseenter",function(){
        $("#AudioRocket2")[0].play();
    });
    $("#Rocket3").on("mouseenter",function(){
        $("#AudioRocket3")[0].play();
    });
    $("#Rocket4").on("mouseenter",function(){
        $("#AudioRocket4")[0].play();
    });

    $("#Rocket1").mouseleave(function(){
        $("#AudioRocket1").currentTime = 0;
        $("#AudioRocket1")[0].pause();
    });

});

