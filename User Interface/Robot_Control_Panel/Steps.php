

<!DOCTYPE html>
<html>

<head>
    <title>Control Panel</title>
    <link rel="stylesheet" type="text/css" href="CommonStyle.css">
    

    <script>
        
        
        
        function addline(){
            
        up = document.getElementById("up").value
        left = document.getElementById("left").value
        right = document.getElementById("right").value
        down = document.getElementById("down").value
        
        if(Number(up) < 0 || Number(up) > 200) {
            document.getElementById("up").parentNode.style.borderBottomColor = "red";
            
        }else{
            alert("here")
            var endx = 200 + Number(right) - Number(left);
        var endy = 400 + Number(down) - Number(up);
        
        document.getElementById("pattern").innerHTML = "<svg height='500' width='500'><path id='lineBC' d='M 200 400 l 0 -" + up + ' l ' + right + ' 0 l 0 ' + down + ' l -' + left + " 0'  stroke='darkgrey' stroke-linecap='#arrow' marker-end='url(#arrowhead)'stroke-width='4' fill='none' /><g stroke='black' stroke-width='3' fill='black'><circle id='pointA' cx=200 cy=400 r='3' /> <circle id='pointA' cx="+endx+" cy="+endy+" r='3' /></g></svg>"
         
            xmlhttp = new XMLHttpRequest();
            xmlhttp.open("POST", "steps_sender.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        
          
            
            xmlhttp.send("up="+up+"&right="+right+"&down="+down+"&left="+left+"");
        
        
            
            
            
        }
            
           
            
        }

    </script>

</head>

<body>

    <h1>Path Controller</h1>


    

        <form>

        </form>

        <table style="margin:auto;">
            <tr>
                <td style="height: 500px">
                    <div class="center" style="width: 150px; height: 400 px; margin: auto; text-align: center">
                    <table style="text-align: center; margin: auto; padding: 0px; height: 400px;">
            
            <tr>
                
                <td class="directions">
                    &#8678; <input id="left" type="number" class="inputStyle" min="0" max="200">
                </td>
                
            </tr>
            <tr>
                <td class="directions">
                    &#8679; <input id="up" type="number" class="inputStyle">
                </td>
            </tr>
            <tr>
                <td class="directions">
                    &#8680; <input id="right" type="number" class="inputStyle">
                </td>
            </tr>
            <tr>
                <td class="directions">
                    &#8681; <input id="down" type="number" class="inputStyle">
                </td>
            </tr>
                        <tr>
                        <td>
                            <br>
                            <button class="buttonStyle" onclick="addline()">Create Path</button>
                            </td>
                        </tr>
            
        </table>
                        </div>
                    
                </td>
                <td>
                     <div id="pattern"  style="background-color: white; color: black; width: 500px; margin: auto; text-align: center; height: 540px; border-radius: 20px">
        &nbsp;
</div>

                </td>
            </tr>
        </table>
        
    
    <br>
    
   
    
    
    
    
    
</body>

</html>