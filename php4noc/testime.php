<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link type="text/css" href="http://jdewit.github.io/bootstrap-timepicker/css/bootstrap-timepicker.min.css" />
        <link type="text/css" href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" />
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://jdewit.github.io/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
    </head>

<script>
$(function() {
$( "#timepicker1" ).timepicker();
});
</script>
    <script>
$(function() {
$( "#timepicker2" ).timepicker();
});
</script>

    
<div class="input-append bootstrap-timepicker">
    <input id="timepicker1" type="text" class="timepicker" value="06:00 PM"/>
    <span class="add-on"><i class="icon-time"></i></span>
</div>

<div class="input-append bootstrap-timepicker">
    <input id="timepicker2" type="text" class="timepicker" value="06:00 PM"/>
    <span class="add-on"><i class="icon-time"></i></span>
</div>





<button id="submit">Generate CSV Time</button>
<br/>
<textarea id="csvContent" rows="10" cols="30" placeholder="CSV content will go here">
</textarea> 
 



<script>
        $('#timepicker1').timepicker({
    defaultTime: 'current',
    minuteStep: 1,
    disableFocus: true,
    template: 'dropdown'
});
</script>
<script>
$('#timepicker2').timepicker({
    defaultTime: 'current',
    minuteStep: 1,
    disableFocus: true,
    template: 'dropdown'
});
</script>
<script>

$(function () {
$('#submit').click(function() {
        var csv = '';
        var curtime = '';
        $('.timepicker').each(function() {
                csv += curtime = $(this).data('timepicker').getTime()      
                
                csv += ',' + "\n";
        });
        csv = csv.substr(0, csv.length-2); 
        $('#csvContent').text(csv);
 
	});
});
    </script>

</html>
