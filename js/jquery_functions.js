$(document).ready(function () {

    update();

    $(window).resize(function () {

        update();
        

        if ($(window).width() > 975) {
            
            
        }


    });



    var cardheight = 0



    $('select').selectpicker();

    
    

    function update() {

        //-----------Carousel----------//
    
        if ($(window).width() > 975) {
    
            $("#teaser section").removeClass("carousel-item");
            $(".box-content-full").css("display", "none");
        } else {
            $("#teaser section").addClass("carousel-item");
        };

    
        //-----------Tooltip und Popover aktivieren--------//
    
        $('[data-toggle="tooltip"]').tooltip();
        $('[data-toggle="popover"]').popover();
    
    
    
        //------Status Feld ausblenden-------//
        $(".status-change").css("display", "none");
    
    
    
        //-------------Scrolling Up-Button-------//
        $(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $('.btn-up').fadeIn();
                } else {
                    $('.btn-up').fadeOut();
                }
            });
    
            $('.btn-up').click(function () {
                $('body,html').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });
        });
    
        //---------Sidebar-Toggle------//
    
        sidebarView()
        countMediaElements()
    

        
        


        

    };


    //---------------Select-Felder Bezeichnungen festlegen-------//
    $(document).ready(function(){
        //$('.filter-option-inner-inner').html('ausgewählen'); //
        $('.actions-btn.bs-select-all').html('alle'); 
        $('.actions-btn.bs-deselect-all').html('entfernen'); 
    });


    //------------Hover-Effekt - Focus MegaMenü------//
    $().ready(function(){
        $(".megamenu").hover(function(){
            $(this).closest(".megamenu-li").css("background-color", "#009cee");
            
        },
            function(){$(this).closest(".megamenu-li").css("background-color", "transparent");});
    });

    $().ready(function(){
        $(".megamenu").focus(function(){
            $(this).closest(".megamenu-li").css("background-color", "#009cee");
            
        },
            function(){$(this).closest(".megamenu-li").css("background-color", "transparent");});
    });
    
	

    //-----------Höhe Inhalt Bluebox-------------//
	//ToDo





    //------------Sidebar Ein-und Ausklappen------//
    //---Veränderung anhand bei Bildschirmbreite---//
    //---Ist die Breite größer als 992 soll die Sidebar aufgeklappt 300px sein, sonst zugeklappt 70px---//


    function sidebarView() {

        if ($(window).width() < 992) {

            $('.sidebar').css("min-width", "70px");
            $(".sidebar .dropdown-toggle").addClass("special");
            $(".sidebar .card-header").css("padding", "20px 0.6rem 0 0.6rem");
            $(".sidebar .card-body").css("display", "none");
            $(".sidebar span").css("display", "none");
            $(".sidebar .new .btn").css("margin-left", "-18px");

        } else {
            $(".sidebar").css("min-width", "300px");
            $('.sidebar').css("display", "block");
            $(".sidebar .card-header").css("padding", "20px 1.25rem 5px 1.25rem");
            $(".sidebar .card-body").css("display", "block");
            $(".sidebar span").css("display", "block");
            $(".dropdown-toggle").removeClass("special");
        }
        
    }


    //---Veränderung durch Klicken---//
    //---Ist die Sidebar zugeklappt, geht sie auf, ist die Sidebar aufgeklappt geht sie zu---//


    $(".btn-sidebar").click(function () { 
        
            if($(".sidebar").css("min-width") == "300px") {

                $('.sidebar').css("min-width", "70px");
                $('.sidebar').css("display", "block");
                $(".sidebar .dropdown-toggle").addClass("special");
                $(".sidebar .card-header").css("padding", "20px 0.6rem 0 0.6rem");
                $(".sidebar .card-body").css("display", "none");
                $(".sidebar span").css("display", "none");
                $(".sidebar .new .btn").css("margin-left", "-18px");

                
            } else {
                $('.sidebar').css("min-width", "300px");
                $('.sidebar').css("display", "block");
                $(".sidebar .card-header").css("padding", "20px 1.25rem 5px 1.25rem");
                $(".sidebar .card-body").css("display", "block");
                $(".sidebar span").css("display", "block");
                $(".dropdown-toggle").removeClass("special");
  

        }

    });


    //-------Zusatz: Wenn man auf eingeklappete Sidebar klickt, geht dises auch komplett auf---//
    $(".sidebar").click(function () {
        
            console.log("habe auf sidebar geklickt")
            if($(".sidebar").css("min-width") == "70px") {

                console.log("habe auf sidebar geklickt und sidebar ist 70 oder weg")

                $('.sidebar').css("min-width", "300px");

                $(".sidebar .card-header").css("padding", "20px 1.25rem 5px 1.25rem");
                $(".sidebar .card-body").css("display", "block");
                $(".sidebar span").css("display", "block");
            }
    });



    $(".btn-sidebar").click(function () {
        countMediaElements();
    });


 

    //--------Header Dropdown--------//
    $("#topnav.dropdown .btn").click(function (e) {
        
        if($("#usernav-mobile .dropdown-menu").css("display") == "block") {
            $("#usernav-mobile .dropdown-menu").css("display", "none");
        }
        
        if ($(window).width() < 992) {

            $('#topnav-mobile.dropdown-menu-full .dropdown-menu').toggle();
        } else {
            $("#topnav-mobile.dropdown-menu-full").css("display", "none");
        };

        

    })
    $('#topnav.dropdown .dropdown-menu-full').focusout(function (e) {
        $('#topnav-mobile.dropdown-menu-full .dropdown-menu').hide();

    });


    $("#usernav.dropdown .btn").click(function (f) {

        if($("#topnav-mobile .dropdown-menu").css("display") == "block") {
            $("#topnav-mobile .dropdown-menu").css("display", "none");
        }

        if ($(window).width() < 992) {

            $('#usernav-mobile.dropdown-menu-full .dropdown-menu').toggle();
        } else {
            $("#usernav-mobile.dropdown-menu-full").css("display", "none");
        };


    })
    



    //------Position des Statusfelds----//

    $('td.status').click(function (e) {

        $(".status-change .status-green").css("color", "#44B687");
        $(".status-change .status-yellow").css("color", "#EFB640");
        $(".status-change .status-red").css("color", "#E94B4B");

        var posX = $(this).offset().left 
        var posY = $(this).offset().top

        console.log((posX) + ' , ' + (posY));

        var y = posY + 7
        var x = posX

        $(".status-change").css("top", y + "px");
        $(".status-change").css("left", x + "px");
        $(".status-change").css("display", "block");

        if($(this).hasClass("status-green")){
            $(".status-change .status-green").removeClass("icon-circle-empty");
            $(".status-change .status-green").addClass("icon-circle");
            $(".status-change .status-yellow").removeClass("icon-circle");
            $(".status-change .status-yellow").addClass("icon-circle-empty");
            $(".status-change .status-red").removeClass("icon-circle");
            $(".status-change .status-red").addClass("icon-circle-empty");

        } 

        if($(this).hasClass("status-yellow")){
            $(".status-change .status-yellow").removeClass("icon-circle-empty");
            $(".status-change .status-yellow").addClass("icon-circle");
            $(".status-change .status-green").removeClass("icon-circle");
            $(".status-change .status-green").addClass("icon-circle-empty");
            $(".status-change .status-red").removeClass("icon-circle");
            $(".status-change .status-red").addClass("icon-circle-empty");
        } 

        if($(this).hasClass("status-red")){
            $(".status-change .status-red").removeClass("icon-circle-empty");
            $(".status-change .status-red").addClass("icon-circle");
            $(".status-change .status-yellow").removeClass("icon-circle");
            $(".status-change .status-yellow").addClass("icon-circle-empty");
            $(".status-change .status-green").removeClass("icon-circle");
            $(".status-change .status-green").addClass("icon-circle-empty"); 
        } 


        //-------Auswahl des Status-Zustandes------//




    });






   //-----------Blaue Kacheln aufklappen---//
    
    $(".bluebox .btn-blue").click(function () {
        var blueBoxSectionId = $(this).closest("section").prop("id");
        toggleBlueBox(blueBoxSectionId);
    });

    $(".bluebox section").click(function () {
        var blueSectionId = $(this).closest("section").prop("id");
        toggleBlueMobile(blueSectionId);

        /* if ($("#bc2.box-content-full").css("display") == "block") {
            $(".bluebox").css("height", "454px");
        } else if ($("#bc1.box-content-full").css("display") == "block") {
            $(".bluebox").css("height", "454px")
        } else {
            $(".bluebox").css("height", "454")
        } */
    });


});





//--------------Ansicht der Sammlungen in der Mediathek------------//

function countMediaElements() {

    var a = $(window).width();
    console.log(a + " window width");

    var tabcontent_temp = 0;

    if ($("#sidebar").css("display") == "block") {
        tabcontent_temp = $(window).width() - parseInt($("#sidebar").width()) - 90;
        $(".tab-content .grid-wrapper").css("max-width", tabcontent_temp);
    } else {
        tabcontent_temp = $(window).width();
        $(".tab-content .grid-wrapper").css("max-width", tabcontent_temp);
    }

    //Elemente in der Mediathek-Row begrenzen

    var count1 = $(".grid-header .item-header").length;
    console.log(count1 + " Themen stehen zur Verfügung");

    var countbox = (tabcontent_temp - 70) / 200;
    c = Math.floor(countbox);                   //Zahl abschneiden! abrunden!
    console.log(c + " anzahl kacheln");

    $(".item-header").css("display", "none"); 
    for (var i = 1; i <= c; i++) {
        s = ".grid-header .item-header:nth-child(" + i + ")"
        $(s).css("display", "block");
    };
};




//Accordion Sidebar active-Zustand (Mehrfachnennung möglich)
$(document).ready(function () {


    $("#sidebar .card-body").click(function () {

        if ($(this).children("card")) {
            $(this).addClass("sub");
            console.log("sub added");
        };


        $(".sidebar .card-body.sub").removeClass("active");
        $(".sidebar .card-body").removeClass("active");
        $(this).addClass("active");


    });

});


//TODO wenn in desktop Kachel auf ... dann resize





//Bluebox desktop-Ansicht
var idBlueOld = 0;

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
        $(idBlueOld + " .bluebox section").css("height", "150px");

		
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

function toggleBlueMobile(tempId) {

    var idBlueMobile = "#" + tempId;

    if ($(window).width() < 975) {

        if (idBlueMobile == "#meineDateien") {

            $("#bc2.box-content-full").css("display", "none");

            if ($("#bc1.box-content-full").css("display") == "none") {
                $("#bc1.box-content-full").css("display", "block");
                $("#blue1").css("display", "block");
                $("#blue2").css("display", "none");
                $("#blue3").css("display", "none");
                $(".arrowblue").css("left", "15%");


                cardheight = $(".box-content-full .card").height();
                console.log(cardheight + " cardheight");
                var acclenght = $(".box-content-full .accodion").size;
                console.log(acclenght + " länge")


            } else if ($("#blue1").css("display") == "block") {
                $("#bc1.box-content-full").css("display", "none");

            } else {
                $("#bc1.box-content-full").css("display", "block");
                $("#blue1").css("display", "block");
                $("#blue2").css("display", "none");
                $("#blue3").css("display", "none");
                $(".arrowblue").css("left", "15%");
            };

        } else if (idBlueMobile == "#media") {
            $("#bc1.box-content-full").css("display", "none");
            $("#bc2.box-content-full").css("display", "none");

        } else if (idBlueMobile == "#moodle") {

            $("#bc2.box-content-full").css("display", "none");

            if ($("#bc1.box-content-full").css("display") == "none") {
                $("#bc1.box-content-full").css("display", "block");
                $("#blue3").css("display", "block");
                $("#blue2").css("display", "none");
                $("#blue1").css("display", "none");
                $(".arrowblue").css("left", "85%");

            } else if ($("#blue3").css("display") == "block") {
                $("#bc1.box-content-full").css("display", "none");

            } else {
                $("#bc1.box-content-full").css("display", "block");
                $("#blue3").css("display", "block");
                $("#blue2").css("display", "none");
                $("#blue1").css("display", "none");
                $(".arrowblue").css("left", "85%");
            };

        } else if (idBlueMobile == "#curriculum") {

            $("#bc1.box-content-full").css("display", "none");

            if ($("#bc2.box-content-full").css("display") == "none") {
                $("#bc2.box-content-full").css("display", "block");
                $("#blue4").css("display", "block");
                $("#blue5").css("display", "none");
                $("#blue6").css("display", "none");
                $(".arrowblue").css("left", "15%");

            } else if ($("#blue4").css("display") == "block") {
                $("#bc2.box-content-full").css("display", "none");

            } else {
                $("#bc2.box-content-full").css("display", "block");
                $("#blue4").css("display", "block");
                $("#blue5").css("display", "none");
                $("#blue6").css("display", "none");
                $(".arrowblue").css("left", "15%");
            };

        } else if (idBlueMobile == "#lehrplaene") {
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



// Intro
$(document).ready(function () {
    $(".curtain__panel").click(function () {
        $(".curtain__panel--right").css("transform", "translateX(100%)");
        $(".curtain__panel--left").css("transform", "translateX(-100%)");
    })
});
