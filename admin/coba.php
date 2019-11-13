<!DOCTYPE html>
<html>
<head>
 <title>Menampilkan data kampus</title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
</head>
<body>

  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

 <table id="myTable" border="1">
  <tr class="header">
  <th>No</th>
  <th>Nama</th>
  <th>Nippos</th>
  <th>SN CPU</th>
  <th>SN Laptop</th>
  <th>SN Printer Inkjet</th>
  <th>SN Printer Dot Matrik</th>
  <th>SN Barcode Scanner</th>
  <th>SN UPS</th>
</tr>

  <?php  
   mysql_connect("localhost", "root","");
   mysql_select_db("dbipt");

   $query="SELECT pgwai.username,pgwai.nippos,cpu.sn_cpu,laptop.sn_laptop,inkjet.sn_inkjet,matrix.sn_matrix,scan.sn_scanner,ups.sn_ups from (tb_pegawai pgwai left JOIN tb_cpu cpu on pgwai.id = cpu.id) LEFT JOIN tb_laptop laptop on pgwai.id = laptop.id LEFT JOIN tb_inkjet inkjet on pgwai.id=inkjet.id LEFT JOIN tb_matrix matrix on pgwai.id=matrix.id LEFT JOIN tb_scanner scan on pgwai.id=scan.id LEFT JOIN tb_ups ups on pgwai.id=ups.id";
   $hasil=mysql_query($query);
   $no_urut=0;
   while($data = mysql_fetch_array($hasil)) {
    $no_urut++;
    echo "<tr>
     <td>".$no_urut."</td>
     <td>".$data['username']."</td>
     <td>".$data['nippos']."</td>
     <td>".$data['sn_cpu']."</td>
     <td>".$data['sn_laptop']."</td>
     <td>".$data['sn_inkjet']."</td>
     <td>".$data['sn_matrix']."</td>
     <td>".$data['sn_scanner']."</td>
     <td>".$data['sn_ups']."</td>
    </tr>";
   }
  ?>
 </table>

 <script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</body>
</html>

<!--SCRIPT-->