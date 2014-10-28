<?php if ($type == 'preview') { ?>
    <html>
        <body style="width: 700px;float: left">
            <div style="float: left;width: 100%;">
                <img  src="<?php echo site_url('business-cards/back.jpg') ?>" style="float: left;width: 100%;">
            </div>
            <div style="float: left;width: 100%;margin-top: 5px;">
                <img  src="<?php echo site_url('business-cards/face.jpg') ?>"  style="float: left;width: 100%;">
                <div class="container">
                    <div  style="font-weight: bold;color:rgb(39,155,212)"><?php echo $_REQUEST['name'] ?></div>
                    <div style=""><?php echo $_REQUEST['title'] ?></div>
                    <div style="margin-top: 10%"><?php echo $_REQUEST['address'] ?></div>
                    <div style="margin-top: 4.1%"><?php echo $_REQUEST['tel'] ?></div>
                    <div class="card-info" style=""><?php echo $_REQUEST['direct'] ?></div>
                    <div class="card-info" style=""><?php echo $_REQUEST['fax'] ?></div>
                    <div class="card-info" style=""><?php echo $_REQUEST['email'] ?></div>
                    <div class="card-info" style=""><?php echo $_REQUEST['web'] ?></div>
                    <div class="card-info" style=""><?php echo $_REQUEST['charity'] ?></div>
                </div>
            </div>
            <style>
                *{
                    font-family: sans-serif;
                }
                .container{
                    left: 281px;
                    position: relative;
                    top: -326px;
                }
                .card-info{
                    padding-top: 6px;
                }
            </style>
        </body>
    </html>
<?php } else { ?>
    <html>
        <body style="width: 100%;background-color: white;float: left">
            <div style="float: left;width: 100%;">
                <img  src="<?php echo site_url('business-cards/back.jpg') ?>" style="width: 100%;float: left">
            </div>
            <div style="float: left;width: 100%;">
                <img  src="<?php echo site_url('business-cards/face.jpg') ?>"  style="width: 100%;float: left">
                <div class="container">
                    <div class="card-info"   style="font-size: 11px;color:rgb(39,155,212);padding-top: 0;"><?php echo $_REQUEST['name'] ?></div>
                    <div class="card-info"  style="font-size: 11px;padding-top: 0;"><?php echo $_REQUEST['title'] ?></div>
                    <div class="card-info" style="margin-top: 35px;padding-top: 0;"><?php echo $_REQUEST['address'] ?></div>
                    <div class="card-info" style="margin-top: 18px;padding-top: 0;"><?php echo $_REQUEST['tel'] ?></div>
                    <div class="card-info" style=""><?php echo $_REQUEST['direct'] ?></div>
                    <div class="card-info" style=""><?php echo $_REQUEST['fax'] ?></div>
                    <div class="card-info" style=""><?php echo $_REQUEST['email'] ?></div>
                    <div class="card-info" style=""><?php echo $_REQUEST['web'] ?></div>
                    <div class="card-info" style=""><?php echo $_REQUEST['charity'] ?></div>
                </div>
            </div>
            <style>
                /*                *{
                                    font-family: sans-serif;
                                    margin: 0;
                                    padding: 0;
                                }
                                .card-info{
                                    float: left;
                                    font-size: 27px;
                                    margin-left: 39%;
                                    margin-top: 16px;
                                    position: relative;
                                    top: -709px;
                                    width: 55%;
                                }*/
                *{
                    margin: 0px;
                    padding: 0px;
                    font-family: sans-serif;
                    font-size: 8px;
                }
                .container{
                    left: 167px;
                    position: absolute;
                    z-index: 1000;
                    top: 320px;
                }
                .card-info{
                    padding-top: 5px;
                    width: 100%;
                    float: left;
                    clear: both;
                }
            </style>
        </body>
    </html>
<?php } ?>
