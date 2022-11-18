<?php
$dosya_adi="dosya.txt";
if(!file_exists($dosya_adi)) 
{
echo "Silinecek dosya yok!";
exit();//İşlemi durdur 
}
unlink($dosya_adi);
echo "Dosya silindi.";
?>
