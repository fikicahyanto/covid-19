<style> 
table{
  border-collapse:collapse;
}
table th,
table td{
  border:1px solid;
  line-height:25px;
  padding:0 6px;
}
table th{
  background:#3498db;
}
</style> 
<html>
    <head>
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    </head>
    <body>
        <textarea></textarea>
        <table>
            <tr>
                <th rowspan="2">Nomor</th><th rowspan="2">Nama </th><th colspan="3">Laporan</th>
            </tr>
            <tr>
                <th>positif</th><th>sembuh</th><th>meniggal</th>
            </tr>
        </table>
    </body>
</html>
<script>
$.ajax({
    url         : "https://api.kawalcorona.com/indonesia/",
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
                        //mencetak nama instansi
                        + "<td>" + data[a]["name"] + "</td>"
                        //mencetak jumlah laporan "belum"
                        + "<td>" + data[a]["positif"] + "</td>"
                        //mencetak jumlah laporan "proses"
                        + "<td>" + data[a]["sembuh"] + "</td>"
                        //mencetak jumlah laporan "selesai"
                        + "<td>" + data[a]["meninggal"] + "</td>"
            //tutup baris baru
                + "<tr/>";
        }
        //menayangkan jumlah data
        document.getElementsByTagName('textarea')[0].value = jmlData;
        //mencetak tabel
        document.getElementsByTagName("table")[0].innerHTML += buatTabel;
    }
});
</script>