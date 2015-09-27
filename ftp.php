<?php 
 
//        $ftpUser = "grafimwx";
//        $ftpPass = "p6BpAmg8";
//        $ftpServer = "197.242.144.136"; 
//        $ftp_top_root = "/";
        
        $ftpUser = "africa";
        $ftpPass = "nerd";
        $ftpServer = "127.0.0.1"; 
        $ftp_top_root = "/";
        
        $connRes = ftp_connect($ftpServer) or die("Couldn't connect to ".$ftpServer); 
        
         $ftpLogin = ftp_login($connRes, $ftpUser, $ftpPass); 
         if($ftpServer == "127.0.0.1")
         {
            ftp_chdir($connRes, ftp_pwd($connRes).'mycms/'); 
         }
         else
         {
             ftp_chdir($connRes, ftp_pwd($connRes).'public_html/'); 
         }         
         echo 'curr dir is '.ftp_pwd($connRes);
        
      // print_r(explode('/', ftp_pwd($connRes)));
?>
