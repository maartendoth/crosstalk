<html>
    <head>
        <style></style>

            <script>
              function myFunction() {
                var x = document.getElementById("myDIV");
                if (x.style.display === "none") {
                  x.style.display = "";
                } else {
                  x.style.display = "block";
                }
              }
            </script>

            <script>
              function playAudio() { 
                var y = document.getElementById("myAudio"); 
                y.play(); 
              } 
            </script>

            <script type="text/javascript" src="js/shortcut.js"></script>
            <script>
                shortcut.add("Backspace", function() {
                  window.history.back();
                }); 
                shortcut.add("Space", function() {
                  var showButton = document.getElementById("showButton");
                  showButton.click();
                }); 
            </script>
            <?php 
            if ("$scriptname" == "answer.php") {
                echo '<script>
                shortcut.add("r", function() {
                  var easyButton = document.getElementById("easyButton");
                  easyButton.click();
                });   
              </script>';
            } else if ("$scriptname" == "question.php") {
                echo '<script>
                shortcut.add("r", function() {
                  var replayButton = document.getElementById("replay");
                  replayButton.click();
                });   
                    </script>';
            }
            ?>
            <script>
                shortcut.add("q", function() {
                  var cluelessButton = document.getElementById("cluelessButton");
                  cluelessButton.click();
                });     
                shortcut.add("w", function() {
                    var wrongButton = document.getElementById("wrongButton");
                  wrongButton.click();
                }); 
                shortcut.add("e", function() {
                  var goodButton = document.getElementById("goodButton");
                  goodButton.click();
                }); 
                shortcut.add("t", function() {
                    var knownButton = document.getElementById("knownButton");
                    knownButton.click();
                });
            </script>
    </head>
    