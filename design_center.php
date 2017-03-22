<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Catalog</title>
   <!-- bootstrap css library -->

<!--  <link href="ui/css/bootstrap.min.css" rel="stylesheet" type="text/css"> --> 

  <link href="ui/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <!-- css for fancy selectbox -->

      <link href="ui/css/bootstrap-select.min.css" rel="stylesheet" type="text/css">

      <!-- css for fancy scrollbar -->


    <link href="ui/css/jquery.mCustomScrollbar.min.css" rel="stylesheet" type="text/css">
    <!-- font-awesome css library -->

  <link rel="stylesheet" href="ui/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="ui/css/main.css">

  <!-- jQuery library -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <!--  compiled Bootstrap JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  
   
    <!--  compiled JavaScript for fancy scrollbar-->

  <script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!--  fonts -->
        <!--  compiled JavaScript for fancy select box-->

  <script src="js/bootstrap-select.min.js"></script>

    <script type="text/javascript">
	
</script>

<script type="text/javascript"> 

	function openSelectionOverview() {
		$( "#overlay" ).width("100%");
	}
	function closeSelectionOverview() {
		$( "#overlay" ).width("0%");
	}
	
	
$(document).ready(function () {

		// on click event to show hide childer ul tag
	$('label.tree-toggler').click(function () {
		$(this).toggleClass('active');
		$(this).parent().children('ul.tree').toggle(500);
		      	$("#show_all_category").removeClass("active");

		// update method to reinitialize custom scorllbar
	});
	
	
	 $(".nav.category_menu ul li").on("click", function() {
		  $(".nav.category_menu ul li").removeClass("active");
		  $("#show_all_category").removeClass("active");
		  $(this).addClass("active");
    });
	
	 // close all parent except the first one
	$(function(){
		$('.tree-toggler').parent().children('ul.tree').toggle();
	})
	
	 $("#show_all_category").on("click", function() {
      	$(this).addClass("active");
		  $(".nav.category_menu li label").removeClass("active");
		  $(".nav.category_menu li ul li").removeClass("active");

		$('.tree-toggler').parent().children('ul.tree').toggle();
     });
	 
	
	// scrollbar	 for your selection overlay page 
	 $("#overlay-selection-scrollbar").mCustomScrollbar({
			axis:"y", // vertical scrollbar
			theme:"your-selection-theme"
	});
	
	// scrollbar for catalog  tab	 
	 $("#catalog-selection").mCustomScrollbar({
			axis:"yx", // vertical and horizontal scrollbar
			theme:"yellow-theme"
	});
	
	// scrollbar for your-selection  tab	 
	 $("#your-selection-scrollbar").mCustomScrollbar({
			axis:"y", // vertical scrollbar
			theme:"yellow-theme"
	});
	
	// scrollbar for inspiration tab	 
	 $("#inspiration-scrollbar").mCustomScrollbar({
			axis:"y", // vertical scrollbar
			theme:"yellow-theme"
	});

	// scrollbar for define your style tab	 
	 $("#define-scrollbar").mCustomScrollbar({
			axis:"y", // vertical scrollbar
			theme:"yellow-theme"
	});

	// for on click show heart Add selection for catalog page
	$(".media-left span").hide().css('z-index','3'); 
	
 	$(".media-left").on("click", function() {
			$(this).find( "span" ).toggle();
	});
		 
		 
	$("a[href='#your-selection']").on('show.bs.tab', function(e) {
		  
		  $("#left_top_title").html("Your <br> Selections");
  		  $("#left_top_text").html("Your Selections is a collection of your choices alredy picked out to bring your home to life. ");
		 $("#left_side_menu").show();
		 $("#search-breadcrumbs-row").show();
			 $(".left-column").addClass('grey_background');

	 });
	 
	 
	 $("a[href='#catalog']").on('show.bs.tab', function(e) {
		  
		  $("#left_top_title").html("OUR<br> CATALOG");
   		  $("#left_top_text").html("Browse by room or category to make selections on every product and finish.");
  		 $("#left_side_menu").show();
		 $("#search-breadcrumbs-row").show();
			 $(".left-column").addClass('grey_background');


	 });
	 
	 
	  $("a[href='#inspiration']").on('show.bs.tab', function(e) {
		  
		  $("#left_top_title").html("FIND<br> Inspiration");
   		  $("#left_top_text").html("Inspiration can come from anywhere. Get Creative by making your own inspiration boards.");
		  // hide left menu
		  $("#left_side_menu").show();
		 $("#search-breadcrumbs-row").show();
			 $(".left-column").addClass('grey_background');

	 });
	 
	 
	  $("a[href='#define']").on('show.bs.tab', function(e) {
		  
		  $("#left_top_title").html("DEFINE<br> YOUR STYLE");
   		  $("#left_top_text").html(" To help us define your style, please read through our questions and choose what best suits you. <br><br> From there we can get a sense of what you’re looking for, which helps our design consultants guide you along the path to designing and building your new home.  <br><br>This information can be accessed in your personal profile at any time.");

			// hide left menu
			 $("#left_side_menu").hide();
			 $("#search-breadcrumbs-row").hide();
			 $(".left-column").removeClass('grey_background');
			 $(".left-column").addClass('blue_background');
	 });
	 
	 
	 
	  
	   // $('#myprofile').modal('show');


$('#editinforbtn').click(function() {
  $('#profile_edit').show('slow', function() {
    // Animation complete.
  });
  
    $('#profile_view').hide();
});
	  

});
 
 
</script>
<style>


</style>
</head>

<body>
<header class="header">
     <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false" >
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#" ><img src="co/awh/AshtonWoods_PersonalStudio_Lockup_SingleLine.png" alt="AshtonWoods" ></a>
            </div><!--  end navbar-header -->

            <div class="collapse navbar-collapse" id="ps-navbar-collapse-1">

                    <ul class="nav navbar-nav right-menu navbar-right">
                        <li class="active"><a href="#">DESIGN CENTER</a></li>
                        <li><a href="#">HOW IT WORKS</a></li>
                        <li><a href="#">CONTACT</a></li>
                        <li class="dropdown no-underline" id="userMenu">
                        
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="usr-menu"><img class="myprofile-img" src="co/awh/Profile_Photo.png" alt="My Profile" >
                           <span class="ntf-circle"></span>
                           <span class="num">2</span>
                           <span class="user_name">Manisha</span></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="usr-menu" >
                                <li role="presentation">
                                    <a role="menuitem" data-toggle="modal" href="#myprofile">My Profile</a>
                                </li>
                                 <li role="presentation">
                                    <a role="menuitem" class="menulink" href="/ps/logout.php">Log&nbsp;Out </a>
                                </li>
                           </ul>
                        </li>
                    </ul>
             </div><!-- collapse -->
             
        </div><!-- container -->
  </header>

<div class="modal fade myprofile" tabindex="-1" role="dialog" id="myprofile"  aria-labelledby="my_profile_header">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
            <div class="row">
                <div class="col-lg-6 border-right prfleditbox" style="display:none; " id="profile_edit">
                   <form class="form-horizontal" role="form" >
                        <div class="row brand">
                            <img src="co/awh/PersonalStudio_Logo_blue.png" alt="My Personal Studio"  id="my_profile_header"><br>
                            <div class="underline" ></div>
                        </div>
                        <div class="row">
                            Please complete the fileds below to setup your profile
                        </div>
                        <div class="row input_groups">
                            <div class="form-group">
                                <div class="col-lg-6">
                                    <input type="text" class="form-control round " name="ufname" placeholder="First Name" value="Linda">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control round " name="ulname" placeholder="Last Name" value="Smith">
                                </div>
                            </div>
                            <div class="form-group" >
                                <div class="col-lg-12">
                                    <input type="text" class="form-control round " name="uemail" placeholder="youremail@email.com" value="info@llindasmith.com">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-lg-12">
                                <input type="text" class="form-control round "   placeholder="Address Line 1"  value="555 Avenue Road">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                <input type="text" class="form-control round " placeholder="Address Line 2" value="Current Address Line 2">
                                </div>
                            </div>
                             <div class="form-group">
                                <div class="col-lg-6">
                                <input type="text" class="form-control round " placeholder="City" value="Earlanger">
                                </div>
                                 <div class="col-lg-3">
                                <input type="text" class="form-control round " placeholder="State" value="KY">
                                </div>
                                 <div class="col-lg-3">
                                <input type="text" class="form-control round " placeholder="Zipcode" value="4107">
                                </div>
                            </div>
                            </div>
                	</form>
				</div>
                <div class="col-lg-6 border-right"  id="profile_view">
                    <div class="row prfview_box">
                        <div class="col-lg-12">
                             <div class="row brand">
                                <img src="co/awh/PersonalStudio_Logo_blue.png" alt="My Personal Studio" id="my_profile_header"><br>
                                <div class="underline" ></div>
                            </div>
                            <div class="row">
                                Welcome!
                            </div>
                            <div class="row nameupperspace">
                                Linda Smith<br>
                                info@lindasmith.com
                            </div>
                            <div class="row addressbox">
                                <div class="col-lg-6 nopadding">
                                555 Avenue Road<br>
                                Erlanger, KY<br>
                                41017
                                </div>
                                <div class="col-lg-6 editbtnbox" >
                                 <button class="btn editinfo" id="editinforbtn" >Edit Info</button>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 nopadding text-center">
                    <div class="row profile_pic">
                        <img src="co/awh/Profile_Blank_Blue.png" >
                    </div>
                    <div class="row uplpic">
                        <a href="#" >Upload Photo </a>
                    </div>
                    <div class="row">
                        <button class="btn submit" type="button" >Submit</button>
                    </div>
                </div>
           	 </div>
   	 	</div><!-- /.modal-body -->
   	 </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

    <div class="container-fluid nopadding">
		<div class="row  overlay" id="overlay">
                <div class="left-column-overlay" id="left-column-overlay" >
                    <div class="overlay-left">
                        <ul class="nav nav-list overlay-menu">
                            <li><label  class="tree-toggler nav-header active"><a href="#exteriror_selections"><small>01.</small> Exterior Selections</a></label>
                                <ul class="nav nav-list tree">
                                    <li><a href="#exteriror_doors">Exterior Doors</a></li>
                                    <li><a href="#masonry">Masonry</a></li>
                                    <li><a href="#garrage_door" >Garrage Door</a></li>
                                </ul>
                            </li>
                        <li ><label class="tree-toggler nav-header "><a href="#cabinets"><small>02.</small> Cabinets</a></label>
                            <ul class="nav nav-list tree">
                                <li><a href="#">Exterior Doors</a></li>
                                <li><a href="#" class="active">Masonry</a></li>
                                <li><a href="#">Garrage Door</a></li>
                            </ul>
                        </li>
                        <li><label class="tree-toggler nav-header"><a href="#"><small>03.</small> Countertops</a></label>
                            <ul class="nav nav-list tree">
                                <li><a href="#">Exterior Doors</a></li>
                                <li><a href="#">Masonry</a></li>
                            </ul>
                        </li>
                        <li><label class="tree-toggler nav-header"><a href="#"><small>04.</small> Wall Tile</a></label>
                            <ul class="nav nav-list tree">
                                <li><a href="#">Exterior Doors</a></li>
                                <li><a href="#">Masonry</a></li>
                            </ul>
                        </li>
                        <li><label class="tree-toggler nav-header"><a href="#"><small>05.</small> Window Treatments</a></label>
                            <ul class="nav nav-list tree">
                                <li><a href="#">Exterior Doors</a></li>
                                <li><a href="#">Masonry</a></li>
                            </ul>
                        </li>
                        </ul>
                    </div>
                </div>
                <div class="right-column-overlay" id="right-colum-overlay">
                    <div class="row oheader" id="right-colum-overlay-header">
                        <div class="col-lg-10 col-lg-offset-1 "> 
                            <div class="row">
                            	&nbsp;
                            </div>
                            <div class="row">
                        		<div class="col-lg-1 nopadding" >
                                	<i>Filter  by:</i>
								</div>
                                <div class="col-lg-11">
                                    <ul> 
                                        <li class="active"> <a href="#">All </a></li>
                                        <li><a href="#">SELECTED OPTIONS <span>(23)</span></a></li>
                                        <li><a href="#">UNSELECTED OPTIONS <span>(23)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1 close-button">
                        	<a href="javascript:closeSelectionOverview()"><span class="glyphicon glyphicon-arrow-right"></span></a>
                        </div>
                    </div>
                    <div class="row omain" id="right-colum-overlay-main" >
                       
                        <div class="row selection-content">
                        	<div class="col-lg-11 col-lg-offset-1 full-height">
                            	<div class="row scroll-box" id="overlay-selection-scrollbar">
                                    <table class="col-lg-12"> 
                                        <tr>
                                            <td id="exteriror_selections"> 
                                                <div class="header_major_section"><small><i>01. </i></small> Exterior Selections</div>
                                                <div class="div_box_body">
                                                    <table class="col-lg-12" >
                                                            <tr id="exteriror_doors">
                                                                <td>
                                                                    <table class="col-lg-12">
                                                                          <colgroup>
                                                                            <col class="col-lg-2">
                                                                            <col class="col-lg-5">
                                                                            <col class="col-lg-2">
                                                                            <col class="col-lg-1">
                                                                            <col class="col-lg-1">
                                                                            <col class="col-lg-1">
                                                                          </colgroup>
                                                                            <tr>
                                                                                <td colspan="6" class="header_option_group" >EXTERIOR DOORS<hr></td>
                                                                            </tr>
                                                                            <tr class="option_info_titles">
                                                                                <td >Code</td>
                                                                                <td>Description</td>
                                                                                <td></td>
                                                                                <td>Unit Price</td>
                                                                                <td>Qty</td>
                                                                                <td>Net Price</td>
                                                                            </tr>
                                                                            <tr class="option_info">
                                                                                <td>PC1PDEC</td>
                                                                                <td>Due to grading conditions, this lot maybe a Deck Lot ue to grading conditions</td>
                                                                                <td class="show_detail"><a id="show_detail_button" class="btn round" accesskey="s">Show Details</a>
</td>                                                                           <td>
																					<div class="price">$350.00</div>
                                                                                    <span class="history_link"><a href="#">View History</a></span>
																				</td>
                                                                                <td><input name="existing_option_quantity_11473" value="1" type="hidden">1</td>
                                                                                <td>$350.00</td>
                                                                            </tr>
                                                                            
                                                                           	<tr><td colspan="6"></td></tr>
                                                                           <!--
                                                                           Warning message style use below format
                                                                            <tr>
                                                                                <td  colspan="6"><div class="warningmsg">Warning: Lot (86347) Last Completed Construction Stage (16) has past the Install Construction Stage (1) of Option (OPKB5005).</div></td></tr>-->
                                                                           <tr>
    <td colspan="6">
        <table class="col-lg-12">
            <colgroup>
                <col class="col-lg-2 text-left">
                <col class="col-lg-3 text-left">
                <col class="col-lg-3 text-left">
                <col class="col-lg-1 text-left">
                <col class="col-lg-1 text-left">
                <col class="col-lg-1 text-left">
                <col class="col-lg-1 text-left">
            </colgroup>
    
            <tr class="item_info_titles">
                <td>Item</td>
                <td>Rule</td>
                <td>Value</td>
                <td>Room</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="item_info">
                <td rowspan="1">BATH2CABSTD<br>
                    <span class="item_desc">BATH 2 - Std. Cabinets</span>
                </td>
                <td>AyA - Base Cabinet (Series 1) - Std  </td>
                <td>
                        <select class="selectpicker" name="item_rule_value_name_21876_R_319__W2__1_" id="SELECT___29__21876_319_R_W2"> 
                            <option value="">Bowery - Givva</option>
                            <option value="59032">Bowery - Khiva</option>
                            <option value="61223">Bowery - Light Grey</option>
                            <option value="59031">Bowery - Lucca</option>
                        </select>
    
                </td>
                <td>W2<br><span class="room_desc">BATHROOM 2</span></td>
                <td>
                    <span class="history_link"><a href="#">View History</a></span>
                </td>
          	    <td class="show_detail"><a id="show_detail_button" class="btn round" accesskey="s">Show Details</a></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="6">&nbsp;</td>
            </tr>
           <tr class="item_info">
    
            <td rowspan="2">CABINETHARDWARE<br><span class="item_desc">Std. Cabinet Hardware</span> </td>
            <td>Aya - Hardware Standard  </td>
            <td>
                    <select class="selectpicker" name="item_rule_value_name_22657_R_341__EW__1_" id="SELECT___29__22657_341_R_EW">
                        <option value="">H001-03 Brushed Nickel (Handle)</option>
                        <option value="95542">H001-04 Pewter (Handle)</option>
                        <option value="8650">* See Comment</option>
                        <option value="99965">*To Follow</option>
                    </select>
                </td>
                <td>EW<br><span class="room_desc">ENSUITE BATHROOM</span></td> 
                <td>
                    <span class="history_link"><a href="#">View History</a></span>
                </td>
          	    <td class="show_detail"><a id="show_detail_button" class="btn round" accesskey="s">Show Details</a></td>
                <td></td>
            </tr>
    
            <tr class="item_info">
                <td>Aya - Hardware Standard  </td>
                <td>
                    <select class="selectpicker" name="item_rule_value_name_22657_R_341__KB__1_" id="SELECT___29__22657_341_R_KB">
                        <option value="">H001-04 Pewter</option>
                        <option value="8650">* See Comment</option>
                        <option value="99965">*To Follow</option>
                    </select>
                </td>
                <td>KB<br><span class="room_desc">KITCHEN AND B`FAST</span></td> 
                <td>
                    <span class="history_link"><a href="#">View History</a></span>
                </td>
          	    <td class="show_detail"><a id="show_detail_button" class="btn round" accesskey="s">Show Details</a></td>
                <td></td>
            </tr>
    </table>
    </td>
    </tr>

                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr id="masonry">
                                                                <td>
                                                                    <table class="col-lg-12">
                                                                          <colgroup>
                                                                            <col class="col-lg-2">
                                                                            <col class="col-lg-5">
                                                                            <col class="col-lg-2">
                                                                            <col class="col-lg-1">
                                                                            <col class="col-lg-1">
                                                                            <col class="col-lg-1">
                                                                          </colgroup>
                                                                            <tr>
                                                                                <td colspan="6" class="header_option_group">Masonary<hr></td>
                                                                            </tr>
                                                                            <tr class="option_info_titles">
                                                                                <td >Code</td>
                                                                                <td>Description</td>
                                                                                <td></td>
                                                                                <td>Unit Price</td>
                                                                                <td>Qty</td>
                                                                                <td>Net Price</td>
                                                                            </tr>
                                                                            <tr class="option_info">
                                                                                <td>PC1PDEC</td>
                                                                                <td>Due to grading conditions, this lot maybe a Deck Lot ue to grading conditions</td>
                                                                                <td class="show_detail"><a id="show_detail_button" class="btn round" accesskey="s">Show Details</a>
</td>                                                                           <td>
																					<div class="price">$350.00</div>
                                                                                    <span class="history_link"><a href="#">View History</a></span>
																				</td>
                                                                                <td><input name="existing_option_quantity_11473" value="1" type="hidden">1</td>
                                                                                <td>$350.00</td>
                                                                            </tr>
                                                                            
                                                                           	<tr><td colspan="6"></td></tr>
                                                                           <!--
                                                                           Warning message style use below format
                                                                            <tr>
                                                                                <td  colspan="6"><div class="warningmsg">Warning: Lot (86347) Last Completed Construction Stage (16) has past the Install Construction Stage (1) of Option (OPKB5005).</div></td></tr>-->
                                                                            <tr>
                                                                                <td colspan="6">
                                                                                    <table class="col-lg-12">
                                                                                    	<colgroup>
                                                                                            <col class="col-lg-2 text-left">
                                                                                            <col class="col-lg-3 text-left">
                                                                                            <col class="col-lg-3 text-left">
                                                                                            <col class="col-lg-1 text-left">
                                                                                            <col class="col-lg-1 text-left">
                                                                                            <col class="col-lg-1 text-left">
                                                                                            <col class="col-lg-1 text-left">
                                                                                      	</colgroup>
                                                                          
                                                                                        <tr class="item_info_titles">
                                                                                            <td>Item</td>
                                                                                            <td>Rule</td>
                                                                                            <td>Value</td>
                                                                                            <td>Room</td>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                        </tr>
                                                                                        <tr class="item_info">
                                                                                            <td rowspan="1">BATH2CABSTD<br>
                                                                                                <span class="item_desc">BATH 2 - Std. Cabinets</span>
                                                                                            </td>
                                                                                            <td>AyA - Base Cabinet (Series 1) - Std  </td>
                                                                                            <td>
                                                                                                    <select class="selectpicker" name="item_rule_value_name_21876_R_319__W2__1_" id="SELECT___29__21876_319_R_W2"> 
                                                                                                        <option value="">Bowery - Givva</option>
                                                                                                        <option value="59032">Bowery - Khiva</option>
                                                                                                        <option value="61223">Bowery - Light Grey</option>
                                                                                                        <option value="59031">Bowery - Lucca</option>
                                                                                                    </select>

                                                                                          	</td>
                                                                                          	<td>W2<br><span class="room_desc">BATHROOM 2</span></td>
                                                                                          	<td>
                                                                                                <span class="history_link"><a href="#">View History</a></span>
                                                                                           	</td>
          	    <td class="show_detail"><a id="show_detail_button" class="btn round" accesskey="s">Show Details</a></td>
                                                                                			<td></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td colspan="6">&nbsp;</td>
                                                                                        </tr>
                                                                                       <tr class="item_info">

                                                                                        <td rowspan="2">CABINETHARDWARE<br><span class="item_desc">Std. Cabinet Hardware</span> </td>
                                                                                        <td>Aya - Hardware Standard  </td>
                                                                                        <td>
                                                                                                <select class="selectpicker" name="item_rule_value_name_22657_R_341__EW__1_" id="SELECT___29__22657_341_R_EW">
                                                                                                    <option value="">H001-03 Brushed Nickel (Handle)</option>
                                                                                                    <option value="95542">H001-04 Pewter (Handle)</option>
                                                                                                    <option value="8650">* See Comment</option>
                                                                                                    <option value="99965">*To Follow</option>
                                                                                                </select>
                                                                                            </td>
                                                                                            <td>EW<br><span class="room_desc">ENSUITE BATHROOM</span></td> 
                                                                                            <td>
                                                                                                <span class="history_link"><a href="#">View History</a></span>
                                                                                           	</td>
          	    <td class="show_detail"><a id="show_detail_button" class="btn round" accesskey="s">Show Details</a></td>
                                                                                			<td></td>
                                                                                        </tr>
                                                                            
                                                                                        <tr class="item_info">
                                                                                            <td>Aya - Hardware Standard  </td>
                                                                                            <td>
                                                                                                <select class="selectpicker" name="item_rule_value_name_22657_R_341__KB__1_" id="SELECT___29__22657_341_R_KB">
                                                                                                    <option value="">H001-04 Pewter</option>
                                                                                                    <option value="8650">* See Comment</option>
                                                                                                    <option value="99965">*To Follow</option>
                                                                                                </select>
                                                                                            </td>
                                                                                            <td>KB<br><span class="room_desc">KITCHEN AND B`FAST</span></td> 
                                                                                            <td>
                                                                                                <span class="history_link"><a href="#">View History</a></span>
                                                                                           	</td>
          	    <td class="show_detail"><a id="show_detail_button" class="btn round" accesskey="s">Show Details</a></td>
                                                                                			<td></td>
                                                                                        </tr>
                                                                                </table>
                                                                                </td>
                                                                            </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr id="garrage_door">
                                                                <td>
                                                                    <table class="col-lg-12">
                                                                          <colgroup>
                                                                            <col class="col-lg-2">
                                                                            <col class="col-lg-5">
                                                                            <col class="col-lg-2">
                                                                            <col class="col-lg-1">
                                                                            <col class="col-lg-1">
                                                                            <col class="col-lg-1">
                                                                          </colgroup>
                                                                            <tr>
                                                                                <td colspan="6" class="header_option_group" >Garrage Door<hr></td>
                                                                            </tr>
                                                                            <tr class="option_info_titles">
                                                                                <td >Code</td>
                                                                                <td>Description</td>
                                                                                <td></td>
                                                                                <td>Unit Price</td>
                                                                                <td>Qty</td>
                                                                                <td>Net Price</td>
                                                                            </tr>
                                                                            <tr class="option_info">
                                                                                <td>PC1PDEC</td>
                                                                                <td>Due to grading conditions, this lot maybe a Deck Lot ue to grading conditions</td>
                                                                                <td class="show_detail"><a id="show_detail_button" class="btn round" accesskey="s">Show Details</a>
</td>                                                                           <td>
																					<div class="price">$350.00</div>
                                                                                    <span class="history_link"><a href="#">View History</a></span>
																				</td>
                                                                                <td><input name="existing_option_quantity_11473" value="1" type="hidden">1</td>
                                                                                <td>$350.00</td>
                                                                            </tr>
                                                                            
                                                                           	<tr><td colspan="6"></td></tr>
                                                                           <!--
                                                                           Warning message style use below format
                                                                            <tr>
                                                                                <td  colspan="6"><div class="warningmsg">Warning: Lot (86347) Last Completed Construction Stage (16) has past the Install Construction Stage (1) of Option (OPKB5005).</div></td></tr>-->
                                                                                                                                                      <tr>
    <td colspan="6">
        <table class="col-lg-12">
            <colgroup>
                <col class="col-lg-2 text-left">
                <col class="col-lg-3 text-left">
                <col class="col-lg-3 text-left">
                <col class="col-lg-1 text-left">
                <col class="col-lg-1 text-left">
                <col class="col-lg-1 text-left">
                <col class="col-lg-1 text-left">
            </colgroup>
    
            <tr class="item_info_titles">
                <td>Item</td>
                <td>Rule</td>
                <td>Value</td>
                <td>Room</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="item_info">
                <td rowspan="1">BATH2CABSTD<br>
                    <span class="item_desc">BATH 2 - Std. Cabinets</span>
                </td>
                <td>AyA - Base Cabinet (Series 1) - Std  </td>
                <td>
                        <select class="selectpicker" name="item_rule_value_name_21876_R_319__W2__1_" id="SELECT___29__21876_319_R_W2"> 
                            <option value="">Bowery - Givva</option>
                            <option value="59032">Bowery - Khiva</option>
                            <option value="61223">Bowery - Light Grey</option>
                            <option value="59031">Bowery - Lucca</option>
                        </select>
    
                </td>
                <td>W2<br><span class="room_desc">BATHROOM 2</span></td>
                <td>
                    <span class="history_link"><a href="#">View History</a></span>
                </td>
          	    <td class="show_detail"><a id="show_detail_button" class="btn round" accesskey="s">Show Details</a></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="6">&nbsp;</td>
            </tr>
           <tr class="item_info">
    
            <td rowspan="2">CABINETHARDWARE<br><span class="item_desc">Std. Cabinet Hardware</span> </td>
            <td>Aya - Hardware Standard  </td>
            <td>
                    <select class="selectpicker" name="item_rule_value_name_22657_R_341__EW__1_" id="SELECT___29__22657_341_R_EW">
                        <option value="">H001-03 Brushed Nickel (Handle)</option>
                        <option value="95542">H001-04 Pewter (Handle)</option>
                        <option value="8650">* See Comment</option>
                        <option value="99965">*To Follow</option>
                    </select>
                </td>
                <td>EW<br><span class="room_desc">ENSUITE BATHROOM</span></td> 
                <td>
                    <span class="history_link"><a href="#">View History</a></span>
                </td>
          	    <td class="show_detail"><a id="show_detail_button" class="btn round" accesskey="s">Show Details</a></td>
                <td></td>
            </tr>
    
            <tr class="item_info">
                <td>Aya - Hardware Standard  </td>
                <td>
                    <select class="selectpicker" name="item_rule_value_name_22657_R_341__KB__1_" id="SELECT___29__22657_341_R_KB">
                        <option value="">H001-04 Pewter</option>
                        <option value="8650">* See Comment</option>
                        <option value="99965">*To Follow</option>
                    </select>
                </td>
                <td>KB<br><span class="room_desc">KITCHEN AND B`FAST</span></td> 
                <td>
                    <span class="history_link"><a href="#">View History</a></span>
                </td>
          	    <td class="show_detail"><a id="show_detail_button" class="btn round" accesskey="s">Show Details</a></td>
                <td></td>
            </tr>
    </table>
    </td>
    </tr>

                                                                    </table>
                                                                </td>
                                                            </tr>
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
								</div>                                     
                       		</div>
                       	</div>
                       
                    </div>
                </div>
			</div>

        <div class="row content" id="main-div" >
            <div class="col-lg-3 left-column nopadding">
                <div class="row left-column-top">
                    <p class="title" id="left_top_title">
                        OUR<br> CATALOG
                    </p>
                    <p class="description" id="left_top_text">
                       Browse by room or category to make selections on every product and finish.
                    </p>
                </div>
                <div class="row left-column-menu" id="left_side_menu">
                     <div class="col-lg-6 nopadding border-right" >
                            <div class="row menu-header">
                                <div class="under-line">
                                    Room
                                </div>
                             </div>
                             <div class="row collapse in"  id="collapse-rooms">
                                <ul class="nav nav-list tree room_menu"  id="room_menu" >
                                   <li><a href="#exteriror_doors">Room Non-Specific</a></li>
                                    <li><a href="#exteriror_doors">Master Bathroom</a></li>
                                    <li ><a href="#masonry">Master Bedroom</a></li>
                                    <li><a href="#garrage_door" >Bedroom 1</a></li>
                                    <li><a href="#garrage_door" >Bedroom 2</a></li>
                                    <li><a href="#garrage_door" >Bedroom 3</a></li>
                                    <li><a href="#garrage_door" >Kitchen</a></li>
                                
                                    <li><a href="#garrage_door" >Living</a></li>
                                    <li><a href="#garrage_door" >Bedroom 2</a></li>
                                    <li><a href="#garrage_door" >Bedroom 3</a></li>
                                    <li><a href="#garrage_door" >Kitchen</a></li>
                                
                                    <li><a href="#garrage_door" >Living</a></li>
                                    <li><a href="#garrage_door" >Dining</a></li>
                                    <li><a href="#garrage_door" >Storage</a></li>
                                    <li><a href="#garrage_door" >Exterior Front</a></li>
                                 </ul>
                            </div>
                     </div>
                     <div class="col-lg-6 nopadding" >
                         <div class="row menu-header">
                                <div class="under-line">
                             		 Category
                                </div>
                         </div>
                          <div class="row collapse in" id="collapse-category">
                                 <a  href="#" class="show_all" id="show_all_category">Show All</a>
                                 
                                   <ul class="nav nav-list category_menu">
                                        <li><label  class="tree-toggler nav-header"><a href="#exteriror_selections">Appliances</a></label>
                                            <ul class="nav nav-list tree">
                                            </ul>
                                        </li>
                                        <li ><label class="tree-toggler nav-header"><a href="#cabinets">Backplash</a></label>
                                            <ul class="nav nav-list tree">
                                            </ul>
                                        </li>
                                        <li><label class="tree-toggler nav-header"><a href="#">Cabinets</a></label>
                                            <ul class="nav nav-list tree">
                                            </ul>
                                        </li>
                                        <li><label class="tree-toggler nav-header"><a href="#">Countertops</a></label>
                                            <ul class="nav nav-list tree">
                                            </ul>
                                        </li>
                                        <li><label class="tree-toggler nav-header"><a href="#">Electrical</a></label>
                                            <ul class="nav nav-list tree">
                                            </ul>
                                        </li>
                                         <li><label class="tree-toggler nav-header"><a href="#">Flooring</a></label>
                                            <ul class="nav nav-list tree">
                                          		<li><a href="#">Hardwood</a></li>
				                          		<li><a href="#">Tiles</a></li>
                                          		<li class="active"><a href="#">Carpets</a></li>

                                            </ul>
                                        </li>
                                         <li><label class="tree-toggler nav-header"><a href="#">Plumbing</a></label>
                                            <ul class="nav nav-list tree">
                                            </ul>
                                        </li>
                                        <li><label class="tree-toggler nav-header"><a href="#">Hardware</a></label>
                                            <ul class="nav nav-list tree">
                                            </ul>
                                        </li>
                               		</ul>
                            </div>

                     </div>
                     
                </div>
            </div>          
             <div class="col-lg-9 right-column ">
				<div class="row">
                	<div class="col-lg-11 rheader">
                        <div class="row tabs-area " >
                                <ul class="nav  nav-pills nav-justified top-tabs-ul">
                                    <li><a data-toggle="tab" href="#define">DEFINE YOUR STYLE</a></li>
                                    <li class="active"><a data-toggle="tab" href="#inspiration">INSPIRATION</a></li>
                                    <li><a data-toggle="tab" href="#your-selection">YOUR SELECTIONS</a></li>
                                    <li ><a  data-toggle="tab" href="#catalog">CATALOG</a></li>
                                </ul>
                         </div>
                 
                         <div class="row search-breadcrumbs" id="search-breadcrumbs-row" >
                            <div class="col-lg-5 nopadding-left">
                                <ol class="breadcrumb" >
                                  <li><a href="#">Kitchen</a></li>
                                  <li><a href="#">Flooring</a></li>
                                  <li class="active"><span>Hardwood</span></li>
                                </ol>
                            </div>
                            
                            <div class="col-lg-6 col-lg-offset-1 nopadding search-bar"  >
                                    <input type="text" placeholder="Search" required  class="form-control search_icon">
                            </div>
                        </div>
                 	</div>
                    <div class="col-lg-1 nopadding" >
	                       <div class="selection-overview-btn" >
                            <a href="javascript:openSelectionOverview()"> 
                                <span class="glyphicon glyphicon-arrow-left"></span>
                                <span class="text">SELECTIONS <br> OVERVIEW</span>
                            </a>
                        </div>
                    </div>
            	</div>
                 <div class="row tab-content" id="tab-content-holder">
               
              		 <div class="col-lg-12 nopadding tab-pane fade" id="catalog"  >
                         <div class="row main-content"  >
                            <div class="col-lg-12  nopadding">
                                <div class="row">
                                    <div class="col-lg-9 ">
                                        <div class="row" >
                                            <div class="col-lg-12 nopadding-right">
                                                <img src="co/awh/center.jpg" style="height:calc(100vh - 329px);" width="100%">
                                            </div>
                                         </div>
                                    </div>
                                    
                                    <div class="col-lg-3 catalog-selection" id="catalog-selection"  >
                                        <div class="row">
                                            <div class="media">
                                              <div class="media-left media-top">
                                                <div class="imgcontainer">
                                                    <img src="co/awh/media1.jpg" class="img-responsive media-object">
                                                     <span></span>
                                                </div>
                                              </div>
                                              <div class="media-body">
                                                <h5 class="media-heading">Timberlake</h5>
                                                <p class="media-description">Hazelnut-Glaze</p>
        
                                                <p class="media-description-small"> Level 01 <br>Included (0$/month)</p>
                                              
                                                 <div class="checkbox checkbox-yellow">
                                                    <input id="checkbox3" type="checkbox" checked="">
                                                    <label for="checkbox3">
                                                        Compare
                                                    </label>
                                                </div>
                                               
                                              </div>
                                            </div>
        
                                             <div class="media">
                                              <div class="media-left media-top">
                                                <div class="imgcontainer">
                                                        <img src="co/awh/media2.jpg" class=" img-responsive media-object">
                                                        <span></span>
                                                </div>
                                              </div>
                                              <div class="media-body">
                                                <h5 class="media-heading">Costa</h5>
                                                <p class="media-description">Hazelnut-Glaze</p>
        
                                                <p class="media-description-small"> Level 01 <br>Included (0$/month)</p>
                                                 <div class="checkbox checkbox-yellow">
                                                    <input id="checkbox4" type="checkbox" checked="">
                                                    <label for="checkbox4">
                                                        Compare
                                                    </label>
                                                </div>
                                               
                                              </div>
                                            </div>
                                             <div class="media">
                                              <div class="media-left media-top">
                                                <div class="imgcontainer">
                                                    <img src="co/awh/media3.jpg" class=" img-responsive media-object">
                                                    <span></span>
                                                </div>
                                              </div>
                                              <div class="media-body">
                                                <h5 class="media-heading">Natural</h5>
                                                <p class="media-description">Hazelnut-Glaze</p>
        
                                                <p class="media-description-small"> Level 01 <br>Included (0$/month)</p>
                                                <div class="checkbox checkbox-yellow">
                                                    <input id="checkbox5" type="checkbox" checked="">
                                                    <label for="checkbox5">
                                                        Compare
                                                    </label>
                                                </div>
                                              </div>
                                            </div>
                                             <div class="media">
                                                 <div class="media-left media-top">
                                                    <div class="imgcontainer">
                                                        <img src="co/awh/media1.jpg" class="img-responsive media-object">
                                                        <span></span>
                                                    </div>
                                              </div>
                                              <div class="media-body">
                                                <h5 class="media-heading">Timberlake</h5>
                                                <p class="media-description">Hazelnut-Glaze</p>
        
                                                <p class="media-description-small"> Level 01 <br>Included (0$/month)</p>
                                                <div class="checkbox checkbox-yellow">
                                                    <input id="checkbox6" type="checkbox" checked="">
                                                    <label for="checkbox6">
                                                        Compare
                                                    </label>
                                                </div>                                           
        
                                              </div>
                                            </div>
                                             <div class="media">
                                                 <div class="media-left media-top">
                                                    <div class="imgcontainer">
                                                        <img src="co/awh/media1.jpg" class="img-responsive media-object">
                                                        <span></span>
                                                    </div>
                                              </div>
                                              <div class="media-body">
                                                <h5 class="media-heading">Timberlake</h5>
                                                <p class="media-description">Hazelnut-Glaze</p>
        
                                                <p class="media-description-small"> Level 01 <br>Included (0$/month)</p>
                                                <div class="checkbox checkbox-yellow">
                                                    <input id="checkbox7" type="checkbox" checked="">
                                                    <label for="checkbox7">
                                                        Compare
                                                    </label>
                                                </div>                                           
        
                                              </div>
                                            </div>
                                        </div>
                                        
                                    
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="row main-content-footer">
                                <div class="col-lg-3 ">
                                    <div class="row footer-text">Total Options Selected: $3500.00</div>
                                </div>
                                <div class="col-lg-3 ">
                                   <div class="row footer-text"> Estimated monthly payment: $12.00</div>
                                </div>
                                <div class="col-lg-3 update-pricing nopadding-right">
                                	<div class="row">
                                   		<div class="col-lg-3 col-lg-offset-9 white-backg" >
                                    		<button class="update-pricing-btn">Update Pricing</button>
                                         </div>
                                       </div>
                                </div>
                                <div class="col-lg-3 compare-box ">
                                    <div class="row compare-text"><a href="#">Compare:</a> 2 ITEMS</div>
                                </div>
                          </div>
                	</div>
                    
                     <div class="col-lg-12 nopadding tab-pane " id="your-selection"  >
                             <div class="row main-content padding-right" id="your-selection-scrollbar"   >
                                <div class="col-lg-12" >
                                    <div class="row selection-row">
                                        <div class="col-lg-3 selection-item">
                                            <a href="#"> <!-- 235 335 -->
                                                <img class="img-responsiv center-block" width="235" height="265" src="co/awh/Standalone_1175X1290.jpg" alt="">
                                            </a>
                                             <div class="view_details"><a href="#">View Details</a></div>
                                            <h6> 
                                                <a href="#">Whirlpool Gold Dishwasher W/TargetClean Option</a>
                                            </h6>
                                            <p class="item_details" >Level 04 / Included ( $0/month)</p>
                                            
                                            <button class="remove_item">Remove</button>
                                         </div>
                                   
                                        <div class="col-lg-3 selection-item">
                                            <a href="#">
                                                <img class="img-responsiv center-block" width="235" height="265" src="co/awh/AB-Default_290X290_HO.jpg" alt="">
                                            </a>
        
                                            <h6> 
                                                <a href="#">Whirlpool1.7 cu. ft. Microwave Hood Combination W/2-speed Fan</a>
                                           </h6>
                                            <p class="item_details" >Level 04 / Included ( $0/month)</p>
        
                                            <button class="remove_item">Remove</button>
                                        </div>
                                        <div class="col-lg-3 selection-item">
                                            <a href="#">
                                                <img class="img-responsiv center-block" width="235" height="265" src="co/awh/Standalone_1175X1290-1.jpg" alt="">
                                            </a>
        
                                            <h6>
                                               <a href="#">35" Gold Counter-Depth French Door Refrigerator- 20 Cu.ft.</a>
                                            </h6>
                                            <p class="item_details" >Level 04 / Included ( $0/month)</p>
                                            <button class="remove_item">Remove</button>
                                        </div>
                                        <div class="col-lg-3 selection-item">
                                            <a href="#">
                                                <img class="img-responsiv center-block" width="235" height="265" src="co/awh/Standalone_1175X1290-3.jpg" alt="">
                                            </a>
                                            <h6>
                                                <a href="#">Gold 10 cu.ft. Double Wall Oven with True Convection Cooking</a>
                                            </h6>
                                             <p class="item_details" >Level 04 / Included ( $0/month)</p>
                                             <button class="remove_item">Remove</button>
                                        </div>
                                    </div>
                                    <div class="row selection-row">
                                        <div class="col-lg-3 selection-item">
                                            <a href="#"> <!-- 235 335 -->
                                                <img class="img-responsiv center-block" width="235" height="265" src="co/awh/Standalone_1175X1290.jpg" alt="">
                                            </a>
                                            <h6> 
                                                <a href="#">Whirlpool Gold Dishwasher W/TargetClean Option</a>
                                            </h6>
                                            <p class="item_details" >Level 04 / Included ( $0/month)</p>
        
                                            <button class="remove_item">Remove</button>
                                         </div>
                                   
                                        <div class="col-lg-3 selection-item">
                                            <a href="#">
                                                <img class="img-responsiv center-block" width="235" height="265" src="co/awh/AB-Default_290X290_HO.jpg" alt="">
                                            </a>
                                            <h6> 
                                                <a href="#">Whirlpool1.7 cu. ft. Microwave Hood Combination W/2-speed Fan</a>
                                           </h6>
                                            <p class="item_details" >Level 04 / Included ( $0/month)</p>
        
                                            <button class="remove_item">Remove</button>
                                        </div>
                                        <div class="col-lg-3 selection-item">
                                            <a href="#">
                                                <img class="img-responsiv center-block" width="235" height="265" src="co/awh/Standalone_1175X1290-1.jpg" alt="">
                                            </a>
                                            <h6>
                                               <a href="#">35" Gold Counter-Depth French Door Refrigerator- 20 Cu.ft.</a>
                                            </h6>
                                            <p class="item_details" >Level 04 / Included ( $0/month)</p>
                                            <button class="remove_item">Remove</button>
                                        </div>
                                        <div class="col-lg-3 selection-item">
                                            <a href="#">
                                                <img class="img-responsiv center-block" width="235" height="265" src="co/awh/Standalone_1175X1290-3.jpg" alt="">
                                            </a>
                                            <h6>
                                                <a href="#">Gold 10 cu.ft. Double Wall Oven with True Convection Cooking</a>
                                            </h6>
                                             <p class="item_details" >Level 04 / Included ( $0/month)</p>
                                             <button class="remove_item">Remove</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         <div class="row main-content-footer">
                                 <div class="col-lg-3 ">
                                    <div class="row footer-text">Total Options Selected: $3500.00</div>
                                </div>
                                <div class="col-lg-3 ">
                                   <div class="row footer-text"> Estimated monthly payment: $12.00</div>
                                </div>
                        </div>
                	</div>
                    
                    <div class="col-lg-12 nopadding tab-pane fade in active " id="inspiration"  >
                         <div class="row main-content padding-right" id="inspiration-scrollbar">
                            <div class="col-lg-12"  >
                                <div class="row ">
                                       <div class="col-lg-3" >
                                      		<img src="co/awh/kitchen-pic-1.jpg" height="300">
                                       </div>
                                </div>
                            </div>
                        </div>
                	</div>
                    
                     <div class="col-lg-12 nopadding tab-pane fade" id="define"  >
                         <div class="row main-content padding-right" id="define-scrollbar">
                            <div class="col-lg-12"  >
                            	<div class="row ">
                                	<h1 style="padding-left:20px; padding-bottom:30px;">What's your ideal gathering?</h1>
                                </div>
                                <div class="row ">
                                       <div class="col-lg-3" >
                                       	<img src="co/awh/define.png" >
                                       </div>
                                </div>
                            </div>
                        </div>
                	</div>
                 </div>
        	</div>
        </div>
    </div>
    <footer>
        <div class="row" >
           <div class="col-lg-2 col-lg-offset-1"  >
                <a href="http://www.greatgulf.com"><img src="co/awh/GG_Secondary_Logo.png" width="226" height="50px" alt="Great Gulf Homes" /></a>
            </div>
            
             <div class="col-lg-2 col-lg-offset-1 copyright-text"  >
             	Copyright <i class="fa fa-copyright" aria-hidden="true"></i> 2016 Great Gulf. All rights reserved.
            </div>
            
             <div class="col-lg-3 col-lg-offset-1" >
                <nav class="footer-menu">
                    <ul >
                        <li ><a href="http://greatgulf.com/terms-conditions/">Terms of use</a></li>
                        <li ><a href="http://greatgulf.com/privacy-policy/">Privacy</a></li>
                        <li ><a href="http://greatgulf.com/accessibility/">Accessibility</a></li>
                    </ul>
                </nav>
            </div>
            
            
             <div class="col-lg-2  follow-social-media" >
               		<div class="text">	Follow Great Gulf</div>
                	<div class="social-media-links-box">
                    <a href="https://www.linkedin.com/company/great-gulf-homes" title="Find us on LinkedIn" target="_blank"><i class="fa fa-linkedin-square"></i></a>
                    <a href="https://www.instagram.com/greatgulf/" title="We're on Instagram" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a class="twitter-btn" href="https://twitter.com/greatgulf" title="Follow us on Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.facebook.com/greatgulf" title="Like us on Facebook" target="_blank"><i class="fa fa-facebook-official"></i></a>
                   </div>
            </div>
            
        </div>
    </footer>
</body>
</html>
