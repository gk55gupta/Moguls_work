<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php include 'include/head.php';?>
<body>
<?php include 'include/header.php';?>

<section class="banner_section">
<div id="demo_banner" class="carousel slide crowsel_cntr" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo_banner" data-slide-to="0" class="active"></li>
    <li data-target="#demo_banner" data-slide-to="1"></li>

  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
     <div class="carousel-item active">
        <img src="images/event_banner1.jpg"/>
    </div>
     <div class="carousel-item">
        <img src="images/event_banner2.jpg"/>
    </div>
	

	
  </div>
  
  <!-- Left and right controls -->
 
</div>


</section>



<?php include 'include/booking.php';?>

<section class="about_section accommodation_section">
<div class="container">
	<div class="row">
		<div class="col-lg-12 co-md-12 col-sm-12 col-12">
      <div class="about_box text-center wow fadeInUp" data-wow-duration="1s"  data-wow-delay="1s">
	  <h1>Meeting and events</h1>
	  <p>Be it a formal event or a social gathering, our well-equipped venues at Sunray Village Resort are easily customizable according to your needs. Our event spaces coupled with the warm hospitality and professionalism of our team will surely add that special touch to your events.
</p>
	  </div>
</div>
</div>
</div>
</section>



<section class="dine_section meeting_event">
<div id="demo2" class="carousel slide crowsel_cntr" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
	<div class="dine_slider_box  wow have-eff-01">
	  <img src="images/event_slider2.jpg"/>
	  </div>

    </div>
  </div>
  
  <!-- Left and right controls -->
 
</div>


</section>



<section class="event_sontainer clearfix">
<div class="event_bx">
<img src="images/meeting_event_img1.jpg"/>
<div class="event_detail">
<h3>Rose Hall</h3>
<p>Blending style with sophistication, our banquet space, Rose Hall, is ideal for facilitating your important conferences or social celebrations such as engagement parties and birthdays. Located on the first floor of the resort, it is a versatile space. Spread over an area of 3562 sq. ft., it can host 300 guests in theater style. 
</p>
<a href="#" class="explore_btn enquire_btn"  data-toggle="modal" data-target="#myModal_event">ENQUIRE NOW</a>
</div>
</div>
<div class="event_bx event_bx2">
<img src="images/meeting_event_img2.jpg"/>
<div class="event_detail">
<h3>Lilly & Tulip Hall
</h3>
<p>Want to make the right impression on your guests? Then opt for our elegantly tailored venue, Lilly & Tulip Hall. Featuring a space of 888 sq. ft., each of these banquet halls is equipped with modern amenities and a flexible seating arrangement of maximum 50 guests. 
</p>

<a href="#" class="explore_btn enquire_btn" data-toggle="modal" data-target="#myModal_event">ENQUIRE NOW</a>
</div>
</div>

</section>


<section class="dine_section meeting_section">
<div class="container">
	<div class="row">
		<div class="col-lg-12 co-md-12 col-sm-12 col-12">
      <div class="about_box text-center wow fadeInUp" data-wow-duration="1s"  data-wow-delay="1s">
	  <h1>Mini Jungle</h1>
	  <p> With a laid back ambience and beautiful décor, our Mini Jungle is the ideal location inside the property where you can organise sangeet ceremonies, cocktail parties and other social events. Just tell us your requirements and our team will plan it accordingly. </p>
	  </div>
</div>
</div>
</div>
       
<div id="demo3" class="carousel slide crowsel_cntr" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo3" data-slide-to="0" class="active"></li>
    <li data-target="#demo3" data-slide-to="1"></li>

  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
	<div class="dine_slider_box  wow have-eff-01">
	  <img src="images/event_slider1.jpg"/>
	  </div>

   
    </div>
	
	   <div class="carousel-item">
        	<div class="dine_slider_box  wow have-eff-01">
	  <img src="images/event_slider2.jpg"/>
	  </div>

    </div>
	
	
	
  </div>
  
  <!-- Left and right controls -->
 
</div>


</section>


	

<div class="modal fade modal_box" id="myModal_event" role="dialog">	
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">		
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Meeting & Event</h4>
</div>
<div class="modal-body clearfix">
<div id="contactForm">					
  <form class="dine-form"   name="connectForm" onsubmit="return contactForm()"  role="form" action="event_mailer.php" method="post">	
  <div class="row">
   <div class="col-md-6">							
            <input pattern="^[( )a-zA-Z]+$" name="name" placeholder="Name" type="text"/>
          </div>						
          <div class="col-md-6">
          	<input name="email" placeholder="Email" type="email"/>						
          </div>						
          <div class="col-md-6">							
            <input name="phone" placeholder="Phone" type="number"/>						
          </div>

        <div class="col-md-6">							
           <select name="event" class="guest_select">
		   <option value="0">Event Type</option>
		   <option value="Rose Hall">Rose Hall</option>
		   <option value="Lilly & Tulip Hall">Lilly & Tulip Hall</option>


          </select>		   
          </div>		  
          <div class="col-md-12">							
            <input type="text" id="datepicker_book" readonly name="datepicker" placeholder="Date">						
          </div>						
          <div class="col-md-12">							
            <textarea name="comment" placeholder="Comment"></textarea>						
          </div>						
          <div class="col-md-12">							
            <input class="formBtn" onclick="return validateForm(this.form);" value="Submit" type="submit"/>
</div>
</div>
</form>
</div>
</div>
</div>
</div>	
</div>

<script>
function contactForm() {
     if(document.connectForm.name.value == "" )
   {
     alert( "Please provide your Name" );
     document.connectForm.name.focus() ;
     return false;
   }
   
   
   if( document.connectForm.email.value == "" )
   {
     alert( "Please provide your Email id!" );
     document.connectForm.email.focus() ;
     return false;
   }
   else
   {
	   var emailID = document.connectForm.email.value;
	   atpos = emailID.indexOf("@");
	   dotpos = emailID.lastIndexOf(".");
	   if (atpos < 1 || ( dotpos - atpos < 2 )) 
	   {
		   alert("Please enter correct Email ID")
		   document.connectForm.email.focus();
		   return false;
	   }
   }
   
  if(document.connectForm.phone.value.trim() == '')
			{
				alert('Please enter contact no.');
				document.connectForm.phone.focus();
				return false;
			}	
			
			if(isNaN(document.connectForm.phone.value) || /[\-\.\+]/.test(document.connectForm.phone.value) || !(/^[0-9]*/.test(document.connectForm.phone.value)))
			{
				alert('Please enter contact no in numeric only.');
				document.connectForm.phone.focus();
				return false;
			}
			
			if(document.connectForm.phone.value.length > 13)
			{
				alert("Please enter contact no less than 13 digits");
				document.connectForm.phone.focus();
				return false;
			}
			
			if(document.connectForm.phone.value.length < 10)
			{
				alert("Please enter contact no greater than 10 digits");
				document.connectForm.phone.focus();
				return false;
			}
			
			
			if(document.connectForm.event.value == '0')
			{
				alert("Please Select Event type");
				document.connectForm.event.focus();
				return false;
			}
			
			
			 if(document.connectForm.datepicker.value == "" )
             {
			 alert( "Please Select Date" );
			 document.connectForm.datepicker.focus() ;
			 return false;
                }


  
};
</script>




<?php include 'include/foot.php';?>
<?php include 'include/footer.php';?>
</body>
</html>