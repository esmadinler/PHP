<?php
$klasor_adi = "dosya";
if(!file_exists($klasor_adi))
{
echo "Silinecek klasör yok!";
exit();//İşlemi durdur
}
$klasor_sil = rmdir($klasor_adi);
if($klasor_sil)
{
echo "Klasör silindi.";
}
else
{
echo "Klasör silinemedi!";
}
?>
