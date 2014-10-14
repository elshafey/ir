<?php if ($type == 'preview') { ?>
    <html>
        <body style="width: 700px;float: left">
            <div style="float: left;width: 100%;">
                <img  src="<?php echo site_url('business-cards/En-back.jpg') ?>" style="float: left;width: 100%;">
            </div>
            <div style="float: left;width: 100%;margin-top: 5px;">
                <img  src="<?php echo site_url('business-cards/En-Front.jpg') ?>"  style="float: left;width: 100%;">
                <div class="card-info" style="font-weight: bold;color:rgb(39,155,212)"><?php echo $_REQUEST['name'] ?></div>
                <div class="card-info" style=""><?php echo $_REQUEST['title'] ?></div>
                <div class="card-info" style="margin-top: 10%"><?php echo $_REQUEST['address'] ?></div>
                <div class="card-info" style="margin-top: 4.1%"><?php echo $_REQUEST['tel'] ?></div>
                <div class="card-info" style=""><?php echo $_REQUEST['direct'] ?></div>
                <div class="card-info" style=""><?php echo $_REQUEST['fax'] ?></div>
                <div class="card-info" style=""><?php echo $_REQUEST['email'] ?></div>
                <div class="card-info" style=""><?php echo $_REQUEST['web'] ?></div>
                <div class="card-info" style=""><?php echo $_REQUEST['charity'] ?></div>

            </div>
            <style>
                *{
                    font-family: sans-serif;
                }
                .card-info{
                    float: left;
                    margin-left: 39%;
                    margin-top: 0.9%;
                    position: relative;
                    top: -352px;
                    width: 55%;
                }
            </style>
        </body>
    </html>
<?php } else { ?>
    <html>
        <body style="width: 1366px;background-color: white">
            <div style="float: left;width: 100%;margin-bottom: 500px">
                <img  src="<?php echo site_url('business-cards/En-back.jpg') ?>" style="width: 100%;float: left">
            </div>
            <div style="float: left;width: 100%;margin-top: 900px">
                <img  src="<?php echo site_url('business-cards/En-Front.jpg') ?>"  style="width: 100%;float: left">
                <div class="card-info" style="font-weight: bold;color:rgb(39,155,212)"><?php echo $_REQUEST['name'] ?></div>
                <div class="card-info" style=""><?php echo $_REQUEST['title'] ?></div>
                <div class="card-info" style="margin-top: 162px"><?php echo $_REQUEST['address'] ?></div>
                <div class="card-info" style="margin-top: 60px"><?php echo $_REQUEST['tel'] ?></div>
                <div class="card-info" style="margin-top: 20px"><?php echo $_REQUEST['direct'] ?></div>
                <div class="card-info" style="margin-top: 20px"><?php echo $_REQUEST['fax'] ?></div>
                <div class="card-info" style=""><?php echo $_REQUEST['email'] ?></div>
                <div class="card-info" style="margin-top: 20px"><?php echo $_REQUEST['web'] ?></div>
                <div class="card-info" style="margin-top: 20px"><?php echo $_REQUEST['charity'] ?></div>

            </div>
            <style>
                *{
                    font-family: sans-serif;
                }
                .card-info{
                    float: left;
                    font-size: 27px;
                    margin-left: 39%;
                    margin-top: 16px;
                    position: relative;
                    top: -709px;
                    width: 55%;
                }
            </style>
        </body>
    </html>
<!--<img src="<?php echo base_url('business-cards/new_card.jpg') ?>" style="width:1366px " />-->
<?php } ?>
