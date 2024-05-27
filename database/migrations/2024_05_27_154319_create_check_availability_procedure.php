<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateCheckAvailabilityProcedure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
            CREATE DEFINER=`root`@`localhost` PROCEDURE `CheckAvailability` (
                IN `pinjam_date` DATE, 
                IN `pengembalian_date` DATE
            )
            BEGIN
                SELECT 
                    nama_barang,
                    IFNULL(jumlah_barang - COALESCE(SUM(jumlah_barang_pinjam), 0), jumlah_barang) AS jumlah_tersedia
                FROM (
                    SELECT 
                        b.nama_barang,
                        b.jumlah_barang,
                        CASE
                            WHEN p.id_barang IS NULL THEN 0
                            ELSE p.jumlah_barang
                        END AS jumlah_barang_pinjam
                    FROM 
                        barangs b
                    LEFT JOIN (
                        SELECT 
                            id_barang,
                            SUM(jumlah_barang) AS jumlah_barang
                        FROM 
                            pinjams
                        WHERE 
                            pinjam_date BETWEEN tanggal_pinjam AND tanggal_pengembalian
                            OR pengembalian_date BETWEEN tanggal_pinjam AND tanggal_pengembalian
                            OR tanggal_pinjam BETWEEN pinjam_date AND pengembalian_date
                            OR tanggal_pengembalian BETWEEN pinjam_date AND pengembalian_date
                            OR tanggal_pinjam IS NULL
                        GROUP BY 
                            id_barang
                    ) p ON b.id_barang = p.id_barang
                ) subquery
                GROUP BY 
                    nama_barang, jumlah_barang;
            END
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS CheckAvailability');
    }
}
