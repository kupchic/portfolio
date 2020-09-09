$(document).ready(function () {
  $(".contact_form").submit(function () {
    let formID = $(this).attr('id');
    let formNm = $('#' + formID);
    let message = $(formNm).find(".done-message");
    let formTitle = $(formNm).find(".form-title-message");
    $.ajax({
      type: "GET",
      url: '../send-message-to-telegram.php',
      data: formNm.serialize(),
      // contentType: "application/json; charset=utf-8",
      // dataType: "json",
      success: function (data) {
        // Вывод сообщения об успешной отправке
        message.html(data);
        formTitle.css("display", "none");
        setTimeout(function () {
          formTitle.css("display", "block");
          message.html('');
          $('input').not(':input[type=submit], :input[type=hidden]').val('');
        }, 5000);
      },
      error: function (jqXHR, text, error) {
        // Вывод сообщения об ошибке отправки
        message.html(error);
        formTitle.css("display", "none");
        setTimeout(function () {
          formTitle.css("display", "block");
          message.html('');
          $('input').not(':input[type=submit], :input[type=hidden]').val('');
        }, 5000);
      }
    });
    return false;
  });
});