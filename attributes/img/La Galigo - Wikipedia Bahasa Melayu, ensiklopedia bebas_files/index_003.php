if ($('#kurniasan-fun-stuff').length != 0) {
    var indeksObjek = 1;
    var objekInduk = $('#kurniasan-fun-stuff')[0];
    var bilAnak = objekInduk.getElementsByClassName('anak-tt').length;

    /**
      * Fungsi untuk menganimasikan objek supaya pudar menjadi hilang
      * kemudian pudar muncul semula
      **/
    function timbulTenggelam () {
        if (bilAnak == 0)
            return;
       
        //kalau anak akhir, sela 30s, kalau bukan, sela 2s
        var sela = (indeksObjek == bilAnak) ? 30000 : 2000;

        $('#foo-'+indeksObjek).fadeIn('slow').delay(sela).fadeOut(1200, function () {
            indeksObjek += 1;
            if ( indeksObjek > bilAnak )
                indeksObjek = 1;
            timbulTenggelam();
        });
    }

    $( timbulTenggelam );
}