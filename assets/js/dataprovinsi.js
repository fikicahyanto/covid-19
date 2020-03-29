$.ajax({
    url         : "https://api.kawalcorona.com/indonesia/provinsi/",
    type        : "GET",
    dataType    : "json",
    data        : {get_param : 'value'},
    success     : function(data){
        //menghitung jumlah data
        jmlData = data.length;
        
        //variabel untuk menampung tabel yang akan digenerasikan
        buatTabel = "";
        
        //perulangan untuk menayangkan data dalam tabel
        for(a = 0; a < jmlData; a++){

            //mencetak baris baru
            buatTabel += "<tr>" 
            
                        //membuat penomoran
                        + "<td>" + (a+1) + "</td>"
                        //mencetak negara
                        + "<td>" + data[a]["attributes"]["Provinsi"] + "</td>"
                        //mencetak jumlah laporan "konrimasi"
                        + "<td>" + data[a]["attributes"]["Kasus_Posi"] + "</td>"
                        //mencetak jumlah laporan "aktif"
                        + "<td>" + data[a]["attributes"]["Kasus_Semb"] + "</td>"
                        //mencetak jumlah laporan "sembuh"
                        + "<td>" + data[a]["attributes"]["Kasus_Meni"] + "</td>"
                        //mencetak jumlah laporan "meninggal"
            //tutup baris baru
                + "<tr/>";
        }
        //menayangkan jumlah data
        // document.getElementsByTagName('textarea')[0].value = jmlData;
        //mencetak tabel
        document.getElementsByTagName("tbody")[0].innerHTML += buatTabel;
    }
});