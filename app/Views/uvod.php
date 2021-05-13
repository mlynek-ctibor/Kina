<div class="container">
 <h1 style="text-align: center">KINO OLŠAVA</h1>

<p style="text-align: center">Přejeme hezkou podívanou</p>
<img src="https://www.dasym.com/wp-content/uploads/2017/07/Cinema-Image-by-Alexandre-Chassignon-on-Flickr.jpg" width="1200" height="900" align="middle">
<script type="text/javascript">
    
    var events = <?php echo json_encode($data) ?>;
     
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()
            
    $('#calendar').fullCalendar({
      header    : {
        left  : 'prev,next today',
        center: 'title',
        right : 'month,agendaWeek,agendaDay'
      },
      buttonText: {
        today: 'today',
        month: 'month',
        week : 'week',
        day  : 'day'
      },
      events    : events
    })
</script>

    
</body>
</html>
</div>


</body>
</html>