//bid click interact
var modal = document.getElementById("myModal");
//GET Button that opens modal
var btn = document.getElementById('addTo');


// Get the <span> element that closes the modal
var span = document.getElementsByClassName('close')[0];

// When the user clicks on the button, open the modal 
btn.onclick = function(){
    modal.style.display = "block";
}

//user click on the (X)
span.onclick = function(){
    modal.style.display = "none";
}

 //user clicks on the outside
 window.onclick = function(){
     if(event.target == modal){
        modal.style.display = "none";
     }
     
 }


 
