//bid click interact
const modal = document.getElementById("myModal");
//GET Button that opens modal
const btn = document.querySelectorAll('addTo');

// When the user clicks on the button, open the modal 
$('.addTo').click(function(){
  modal.style.display = "block";
});

// Get the <span> element that closes the modal
var span = document.getElementsByClassName('close')[0];


//user click on the (X)
$('#myModal').click(function(){
  modal.style.display = "none";
});


 //user clicks on the outside
 window.onclick = function(){
     if(event.target == modal){
        modal.style.display = "none";
     }
     
 }
// Set the date we're counting down to
var countDownDate = new Date("Jan 24, 2019 12:58:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  var items = document.querySelectorAll('.item');
  items.forEach(function(item) {
      var itemDeadline = item.querySelector('.deadline');
      if(itemDeadline) {
        writeDeadline(itemDeadline);
      }
  })

  function calculateDeadline() {
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var interval = Math.random();
    var dayInterval = interval * days;
    var newDays = Math.ceil(dayInterval);
    var hours = Math.ceil(interval * 24);
    var minutes = Math.ceil(interval * 60);
    var seconds = Math.ceil(interval * 60);
    return [newDays, hours, minutes, seconds]
  }
    
  function writeDeadline(element) {
    // Output the result in an element with id="demo"
    var deadline = calculateDeadline();
    element.innerHTML = deadline[0] + "d " + deadline[1] + "h "
    + deadline[2] + "m " + deadline[3] + "s ";
  }
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("acer-lap").innerHTML = "EXPIRED";
  }
}, 1000);



// nave close and open
function openNav() {
  document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
}


// show more
// function toggleShow(){
//   var x = document.getElementById("myhide");
//   if(x.style.display==="none"){
//     x.style.display = "block";
//   }
//   else{
//     x.style.display = "none";
//   }
// }

