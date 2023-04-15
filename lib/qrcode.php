<?php 
if (isset($_POST['data']) && !empty($_POST['data'])) {
	$inputString = $_POST['data'];
	$qrCodeSize = 200; 

	$image = imagecreate($qrCodeSize, $qrCodeSize);
	$backgroundColor = imagecolorallocate($image, 255, 255, 255);
	$textColor = imagecolorallocate($image, 0, 0, 0);

	$qrCode = imagecreatefromstring(file_get_contents("https://chart.googleapis.com/chart?chs={$qrCodeSize}x{$qrCodeSize}&cht=qr&chl=" . urlencode($inputString)));

	imagecopy($image, $qrCode, 0, 0, 0, 0, $qrCodeSize, $qrCodeSize);

	ob_start();
	imagepng($image);
	$imageData = ob_get_clean();

	$base64ImageData = base64_encode($imageData);

	imagedestroy($qrCode);
	imagedestroy($image);

}
?>