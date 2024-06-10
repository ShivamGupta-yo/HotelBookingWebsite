<?php
require('../inc/db_config.php');
require('../inc/essentials.php');
adminLogin();

if (isset($_POST['get_users'])) {
    $res = selectAll('user_cred');
    $i = 1;
    $path = USERS_IMG_PATH;
    $data = '';
    while ($row = mysqli_fetch_assoc($res)) {
       $status="<button onclick='toggle_status($row[id],0)' class='btn btn-dark btn-sm'>Active</button>";
       if(!$row['status']){
        $status="<button onclick='toggle_status($row[id],1)' class='btn btn-danger btn-sm'>Banned</button>";
       }
       $date=date('d-m-Y: H:m:s',strtotime($row['datentime']));
       $dob=date('d-m-Y',strtotime($row['dob']));
        echo <<<data
        <tr>
        <td>$i</td>
        <td>
        <img src="$path$row[profile]" width="55px">
        <br>
        $row[name]</td>
        <td>$row[email]</td>
        <td>$row[phonenum]</td>
        <td>$row[address] | $row[pincode]</td>
        <td>$dob</td>
        <td>$status</td>
        <td>$date</td>
        </tr>
      data;
        $i++;
    }
}

if (isset($_POST['toggle_status'])) {
    $frm_data = filteration($_POST);
    $q = "UPDATE `user_cred` SET `status`=? WHERE `id`=?";
    $v = [$frm_data['value'], $frm_data['toggle_status']];
    if (update($q, $v, 'ii')) {
        echo 1;
    } else {
        echo 0;
    }
}


if (isset($_POST['search_user'])) {
    $frm_data = filteration($_POST);
    $query = "SELECT * FROM `user_cred` WHERE `name` LIKE ?";
    $res = select($query,["%$frm_data[name]%"],'s');
    $i = 1;
    $path = USERS_IMG_PATH;
    $data = '';
    while ($row = mysqli_fetch_assoc($res)) {
       $status="<button onclick='toggle_status($row[id],0)' class='btn btn-dark btn-sm'>Active</button>";
       if(!$row['status']){
        $status="<button onclick='toggle_status($row[id],1)' class='btn btn-danger btn-sm'>Banned</button>";
       }
       $date=date('d-m-Y : H:m:s ',strtotime($row['datentime']));
       $dob=date('d-m-Y',strtotime($row['dob']));
        echo <<<data
        <tr>
        <td>$i</td>
        <td>
        <img src="$path$row[profile]" width="55px">
        <br>
        $row[name]</td>
        <td>$row[email]</td>
        <td>$row[phonenum]</td>
        <td>$row[address] | $row[pincode]</td>
        <td>$dob</td>
        <td>$status</td>
        <td>$date</td>
        </tr>
      data;
        $i++;
    }
}


