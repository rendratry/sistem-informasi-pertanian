<?php

$conn = mysqli_connect('localhost','root','','db_agri',);

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows =[];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;

}
function tambah($data){
    global $conn;
    $No_ktp = $data["No_ktp"];
    $nama_petani = $data["nama_petani"];
    $email = $data["email"];
    $username = $data["username"];
    $modal = $data["modal"];
    $distribusi = $data["kelanjutan"];
    $query = "INSERT INTO tb_datapetani VALUES
                ('', '$No_ktp', '$nama_petani', '$username', '$email','$modal','$distribusi')
            ";        
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function tambah1($data){
    global $conn;
    $daerah =$data["daerah"];
    $luas_lahan = $data["luas_lahan"];
    $hasil_panen = $data["hasil_panen"];
    $query1 = "INSERT INTO tb_lahan VALUES
                ('', '$daerah', '$luas_lahan','$hasil_panen')
            ";           
    mysqli_query($conn, $query1);
    return mysqli_affected_rows($conn);
}

function tambah2($data){
    global $conn;
    $kendala = $data["kendala"];
    $kritik = $data["kritik"];
    $query2 = "INSERT INTO tb_kritiksaran VALUES
                ('$kendala', '$kritik')
            ";            
    mysqli_query($conn, $query2);
    return mysqli_affected_rows($conn);
}

function tambahregis($data){
    global $conn;
    $nama = $data["nama"];
    $username = $data["username"];
    $email = $data["email"];
    $password = $data["password"];
    $jeniskelamin = $data["jenis_kelamin"];
    $query = "INSERT INTO tb_registrasi VALUES
                ('','$nama', '$username','$email','$password','$jeniskelamin')
            ";            
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    $query = "DELETE FROM tb_datapetani WHERE id=$id";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
function ubah($data){
    global $conn;
    $username = $data["username"];
    $email = $data["email"];
    $password = $data["password"];
    $query = "UPDATE tb_register SET 
            nim = '$nim',
            nama = '$nama',
            email = '$email',
            jurusan = '$jurusan' 
            WHERE id=$id
    ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
   

?>