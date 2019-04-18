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




});


$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
});

$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});

//if click on a("popover") display:none von tooltip//



$(document).ready(function(){
    $dts = $('.nav-tabs .nav-item')
    $('.nav-tabs').on('click', '.nav-item', function(){
         $dts.removeClass('active');
         $(this).addClass('active'); 
    })
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
  



/*Drag-and-Drop*/

function ziehen(ev) {
    ev.dataTransfer.setData('text', ev.target.id);
}
 
function ablegenErlauben(ev) {
    ev.preventDefault();
}
 
function ablegen(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData('text');
    ev.target.appendChild(document.getElementById(data));
}



$(document).ready(function () {
    $(".btn-sideoption").click(function () {
        $('#sideoption').toggle();
        $("#mainoption" + " .icon-left-open, .icon-right-open").toggleClass("icon-left-open icon-right-open");

        if ($(".mainoption").hasClass( "temp-open" )==false) {
            $(".mainoption").css("width", "100%").addClass( "temp-open");
        } else {
            $(".mainoption").css("width", "80%").removeClass("temp-open") ;
        };
    });
});



$(document).ready(function () {
    $(".input-group > input").focus(function (e) {
        $("#search-input").css("border", "1px solid #99E0FD");
        $("#search-input").css("border-right", "none");
        $(".input-group-append").css("border", "1px solid #99E0FD");
        $(".input-group-append").css("border-left", "none");
        $(".btn-search:after").css("color", "#99E0FD");


    }).blur(function (e) {
        $("#search-input").css("border", "1px solid #ced4da");
        $("#search-input").css("border-right", "none");
        $(".input-group-append").css("border", "1px solid #ced4da");
        $(".input-group-append").css("border-left", "none");
        $(".btn-search:after").css("color", "#A7ADB1");
    });
});


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

        idBlueOld = idBlueNew;
        console.log("neueAlte " + idBlueOld);

    } else {

        console.log("Neue Box öffnen, alte Box schließen!");

        $(idBlueOld + " .blue-icon-lg, .blue-icon-sm").toggleClass("blue-icon-lg blue-icon-sm");
        $(idBlueOld + " .bluebox-lg, .bluebox-sm").toggleClass("bluebox-lg bluebox-sm");
        $(idBlueOld + " .box-content").css("display", "none");
        $(idBlueOld + " .bluebox-label>a").css("display", "block");
        $(idBlueOld + " .icon-plus, .icon-cancel").toggleClass("icon-plus icon-cancel");


        $(idBlueNew + " .blue-icon-lg, .blue-icon-sm").toggleClass("blue-icon-lg blue-icon-sm");
        $(idBlueNew + " .bluebox-lg, .bluebox-sm").toggleClass("bluebox-lg bluebox-sm");
        $(idBlueNew + " .box-content").toggle();
        $(idBlueNew + " .bluebox-label>a").toggle();
        $(idBlueNew + " .icon-plus, .icon-cancel").toggleClass("icon-plus icon-cancel");

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
            $(".bluebox").css("height", "400px")
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
            $(".arrow").css("left","15%");

        } else if ($("#blue1").css("display") == "block"){
            $("#bc1.box-content-full").css("display", "none");
            
        } else {
            $("#bc1.box-content-full").css("display", "block");
            $("#blue1").css("display", "block");
            $("#blue2").css("display", "none");
            $("#blue3").css("display", "none");
            $(".arrow").css("left","15%");
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
            $(".arrow").css("left","85%");

        } else if ($("#blue3").css("display") == "block"){
            $("#bc1.box-content-full").css("display", "none");
           
        } else {
            $("#bc1.box-content-full").css("display", "block");
            $("#blue3").css("display", "block");
            $("#blue2").css("display", "none");
            $("#blue1").css("display", "none");
            $(".arrow").css("left","85%");
        };

    } else if (idBlueMobile == "#curriculum"){

        $("#bc1.box-content-full").css("display", "none");

        if($("#bc2.box-content-full").css("display") == "none"){
            $("#bc2.box-content-full").css("display", "block");
            $("#blue4").css("display", "block");
            $("#blue5").css("display", "none");
            $("#blue6").css("display", "none");
            $(".arrow").css("left","15%");

        } else if ($("#blue4").css("display") == "block"){
            $("#bc2.box-content-full").css("display", "none");

        } else {
            $("#bc2.box-content-full").css("display", "block");
            $("#blue4").css("display", "block");
            $("#blue5").css("display", "none");
            $("#blue6").css("display", "none");
            $(".arrow").css("left","15%");
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


