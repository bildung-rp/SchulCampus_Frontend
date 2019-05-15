$(document).ready(function () {

    if ($(window).width() > 975) {
        
        $("#teaser section").removeClass("carousel-item"); 
        $(".box-content-full").css("display", "none");
    } else {
        $("#teaser section").addClass("carousel-item");

    };

    $(window).resize(function () {
        if ($(window).width() > 975) {
            $("#teaser section").removeClass("carousel-item");
            $(".box-content-full").css("display", "none");
        } else {
            $("#teaser section").addClass("carousel-item");
        };
    });


    $('#myTable').DataTable( {
       
        "ordering": true,
        "info": false,
        "searching" : false
    });

    $('[data-toggle="tooltip"]').tooltip();


    $('[data-toggle="popover"]').popover(); 



    //Sidebar-Höhe dem Window angepasst

    var h = 0;
        h = $( window ).height()-parseInt($("header").height())-parseInt($("footer").height())-parseInt($("#maintabs").height());
        console.log(h);
        
        if ( $( "#subheader" ).length ) {
            h = h-parseInt($("#subheader").height())
            console.log(h + " mit subheader");
        };

        if ( $( "#pagesearch" ).length ) {
            h = h-parseInt($("#pagesearch").height())
            console.log(h + " mit pagesearch");
        };

        if (h < parseInt($("#sidebar").css('min-height'))) { //min-height
            $("#sidebar").css("height", h);
            console.log(h + " default-wert");
        } else {
            $("#sidebar").css("height", h);
            console.log(h + " berechnetes h");
        };

        



    //Sidebar-Button-Click
    $(".btn-sidebar").click(function () {
        $('#sidebar').toggle();
        
        if ($(".sidebar").css("display")=="none"){

            $(".btn-sidebar").css("background-color", "transparent");
            $(".tab-pane").css("margin-right", "auto");
            $(".tab-pane").css("margin-left", "auto");

        } else {
        
        $(".tab-pane").css("margin-right", "30px");
        $(".tab-pane").css("margin-left", "0");

        }
    });    
 







    //Scrolling Up-Button
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



    //TODO not working
    $('#selectAll').click(function(e) {
        if (e.currentTarget.checked) {
            $('.tab-content .table td').find('input[type="checkbox"]').prop('checked', true);
        } else {
            $('.tab-content .table td').find('input[type="checkbox"]').prop('checked', false);
        }
    });

    $('#selectAll').click(function(e){
        var table= $(e.target).closest('table');
        $('td input:checkbox',table).attr('checked',e.target.checked);
    });

    

    



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

    $('#topnav.dropdown .dropdown-menu-full').focusout(function (e) {
        
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

    $(window).resize(function () {
        
        $("#topnav.dropdown .btn").click(function (t) {
            if ($(window).width() < 992) {
    
            $('#topnav-mobile.dropdown-menu-full .dropdown-menu').toggle();
            } else {        
                $("#topnav-mobile.dropdown-menu-full").css("display", "none");    
            };
        })
    
        $('#topnav.dropdown .btn').focusout(function (t) {
            $('#topnav-mobile.dropdown-menu-full .dropdown-menu').hide();
        });
    
    
        $("#usernav.dropdown .btn").click(function (t) {
            if ($(window).width() < 992) {
    
            $('#usernav-mobile.dropdown-menu-full .dropdown-menu').toggle();
            } else {        
                $("#usernav-mobile.dropdown-menu-full").css("display", "none");    
            };
        })
    
        $('#usernav.dropdown .btn').focusout(function (t) {
            $('#usernav-mobile.dropdown-menu-full .dropdown-menu').hide();
        });

    });    





});


//Accordion Sidebar active-Zustand (Mehrfachnennung möglich)
$(document).ready(function () {
        
    



    $("#sidebar .card-body").click(function () {

        if ( $(this).children("card") ) {
            $(this).addClass("sub");
            console.log("sub added");
       
        };
       

            $(".sidebar .card-body.sub").removeClass("active");
            $(".sidebar .card-body").removeClass("active");
            $(this).addClass("active");
            console.log("sub machen active rest weg");
        

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


