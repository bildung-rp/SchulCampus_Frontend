$(document).ready(function () {
    if ($(window).width() > 975) {
        $("#teaser section").removeClass("carousel-item"); 
        $(".box-content-full").css("display", "none");
    } else {
        $("#teaser section").addClass("carousel-item");
    }
});

$(document).ready(function () {
    $(window).resize(function () {
        if ($(window).width() > 975) {
            $("#teaser section").removeClass("carousel-item");
            $(".box-content-full").css("display", "none");
        } else {
            $("#teaser section").addClass("carousel-item");
        };
    })


 //Volle Höhe von Sidebar
    var newHeight = $("html").height() + "px";
    $(".sidebar").css("min-height", newHeight); 
  

    $(".btn-sidebar").click(function () {
        $('#sidebar').toggle();
        $(".btn-sidebar" + " .icon-indent-left, .icon-indent-right").toggleClass("icon-indent-left icon-indent-right");
    });    

    


});


$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
});

$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});







//Dropdown-Menüs im Header in mobiler Ansicht

$(document).ready(function (){
    
    $("#topnav.dropdown .btn").click(function (e) {
        if ($(window).width() < 992) {

        $('#topnav-mobile.dropdown-menu-full .dropdown-menu').toggle();
        } else {        
            $("#topnav-mobile.dropdown-menu-full").css("display", "none");    
        };
    })

    $('#topnav.dropdown .btn').focusout(function (e) {
        $('#topnav-mobile.dropdown-menu-full .dropdown-menu').hide();
    });


    $("#usernav.dropdown .btn").click(function (e) {
        if ($(window).width() < 992) {

        $('#usernav-mobile.dropdown-menu-full .dropdown-menu').toggle();
        } else {        
            $("#usernav-mobile.dropdown-menu-full").css("display", "none");    
        };
    })

    $('#usernav.dropdown .btn').focusout(function (e) {
        $('#usernav-mobile.dropdown-menu-full .dropdown-menu').hide();
    });

    //ToDo - RESIZE-Problem

});


//Accordion Icon-Wechsel
$(document).ready(function () {
    $(".sidebar .btn-link").click(function () {
        $(".sidebar .card-header").addClass("active");
        if ($(".sidebar .card-header").hasClass("active")==true){
            $(".sidebar .card-header").removeClass("active");
        } else {
            $(".sidebar .card-header").addClass("active");
        }
    });
});





function openTab(tabName, el, color) {

    // Hide all elements with class="tabcontent" by default */
    
    var i, tabcontent, 
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
  
    // Show the specific tab content
    document.getElementById(tabName).style.display = "flex";
  
    // Add the specific color to the button used to open the tab content
    el.style.backgroundColor = color;
}
  



//BlueBox-Funktionen
var idBlueOld = 0;
$(document).ready(function () {
    $(".bluebox .btn-blue").click(function () {
        var blueBoxSectionId = $(this).closest("section").prop("id");
        toggleBlueBox(blueBoxSectionId);
    });
});

function toggleBlueBox(sectionId) {

    var idBlueNew = "#" + sectionId;
    console.log("neu " + idBlueNew);
    console.log("alt " + idBlueOld);

    if (idBlueOld == 0 || idBlueOld == idBlueNew) {

        console.log("Gleiche Box!");

        $(idBlueNew + " .blue-icon-lg, .blue-icon-sm").toggleClass("blue-icon-lg blue-icon-sm");
        $(idBlueNew + " .bluebox-lg, .bluebox-sm").toggleClass("bluebox-lg bluebox-sm");
        $(idBlueNew + " .box-content").toggle();
        $(idBlueNew + " .bluebox-label>a").toggle();
        $(idBlueNew + " .icon-plus, .icon-cancel").toggleClass("icon-plus icon-cancel");
        $(idBlueNew + " .bluebox section").css("height", "260px");  //wegen IE

        idBlueOld = idBlueNew;
        console.log("neueAlte " + idBlueOld);

    } else {

        console.log("Neue Box öffnen, alte Box schließen!");

        $(idBlueOld + " .blue-icon-lg, .blue-icon-sm").toggleClass("blue-icon-lg blue-icon-sm");
        $(idBlueOld + " .bluebox-lg, .bluebox-sm").toggleClass("bluebox-lg bluebox-sm");
        $(idBlueOld + " .box-content").css("display", "none");
        $(idBlueOld + " .bluebox-label>a").css("display", "block");
        $(idBlueOld + " .icon-plus, .icon-cancel").toggleClass("icon-plus icon-cancel");
        $(idBlueOld + " .bluebox section").css("height", "9.37rem");


        $(idBlueNew + " .blue-icon-lg, .blue-icon-sm").toggleClass("blue-icon-lg blue-icon-sm");
        $(idBlueNew + " .bluebox-lg, .bluebox-sm").toggleClass("bluebox-lg bluebox-sm");
        $(idBlueNew + " .box-content").toggle();
        $(idBlueNew + " .bluebox-label>a").toggle();
        $(idBlueNew + " .icon-plus, .icon-cancel").toggleClass("icon-plus icon-cancel");
        $(idBlueNew + " .bluebox section").css("height", "260px");

        idBlueOld = idBlueNew;
        console.log("neueAlte " + idBlueOld);
    }

};


//Bluebox-Mobile

var idBlueMobileOld = 0;
$(document).ready(function () {
    $(".bluebox section").click(function () {
        var blueSectionId = $(this).closest("section").prop("id");
        toggleBlueMobile(blueSectionId);
        
        if ($("#bc2.box-content-full").css("display") == "block"){
            $(".bluebox").css("height", "520px");
        } else if ($("#bc1.box-content-full").css("display") == "block") {
            $(".bluebox").css("height", "510px")
        } else {
            $(".bluebox").css("height", "500px")
        }
    });
});

function toggleBlueMobile(tempId) {

    var idBlueMobile = "#" + tempId;
    
    if ($(window).width() < 975) {

    if (idBlueMobile == "#meineDateien") {
        
        $("#bc2.box-content-full").css("display", "none");

        if($("#bc1.box-content-full").css("display") == "none"){
            $("#bc1.box-content-full").css("display", "block");
            $("#blue1").css("display", "block");
            $("#blue2").css("display", "none");
            $("#blue3").css("display", "none");
            $(".arrowblue").css("left","15%");

        } else if ($("#blue1").css("display") == "block"){
            $("#bc1.box-content-full").css("display", "none");
            
        } else {
            $("#bc1.box-content-full").css("display", "block");
            $("#blue1").css("display", "block");
            $("#blue2").css("display", "none");
            $("#blue3").css("display", "none");
            $(".arrowblue").css("left","15%");
        };

    } else if (idBlueMobile == "#media"){
        $("#bc1.box-content-full").css("display", "none");
        $("#bc2.box-content-full").css("display", "none");

    } else if (idBlueMobile == "#moodle"){
        
        $("#bc2.box-content-full").css("display", "none");

        if($("#bc1.box-content-full").css("display") == "none"){
            $("#bc1.box-content-full").css("display", "block");
            $("#blue3").css("display", "block");
            $("#blue2").css("display", "none");
            $("#blue1").css("display", "none");
            $(".arrowblue").css("left","85%");

        } else if ($("#blue3").css("display") == "block"){
            $("#bc1.box-content-full").css("display", "none");
           
        } else {
            $("#bc1.box-content-full").css("display", "block");
            $("#blue3").css("display", "block");
            $("#blue2").css("display", "none");
            $("#blue1").css("display", "none");
            $(".arrowblue").css("left","85%");
        };

    } else if (idBlueMobile == "#curriculum"){

        $("#bc1.box-content-full").css("display", "none");

        if($("#bc2.box-content-full").css("display") == "none"){
            $("#bc2.box-content-full").css("display", "block");
            $("#blue4").css("display", "block");
            $("#blue5").css("display", "none");
            $("#blue6").css("display", "none");
            $(".arrowblue").css("left","15%");

        } else if ($("#blue4").css("display") == "block"){
            $("#bc2.box-content-full").css("display", "none");

        } else {
            $("#bc2.box-content-full").css("display", "block");
            $("#blue4").css("display", "block");
            $("#blue5").css("display", "none");
            $("#blue6").css("display", "none");
            $(".arrowblue").css("left","15%");
        };

    }   else if (idBlueMobile == "#lehrplaene"){
        $("#bc1.box-content-full").css("display", "none");
        $("#bc2.box-content-full").css("display", "none");

    } else {    //Infoportal
        $("#bc1.box-content-full").css("display", "none");
        $("#bc2.box-content-full").css("display", "none");
    } 

    } else {
        $("#bc1.box-content-full").css("display", "none");
        $("#bc2.box-content-full").css("display", "none");
    }

};


