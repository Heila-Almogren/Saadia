

<!DOCTYPE html>
<html>

<head>
    <title>Control Panel</title>
    <link rel="stylesheet" type="text/css" href="CommonStyle.css">
    <script>
        function showLetter(v) {
        if (window.XMLHttpRequest) {
          xmlhttp = new XMLHttpRequest();
        }
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("response").style.display = "block";
              document.getElementById("response").innerHTML = this.responseText;
          }
        };
        xmlhttp.open("GET", "controller.php?q="+v, true);
        xmlhttp.send();
      
        }
    </script>

</head>

<body>

    <h1>Control Panel</h1>


    <div class="center" style="width: 340px; height: 370 px; margin: auto; text-align: center">

      

        <table style="text-align: center; margin: auto; padding: 0px;">
            <tr>
                <td>
                </td>
                <td class="active" onclick="showLetter('Ahead')">
                    <p>
                        &#8679; <br> Ahead
                    </p>
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td class="active" onclick="showLetter('Left')">
                    <p >
                        &#8678;<br>Left
                    </p>
                    
                </td>
                <td class="stop active" onclick="showLetter('Stop')">
                    <p>
                        ||<br>Stop
                    </p>
                    
                    </td>
                <td class="active" onclick="showLetter('Right')">
                    <p>
                        &#8680;<br> Right
                    </p>
                    
                    </td>
            </tr>
            <tr>
                <td>
                </td>
                <td class="active" onclick="showLetter('Back')">
                    <p>
                        &#8681;<br>Back
                    </p>
                    </td>
                <td>
                </td>
            </tr>
        </table>
    </div>
    <br>
    
    <div class="center" id="response" style="background-color: white; color: black; width: 340px; height: 370 px; margin: auto; text-align: center;">
        
</div>
</body>

</html>