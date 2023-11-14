<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Client extends CI_Controller
{
    public function index()
    {
        // $this->load->view('welcome_message');

        // mengambil data dari url
        $file = file_get_contents("http://localhost:8000/mahasiswa");
        $data = json_decode($file);

        if (is_object($data) && property_exists($data, 'data')) {
            $data_array = $data->data;

            if (is_array($data_array)) {
                echo '<table border="1">';
                echo '<tr><th>ID Mahasiswa</th><th>Nama Mahasiswa</th><th>Tanggal Lahir</th><th>Alamat</th>';

                foreach ($data_array as $a) {
                    echo '<tr>';
                    echo '<td>' . $a->id_mahasiswa . '</td>';
                    echo '<td>' . $a->nama . '</td>';
                    echo '<td>' . $a->tanggal_lahir . '</td>';
                    echo '<td>' . $a->alamat . '</td>';
                    echo '<tr>';
                }

                echo '</table>';
            } else {
                echo 'Data tidak valid';
            }
        } else {
            echo 'Data tidak valid';
        }
    }
}
