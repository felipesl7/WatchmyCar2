<?php
/**
 * Created by PhpStorm.
 * User: Gabriel
 * Date: 12/02/18
 * Time: 00:09
 */
?>
<!-- jQuery 2.2.3 -->
<script src="../../resources/template/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>

<!-- App -->
<script src="../../resources/template/dist/js/app.min.js"></script>

<!-- Bootstrap 3.3.6 -->
<script src="../../resources/template/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../resources/template/plugins/iCheck/icheck.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
