<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src='jquery-1.11.1.min.js'></script>
    <style media="screen">
      #pad {
        background : #def;
        border : 1px solid #aaa;
      }
    </style>
  </head>
  <body>
    <canvas id='pad' width='480' height='320'></canvas>
    <script>
      canvas =$('#pad')[0]
      context = canvas.getContext("2d")
      pendown = false

      $('#pad').mousemove(function(event)
    {
      var xpos = event.pageX - canvas.offsetLeft
      var ypos = event.pageY - canvas.offsetTop

      if(pendown) context.lineTo(xpos,ypos)
      else        context.moveTo(xpos,ypos)

      context.stroke()
      })

      $('#pad').mousedown(function() { pendown = true})
      $('#pad').mouseup(function()  {pendown = false})
    </script>
  </body>
</html>
