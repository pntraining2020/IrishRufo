<html>

<head>
  <title>Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous">
  </script>
<style>
@import 'https://fonts.googleapis.com/css?family=Nova+Mono|Eczar';
#body {
  background-color: #848991;
  color: white;
}

#div1 {
  transform: translateY(33%);
}

#time {
  font-family: 'Nova Mono', monospace;
  font-size: 15px;;
  text-align: center;
  /* text-shadow: 0px 0px 20px; */
}

#date {
  font-family: 'Eczar', serif;
  font-size: 17px;;
  text-align: center;
  /* text-shadow: 0px 0px 20px blue; */
}


</style>
</head>

<body id="body" class="container-fluid">
  <div id="div1">
    <p id="date"></p>
    <p id="time"></p>
  </div>
</body>
<script>
var time= '';
    window.setInterval(ut, 1000);
    function ut() {
        var d = new Date();
        document.getElementById("time").innerHTML = d.toLocaleTimeString();
        document.getElementById("date").innerHTML = d.toLocaleDateString();
    }

    $(document).ready(function(){
        var d = new Date();
        $("#clockInbutton").click(function(){
            $('#clockIn').val(d.toLocaleTimeString());
        });

        $('#startbutton').click(function(){
            $('#start').val(d.toLocaleTimeString());
        })

        $('#endbutton').click(function(){
            $('#end').val(d.toLocaleTimeString());
        })
    });
    





</script>

</html>