
<!--   Core JS Files   -->
<script src="/static/assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="/static/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/static/assets/js/material.min.js" type="text/javascript"></script>


    <!--   Core JS Files   -->
    <script src="/static/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="/static/assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="/static/assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="/static/assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="/static/assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="/static/assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="/static/assets/js/demo.js"></script>

    <?php if ($path == 'dashboard' ) { ?>

        <script type="text/javascript">
            $(document).ready(function(){

                demo.initChartist();

                $.notify({
                    icon: 'ti-gift',
                    message: "Welcome to <b>Paper Dashboard</b> - a beautiful Bootstrap freebie for your next project."

                },{
                    type: 'success',
                    timer: 4000
                });

            });
        </script>
        
    <?php } ?>

