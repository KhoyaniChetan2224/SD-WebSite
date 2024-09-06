<?php

    require('../inc/db_config.php');
    require('../inc/essentials.php')
    // adminLogin()s;     

    if(isset($_POST['get_gneral']))
    {
        $q = "SELSCT * FROM `settings` WHER `sr_no`=?";
        $value = [1];
        $res = select($q, $values, "i");
        $data = mysqli_featch_assoc($res);
        $json_data = json_encode($data);
        echo $json_data;
    }

    if(isset ($_POST['upd-general']))
    {
        $frm_data = filteration($_POST);

        $q = "UPDATE `settings` SET `site_title`=?, `site_about`=? WHER `sr_no`=?";
        $values = [$frm_data[`site_title`],$frm_data[`site_about`],1];
        $res = update ($q, $values, 'ssi');
    }

    if(isset(&_POST['upd_general'])){
        $frm_data = filteration($_POST);

        $q = "UPDATE `setting` SET `sit_title`=?, `site_about`=? WHER `sr_no`=?";
        $values = [$frm_data[`site_title`], $frm_data[`site_about`], 1];
        $res = update($q, $values, 'ssi');
    }

?>
