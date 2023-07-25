





// <!-- login button java script  -->

// Open the first modal with JavaScript
document.getElementById('openModal1').addEventListener('click', function () {
    var myModal = new bootstrap.Modal(document.getElementById('exampleModalToggle'));
    myModal.show();
});

// Close the second modal when the first modal is hidden
$('#exampleModalToggle').on('hidden.bs.modal', function () {
    $('#exampleModalToggle2').modal('hide');
});

// Close the first modal when the second modal is hidden
$('#exampleModalToggle2').on('hidden.bs.modal', function () {
    $('#exampleModalToggle').modal('hide');
});





// userd Car image size increase model user_cars.php

var imageModal = document.getElementById('imageModal');
var imageLinks = document.querySelectorAll('[data-bs-toggle="modal"]');
imageLinks.forEach(function (link) {
    link.addEventListener('click', function (event) {
        event.preventDefault();
        var imageSrc = this.getAttribute('href');
        var modalImage = imageModal.querySelector('img');
        modalImage.src = imageSrc;
        new bootstrap.Modal(imageModal).show();
    });
});





// Used Cars Ajax 
// function loadCards(page) {
//     // Send an AJAX request to fetch the cards for the given page
//     var xhr = new XMLHttpRequest();
//     xhr.open('GET', 'used_cars_get_cards.php?page=' + page, true);
//     xhr.onload = function () {
//         if (xhr.status === 200) {
//             // Update the card container with the fetched cards
//             document.getElementById('card-container').innerHTML = xhr.responseText;
//             // Update the active class for the pagination link
//             var paginationContainer = document.getElementById('pagination-container');
//             var paginationLinks = paginationContainer.getElementsByTagName('a');
//             for (var i = 0; i < paginationLinks.length; i++) {
//                 paginationLinks[i].classList.remove('active');
//             }
//             paginationLinks[page - 1].classList.add('active');
//         }
//     };
//     xhr.send();
// }




