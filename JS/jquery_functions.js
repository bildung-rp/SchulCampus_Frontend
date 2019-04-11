$(document).ready(function () {
    if ($(window).width() > 993) {
        $("#teaser section").removeClass("carousel-item"); 
    } else {
        $("#teaser section").addClass("carousel-item");
    }
});

$(document).ready(function () {
    $(window).resize(function () {
        if ($(window).width() > 993) {
            $("#teaser section").removeClass("carousel-item");
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

    $("#topnav.dropdown .btn").click(function () {
        $('#topnav-mobile.dropdown-menu-full .dropdown-menu').toggle();

        if ($("#topnav-mobile.dropdown-menu-full").css( "display","block")==true) {
            $("#topnav-mobile.dropdown-menu-fullu").css("display", "none");
        } else {
            ($("#topnav-mobile.dropdown-menu-full").css( "display","block")) ;
        };
    });

    //#usernav TODO

  
});




function openTab(tabName, elmnt, color) {

    // Hide all elements with class="tabcontent" by default */
    
    var i, tabcontent, 
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
  
    // Show the specific tab content
    document.getElementById(tabName).style.display = "flex";
  
    // Add the specific color to the button used to open the tab content
    elmnt.style.backgroundColor = color;
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
    $(".btn-blue").click(function () {
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
        $(idBlueNew + " .bluebox-label div").toggle();
        $(idBlueNew + " .icon-plus, .icon-cancel").toggleClass("icon-plus icon-cancel");

        if ($(idBlueNew + " .bluebox-label>a").css("font-size") === "19px") {
            $(idBlueNew + " .bluebox-label>a").css("font-size", "24px");
        } else {
            $(idBlueNew + " .bluebox-label>a").css("font-size", "19px");
        };

        idBlueOld = idBlueNew;
        console.log("neueAlte " + idBlueOld);

    } else {

        console.log("Neue Box öffnen, alte Box schließen!");

        $(idBlueOld + " .blue-icon-lg, .blue-icon-sm").toggleClass("blue-icon-lg blue-icon-sm");
        $(idBlueOld + " .bluebox-lg, .bluebox-sm").toggleClass("bluebox-lg bluebox-sm");
        $(idBlueOld + " .icon-plus, .icon-cancel").toggleClass("icon-plus icon-cancel");

        $(idBlueOld + " .bluebox-label div").css("display", "none");
        $(idBlueOld + " .bluebox-label").css("padding-left", "20px");
        $(idBlueOld + " .bluebox-label>a").css("font-size", "24px");


        $(idBlueNew + " .blue-icon-lg, .blue-icon-sm").toggleClass("blue-icon-lg blue-icon-sm");
        $(idBlueNew + " .bluebox-lg, .bluebox-sm").toggleClass("bluebox-lg bluebox-sm");
        $(idBlueNew + " .bluebox-label div").toggle();
        $(idBlueNew + " .icon-plus, .icon-cancel").toggleClass("icon-plus icon-cancel");

        if ($(idBlueNew + " .bluebox-label>a").css("font-size") === "19px") {
            $(idBlueNew + " .bluebox-label>a").css("font-size", "24px");
        } else {
            $(idBlueNew + " .bluebox-label>a").css("font-size", "19px");
        };

        idBlueOld = idBlueNew;
        console.log("neueAlte " + idBlueOld);

    }

};


