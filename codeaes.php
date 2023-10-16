<?php
/*
 * @ https://EasyToYou.eu - IonCube v11 Decoder Online
 * @ PHP 7.2
 * @ Decoder version: 1.0.4
 * @ Release: 01/09/2021
 */
require ('antiflood.php');
include "includes/header.php";
if (isset($_POST["message"])) {
    echo $_POST["message"];
}
$lurl = (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] !== "off" ? "https" : "http") . "://" . $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "    By @apk2mods telegram join us for more";
$security_key = "Kakashittoshitky";
$security_id = "Kashitshittokaiv";
echo "\n\n<!-- [ Main Content ] start -->\n\n    <div class=\"pcoded-main-container\">\n\n        <div class=\"pcoded-wrapper\">\n\n            <div class=\"pcoded-content\">\n\n                <div class=\"pcoded-inner-content\">\n\n                    <div class=\"main-body\">\n\n                        <div class=\"page-wrapper\">\n\n                            <!-- [ Main Content ] start -->\n\n                            <div class=\"row\">\n\n                    <!-- Column -->\n\n                    <div class=\"col-lg-12\">\n\n                        <div class=\"card mb-4\">\n\n\t\t\t\t\t\t\t<div class=\"card-header bg-primary py-3\">\n\n                \t\t\t\t<h4 align=\"center\" class=\"m-0 font-weight-bold text-white\"><i class=\"fas fa-fw fa-code\"></i><span> URL AES Convert</span></h1></h4>\n\n                \t\t\t</div>\n\n                         <div class=\"card-body\">\n\n                            <form method=\"post\">\n                            <div class=\"form-group \">\n                            <label class=\"control-label \" for=\"admob_banner_id\">\n                            <strong> Enter your string in the textarea below.</strong>\n                            </label>\n                            <div class=\"input-group\">\n<textarea class=\"form-control text-primary\" name=\"txtCode\" cols=\"50\" rows=\"3\" id=\"inny\">";
echo isset($_POST["txtCode"]) ? $_POST["txtCode"] : $lurl;
echo "</textarea>\n<br>\n                            </div>\n                            </div>\n                            <div class=\"form-group \">\n                            <label class=\"control-label \" for=\"admob_interstitial_id\">\n                            <strong> Converted string output</strong>\n                            </label>\n                            <div class=\"input-group\">\n<textarea class=\"form-control text-primary\"  name=\"txtResult\" cols=\"50\" rows=\"3\" id=\"output\">";
if (isset($_POST["cmdEncode"])) {
    $txtCode = $_POST["txtCode"];
    $str = bin2hex(openssl_encrypt($txtCode, "AES-128-CBC", $security_key, OPENSSL_RAW_DATA, $security_id));
    $new_str = str_replace(" ", "", $str);
    echo $new_str;
} else {
    $text = hex2bin($_POST["txtCode"]);
    $str = openssl_decrypt($text, "AES-128-CBC", $security_key, OPENSSL_RAW_DATA, $security_id);
    $new_str = str_replace(" ", "", $str);
    echo $new_str;
}

echo "</textarea><br>\n                            </div>\n                            </div>\n\t\t\t\t\t\t\t <br>\n\n\t\t\t\t\t\t\t\t<div align=\"center\" class=\"col-12\">\n\n\n<button class=\"btn btn-success btn-icon-split submit_button\" name=\"cmdEncode\" value=\"Encode\"  /><span class=\"icon text-white-50\"><i class=\"fas fa-check\"></i></span><span class=\"text\"> Encoder </span></button>\n\n        <button class=\"btn btn-warning btn-icon-split submit_button\" name=\"cmdDecode\" value=\"Decode\"  /><span class=\"icon text-white-50\"><i class=\"fas fa-check\"></i></span><span class=\"text\"> Decoder </span></button>\n        \n        <button class=\"btn btn-danger btn-icon-split submit_button\" type=\"button\" value=\"Clear All\" onClick=\"clearContents()\"><span class=\"icon text-white-50\"><i class=\"fas  fa-eraser\"></i></span><span class=\"text\"> Clear </span></button>\n        <button class=\"btn btn-info btn-icon-split submit_button\" type=\"button\" onClick=\"changeText('copy', ' Copied Output', ' Copy Output')\" ><span class=\"icon text-white-50\"><i class=\"fas fa-copy\"></i></span><span  id=\"copy\"        class=\"text\"> Copy Output</span></button><br>\n    \t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t <br>\n\n\n\n\t\t\t\t\t\t</div>\n\n                            </div>\n\n                        </div>\n\n                    </div>\n\n                    <!-- Column -->\n\n                </div>\n\n            </div>\n\n            <!-- ============================================================== -->\n\n            <!-- End Container fluid  -->\n\n            <!-- ============================================================== -->\n\n        </div>\n\n        <!-- ============================================================== -->\n\n        <!-- End Page wrapper  -->\n\n        <!-- ============================================================== -->\n\n    </div>\n    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>\n    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\"></script>\n <script> \n\$(document).ready(function () {\n    \$('#flash-msg').delay(3000).fadeOut('slow');\n});\n  </script>\n <script>\n\$('#confirm-delete').on('show.bs.modal', function(e) {\n    \$(this).find('.btn-ok').attr('href', \$(e.relatedTarget).data('href'));\n});\n    </script>\n <script> \n function clearContents() {\n     document.getElementById(\"inny\").value = '';\n     document.getElementById(\"output\").value = '';\n   }\n   function changeText(button, text, textToChangeBackTo) {\n     document.getElementById(button).innerHTML = text;\n     setTimeout(function() { document.getElementById(button).innerHTML = textToChangeBackTo; }, 5000);\n   }\n   \$(function() { \n    \$(\"#copy\").click(function() { \n     var copyText = document.getElementById(\"output\");\n     copyText.select();\n     document.execCommand(\"copy\");\n   });\n   });\n    </script>\n";
include "includes/functions.php";

?>