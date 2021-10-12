<?php
$mahasiswa = array("Loka Dwiartara","Laki-laki","24/01/1987","B",3.41,"Bot Technology");
end($mahasiswa); 
for($x=0;$x<6;$x++){
    echo "Index array mahasiswa ke : ".key($mahasiswa)." berisi ".current($mahasiswa)."<br>";prev($mahasiswa);
}
?>