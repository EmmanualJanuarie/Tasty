// ================================[ Scripting for the appearance of the filter Card]==============================
let filterIcon = document.getElementById("filterIcon");
let filterCard = document.getElementById("filterCard");

// Conditional statement to display the filter card if the user clicks on the icon
filterIcon.addEventListener("click", function(){

    if (filterCard.style.display = "none"){ //If the the filer card is not displayed then, display it when the user clicks

        filterCard.style.display = "block";
    };

});