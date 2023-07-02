$(document).ready(function () {

    const $submitBtn = $('#form_submit_button')
    $('#mail_form input,#mail_form textarea').on('change', function () {
      if (
        $('#mail_form input[type="text"]').val() !== "" &&
        $('#mail_form input[type="email"]').val() !== "" &&
        $('#mail_form input[type="textarea"]').val() !== "" &&
        $('#mail_form input[type="checkbox"]').val() !== "" &&
        $('#mail_form #privacyCheck').prop('checked') === true
      ) {
        $submitBtn.prop('disabled', false);
  
      } else {
        $submitBtn.prop('disabled', true);
      }
    });
  
  });