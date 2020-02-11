<html>
    <head>
        <style></style>

            <script>
              function unhide_from() {
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
            <?php //http://www.openjs.com/scripts/events/keyboard_shortcuts/ ?>
            <script>
                shortcut.add("Backspace", function() {
                  window.history.back();
                }); 
                shortcut.add("F1", function() {
                  var settingsButton = document.getElementById("settingsButton");
                  settingsButton.click();
                }); 

            </script>
            <?php 
            if ("$scriptname" == "answer.php") {
                include 'answer_js.php';
            } else if ("$scriptname" == "question.php") {
                include 'question_js.php';
            }
            ?>
    </head>
    