$.passwordButtonViewer = function() {
    $('#password_login').on("mousedown", function(event) {
      $(this).attr("type", "text");
    });

    $('#password_login').on("mouseup", function(event) {
      $('#password_login').attr("type", "password");
    });
  }
  $.passwordButtonViewer()