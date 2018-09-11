<?php
    // $base_url = 'http://tutorial.local/';
    // $subject = "Forget Password";
    // $content = 'คุณกำลังประสบปัญหา จำรหัสผ่านไม่ได้ใช่ไหม ถ้าใช้ คลิ๊กที่ข้างล่าง';
    // $token_url = 'account/forgotActivated?token=';
    // $token = 'kjkkmm;jl';
    // $link_text = 'คลิ๊กที่นี่เพื่อเปลี่ยนรหัสผ่านใหม่';
    // $expire_date = date('Y-m-d');
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <body>
        <div style="width:600px; margin:0 auto;">

            <div style="float:left; width:600px; padding-top: 40px; max-height:1200px; cursor:pointer; overflow:hidden;">
                <a href="<?php echo $frontend_base_url;?>">
                    <img src="<?php echo $base_url;?>frontend/logo.png" width="87" height="31" border="0" />
                </a>
            </div>
            <div style="float:left;width:600px;background-color:#2c3e50;height:41px;"></div>
            <div style="float:left; width:600px; padding: 20px 15px;">
                <img src="<?php echo $base_url;?>frontend/heading@3x.png" width="213" border="0" />
            </div>
            <div style="float:left; width:600px; padding: 20px 15px;">
                <div style="font-size: 24px;font-weight: bold;color: #2c3e50;">
                    <?php echo $subject ?>
                </div>
            </div>
            <div style="float:left; width:600px; padding: 20px 15px;">  
                <p style="font-size: 16px;color: #2c3e50;">
                    <?php echo $content ?>
                <p style="font-size: 14px;color: #4e688a;">
                    <a href="<?php echo $frontend_base_url.$token_url.$token ?>" style="text-decoration:none;color: #4e688a;">
                        <?php echo $link_text ?>
                    </a>
                </p>
                <p style="font-size: 16px;color: #2c3e50;">
                    กระเบื้องหลังคาประยุกต์ สวยสง่า คุณค่าเหนือกาลเวลา ผืนหลังคาขนาดเล็กรูปทรงตาม
                    กระเบื้องว่าว ให้ความละเอียดละไม ผสานความคลาสสิคได้อย่างวิจิตร เหมาะสำหรับบ้าน
                    สไตล์ไทยร่วมสมัย ประณีตด้วยความบางและเรียบเนียนของผืนหลังคา
                </p>
            </div>

            <div style="float:left; width:600px; padding-top: 40px;">
                <p style="font-size: 14px;color: #2c3e50;">@copyright 2018 | scgcbm.com</p>
            </div>
        </div>
    </body>
</html>



