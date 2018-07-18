<?php
/**
 * Created by PhpStorm.
 * User: noaghzil
 * Date: 7/16/18
 * Time: 10:19 AM
 *
 *  curl一个url地址
 *  @param array 数组
 *  @echo $err 错误信息
 *  @echo $response 请求结果
 */
function curl_url($arrays)
{
    $curl = curl_init();

    $curl_arr = $arrays;

/*    $curl_arr = array(
        CURLOPT_URL => "http://test.api.dlm.duolamao.net/?route=action/611/catalog_detail",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"token\"\r\n\r\ncd7d841049c5777b185db5e5db495dc27\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW--",
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/x-www-form-urlencoded",
            "content-type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW"
        ),
    );*/

    curl_setopt_array($curl, $curl_arr);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        echo $response;
    }

}