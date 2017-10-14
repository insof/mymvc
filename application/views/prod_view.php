<hr style="margin-top: 20px; margin-bottom: 20px;">
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-92806288-1', 'auto');
    ga('send', 'pageview');

</script>
<div class="row txt">
    <div class="col-sm-1 col-md-1"></div>
    <div class="col-sm-5 col-md-5 img-circle">
        <img class="prodimg" src="/imag/prod/<?php echo $data->_data['id'] ?>.jpg">
    </div>

    <div class="col-sm-6 col-md-6">

        <!--<caption><h2><?php echo $data->_data['nameru'] ?></h2></caption>-->

        <table id="prodtable" class="table table-striped table-hover tableprod">
            <tr>
                <td style="width: 25%;"><?php print $data->__getName(); ?></td><td style="width: 75%;"><?php echo $data->_data['name' . $data->getCurrentLanguage() . ''] ?></td>
            </tr>
            <tr>
                <td><?php print $data->__getLatname(); ?></td><td><?php echo $data->_data['namelat'] ?></td>
            </tr>
            <tr>
                <td><?php print $data->__getPacktype(); ?></td><td><?php echo $data->_data['packtype' . $data->getCurrentLanguage() . ''] ?></td>
            </tr>
            <tr>
                <td><?php print $data->__getPack(); ?></td><td><?php echo $data->_data['packaging'] ?>kg</td>
            </tr>
            <tr>
                <td><?php print $data->__getMinorder(); ?></td><td><?php echo $data->_data['minorder'] ?>kg</td>
            </tr>
            <tr>
                <td><?php print $data->__getTyype(); ?></td><td><?php echo $data->_data['tyype' . $data->getCurrentLanguage() . ''] ?></td>
            </tr>
            <tr>
                <td><?php print $data->__getSize(); ?></td><td><?php echo $data->_data['len'] ?>cm</td>
            </tr>
            <tr>
                <td><?php print $data->__getInfo(); ?></td><td><?php echo $data->_data['info' . $data->getCurrentLanguage() . ''] ?></td>
            </tr>
        </table>
    </div>

<!--    <div class="col-sm-1 col-md-1"></div>-->
</div>