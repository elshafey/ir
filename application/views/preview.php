<html>
    <body style="width: 1024">
        <div style="float: left;width: 100%;margin-bottom: 850px">
            <img  src="<?php echo site_url('business-cards/En-back.jpg') ?>">
        </div>
        <div style="float: left;width: 100%">
            <span class="card-info" style="top:435px;font-weight: bold;color:rgb(39,155,212)"><?php echo $_REQUEST['name_en'] ?></span>
            <span class="card-info" style="top:440px"><?php echo $_REQUEST['title_en'] ?></span>
            <span class="card-info" style="top:710px"><?php echo $_REQUEST['tel'] ?></span>
            <span class="card-info" style="top:720px"><?php echo $_REQUEST['direct'] ?></span>
            <span class="card-info" style="top:730px"><?php echo $_REQUEST['fax'] ?></span>
            <span class="card-info" style="top:735px"><?php echo $_REQUEST['email'] ?></span>
            <span class="card-info" style="top:750px"><?php echo $_REQUEST['web'] ?></span>
            <span class="card-info" style="top:765px"><?php echo $_REQUEST['charity'] ?></span>
            <img  src="<?php echo site_url('business-cards/En-Front.jpg') ?>">
        </div>
        <style>
            .card-info{
                font-family: sans-serif;
                font-size: 34px;
                margin-left: 532px;
                position: relative;
            }
        </style>
    </body>
</html>