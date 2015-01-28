<?php if ($type == 'preview') { ?>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
        </head>
        <body style="width: 360px;margin: auto">
            <style>
                @font-face {
                    font-family: DINNextLTPro-Regular;
                    src: url('<?php echo base_url('layout/fonts/DINNextLTArabic-Regular.ttf') ?>');
                }
                @font-face {
                    font-family: DINNextLTPro-Medium;
                    src: url('<?php echo base_url('layout/fonts/DINNextLTArabic-Medium.ttf') ?>');
                }
                *{
                    font-family: DINNextLTPro-Regular;
                    font-size: 9px;
                    color: #435257;
                }
                .container{
                    float: right;
                    /*left: 135px;*/
                    position: relative;
                    top: -210px;
                    width: 100%;
                }
                .container > div {
                    float: right;
                    width: 100%;
                }
                .title{
                    float: right;
                    text-align: left;
                    margin-left: 10px;
                    width:35%;
                    ;color:#299FD5
                }
                .details{
                    float: right;
                    text-align: right;
                    width:55%;
                }
            </style>
            <div style="float: left;width: 100%;">
                <img  src="<?php echo base_url('business-cards/IRW_BUSCARD_EN_AR_2014-sample_2_1.jpg') ?>" style="float: left;width: 100%;">
            </div>
            <div style="float: left;width: 100%;margin-top: 5px;">
                <img  src="<?php echo base_url('business-cards/IRW_BUSCARD_EN_AR_2014-sample_4_temp_white.jpg') ?>"  style="float: left;width: 100%;">
            </div>
            <div class="container">
                <div >
                    <span class="title">&nbsp;</span>
                    <span class="details" style="font-size: 21px ;color:#299FD5"><?php echo $_REQUEST['name'] ?></span>
                </div>
                <div >
                    <span class="title">&nbsp;</span>
                    <span class="details" style="width: 42%"><?php echo $_REQUEST['title'] ?></span>
                </div>
                <div  style="margin-top: 17px;">
                    <span class="title">&nbsp;</span>
                    <span class="details" style="color:#299FD5 ;font-family:DINNextLTPro-Medium ;">الإغاثة الإسلامية عبر العالم - المملكة المتحدة</span>
                </div>
                <div style="font-family:DINNextLTPro-Medium ;font-family:DINNextLTPro-Medium ;">
                    <span class="title">&nbsp;</span>
                    <span class="details"><?php echo $_REQUEST['address'] ?></span>

                </div>
                <div style="margin-top: 19px">
                    <span class="title">هاتف</span>
                    <span class="details"><?php echo $_REQUEST['tel'] ?></span>

                </div>
                <div class="card-info" style="">
                    <span class="title">فاكس</span>
                    <span class="details"><?php echo $_REQUEST['fax'] ?></span>

                </div>
                <div class="card-info" style="margin-top: 2px">
                    <span class="title">بريد إلكترونى</span>
                    <span class="details"><?php echo $_REQUEST['email'] ?></span>

                </div>
                <div class="card-info" style="">
                    <span class="title">موقع على الإنترنت</span>
                    <span class="details"><?php echo $_REQUEST['web'] ?></span>

                </div>
                <div class="card-info" style="">
                    <span class="title">رقم تسجيل المنظمة</span>
                    <span class="details"><?php echo $_REQUEST['charity'] ?></span>
                </div>
                <!--                <div class="card-info" style="">
                                    <span class="title">&nbsp;</span>
                                    <span class="details"><?php echo $_REQUEST['direct'] ?></span>
                                    
                                </div>-->
            </div>
        </body>
    </html>
<?php } else { ?>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
        </head>
        <body style="width: 100%;background-color: white;float: left">
            <style>
                @font-face {
                    font-family: DINNextLTPro-Regular;
                    src: url('<?php echo base_url('layout/fonts/DINNextLTArabic-Regular.ttf') ?>');
                }
                @font-face {
                    font-family: DINNextLTPro-Medium;
                    src: url('<?php echo base_url('layout/fonts/DINNextLTArabic-Medium.ttf') ?>');
                }
                *{
                    margin: 0;
                    padding: 0;
                    font-family: DINNextLTPro-Regular;
                    font-size: 7pt;
                    color: #435257;
                }
                .container{
                    float: right;
                    position: absolute;
                    z-index: 1000;
                    top: 250px;
                    width: 100%;
                    margin: 0;
                    padding: 0;
                }
                .container > div {
                    float: right;
                    width: 100%;
                }
                .title{
                    float: right;
                    text-align: left;
                    margin-left: 10px;
                    width:35%;
                    ;color:#299FD5
                }
                .details{
                    float: right;
                    text-align: right;
                    width:55%;
                }
            </style>
            <div style="float: left;width: 100%;margin-bottom: 0px;">
                <img  src="<?php echo base_url('business-cards/IRW_BUSCARD_EN_AR_2014-sample_2_1.jpg') ?>" style="width: 100%;float: left">
            </div>
            <div style="float: left;width: 100%;margin-top: 0px">
                <img  src="<?php echo base_url('business-cards/IRW_BUSCARD_EN_AR_2014-sample_4_temp_white.jpg') ?>"  style="width: 100%;float: left">
                <div class="container">
                    <div >
                        <span class="title">&nbsp;</span>
                        <span class="details" style="font-size: 14pt ;color:#299FD5"><?php echo $_REQUEST['name'] ?></span>
                    </div>
                    <div >
                        <span class="title">&nbsp;</span>
                        <span class="details" style="width: 42%"><?php echo $_REQUEST['title'] ?></span>
                    </div>
                    <div  style="margin-top: 17px;">
                        <span class="title">&nbsp;</span>
                        <span class="details" style="color:#299FD5 ;font-family:DINNextLTPro-Medium ;">الإغاثة الإسلامية عبر العالم - المملكة المتحدة</span>
                    </div>
                    <div style="font-family:DINNextLTPro-Medium ;">
                        <span class="title">&nbsp;</span>
                        <span class="details"><?php echo $_REQUEST['address'] ?></span>
                    </div>
                    <div style="margin-top: 10px">
                        <span class="title">هاتف</span>
                        <span class="details"><?php echo $_REQUEST['tel'] ?></span>
                    </div>
                    <div class="card-info" style="">
                        <span class="title">فاكس</span>
                        <span class="details"><?php echo $_REQUEST['fax'] ?></span>
                    </div>
                    <div class="card-info" style="margin-top: 2px">
                        <span class="title">بريد إلكترونى</span>
                        <span class="details"><?php echo $_REQUEST['email'] ?></span>
                    </div>
                    <div class="card-info" style="">
                        <span class="title">موقع على الإنترنت</span>
                        <span class="details"><?php echo $_REQUEST['web'] ?></span>
                    </div>
                    <div class="card-info" style="">
                        <span class="title">رقم تسجيل المنظمة</span>
                        <span class="details"><?php echo $_REQUEST['charity'] ?></span>
                    </div>
                </div>
            </div>
        </body>
    </html>
<?php } ?>