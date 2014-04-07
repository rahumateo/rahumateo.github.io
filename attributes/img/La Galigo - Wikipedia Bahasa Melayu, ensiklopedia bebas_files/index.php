/** Kod untuk memaparkan rasional penggunaan bukan bebas semasa memuat naik fail.
/* PERMULAAN: JavaScript bagi meletakkan templat rasional kegunaan bukan bebas dalam [[Khas:Muat naik]]. 
/* Kod oleh "[[wikipedia:User:Pinky49]]", disunting oleh [[Pengguna:SNN95]].
**/ 

function FairUseRationale() {
	if((wgPageName == 'Khas:Muat_naik' || wgPageName == 'Khas:MultipleUpload') 
&& document.getElementById('wpDestFile').value == '') {
document.getElementById('wpUploadDescription').value = '{{Rasional kegunaan bukan bebas<!-- BUANG templat ini JIKA anda menggunakan FAIL BEBAS  -->\n| Pemerian = \n| Sumber = \n| Rencana  = \n| Bahagian  = \n| Tujuan  = \n| Peleraian rendah = \n| Kebolehgantian = \n| Maklumat lain = \n}}';
    }
}
addOnloadHook(FairUseRationale);