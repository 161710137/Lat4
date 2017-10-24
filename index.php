<?php
require_once 'identitas.php';

$namanya = new identitas('Andrian','Cilisung','Teknik','Single');
echo "namanya...".$namanya->get_bio().'<br>';
echo "tempat lahir...".$namanya->get_tlh().'<br>';
echo "kelas...".$namanya->get_kls().'<br>';
echo "status...".$namanya->get_stts().'<br>';

?>