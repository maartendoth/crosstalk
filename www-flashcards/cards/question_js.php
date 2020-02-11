<script>
    shortcut.add("w", function() {
        unhide_from();
    }); 
    shortcut.add("r", function() {
        var replayButton = document.getElementById("replay");
        replayButton.click();
    }); 
    shortcut.add("e", function() {
        var showButton = document.getElementById("showButton");
        showButton.click();
    });             
</script>