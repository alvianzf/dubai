<!-- Footer -->
	
		
		
        <!-- Loading Third Party Scripts -->

		<script src="<?php echo base_url(); ?>third-party/jquery/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>third-party/easing/js/jquery.easings.min.js"></script>
		<script src="<?php echo base_url(); ?>third-party/bootstrap/js/bootstrap.min.js"></script>	
		<script src="<?php echo base_url(); ?>third-party/nivo-lightbox/js/nivo-lightbox.min.js"></script>
		<script src="<?php echo base_url(); ?>third-party/owl/js/owl.carousel.js"></script>
		<script src="<?php echo base_url(); ?>third-party/counter-up/js/jquery.counterup.min.js"></script>
		<script src="<?php echo base_url(); ?>third-party/form-validation/js/formValidation.js"></script>
		<script src="<?php echo base_url(); ?>third-party/form-validation/js/framework/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>third-party/waypoint/js/waypoints.min.js"></script>
		<script src="<?php echo base_url(); ?>third-party/wow/js/wow.min.js"></script>
		<script src="<?php echo base_url(); ?>third-party/slimscroll/jquery.slimscroll.js"></script>		
		<script src="<?php echo base_url(); ?>cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js"></script>
		
		<!-- Loading Page's Scripts -->
		
		<script  src="<?php echo base_url(); ?>third-party/datatables/media/js/jquery.dataTables.min.js"></script>
		<script  src="<?php echo base_url(); ?>third-party/datatables/media/js/dataTables.bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>third-party/dropzone/js/dropzone.min.js"></script>
		<script src="<?php echo base_url(); ?>third-party/date-range-picker/js/moment.min.js"></script>
		<script src="<?php echo base_url(); ?>third-party/date-range-picker/js/daterangepicker.js"></script>
		<script src="<?php echo base_url(); ?>third-party/pick-a-color/dependencies/tinycolor-0.9.15.min.js"></script>
		<script src="<?php echo base_url(); ?>third-party/pick-a-color/js/pick-a-color-1.2.3.min.js"></script>
		<script src="<?php echo base_url(); ?>third-party/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
		<script src="<?php echo base_url(); ?>third-party/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
		<script src="<?php echo base_url(); ?>third-party/bootstrap-multiselect/js/bootstrap-multiselect.js"></script>
		
		<!-- Export functionality -->
		<script src="<?php echo base_url(); ?>cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
		<script src="<?php echo base_url(); ?>cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
		<script src="<?php echo base_url(); ?>cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
		<script src="<?php echo base_url(); ?>cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
		<script src="<?php echo base_url(); ?>cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
		<script src="<?php echo base_url(); ?>cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
		<script src="<?php echo base_url(); ?>cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
		<!-- End of Export functionality -->
		
		<script>
			$('#example1').DataTable();
			$('#example2').DataTable( {
				dom: 'Bfrtip',
				buttons: [
					'copy', 'csv', 'excel', 'pdf', 'print'
				]
			});
		</script>
		
        <!-- Loading Theme's Scripts -->

        <script src="<?php echo base_url(); ?>js/scripts.js"></script>
        <script src="<?php echo base_url(); ?>js/custom.js"></script>
        <script src="<?php echo base_url(); ?>js/date.js"></script>
		
		<script>
			$(function(){
				$('.slim-scroll-div').slimscroll({
					height: 'auto'
				})
			});
		</script>
		<script>
			$('#singleDatePicker').daterangepicker({
				"singleDatePicker": true,
				
			});
			</script>
			<script>
      $( function() {
        $( "#datepicker" ).datepicker({dateformat: 'yy-mm-dd' });
      } );
    </script>
		

		</body>

<!-- Mirrored from nucleus.amazyne.com/v2/dark/tables-datatables.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Feb 2019 12:45:19 GMT -->
</html>
