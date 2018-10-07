	            	            	            	            	            	            	            	            	            	            	            	            	            	            	            	            	            	            	            	            	            	            <!-- MULAI -->
<div style="overflow:hidden;position:relative;padding: 0px;margin: 2px;border: 1px solid #000000;width:190px;height:125px;float:left;">

<!-- NUM -->
<div style="position:absolute;width:auto;top:25px;right:80px;color:#333;font-size:10px;padding:0px;"><small><?php echo " [$num]";?></small></div>
<!-- NUM -->

<!-- PRICE -->
<div style="position:absolute;margin-top:5px;background:<?php if($price == "Rp 1.000") { ?>#00b8ff; <?php }elseif($price == "Rp 60.000"){ ?>#f4c804;<?php }elseif($price == "Rp 5.000"){ ?>#EE8A2C; <?php } ?>  width:auto;color:#fff;font-weight:bold;font-family:Agency FB;font-size:24px;padding:2.5px 25px 2.5px 20px;border-radius:0 0 50px 0;"><small style="font-size:11px;margin-left:-15px;position:absolute;">Rp.</small><?php echo $getprice;?></div>
<!-- PRICE -->
<!-- AKUN -->
<div style="position:absolute;top:40px;right:0px;display:inline;color:#fff;text-align:right;">
<?php if($usermode == "vc"){?>
<!-- Voucher : Username = Password  -->
<div style="padding:0px;text-align:right;font-weight:bold;font-size:11px;font-family:Courier New;width:90px;background:#333;color:#fff;padding:2.5px 5px;margin-bottom:2.5px;">VOUCHER</div>
<div style="padding:0px 5px 0px 0px;border-top:1px solid #fff;border-bottom:1px solid #fff;text-align:right;font-weight:bold;font-size:20px;font-family:Courier New;"><font color=white><?php echo $username;?></font></div>
<?php }elseif($usermode == "up"){?>
<!-- Voucher : Username & Password  -->
<div style="padding:0px;text-align:right;font-weight:bold;font-size:11px;font-family:Courier New;width:90px;background:#333;color:#fff;padding:2.5px 5px;margin-bottom:2.5px;">MEMBER</div>
<div style="padding:00px 5px 0px 0px;border-top:1px solid #fff;border-bottom:1px solid #fff;text-align:right;font-weight:bold;font-size:14px;font-family:Courier New;"><small style="font-size:10px;">Username: </small><?php echo $username;?></div>
<div style="padding:0px 5px 0px 0px;border-bottom:1px solid #fff;text-align:right;font-weight:bold;font-size:14px;font-family:Courier New;"><small style="font-size:10px;">password: </small><?php echo $password;?></div>
<?php }?>
</div>
<!-- AKUN -->
<!-- AKTIF & LIMIT -->
<div style="position:absolute;top:10px;right:0px;display:inline;color:#fff;text-align:right;">
<div style="padding:0 2.5px;text-align:right;font-size:9px;font-weight:bold;color:#333333;">
<?php if($timelimit == "1h"){?>Aktif 1 Jam
<?php }elseif($timelimit == "1d"){?>Aktif 1 Hari
<?php }elseif($timelimit == "2d"){?>Aktif 2 Hari
<?php }elseif($timelimit == "3d"){?>Aktif 3 Hari
<?php }elseif($timelimit == "4d"){?>Aktif 4 Jam
<?php }elseif($timelimit == "5d"){?>Aktif 5 Jam
<?php }elseif($timelimit == "7d"){?>Aktif 1 Minggu
<?php }elseif($timelimit == "14d"){?>Aktif 2 Minggu
<?php }elseif($timelimit == "30d"){?>Aktif 1 Bulan
<?php }elseif($timelimit == "60d"){?>Aktif 2 Bulan
<?php }elseif($timelimit == "10d"){?>Aktif 10 Hari
<?php }elseif($timelimit == "15d"){?>Aktif 15 Hari
<?php }elseif($timelimit == "4w2d"){?>Aktif 1 Bulan
<?php }else{?>Aktif <span style="text-transform: uppercase;"><?php echo $timelimit ?></span>
<?php }?>
</div>
<div style="padding:0 2.5px;text-align:right;font-size:10px;font-weight:bold;color:#bf0000;">Data <?php if(empty($datalimit)){;?>Unlimted <?php }else{ echo $datalimit;}?></div>
</div>
<!-- AKTIF & LIMIT -->
<!-- QRCODE-->
<div style="position:absolute;bottom:20px;left:5px;display:inline;width:60px;"><img style="width:100%;" src="<?php echo $qrcode ?>" alt="qrcode"/></div>
<!-- QRCODE-->
<!-- LOGO-->
<img style="position:absolute;bottom:5px;left:5px;display:inline;margin:5px 0 0 0px;width:60px;height:17px;" src="<?php echo $logo ?>" alt="logo"/>
<!-- LOGO-->
<!-- LOGIN-->
<div style="position:absolute;bottom:2px;right:5px;display:inline;color:#fff;font-size:9px;font-weight:bold;margin:0 -2.5px;padding:2.5px;width:60%;text-align:right;">
cek status/logout: http://<?php echo $dnsname;?>
</div>
<!-- LOGIN-->
<!-- BG-->
<div style="overflow: hidden;padding: 0px;float:left;">
<div style="margin-top:-100px;width: 0; height: 0; border-top: 230px solid transparent;border-left: 50px solid transparent;border-right:140px solid <?php if($price == "Rp 1.000") { ?>#00b8ff; <?php }elseif($price == "Rp 60.000"){ ?>#f4c804;<?php }elseif($price == "Rp 5.000"){ ?>#EE8A2C; <?php } ?> "></div>
</div>
<!-- BG-->
</div>
<!-- AKHIR -->	   	            	          	            	          	            	          	            	          	            	          	            	          	            	          	            	          	            	          	            	          	            	          	            	          	            	          	            	          	            	          	            	          	            	          