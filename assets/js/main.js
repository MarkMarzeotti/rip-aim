// var pageLink = 'https://ripaim.markmarzeotti.com/';
//var pageLink = 'http://localhost:8888/personal/rip-aim/';
var pageLink = 'https://aimliveson.com/';

// ReCAPTCHA Secret Key
// 6LdOzDwUAAAAAHTRRn4GmQtao7cB6W7LlJWovvsR

var a2a_config = a2a_config || {};
a2a_config.linkurl = pageLink + "assets/img/aol-instant-messenger.png";

a2a_config.templates = a2a_config.templates || {};

a2a_config.templates.facebook = {
    app_id: "5303202981",
    redirect_uri: "",
    quote: ""
};

window.onload = function(){
  var genBucket = $(".gen-bucket");

  var screennameInput = document.getElementById("screenname");

  var buryScreenname = function(e) {
    e.preventDefault();

    // log ip address incase I want to lock it down for too many requests
    // $.getJSON('//api.ipify.org?format=jsonp&callback=?', function(data) {
    //   console.log(data.ip);
    // });

    var screenname = screennameInput.value;
    if (screenname.length >= 3 && screenname.length <= 16) {
      var canvas = document.getElementById("canvas");
      var context = canvas.getContext("2d");
      var imageObj = new Image();
      imageObj.onload = function(){
        context.drawImage(imageObj, 0, 0);

        var x = canvas.width / 2;
        var y = canvas.height / 3 + 134;

        context.font = '69px apple';
        context.textAlign = 'center';
        context.fillStyle = '#080881';
        context.fillText(screenname, x, y);

        var canvasData = canvas.toDataURL("image/png");

        var base64Image = canvasData.split(';base64,').pop();

        // Fire off the request to save.php
        request = $.ajax({
            url: 'save.php',
            method: "POST",
            data: { image: base64Image, screenname: screenname },
            dataType: "html"
        });

        request.done(function (response, textStatus, jqXHR){
            // Log a message to the console
            console.log("image created");

            // next we need to update all the share meta
            $('.a2a_kit').attr('data-a2a-url', pageLink + '?screenname=' + screenname);
            a2a_config.linkurl = pageLink + "?screenname=" + screenname;

            genBucket.html('<img src="' + pageLink + 'generated/' + screenname + '.png">').show();
            $('.aol h1').remove();
            $('.aol .create-image').remove();
            $('.aol .share').show();
            $('.aol .a2a_kit .download').attr('href', 'download.php?file=generated/' + screenname + '.png');
        });

        request.fail(function (jqXHR, textStatus, errorThrown){
            // Log the error to the console
            console.error(
                "The following error occurred: "+
                textStatus, errorThrown
            );
        });

      };
      imageObj.src = "./assets/img/generator-bg.png";
    }
  };

  var bury = document.getElementById("bury");
  bury.addEventListener('submit', buryScreenname);
};
