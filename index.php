<!doctype html>
<html lang="tr-TR">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <meta http-equiv="Content-Language" content = "tr">
   <meta charset = "utf-8">
   <title>Giriþ Ekraný</title>
</head>

<body>

	<?php
	
		
	$db = new mysqli("","","","");
	$db->set_charset("utf8");
	
	if($db -> connect_errno)
	{
		die("Veritabaný baglantýsý baþarýsýz oldu:" . $mysqli->connect_error); 
	}
	
	$Link	= "https://www.tcmb.gov.tr/kurlar/today.xml";
	
	$icerik = simplexml_load_file($Link);
	/*
	echo "<pre>";
	print_r($icerik);
	echo "</pre>";
	*/
	
	
	$USD_Birim = $icerik -> Currency[0] -> Unit;
	$USD_Kodu = $icerik -> Currency["CurrencyCode"];
	$USD_Isim = $icerik -> Currency[0] -> Isim;
	$USD_Alis = $icerik -> Currency[0] -> ForexBuying;
	$USD_Satis = $icerik -> Currency[0] -> ForexSelling;
	$USD_EfektifAlis = $icerik -> Currency[0] -> BanknoteBuying;
	$USD_EfektifSatis = $icerik -> Currency[0] -> BanknoteSelling;
	
	$ekle = "UPDATE dovizkurlari set birim = '$USD_Birim', adi = '$USD_Isim' , alis = '$USD_Alis', satis = '$USD_Satis', efektifalis = '$USD_EfektifAlis', efektifsatis = '$USD_EfektifSatis' Where Kodu = 'USD'";
	$db -> query($ekle);	
	
	$AUD_Birim = $icerik -> Currency[1] -> Unit;
	$AUD_Kodu = $icerik -> Currency[1]["CurrencyCode"];
	$AUD_Isim = $icerik -> Currency[1] -> Isim;
	$AUD_Alis = $icerik -> Currency[1] -> ForexBuying;
	$AUD_Satis = $icerik -> Currency[1] -> ForexSelling;
	$AUD_EfektifAlis = $icerik -> Currency[1] -> BanknoteBuying;
	$AUD_EfektifSatis = $icerik -> Currency[1] -> BanknoteSelling;
	
	$ekle = "UPDATE dovizkurlari set birim = '$AUD_Birim', adi = '$AUD_Isim' , alis = '$AUD_Alis', satis = '$AUD_Satis', efektifalis = '$AUD_EfektifAlis', efektifsatis = '$AUD_EfektifSatis' Where Kodu = 'AUD'";
	$db -> query($ekle);
	
	$DKK_Birim = $icerik -> Currency[2] -> Unit;
	$DKK_Kodu = $icerik -> Currency[2]["CurrencyCode"];
	$DKK_Isim = $icerik -> Currency[2] -> Isim;
	$DKK_Alis = $icerik -> Currency[2] -> ForexBuying;
	$DKK_Satis = $icerik -> Currency[2] -> ForexSelling;
	$DKK_EfektifAlis = $icerik -> Currency[2] -> BanknoteBuying;
	$DKK_EfektifSatis = $icerik -> Currency[2] -> BanknoteSelling;
	
	$ekle = "UPDATE dovizkurlari set birim = '$DKK_Birim', adi = '$DKK_Isim' , alis = '$DKK_Alis', satis = '$DKK_Satis', efektifalis = '$DKK_EfektifAlis', efektifsatis = '$DKK_EfektifSatis' Where Kodu = 'DKK'";
	$db -> query($ekle);
	
	$EUR_Birim = $icerik -> Currency[3] -> Unit;
	$EUR_Kodu = $icerik -> Currency[3]["CurrencyCode"];
	$EUR_Isim = $icerik -> Currency[3] -> Isim;
	$EUR_Alis = $icerik -> Currency[3] -> ForexBuying;
	$EUR_Satis = $icerik -> Currency[3] -> ForexSelling;
	$EUR_EfektifAlis = $icerik -> Currency[3] -> BanknoteBuying;
	$EUR_EfektifSatis = $icerik -> Currency[3] -> BanknoteSelling;
	
	$ekle = "UPDATE dovizkurlari set birim = '$EUR_Birim', adi = '$EUR_Isim' , alis = '$EUR_Alis', satis = '$EUR_Satis', efektifalis = '$EUR_EfektifAlis', efektifsatis = '$EUR_EfektifSatis' Where Kodu = 'EUR'";
	$db -> query($ekle);
	
	$GBP_Birim = $icerik -> Currency[4] -> Unit;
	$GBP_Kodu = $icerik -> Currency[4]["CurrencyCode"];
	$GBP_Isim = $icerik -> Currency[4] -> Isim;
	$GBP_Alis = $icerik -> Currency[4] -> ForexBuying;
	$GBP_Satis = $icerik -> Currency[4] -> ForexSelling;
	$GBP_EfektifAlis = $icerik -> Currency[4] -> BanknoteBuying;
	$GBP_EfektifSatis = $icerik -> Currency[4] -> BanknoteSelling;
	
	$ekle = "UPDATE dovizkurlari set birim = '$GBP_Birim', adi = '$GBP_Isim' , alis = '$GBP_Alis', satis = '$GBP_Satis', efektifalis = '$GBP_EfektifAlis', efektifsatis = '$GBP_EfektifSatis' Where Kodu = 'GBP'";
	$db -> query($ekle);
	
	$CHF_Birim = $icerik -> Currency[5] -> Unit;
	$CHF_Kodu = $icerik -> Currency[5]["CurrencyCode"];
	$CHF_Isim = $icerik -> Currency[5] -> Isim;
	$CHF_Alis = $icerik -> Currency[5] -> ForexBuying;
	$CHF_Satis = $icerik -> Currency[5] -> ForexSelling;
	$CHF_EfektifAlis = $icerik -> Currency[5] -> BanknoteBuying;
	$CHF_EfektifSatis = $icerik -> Currency[5] -> BanknoteSelling;
	
	$ekle = "UPDATE dovizkurlari set birim = '$CHF_Birim', adi = '$CHF_Isim' , alis = '$CHF_Alis', satis = '$CHF_Satis', efektifalis = '$CHF_EfektifAlis', efektifsatis = '$CHF_EfektifSatis' Where Kodu = 'CHF'";
	$db -> query($ekle);	
	?>
	
	<table align = "center" width = "750" border = "0" cellpadding = "0" cellspacing = "0">
		<tr height = "30" bgcolor = "#CCCCCC">
			<th align = "left" width = "200">Adi</th>
			<th align = "left" width = "100">Kodu</th>
			<th align = "left" width = "100">Birimi</th>
			<th align = "left" width = "100">Alis</th>
			<th align = "left" width = "100">Satis</th>
			<th align = "left" width = "125">Efektif Alis</th>
			<th align = "left" width = "125">Efektif Satis</th>
		</tr>
		<tr height = "30"">
			<td align = "left" width = "200"><?php echo $USD_Isim; ?></td>
			<td align = "left" width = "100"><?php echo $USD_Kodu; ?></td>
			<td align = "left" width = "100"><?php echo $USD_Birim; ?></td>
			<td align = "left" width = "100"><?php echo $USD_Alis; ?></td>
			<td align = "left" width = "100"><?php echo $USD_Satis; ?></td>
			<td align = "left" width = "125"><?php echo $USD_EfektifAlis; ?></td>
			<td align = "left" width = "125"><?php echo $USD_EfektifSatis; ?></td>
		</tr>
		<tr height = "30"">
			<td align = "left" width = "200"><?php echo $AUD_Isim; ?></td>
			<td align = "left" width = "100"><?php echo $AUD_Kodu; ?></td>
			<td align = "left" width = "100"><?php echo $AUD_Birim; ?></td>
			<td align = "left" width = "100"><?php echo $AUD_Alis; ?></td>
			<td align = "left" width = "100"><?php echo $AUD_Satis; ?></td>
			<td align = "left" width = "125"><?php echo $AUD_EfektifAlis; ?></td>
			<td align = "left" width = "125"><?php echo $AUD_EfektifSatis; ?></td>
		</tr>
		<tr height = "30"">
			<td align = "left" width = "200"><?php echo $DKK_Isim; ?></td>
			<td align = "left" width = "100"><?php echo $DKK_Kodu; ?></td>
			<td align = "left" width = "100"><?php echo $DKK_Birim; ?></td>
			<td align = "left" width = "100"><?php echo $DKK_Alis; ?></td>
			<td align = "left" width = "100"><?php echo $DKK_Satis; ?></td>
			<td align = "left" width = "125"><?php echo $DKK_EfektifAlis; ?></td>
			<td align = "left" width = "125"><?php echo $DKK_EfektifSatis; ?></td>
		</tr>
		<tr height = "30"">
			<td align = "left" width = "200"><?php echo $EUR_Isim; ?></td>
			<td align = "left" width = "100"><?php echo $EUR_Kodu; ?></td>
			<td align = "left" width = "100"><?php echo $EUR_Birim; ?></td>
			<td align = "left" width = "100"><?php echo $EUR_Alis; ?></td>
			<td align = "left" width = "100"><?php echo $EUR_Satis; ?></td>
			<td align = "left" width = "125"><?php echo $EUR_EfektifAlis; ?></td>
			<td align = "left" width = "125"><?php echo $EUR_EfektifSatis; ?></td>
		</tr>
		<tr height = "30"">
			<td align = "left" width = "200"><?php echo $GBP_Isim; ?></td>
			<td align = "left" width = "100"><?php echo $GBP_Kodu; ?></td>
			<td align = "left" width = "100"><?php echo $GBP_Birim; ?></td>
			<td align = "left" width = "100"><?php echo $GBP_Alis; ?></td>
			<td align = "left" width = "100"><?php echo $GBP_Satis; ?></td>
			<td align = "left" width = "125"><?php echo $GBP_EfektifAlis; ?></td>
			<td align = "left" width = "125"><?php echo $GBP_EfektifSatis; ?></td>
		</tr>
		<tr height = "30"">
			<td align = "left" width = "200"><?php echo $CHF_Isim; ?></td>
			<td align = "left" width = "100"><?php echo $CHF_Kodu; ?></td>
			<td align = "left" width = "100"><?php echo $CHF_Birim; ?></td>
			<td align = "left" width = "100"><?php echo $CHF_Alis; ?></td>
			<td align = "left" width = "100"><?php echo $CHF_Satis; ?></td>
			<td align = "left" width = "125"><?php echo $CHF_EfektifAlis; ?></td>
			<td align = "left" width = "125"><?php echo $CHF_EfektifSatis; ?></td>
		</tr>
	</table>


</body>
</html>