<?php namespace App\Database\Seeds;

class ProdukSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
                $data = [
                    [
                        'nama_produk' => 'baju',
                        'deskripsi_produk'    => 'gamis'
                    ],
                    [
                        'nama_produk' => 'celana',
                        'deskripsi_produk'    => 'celana chino'
                    ],
                ];

                // Simple Queries


                // Using Query Builder
                $this->db->table('produk')->insertBatch($data);
        }
}