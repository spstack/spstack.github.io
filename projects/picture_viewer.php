<html>
  <head>
    <link rel="stylesheet" type="text/css" href="../main.css"/>
    <link rel="stylesheet" type="text/css" href="project_pages.css"/>

    <title>Scott Stack</title>

    <script type="text/javascript">
      var blue_pressed = 0;
      var green_pressed = 0;
      var red_pressed = 0;

      var redColor = 255;
      var greenColor = 255;
      var blueColor = 255;

      var mouseY = 0;
      
      var redPotLine;
      var greenPotLine;
      var bluePotLine;

      function unPressButtons() {
        if (red_pressed == 1) {
          red_pressed = 0;
        }
        else if (green_pressed == 1) {
          green_pressed = 0;
        }
        else if (blue_pressed == 1) {
          blue_pressed = 0;
        }
      }

      function mouseMoved(evt) {
        mouseY = evt.clientY;
      }

      setInterval(function monitorMouse() {
        var redtest = document.getElementById("redtest");
        var greentest = document.getElementById("greentest");
        var bluetest = document.getElementById("bluetest");

        if (red_pressed == 1) {
          redColor = 255/200 * mouseY;
          redPot.setAttribute("transform", "rotate(" + 360/255 * redColor.toString() + " 902 72)");
          
          //redtest.innerHTML = redColor.toString(); 
        }
        else if (green_pressed == 1) {
          greenColor = 255/200 * mouseY;
          greenPot.setAttribute("transform", "rotate(" + 360/255 * greenColor.toString() + " 982 72)");

          //greentest.innerHTML = greenColor.toString(); 
        }
        else if (blue_pressed == 1) {
          blueColor = 255/200 * mouseY;
          bluePot.setAttribute("transform", "rotate(" + 360/255 * blueColor.toString() + " 1062 72)");

          //bluetest.innerHTML = blueColor.toString(); 
        }

        document.getElementById("page_title").style.color = "rgb(" + Math.floor(redColor).toString() + "," + Math.floor(greenColor).toString() + "," + Math.floor(blueColor).toString() + ")";

      }, 100);


    </script>

  </head>


  <body>
    <div id="page">
      <div id="Banner">
	
	<p id="page_title">Scott Stack</p>
	<object data="../main_circuit.svg" type="image/svg+xml" style="position:absolute;height:100%;width:100%" id="svg_circuit"></object>
	
	<script>
	  var redPot;
	  var greenPot;
	  var BluePot;
	  
	  var svgElm = document.getElementById("svg_circuit"); 
	  svgElm.addEventListener("load",function(){
	  var svgDoc = svgElm.contentDocument;
	  svgDoc.addEventListener("mousemove", function mouseMoved(evt) {
	    mouseY = evt.clientY;
	  }, false);

	  svgDoc.getElementById("main_circuit").addEventListener("click", function unClickButtons(evt) {
	    if (clickedOnce == 0) {
              if (red_pressed == 1) {
                red_pressed = 0;
              }
              if (green_pressed == 1) {
                green_pressed = 0;
              }
              if (blue_pressed == 1) {
                blue_pressed = 0;
              }
	    }
	    clickedOnce = 0;
	  }, false);

	  redPot = svgDoc.getElementById("red_pot");
	  redPot.addEventListener("mousedown",function redPressed() {
	    red_pressed = 1;
	    clickedOnce = 1;
	  } , false);
	  redPot.style.cursor = "pointer";
	  
	  greenPot = svgDoc.getElementById("green_pot");
	  greenPot.addEventListener("mousedown",function greenPressed() {
    	    green_pressed = 1;
	    clickedOnce = 1;
	  },false);
	  greenPot.style.cursor = "pointer";
	  
	  bluePot = svgDoc.getElementById("blue_pot");
	  bluePot.addEventListener("mousedown",function bluePressed() {
	    blue_pressed = 1;
	    clickedOnce = 1;
	  },false);
	  bluePot.style.cursor = "pointer";

          
	  },false);
	</script>

      </div>

      <!-- TEST the potentiometer values
      Red Pressed: <p id="redtest"></p>
      Green Pressed: <p id="greentest"></p>
      Blue Pressed: <p id="bluetest"></p>
      -->

      <div class="navbar">
	<table class="navbar_table" cellspacing="0">
	  <tr>
	    <td class="navbar_entry">
	      <a href="../index.html">
		Home
	      </a>
	    </td>

	    <td class="navbar_entry">
	      <a href="../projects.html" style="color:#FFFFFF;background:#006561;">
		Projects
	      </a>
	      <ul>
                <li class="submenu_item"><a href="power_supply.html">Bench Power Supply</a></li>
                <li class="submenu_item"><a href="pcb_clock.html">PCB Alarm Clock</a></li>
			          <li class="submenu_item"><a href="night_vision.html">Night Vision Goggles</a></li>
                <li class="submenu_item"><a href="desk.html">Motorized Desk</a></li>
                <li class="submenu_item"><a href="IR_recorder.html">IR Recorder</a></li>
                <li class="submenu_item"><a href="home_automation_v2.html">Home Automation V2</a></li>
                <li class="submenu_item"><a href="internet_robot.html">Internet Robot</a></li>
                <li class="submenu_item"><a href="N64_mod.html">N64 Mod</a></li>
                <li class="submenu_item"><a href="../projects.html">. . .</a></li>
	      </ul>
	    </td>

	    <td class="navbar_entry">
	      <a href="../contact.html">
		Contact
	      </a>
	    </td>

	  </tr>
	</table>
      </div>
      <div class="main_content">
	    <br/>

  NOTE: Seems github does not support php...
	<!-- <?php
	  echo "<a style=\"font-size:28px;padding-left:15px;\" href=\"";
	  echo $_GET["referer"];
	  echo ".html\"> <<<< BACK </a>";   
	  echo "<br/>";
	 
	  echo "<img src=\"";
	  echo $_GET["img"];
	  echo  ".jpg\" style=\"display:block;margin-left:auto;margin-right:auto;margin-top:25px;padding-bottom:25px;max-width:98%;max-height:1200px\" />";
	  echo "\n";
	?> -->

      </div>

      <!--footer      -->
      <div id="footer">
	Site written and designed by Scott Stack &nbsp &nbsp &nbsp &nbsp |
	&nbsp &nbsp &nbsp &nbsp Last updated 08/06/2013
      </div>

    </div>
    
  </body>
</html>
