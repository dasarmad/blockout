<!DOCTYPE html>
<html>

<head>
    <meta name="description" content="Remake of classic puzzle game Blockout (3d tetris) in HTML 5" />
    <title>BlockOut</title>
    <link type="text/css" rel="stylesheet" href="css/cubeout.css" />
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.cookie.js"></script>
    <script type="text/javascript" src="js/cookie.js"></script>
    <script type="text/javascript" src="js/cubeout.js"></script>
</head>

<body>
    <center>


        <div id="fps">&nbsp;</div>

        <div id="screenwrap">
			<div id="pst_rlt_cs">
		<canvas id="screen" class="shadow">
                    <div id="dummy">Sorry, you need to check this page in browser that supports HTML5 canvas (like current
                    version of Chrome, Opera, Firefox or Safari).</div>
	        </canvas>
				<div class="game-logo-cs">
	            	              <img src="css/logo.png" alt="">
				</div>
	       <div id="difficulty" class="hud">
	                <span id="speed" title="Change game speed">
	                	<span id="speed_label_details">
	                		<span id="sped_label_label">LEVEL</span>
	                		<span id="sped_label_no"></span>
	                	</span>
	                <span class="button">0</span> 
				<span class="button">1</span> 
				<span class="button">2</span> 
				<span class="button">3</span> 
				<span class="button">4</span>
	          </span>
			    
	                <span class="speed_label_text">Rotation</span>
			<span id="rotSpeed" title="Change Rotation speed"> 
				<span class="button">Slow</span> 
				<span class="button">Medium</span> 
				<span class="button">Fast</span>
		        </span>                
	                
	                <span id="keys" title="Set custom keys">
	                    <span class="button">Keys</span>
	                </span>

	                <span class="pit_label_text">PIT</span>
	                <span id="pit" title="Change pit size">
	                       <span class="button">3x3x10</span> 
	                       <span class="button">5x5x10</span> 
	                       <span class="button">5x5x12</span>
	                </span>
			    
	                <span class="pieces_label_text">BLOCK SET</span>
	                <span id="pieces" title="Change pieces complexity">
	                        <span class="button">Flat</span> 
				<span class="button">Basic</span> 
				<span class="button">Extended</span>
	                </span>
	    </div>
            
		<div id="score_label">Score</div>
	        <div id="score">&nbsp;</div>

            <div id="column"><canvas id="screen2"></canvas></div>

	</div>
            <div id="message" class="hud full">
                <div id="description" class="shadow">
                    <a href="http://en.wikipedia.org/wiki/Blockout">Blockout (3d Tetris)</a> in HTML5 from 1989.  <br />
                    <small><br />Works in Firefox, Chrome, Opera and Safari<br />
                        Best performance in Chrome and Opera</small>
                </div>

                <div id="controls">
                    Rotate with Q,W,E,A,S,D<br />
                    Move with arrows<br />
                    Drop with space<br />
                    <br />
                    Quit ESC<br />
                    Pause P<br />
                    <br />
                    <span class="action">Press "B" to Start BlockOut</span>
                </div>

                <a href="#" class="hs" style="color: #009fa0; display:block;">Browser High Scores</a> </br>
                <a href="scoreboard.php" style="display:block;">Global Ranking Scoreboard</a>
            </div>

            <div id="keyset" class="hud full">
                <h3>Set custom keys</h3>
                <small>Click on the label and then press key</small>

                <ul>
                    <li><span class="lbl">left</span> <span class="val"></span></li>
                    <li><span class="lbl">right</span> <span class="val"></span></li>
                    <li><span class="lbl">up</span> <span class="val"></span></li>
                    <li><span class="lbl">down</span> <span class="val"></span></li>
                    <li><span class="lbl">rotate X+</span> <span class="val"></span></li>
                    <li><span class="lbl">rotate X-</span> <span class="val"></span></li>
                    <li><span class="lbl">rotate Y+</span> <span class="val"></span></li>
                    <li><span class="lbl">rotate Y-</span> <span class="val"></span></li>
                    <li><span class="lbl">rotate Z+</span> <span class="val"></span></li>
                    <li><span class="lbl">rotate Z-</span> <span class="val"></span></li>
                    <li><span class="lbl">drop</span> <span class="val"></span></li>
                </ul>
                <span class="button xb gold" id="keys_reset">Reset to default</span>
                <span class="button xb" id="keys_ok">Accept</span>
                <span class="button xb red" id="keys_cancel">Cancel</span>
            </div>

            <div id="highscores" class="hud full">
                <h3>High Scores</h3>
                <small>On this computer and browser</small>
                <div id="hscontent"></div>
                <span class="button xb" id="hs_back">Back</span>
            </div>

            <div id="getGamerName" class="hud">
                <h2>Game Over</h2>
                <br />
                <input name="username" placeholder="Name" class="username-input" id="username" autocomplete="off" autofocus>
                <br />
                <span class="username-rule">Your name may contain only alphabets, digits and underscores </br> (max 20 characters)</span>
                <button onclick="showScoreUI(event)" class="username-submit-btn">Save</button>
            </div>

            <div id="over" class="hud">
                <h2>Game over</h2>
                <br />
                <span id="namelabel">Gamer Name: </span><span id="username-label"></span><br />
                <br />
                <span id="scorelabel">Score</span> <span id="finalscore">0</span><br />
                <br />
                <span class="action">Press B to play again</span>
                
                <a href="#" class="hs" style="color: #009fa0; margin-top: 35px; display:block;">High Scores in Browser</a> </br>
                <a href="scoreboard.php" style="color: #009fa0; display:block;">High Scores on Server</a>
            </div>

            <div id="pause" class="hud">
                Pause
            </div>

        </div>

        <div id="footer">
            <small><a href="mailto:gamereality@gmail.com">Feedback</a>
                   <a href="https://twitter.com/jlivingstonsg">Twitter</a>
                   <a href="https://github.com/jlivingstonsg/BlockOut">Source</a></small>
        </div>
    </center>

    <div id="layers"></div>
    <div id="log" class="shadow"></div>


</body>

</html>
