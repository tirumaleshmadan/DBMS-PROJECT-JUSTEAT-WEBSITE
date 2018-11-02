<html>
       <head>
       <script>
                     $('[data-countdown]').each(function() {
  var $this = $(this), finalDate = $(this).data('countdown');
  $this.countdown(finalDate, function(event) {
    $this.html(event.strftime('%D days %H:%M:%S'));
  });
});
       </script>
       </head>
       <body>
             <div data-countdown="2016/01/01" width="auto" height="auto"><p></p></div>
<div data-countdown="2017/01/01"></div>
<div data-countdown="2018/01/01"></div>
<div data-countdown="2019/01/01"></div>
       </body>
</html>