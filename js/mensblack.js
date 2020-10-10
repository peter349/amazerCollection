

$(function ()  {
  $(".xzoom, .xzoom-gallery") .xzoom({
    zoomWidth: 400,
    tint: "#333",
    Xoffset: 15,


  })

})


<script>
  var productimg= document.getElementById("productimg")
  var smallimages= document.getElementsByClassName("small-images");
      smallimages[0].onclick= function()
      {
        productimg.src= smallimages[0].src;
      }    

smallimg[1].onclick= function()
      {
        productimg.src= smallimages[1].src;
      }    
      smallimg[2].onclick= function()
      {
        productimg.src= smallimages[2].src;
      }    
      smallimg[3].onclick= function()
      {
        productimg.src= smallimages[3].src;
      }    
      smallimg[4].onclick= function(4)
      {
        productimg.src= smallimages[4].src;
      }    
      
      </script>


<script type="text/javascript">
    $(document).ready(function() {
        $('#productimg').elevateZoom();
    });
</script>

