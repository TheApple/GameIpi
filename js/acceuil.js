
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

    $("#Rocket2").mouseleave(function(){
        $("#AudioRocket2").currentTime = 0;
        $("#AudioRocket2")[0].pause();
    });

    $("#Rocket3").mouseleave(function(){
        $("#AudioRocket3").currentTime = 0;
        $("#AudioRocket3")[0].pause();
    });

    $("#Rocket4").mouseleave(function(){
        $("#AudioRocket4").currentTime = 0;
        $("#AudioRocket4")[0].pause();
    });

});

