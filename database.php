<?php 

    define("DB", new PDO('mysql:host=localhost;dbname=coba_spk', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]));

    function addLaptop($id, $nama, $cpu, $ram, $gpu, $storage, $baterai, $layar, $harga){
        try {
            $statement = DB->prepare("INSERT INTO laptop (user_id, laptop_nama, laptop_cpu, laptop_ram, laptop_gpu, laptop_storage, laptop_baterai, laptop_layar, laptop_harga) VALUES (:user_id, :laptop_nama, :laptop_cpu, :laptop_ram, :laptop_gpu, :laptop_storage, :laptop_baterai, :laptop_layar, :laptop_harga)");
            $statement->execute([
                ':user_id' => $id,
                ':laptop_nama' => $nama,
                ':laptop_cpu' => $cpu,
                ':laptop_ram' => $ram,
                ':laptop_gpu' => $gpu,
                ':laptop_storage' => $storage,
                ':laptop_baterai' => $baterai,
                ':laptop_layar' => $layar,
                ':laptop_harga' => $harga
            ]);
        } catch (PDOException $err) {
            echo $err->getMessage();
        }
    }

    function addUtility($id, $cpu, $ram, $gpu, $storage, $baterai, $layar, $harga){
        try {
            $statement = DB->prepare("INSERT INTO nilai_utility (utility_laptop_id, utility_cpu, utility_ram, utility_gpu, utility_storage, utility_baterai, utility_layar, utility_harga) VALUES (:utility_laptop_id, :utility_cpu, :utility_ram, :utility_gpu, :utility_storage, :utility_baterai, :utility_layar, :utility_harga)");
            $statement->execute([
                ':utility_laptop_id' => $id,
                ':utility_cpu' => $cpu,
                ':utility_ram' => $ram,
                ':utility_gpu' => $gpu,
                ':utility_storage' => $storage,
                ':utility_baterai' => $baterai,
                ':utility_layar' => $layar,
                ':utility_harga' => $harga
            ]);
        } catch (PDOException $err) {
            echo $err->getMessage();
        }
    }

    function addKriteria($id, $cpu, $ram, $gpu, $storage, $baterai, $layar, $harga){
        try {
            $statement = DB->prepare("INSERT INTO nilai_kriteria (kriteria_laptop_id, kriteria_cpu, kriteria_ram, kriteria_gpu, kriteria_storage, kriteria_baterai, kriteria_layar, kriteria_harga) VALUES (:kriteria_laptop_id, :kriteria_cpu, :kriteria_ram, :kriteria_gpu, :kriteria_storage, :kriteria_baterai, :kriteria_layar, :kriteria_harga)");
            $statement->execute([
                ':kriteria_laptop_id' => $id,
                ':kriteria_cpu' => $cpu,
                ':kriteria_ram' => $ram,
                ':kriteria_gpu' => $gpu,
                ':kriteria_storage' => $storage,
                ':kriteria_baterai' => $baterai,
                ':kriteria_layar' => $layar,
                ':kriteria_harga' => $harga
            ]);
        } catch (PDOException $err) {
            echo $err->getMessage();
        }
    }

    // function addNilaiAkhir($id, $nilaiAkhir){
    //     try {
    //         $statement = DB->prepare("INSERT INTO nilai_akhir (akhir_laptop_id, nilai_akhir) VALUES (:akhir_laptop_id, :nilai_akhir)");
    //         $statement->execute([
    //             ':akhir_laptop_id' => $id,
    //             ':nilai_akhir' => $nilaiAkhir
    //         ]);
    //     } catch (PDOException $err) {
    //         echo $err->getMessage();
    //     }
    // }

    function addNilaiAkhir($id, $cpu, $ram, $gpu, $storage, $baterai, $layar, $harga){
        try {
            $statement = DB->prepare("INSERT INTO nilai_akhir (akhir_laptop_id, akhir_cpu, akhir_ram, akhir_gpu, akhir_storage, akhir_baterai, akhir_layar, akhir_harga) VALUES (:akhir_laptop_id, :akhir_cpu, :akhir_ram, :akhir_gpu, :akhir_storage, :akhir_baterai, :akhir_layar, :akhir_harga)");
            $statement->execute([
                ':akhir_laptop_id' => $id,
                ':akhir_cpu' => $cpu,
                ':akhir_ram' => $ram,
                ':akhir_gpu' => $gpu,
                ':akhir_storage' => $storage,
                ':akhir_baterai' => $baterai,
                ':akhir_layar' => $layar,
                ':akhir_harga' => $harga
            ]);
        } catch (PDOException $err) {
            echo $err->getMessage();
        }
    }

    function addHasilAkhir($id, $hasilAkhir){
        try {
            $statement = DB->prepare("INSERT INTO hasil_akhir (hasil_laptop_id, nilai_hasil_akhir) VALUES (:hasil_laptop_id, :nilai_hasil)");
            $statement->execute([
                ':hasil_laptop_id' => $id,
                ':nilai_hasil' => $hasilAkhir
            ]);
        } catch (PDOException $err) {
            echo $err->getMessage();
        }
    }

    

    function getUsers(){
        try {
            $statement = DB->prepare("SELECT * FROM users");
            $statement->execute();

            return $statement->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $err) {
            echo $err->getMessage();
        }
    }

    function getOneLaptop($id){
        try {
            $statement = DB->prepare("SELECT * FROM laptop WHERE laptop_id = :laptop_id");
            $statement->bindValue(':laptop_id', $id);
            $statement->execute();

            return $statement->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $err) {
            echo $err->getMessage();
        }
    }

    function getListLaptop(){
        try {
            $statement = DB->prepare("SELECT * FROM laptop");
            $statement->execute();

            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $err) {
            echo $err->getMessage();
        }
    }

    function getLastLaptop(){
        try {
            $statement = DB->prepare("SELECT * FROM laptop ORDER BY laptop_id DESC LIMIT 1");
            $statement->execute();

            return $statement->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $err) {
            echo $err->getMessage();
        }
    }

    function getKriteria($id){
        try {
            $statement = DB->prepare("SELECT * FROM nilai_kriteria  WHERE kriteria_laptop_id = :id");
            $statement->bindValue(':id', $id);
            $statement->execute();
            
            return $statement->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $err) {
            echo $err->getMessage();
        }
    }
    
    function getUtility($id){
        try {
            $statement = DB->prepare("SELECT * FROM nilai_utility WHERE utility_laptop_id = :id");
            $statement->bindValue(':id', $id);
            $statement->execute();

            return $statement->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $err) {
            echo $err->getMessage();
        }
    }

    function getNilaiAkhir($id){
        try {
            $statement = DB->prepare("SELECT * FROM nilai_akhir WHERE akhir_laptop_id = :id");
            $statement->bindValue(':id', $id);
            $statement->execute();

            return $statement->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $err) {
            echo $err->getMessage();
        }
    }

    function getRanking(){
        try {
            $statement = DB->prepare("SELECT l.laptop_id, l.laptop_nama, a.nilai_hasil_akhir FROM laptop l, hasil_akhir a WHERE l.laptop_id = a.hasil_laptop_id ORDER BY a.nilai_hasil_akhir DESC");
            $statement->execute();

            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $err) {
            echo $err->getMessage();
        }
    }

    
    function showLaptop($data){
        try {
            $statement = DB->prepare("SELECT * FROM nilai_akhir WHERE id IN :data ");
            $statement->execute([
                ':data' => $data
            ]);

            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $err) {
            echo $err->getMessage();
        }
    }

    function deleteLaptop($id){
        try {
            $statement = DB->prepare("DELETE FROM laptop WHERE laptop_id = :id");
            $statement->execute([
                ':id' => $id
            ]);
        } catch (PDOException $err) {
            echo $err->getMessage();
        }
    }

    function deleteKriteria($id){
        try {
            $statement = DB->prepare("DELETE FROM nilai_kriteria WHERE kriteria_laptop_id = :id");
            $statement->execute([
                ':id' => $id
            ]);
        } catch (PDOException $err) {
            echo $err->getMessage();
        }
    }

    function deleteUtility($id){
        try {
            $statement = DB->prepare("DELETE FROM nilai_utility WHERE utility_laptop_id = :id");
            $statement->execute([
                ':id' => $id
            ]);
        } catch (PDOException $err) {
            echo $err->getMessage();
        }
    }

    function deleteAkhir($id){
        try {
            $statement = DB->prepare("DELETE FROM nilai_akhir WHERE akhir_laptop_id = :id");
            $statement->execute([
                ':id' => $id
            ]);
        } catch (PDOException $err) {
            echo $err->getMessage();
        }
    }

    function deleteHasil($id){
        try {
            $statement = DB->prepare("DELETE FROM hasil_akhir WHERE hasil_laptop_id = :id");
            $statement->execute([
                ':id' => $id
            ]);
        } catch (PDOException $err) {
            echo $err->getMessage();
        }
    }

    // function authenticate(&$errors, $username, $password){
    //     try {
    //         $statement = DB->prepare("SELECT * FROM users WHERE username = :username AND password = SHA2(:password, 256)");
    //         $statement->execute([
    //             ':username' => $username,
    //             ':password' => $password
    //         ]);

    //         if ($statement->rowCount() > 0){
    //             $user = $statement->fetch(PDO::FETCH_ASSOC);

    //             $_SESSION['is_logged_in'] = true;
    //             $_SESSION['user_id'] = $user['id'];
    //             $_SESSION['role'] = 'user';
    //         } 

    //         return $statement->rowCount();
    //     } catch (PDOException $err) {
    //         echo $err->getMessage();
    //     }
    // }

?>
