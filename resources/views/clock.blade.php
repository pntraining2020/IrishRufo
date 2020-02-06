<!-- 
Copyright ValyTGV
-->
<html>

<head>
  <title>Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Add online Bootstrap -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <style>
    
    .button {
    background-color: grey;
    border: none;
    color: white;
    padding: 10px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 5px;
    transition: 0.7s;
    }

     .button:hover {
    opacity: 1;
    padding-left: 25px; 
    background-color: #0760f0;

    }
    .button2 {background-color: #008CBA;}
    .startBreak {background-color: #008CBA;}

    .button span {
    cursor: pointer;
    display: inline-block;
    position: relative;
    transition: 0.5s;
    }

    .button span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
    }
    input[type=text] {
        background: transparent;
        border: none;
        border-bottom: 1px solid #000000;
    }

    </style>
</head>
<body>

<hr>
    <form action="{{Route('updateclockIn'),clockIn }}">
        <input type = submit id ='clockInbutton' class = 'button button2'>
            clock-in
        <input id = 'clockIn' type="text" name = 'clockIn' disabled value = ''><br>
    </form>
    <button id = 'startbutton' class = 'button startBreak'>
        start
    </button><input id = 'start' type="text" disabled><br>
    <button  id = 'endbutton' class = 'button button2'>
        end
    </button><input id = 'end' type="text" disabled><br>
    <button class = 'button button2'>
        clock-out
    </button><input id = 'checkOut' type="text" disabled><br>
</body>
<script>

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
