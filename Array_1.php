<?php

$namaLengkap = [
    
    ["nama" => "M.Sakti",
      "kelas" => "X-RPL-2",
      "alamat" => "Jl. Zainal arifin",
      "nisn" => "0098725454"  ,      
      "nomor_wa" => "08569507246",
      "hobi" => "Main Motor",
      "cita_cita" => "Pengusaha"
     
],
[
    "nama" => "M Wildan K.",
    "kelas" => "X RPL 2",
    "alamat" => "Jl Setiawan raya",
    "nisn" => "724361428" ,       
    "nomor_wa" => "08258378024",
    "hobi" => "Futsal",
    "cita_cita" => "Banggain orang tua "


],
[
    "nama" => "Dimas Putra A.",
      "kelas" => "X RPL 2",
      "alamat" => "Jl Mangga Besar",
      "nisn" => "7234541823",    
      "nomor_wa" => "0855343365",
      "hobi" => "Work out",
      "cita_cita" => "Apa aja yg penting berguna bagi masyarakat"
],
  [
    "nama" => "Afrijal",
      "kelas" => "X RPL 2",
      "alamat" => "Jl Tanah Sereal",
      "nisn" => "823456478",    
      "nomor_wa" => "08725343424",
      "hobi" => "Main Warnet",
      "cita_cita" => "Miliarder"
    

  ],
  [
    "nama" => "Rio puji",
      "kelas" => "X RPL 2",
      "alamat" => "Jl Cempaka baru",
      "nisn" => "946576380",    
      "nomor_wa" => "08139846347",
      "hobi" => "Coding atau yg lain ",
      "cita_cita" => "Tentara"
  ]

   ,[
    "nama" => "Agung Prakoso",
      "kelas" => "X RPL 2",
      "alamat" => "Jl Tomang raya",
      "nisn" => "7645358010",    
      "nomor_wa" => "082875639440",
      "hobi" => "Main apa aja",
      "cita_cita" => "Miliarder"
   ]

,[
  "nama" => "Azra Bram",
      "kelas" => "X RPL 2",
      "alamat" => "Jl Mangga besar",
      "nisn" => "765426085",    
      "nomor_wa" => "0854643728",
      "hobi" => "Bermain Game",
      "cita_cita" => "Esport AURA"
]

,[
  "nama" => "Jabar salam",
      "kelas" => "X RPL 2",
      "alamat" => "Jl Tanah Abang",
      "nisn" => "546788903",    
      "nomor_wa" => "08545464332",
      "hobi" => "Bermain Game",
      "cita_cita" => "Pro Gamer"
]

,[
  "nama" => "Kenzi A.",
      "kelas" => "X RPL 2",
      "alamat" => "Jl Mangga besar",
      "nisn" => "657899654",    
      "nomor_wa" => "08545464332",
      "hobi" => "Coding",
      "cita_cita" => "IT di perusahaan besar"
]
,[
  "nama" => "Irza Rafa",
      "kelas" => "X RPL 2",
      "alamat" => "Jl Mangga Besar",
      "nisn" => "6745986235",    
      "nomor_wa" => "0845464332",
      "hobi" => "Bermain Game",
      "cita_cita" => "Sukses dan membanggakan"
]

]



?>


    <html>
      <table border= 1 cellpadding="8"  >
        <tr>
          <th>Nama Lengkap</th>
          <th>Kelas</th>
          <th>Alamat</th>
          <th>NISN</th>
          <th>NO WHATSAPP</th>
          <th>HOBI</th>
          <th>Cita - cita</th>


        </tr>
  

      <?php foreach($namaLengkap as $data):?>
        <tr>
           <td><?= $data["nama"]?> </td>
           <td><?= $data["kelas"]?> </td>
           <td><?= $data["alamat"]?> </td>
           <td><?= $data["nisn"]?> </td>
           <td><?= $data["nomor_wa"]?> </td>
           <td><?= $data["hobi"]?> </td>
           <td><?= $data["cita_cita"]?> </td>
           </tr>
      <?php endforeach;?>
    
    </table>
    </html>