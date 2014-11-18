<style>
body{margin:0px;padding:0px;}
</style>
<script type="text/javascript" src="../../media/jwplayer/jwplayer.js"></script>
<script type="text/javascript">jwplayer.key="urlBkfVrG/oUFQmIEaITs1ZI5098pA1vyqo7Fg==";</script>
<div id="myElement">Loading the player...</div>
<script type="text/javascript">
    jwplayer("myElement").setup({
        file: "../../<?php echo $review->media?>",
        image: "../../uploads/review/<?php echo $review->image?>",
        width: "500",
        height: "344"
    });
</script>