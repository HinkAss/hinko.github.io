$(document).ready(function() {
    $('.add-to-cart').on('click', function(event) {
        event.preventDefault();
        let id = $(this).data('id');
        console.log('Button ID:', id);
    });
});