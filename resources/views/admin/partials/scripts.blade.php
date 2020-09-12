

</div>
<!-- ./wrapper -->




<!-- jQuery 3 -->
<script src="{{ asset ('admin/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset ('admin/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->


<!-- Upload file progress bar scripts -->



<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset ('admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Morris.js charts -->
<script src="{{ asset ('admin/bower_components/raphael/raphael.min.js') }}"></script>
<script src="{{ asset ('admin/bower_components/morris.js/morris.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset ('admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ asset ('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset ('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset ('admin/bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset ('admin/bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ asset ('admin/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{ asset ('admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset ('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ asset ('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset ('admin/bower_components/fastclick/lib/fastclick.js') }}"></script>

<script src="{{ asset ('admin/bower_components/ckeditor/ckeditor.js') }}"></script>

<script>
CKEDITOR.replace( 'bhw-ckeditor' );
</script>




<!-- AdminLTE App -->
<script src="{{ asset ('admin/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset ('admin/dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset ('admin/dist/js/demo.js') }}"></script>


<!-- File upload from forms -->
<script src="http://malsup.github.com/jquery.form.js"></script>


<script>
$(document).ready(function(){

    $('form#report').ajaxForm({
      beforeSend:function(){
        $('#success').empty();
        $('button.btn.btn-primary').hide();
        $('h3.uploading-text').show();
      },
      uploadProgress:function(event, position, total, percentComplete)
      {
        $('.progress-bar').text(percentComplete + '%');
        $('.progress-bar').css('width', percentComplete + '%');
      },

      success:function(data)
      {
        
        if(data.errors)
        {
          $('.progress-bar').text('0%');
          $('.progress-bar').css('width', '0%');
          $('#success').html('<span class="text-danger"><b>'+data.errors+'</b></span>');
        }
        if(data.success)
        {
          $('.progress-bar').text('Uploaded');
          $('.progress-bar').css('width', '100%');

          $('#success').html('<span class="text-success"><b>'+data.success+'</b></span><br /><br />');
          $('#success').append(data.image);
        }
      window.location.replace("/reports");
      }
    });

});
</script>



<script>
$(document).ready(function(){
    $('form#bulletin').ajaxForm({
      beforeSend:function(){
        $('#success').empty();
        $('button.btn.btn-primary').hide();
        $('h3.uploading-text').show();
      },
      uploadProgress:function(event, position, total, percentComplete)
      {
        $('.progress-bar').text(percentComplete + '%');
        $('.progress-bar').css('width', percentComplete + '%');
      },

      success:function(data)
      {
        
        if(data.errors)
        {
          $('.progress-bar').text('0%');
          $('.progress-bar').css('width', '0%');
          $('#success').html('<span class="text-danger"><b>'+data.errors+'</b></span>');
        }
        if(data.success)
        {
          $('.progress-bar').text('Uploaded');
          $('.progress-bar').css('width', '100%');

          $('#success').html('<span class="text-success"><b>'+data.success+'</b></span><br /><br />');
          $('#success').append(data.image);
        }
      window.location.replace("/bulletins");
      }

    });

});
</script>


</body>
</html>
