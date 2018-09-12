$(document).ready(function(){


  /* NEWSLETTER SIGNUP */
  $('form#newsletter_signup').submit(function(event) {
    event.preventDefault();
    var $form = $(this);
    $.ajax({
      type: $form.attr('method'),
      url: $form.attr('action'),
      data: $form.serialize()
    }).done(function(data) {
      $form.find('#subscription_status').html("<h3>" + data + "</h3>");
    }).fail(function(data) {
      $form.find('#subscription_status').html("<h3>" + data + "</h3>");
    });
  });
  /* END NEWSLETTER SIGNUP */

});