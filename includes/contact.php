<div id="delivery" class="w3-content" style="max-width:1100px">  
 <hr>
 <div class="w3-container w3-padding-64" id="contact">
    <h1>Delivery Services</h1><br>
    <p>We offer 3 delivery services as below. Just need to download these apps on your mobile and get the take home pack Gelato!</p>
<center>
  <img src="/images/ubere.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
</center>
</div> 
</div>

</div>


<div class="w3-content" style="max-width:1100px">  
  <hr>
  <!-- Contact Section -->
  <div class="w3-container w3-padding-64" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p>We offer full-service catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggerst criteria of them all, both look and taste. Do not hesitate to contact us.</p>
    <p class="w3-text-blue-grey w3-large"><b>Gelatissimo Balmain, 254 Darling St, 2041 Balmain, NSW, Australia</b></p>
    
    <div id="googleMap" style="width:100%;height:400px;"></div>
    <br>
    <p>You can also contact us by phone <b>02 9810 3151 </b>or email <b>gelatissimobalmain@gmail.com</b> for any <b>FEEDBACK</b> and other inquiries.</p>
  </div>
<!-- End page content -->
</div>



  



<script>
function myMap()
{
  myCenter=new google.maps.LatLng(-33.8577278,151.1820413,19.55);
  var mapOptions= {
    center:myCenter,
    zoom:18, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}

document.getElementById("myLink").click();
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-MjOd0HrzszwaHJCQti8hWIygr-8jn3c&callback=myMap"></script>