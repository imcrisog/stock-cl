<?php

namespace Database\Seeders;

use App\Models\Roles;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'TestAdmin',
            'email' => 'test@example.com',
            'password' => 'test',
            'role_id' => '1',
        ]);

        User::factory()->create([
            'name' => 'TestVendedor',
            'email' => 'test@seller.com',
            'password' => 'test',
            'role_id' => '3',
        ]);

         User::factory()->create([
            'name' => 'TestSecretaria',
            'email' => 'test@secretary.com',
            'password' => 'test',
            'role_id' => 2,
        ]);

        Roles::create([
            'id' => '1',
            'name' => 'admin',
        ]);
        
        Roles::create([
            'id' => '2',
            'name' => 'secretario',
        ]);
        
        Roles::create([
            'id' => '3',
            'name' => 'vendedor',
        ]);

        DB::table('stocks')->insert([
            ['CODIGO' => 'NEUADVA0002', 'MARCA' => 'ADVANCE', 'MODELO' => 'NHS L4A TL', 'ANCHO' => 10.0, 'PERFIL' => 'X', 'E' => '', 'ARO' => '05/16/2024', 'TIPO' => 'L4A TL', 'TELAS' => '12PR', 'I_C' => '', 'I_V' => '', 'FAB' => '', 'C_C_IVA' => 1000, 'C_NETO' => '840.336134453782', 'PCP' => '20%', 'PPP' => '10%', 'PPS' => '15%', 'PL' => '20%', 'FLETE' => 1000, 'C_P' => 2200, 'P_DIST' => 2100, 'MBV' => 2200, 'PRECIO_LISTA' => 2200, 'PROVEEDOR' => 'PROVEE 1', 'STOCK_R' => '#N/A', 'STOCK_O' => '#REF!', 'V_TR' => '#N/A', 'V_TO' => '#REF!', 'TOTALES' => '#N/A'],
            ['CODIGO' => 'NEUKAPS2001', 'MARCA' => 'KASPEN', 'MODELO' => 'HS101 DIR/CAR', 'ANCHO' => 11.0, 'PERFIL' => 'R', 'E' => '', 'ARO' => '05/22/2024', 'TIPO' => '', 'TELAS' => '16PR', 'I_C' => '', 'I_V' => '', 'FAB' => 'CHI', 'C_C_IVA' => 2000, 'C_NETO' => '1680.67226890756', 'PCP' => '20%', 'PPP' => '10%', 'PPS' => '15%', 'PL' => '20%', 'FLETE' => 1000, 'C_P' => 3400, 'P_DIST' => 3200, 'MBV' => 3300, 'PRECIO_LISTA' => 3400, 'PROVEEDOR' => 'PROVEE 2', 'STOCK_R' => '#N/A', 'STOCK_O' => '#REF!', 'V_TR' => '#N/A', 'V_TO' => '#REF!', 'TOTALES' => '#N/A'],
            ['CODIGO' => 'NEUKAPS2002', 'MARCA' => 'KASPEN', 'MODELO' => 'HS103 TRA/CAM', 'ANCHO' => 11.0, 'PERFIL' => 'R', 'E' => '', 'ARO' => '05/22/2024', 'TIPO' => '', 'TELAS' => '16PR', 'I_C' => '', 'I_V' => '', 'FAB' => 'CHI', 'C_C_IVA' => 3000, 'C_NETO' => '2521.00840336134', 'PCP' => '20%', 'PPP' => '10%', 'PPS' => '15%', 'PL' => '20%', 'FLETE' => 1000, 'C_P' => 4600, 'P_DIST' => 4300, 'MBV' => 4500, 'PRECIO_LISTA' => 4600, 'PROVEEDOR' => 'PROVEE 3', 'STOCK_R' => '#N/A', 'STOCK_O' => '#REF!', 'V_TR' => '#N/A', 'V_TO' => '#REF!', 'TOTALES' => '#N/A'],
            ['CODIGO' => 'NEUADVA0006', 'MARCA' => 'ADVANCE', 'MODELO' => 'NHS L2B TL', 'ANCHO' => 12.0, 'PERFIL' => 'X', 'E' => '', 'ARO' => '05/16/2024', 'TIPO' => 'L2B TL', 'TELAS' => '12PR', 'I_C' => '', 'I_V' => '', 'FAB' => '', 'C_C_IVA' => 4000, 'C_NETO' => '3361.34453781513', 'PCP' => '20%', 'PPP' => '10%', 'PPS' => '15%', 'PL' => '20%', 'FLETE' => 1000, 'C_P' => 5800, 'P_DIST' => 5400, 'MBV' => 5600, 'PRECIO_LISTA' => 5800, 'PROVEEDOR' => 'PROVEE 4', 'STOCK_R' => '#N/A', 'STOCK_O' => '#REF!', 'V_TR' => '#N/A', 'V_TO' => '#REF!', 'TOTALES' => '#N/A'],
            ['CODIGO' => 'NEUADVA0005', 'MARCA' => 'ADVANCE', 'MODELO' => 'NHS L4A TL', 'ANCHO' => 12.0, 'PERFIL' => 'X', 'E' => '', 'ARO' => '05/16/2024', 'TIPO' => 'L4A TL', 'TELAS' => '14PR', 'I_C' => '', 'I_V' => '', 'FAB' => '', 'C_C_IVA' => 5000, 'C_NETO' => '4201.68067226891', 'PCP' => '20%', 'PPP' => '10%', 'PPS' => '15%', 'PL' => '20%', 'FLETE' => 1000, 'C_P' => 7000, 'P_DIST' => 6500, 'MBV' => 6800, 'PRECIO_LISTA' => 7000, 'PROVEEDOR' => 'PROVEE 5', 'STOCK_R' => '#N/A', 'STOCK_O' => '#REF!', 'V_TR' => '#N/A', 'V_TO' => '#REF!', 'TOTALES' => '#N/A'],
            ['CODIGO' => 'NEUMAXA0001', 'MARCA' => 'MAXAM', 'MODELO' => 'MS-910 R', 'ANCHO' => 12.5, 'PERFIL' => '80', 'E' => 'R', 'ARO' => '18', 'TIPO' => '', 'TELAS' => '', 'I_C' => '', 'I_V' => '', 'FAB' => '', 'C_C_IVA' => 6000, 'C_NETO' => '5042.01680672269', 'PCP' => '20%', 'PPP' => '10%', 'PPS' => '15%', 'PL' => '20%', 'FLETE' => 1000, 'C_P' => 8200, 'P_DIST' => 7600, 'MBV' => 7900, 'PRECIO_LISTA' => 8200, 'PROVEEDOR' => 'PROVEE 6', 'STOCK_R' => '#N/A', 'STOCK_O' => '#REF!', 'V_TR' => '#N/A', 'V_TO' => '#REF!', 'TOTALES' => '#N/A'],
            ['CODIGO' => 'NEUFIRE0001', 'MARCA' => 'INVOVIC', 'MODELO' => 'EL-523 M/T', 'ANCHO' => 27.0, 'PERFIL' => '05/08/2024', 'E' => 'R', 'ARO' => '14', 'TIPO' => 'M/T', 'TELAS' => '6PR', 'I_C' => '95', 'I_V' => 'Q', 'FAB' => '', 'C_C_IVA' => 7000, 'C_NETO' => '5882.35294117647', 'PCP' => '20%', 'PPP' => '10%', 'PPS' => '15%', 'PL' => '20%', 'FLETE' => 1000, 'C_P' => 9400, 'P_DIST' => 8700, 'MBV' => 9100, 'PRECIO_LISTA' => 9400, 'PROVEEDOR' => 'PROVEE 7', 'STOCK_R' => '#N/A', 'STOCK_O' => '#REF!', 'V_TR' => '#N/A', 'V_TO' => '#REF!', 'TOTALES' => '#N/A'],
            ['CODIGO' => 'NEUSUNS0065', 'MARCA' => 'SUNSET TIRES', 'MODELO' => 'ALL TERRAIN T/A', 'ANCHO' => 27.0, 'PERFIL' => '05/08/2024', 'E' => 'R', 'ARO' => '14', 'TIPO' => 'A/T', 'TELAS' => '6PR', 'I_C' => '95', 'I_V' => 'Q', 'FAB' => 'CHI', 'C_C_IVA' => 8000, 'C_NETO' => '6722.68907563025', 'PCP' => '20%', 'PPP' => '10%', 'PPS' => '15%', 'PL' => '20%', 'FLETE' => 1000, 'C_P' => 10600, 'P_DIST' => 9800, 'MBV' => 10200, 'PRECIO_LISTA' => 10600, 'PROVEEDOR' => 'PROVEE 8', 'STOCK_R' => '#N/A', 'STOCK_O' => '#REF!', 'V_TR' => '#N/A', 'V_TO' => '#REF!', 'TOTALES' => '#N/A'],
            ['CODIGO' => 'NEUAVAN0001', 'MARCA' => 'AVANTE', 'MODELO' => 'BOSS TERRAIN', 'ANCHO' => 27.0, 'PERFIL' => '05/08/2024', 'E' => 'R', 'ARO' => '14', 'TIPO' => 'A/T', 'TELAS' => '6PR', 'I_C' => '95', 'I_V' => 'S', 'FAB' => '', 'C_C_IVA' => 9000, 'C_NETO' => '7563.02521008403', 'PCP' => '20%', 'PPP' => '10%', 'PPS' => '15%', 'PL' => '20%', 'FLETE' => 1000, 'C_P' => 11800, 'P_DIST' => 10900, 'MBV' => 11400, 'PRECIO_LISTA' => 11800, 'PROVEEDOR' => 'PROVEE 9', 'STOCK_R' => '#N/A', 'STOCK_O' => '#REF!', 'V_TR' => '#N/A', 'V_TO' => '#REF!', 'TOTALES' => '#N/A'],
            ['CODIGO' => 'NEUSUNS0068', 'MARCA' => 'SUNSET TIRES', 'MODELO' => 'MUD-TERRAIN M/T ', 'ANCHO' => 27.0, 'PERFIL' => '05/08/2024', 'E' => 'R', 'ARO' => '14', 'TIPO' => 'M/T', 'TELAS' => '6PR', 'I_C' => '95', 'I_V' => 'Q', 'FAB' => 'CHI', 'C_C_IVA' => 10000, 'C_NETO' => '8403.36134453782', 'PCP' => '20%', 'PPP' => '10%', 'PPS' => '15%', 'PL' => '20%', 'FLETE' => 1000, 'C_P' => 13000, 'P_DIST' => 12000, 'MBV' => 12500, 'PRECIO_LISTA' => 13000, 'PROVEEDOR' => 'PROVEE 10', 'STOCK_R' => '#N/A', 'STOCK_O' => '#REF!', 'V_TR' => '#N/A', 'V_TO' => '#REF!', 'TOTALES' => '#N/A'],
            ['CODIGO' => 'NEUMAXX0001', 'MARCA' => 'MAXXIS', 'MODELO' => 'MT-754', 'ANCHO' => 27.0, 'PERFIL' => '05/08/2024', 'E' => 'R', 'ARO' => '14', 'TIPO' => 'M/T', 'TELAS' => '6PR', 'I_C' => '95', 'I_V' => 'Q', 'FAB' => '', 'C_C_IVA' => 11000, 'C_NETO' => '9243.6974789916', 'PCP' => '20%', 'PPP' => '10%', 'PPS' => '15%', 'PL' => '20%', 'FLETE' => 1000, 'C_P' => 14200, 'P_DIST' => 13100, 'MBV' => 13700, 'PRECIO_LISTA' => 14200, 'PROVEEDOR' => 'PROVEE 11', 'STOCK_R' => '#N/A', 'STOCK_O' => '#REF!', 'V_TR' => '#N/A', 'V_TO' => '#REF!', 'TOTALES' => '#N/A'],
            ['CODIGO' => 'NEUGRIP1004', 'MARCA' => 'GRIPMAX', 'MODELO' => 'MUD RAGE M/T', 'ANCHO' => 30.0, 'PERFIL' => '05/09/2024', 'E' => 'R', 'ARO' => '15', 'TIPO' => 'M/T', 'TELAS' => '', 'I_C' => '104', 'I_V' => 'Q', 'FAB' => '', 'C_C_IVA' => 12000, 'C_NETO' => '10084.0336134454', 'PCP' => '20%', 'PPP' => '10%', 'PPS' => '15%', 'PL' => '20%', 'FLETE' => 1000, 'C_P' => 15400, 'P_DIST' => 14200, 'MBV' => 14800, 'PRECIO_LISTA' => 15400, 'PROVEEDOR' => 'PROVEE 12', 'STOCK_R' => '#N/A', 'STOCK_O' => '#REF!', 'V_TR' => '#N/A', 'V_TO' => '#REF!', 'TOTALES' => '#N/A'],
            ['CODIGO' => 'NEUCOMF0025', 'MARCA' => 'COMFORSER', 'MODELO' => 'CF-3000', 'ANCHO' => 30.0, 'PERFIL' => '05/09/2024', 'E' => 'R', 'ARO' => '15', 'TIPO' => 'M/T', 'TELAS' => '', 'I_C' => '104', 'I_V' => 'R', 'FAB' => '', 'C_C_IVA' => 13000, 'C_NETO' => '10924.3697478992', 'PCP' => '20%', 'PPP' => '10%', 'PPS' => '15%', 'PL' => '20%', 'FLETE' => 1000, 'C_P' => 16600, 'P_DIST' => 15300, 'MBV' => 16000, 'PRECIO_LISTA' => 16600, 'PROVEEDOR' => 'PROVEE 13', 'STOCK_R' => '#N/A', 'STOCK_O' => '#REF!', 'V_TR' => '#N/A', 'V_TO' => '#REF!', 'TOTALES' => '#N/A'],
            ['CODIGO' => 'NEUNEXE2300', 'MARCA' => 'NEXEN', 'MODELO' => 'ROADIAN AT-II', 'ANCHO' => 30.0, 'PERFIL' => '05/09/2024', 'E' => 'R', 'ARO' => '15', 'TIPO' => 'A/T', 'TELAS' => '6PR', 'I_C' => '104', 'I_V' => 'Q', 'FAB' => '', 'C_C_IVA' => 14000, 'C_NETO' => '11764.7058823529', 'PCP' => '20%', 'PPP' => '10%', 'PPS' => '15%', 'PL' => '20%', 'FLETE' => 1000, 'C_P' => 17800, 'P_DIST' => 16400, 'MBV' => 17100, 'PRECIO_LISTA' => 17800, 'PROVEEDOR' => 'PROVEE 14', 'STOCK_R' => '#N/A', 'STOCK_O' => '#REF!', 'V_TR' => '#N/A', 'V_TO' => '#REF!', 'TOTALES' => '#N/A'],
            ['CODIGO' => 'NEUTRIA2035', 'MARCA' => 'TRIANGLE', 'MODELO' => 'TR-292', 'ANCHO' => 30.0, 'PERFIL' => '05/09/2024', 'E' => 'R', 'ARO' => '15', 'TIPO' => 'A/T', 'TELAS' => '6PR', 'I_C' => '104', 'I_V' => 'S', 'FAB' => 'CHI', 'C_C_IVA' => 15000, 'C_NETO' => '12605.0420168067', 'PCP' => '20%', 'PPP' => '10%', 'PPS' => '15%', 'PL' => '20%', 'FLETE' => 1000, 'C_P' => 19000, 'P_DIST' => 17500, 'MBV' => 18300, 'PRECIO_LISTA' => 19000, 'PROVEEDOR' => 'PROVEE 15', 'STOCK_R' => '#N/A', 'STOCK_O' => '#REF!', 'V_TR' => '#N/A', 'V_TO' => '#REF!', 'TOTALES' => '#N/A'],
            ['CODIGO' => 'NEUNEXE2215', 'MARCA' => 'NEXEN', 'MODELO' => 'ROADIAN HT (LTV)', 'ANCHO' => 30.0, 'PERFIL' => '05/09/2024', 'E' => 'R', 'ARO' => '15', 'TIPO' => '', 'TELAS' => '6PR', 'I_C' => '', 'I_V' => '', 'FAB' => 'KOREA', 'C_C_IVA' => 16000, 'C_NETO' => '13445.3781512605', 'PCP' => '20%', 'PPP' => '10%', 'PPS' => '15%', 'PL' => '20%', 'FLETE' => 1000, 'C_P' => 20200, 'P_DIST' => 18600, 'MBV' => 19400, 'PRECIO_LISTA' => 20200, 'PROVEEDOR' => 'PROVEE 16', 'STOCK_R' => '#N/A', 'STOCK_O' => '#REF!', 'V_TR' => '#N/A', 'V_TO' => '#REF!', 'TOTALES' => '#N/A'],
            ['CODIGO' => 'NEUGOOD0001', 'MARCA' => 'GOODRIDE', 'MODELO' => 'SL-366', 'ANCHO' => 30.0, 'PERFIL' => '05/09/2024', 'E' => 'R', 'ARO' => '15', 'TIPO' => 'M/T', 'TELAS' => '6PR', 'I_C' => '104', 'I_V' => 'Q', 'FAB' => 'CHI', 'C_C_IVA' => 17000, 'C_NETO' => '14285.7142857143', 'PCP' => '20%', 'PPP' => '10%', 'PPS' => '15%', 'PL' => '20%', 'FLETE' => 1000, 'C_P' => 21400, 'P_DIST' => 19700, 'MBV' => 20600, 'PRECIO_LISTA' => 21400, 'PROVEEDOR' => 'PROVEE 17', 'STOCK_R' => '#N/A', 'STOCK_O' => '#REF!', 'V_TR' => '#N/A', 'V_TO' => '#REF!', 'TOTALES' => '#N/A'],
            ['CODIGO' => 'NEUTRIA0001', 'MARCA' => 'TRIANGLE', 'MODELO' => 'TR-246', 'ANCHO' => 30.0, 'PERFIL' => '05/09/2024', 'E' => 'R', 'ARO' => '15', 'TIPO' => 'AT', 'TELAS' => '6PR', 'I_C' => '104', 'I_V' => 'S', 'FAB' => 'CHI', 'C_C_IVA' => 18000, 'C_NETO' => '15126.0504201681', 'PCP' => '20%', 'PPP' => '10%', 'PPS' => '15%', 'PL' => '20%', 'FLETE' => 1000, 'C_P' => 22600, 'P_DIST' => 20800, 'MBV' => 21700, 'PRECIO_LISTA' => 22600, 'PROVEEDOR' => 'PROVEE 18', 'STOCK_R' => '#N/A', 'STOCK_O' => '#REF!', 'V_TR' => '#N/A', 'V_TO' => '#REF!', 'TOTALES' => '#N/A'],
            ['CODIGO' => 'NEUBLAC0001', 'MARCA' => 'BLACKLION', 'MODELO' => 'M-871', 'ANCHO' => 30.0, 'PERFIL' => '05/09/2024', 'E' => 'R', 'ARO' => '15', 'TIPO' => 'M/T', 'TELAS' => '6PR', 'I_C' => '104', 'I_V' => 'Q', 'FAB' => 'CHI', 'C_C_IVA' => 19000, 'C_NETO' => '15966.3865546219', 'PCP' => '20%', 'PPP' => '10%', 'PPS' => '15%', 'PL' => '20%', 'FLETE' => 1000, 'C_P' => 23800, 'P_DIST' => 21900, 'MBV' => 22900, 'PRECIO_LISTA' => 23800, 'PROVEEDOR' => 'PROVEE 19', 'STOCK_R' => '#N/A', 'STOCK_O' => '#REF!', 'V_TR' => '#N/A', 'V_TO' => '#REF!', 'TOTALES' => '#N/A'],
            ['CODIGO' => 'NEUSAIL2163', 'MARCA' => 'SAILUN', 'MODELO' => 'TERRAMAX MT OWL LT', 'ANCHO' => 30.0, 'PERFIL' => '05/09/2024', 'E' => 'R', 'ARO' => '15', 'TIPO' => 'M/T', 'TELAS' => '6PR', 'I_C' => '104', 'I_V' => 'Q', 'FAB' => 'CHI', 'C_C_IVA' => 20000, 'C_NETO' => '16806.7226890756', 'PCP' => '20%', 'PPP' => '10%', 'PPS' => '15%', 'PL' => '20%', 'FLETE' => 1000, 'C_P' => 25000, 'P_DIST' => 23000, 'MBV' => 24000, 'PRECIO_LISTA' => 25000, 'PROVEEDOR' => 'PROVEE 20', 'STOCK_R' => '#N/A', 'STOCK_O' => '#REF!', 'V_TR' => '#N/A', 'V_TO' => '#REF!', 'TOTALES' => '#N/A'],
            ['CODIGO' => 'NEUNEXE2214', 'MARCA' => 'NEXEN', 'MODELO' => 'ROA AT PRO RA8', 'ANCHO' => 30.0, 'PERFIL' => '05/09/2024', 'E' => 'R', 'ARO' => '15', 'TIPO' => '', 'TELAS' => '6PR', 'I_C' => '104', 'I_V' => 'S', 'FAB' => 'KOREA', 'C_C_IVA' => 21000, 'C_NETO' => '17647.0588235294', 'PCP' => '20%', 'PPP' => '10%', 'PPS' => '15%', 'PL' => '20%', 'FLETE' => 1000, 'C_P' => 26200, 'P_DIST' => 24100, 'MBV' => 25200, 'PRECIO_LISTA' => 26200, 'PROVEEDOR' => 'PROVEE 21', 'STOCK_R' => '#N/A', 'STOCK_O' => '#REF!', 'V_TR' => '#N/A', 'V_TO' => '#REF!', 'TOTALES' => '#N/A'],
            ['CODIGO' => 'NEUDUNL1001', 'MARCA' => 'DUNLOP', 'MODELO' => 'AT-5', 'ANCHO' => 30.0, 'PERFIL' => '05/09/2024', 'E' => 'R', 'ARO' => '15', 'TIPO' => 'A/T', 'TELAS' => '', 'I_C' => '104', 'I_V' => 'S', 'FAB' => 'THA', 'C_C_IVA' => 22000, 'C_NETO' => '18487.3949579832', 'PCP' => '20%', 'PPP' => '10%', 'PPS' => '15%', 'PL' => '20%', 'FLETE' => 1000, 'C_P' => 27400, 'P_DIST' => 25200, 'MBV' => 26300, 'PRECIO_LISTA' => 27400, 'PROVEEDOR' => 'PROVEE 22', 'STOCK_R' => '#N/A', 'STOCK_O' => '#REF!', 'V_TR' => '#N/A', 'V_TO' => '#REF!', 'TOTALES' => '#N/A'],
            ['CODIGO' => 'NEUBF0003', 'MARCA' => 'BF GOODRICH', 'MODELO' => 'KO-2', 'ANCHO' => 30.0, 'PERFIL' => '05/09/2024', 'E' => 'R', 'ARO' => '15', 'TIPO' => 'A/T', 'TELAS' => '', 'I_C' => '104', 'I_V' => 'S', 'FAB' => '', 'C_C_IVA' => 23000, 'C_NETO' => '19327.731092437', 'PCP' => '20%', 'PPP' => '10%', 'PPS' => '15%', 'PL' => '20%', 'FLETE' => 1000, 'C_P' => 28600, 'P_DIST' => 26300, 'MBV' => 27500, 'PRECIO_LISTA' => 28600, 'PROVEEDOR' => 'PROVEE 23', 'STOCK_R' => '#N/A', 'STOCK_O' => '#REF!', 'V_TR' => '#N/A', 'V_TO' => '#REF!', 'TOTALES' => '#N/A'],
            ['CODIGO' => 'NEUBF0004', 'MARCA' => 'BF GOODRICH', 'MODELO' => 'KM-3', 'ANCHO' => 30.0, 'PERFIL' => '05/09/2024', 'E' => 'R', 'ARO' => '15', 'TIPO' => 'M/T', 'TELAS' => '', 'I_C' => '104', 'I_V' => 'Q', 'FAB' => '', 'C_C_IVA' => 24000, 'C_NETO' => '20168.0672268908', 'PCP' => '20%', 'PPP' => '10%', 'PPS' => '15%', 'PL' => '20%', 'FLETE' => 1000, 'C_P' => 29800, 'P_DIST' => 27400, 'MBV' => 28600, 'PRECIO_LISTA' => 29800, 'PROVEEDOR' => 'PROVEE 24', 'STOCK_R' => '#N/A', 'STOCK_O' => '#REF!', 'V_TR' => '#N/A', 'V_TO' => '#REF!', 'TOTALES' => '#N/A'],
            ['CODIGO' => 'NEUXBRI0432', 'MARCA' => 'XBRI', 'MODELO' => 'FORZA H/T', 'ANCHO' => 31.0, 'PERFIL' => '05/10/2024', 'E' => 'R', 'ARO' => '15', 'TIPO' => 'H/T', 'TELAS' => '6PR', 'I_C' => '109', 'I_V' => 'Q', 'FAB' => '', 'C_C_IVA' => 25000, 'C_NETO' => '21008.4033613445', 'PCP' => '20%', 'PPP' => '10%', 'PPS' => '15%', 'PL' => '20%', 'FLETE' => 1000, 'C_P' => 31000, 'P_DIST' => 28500, 'MBV' => 29800, 'PRECIO_LISTA' => 31000, 'PROVEEDOR' => 'PROVEE 25', 'STOCK_R' => '#N/A', 'STOCK_O' => '#REF!', 'V_TR' => '#N/A', 'V_TO' => '#REF!', 'TOTALES' => '#N/A'],
            ['CODIGO' => 'NEUMAXX0008', 'MARCA' => 'MAXXIS', 'MODELO' => 'AT-980', 'ANCHO' => 31.0, 'PERFIL' => '05/10/2024', 'E' => 'R', 'ARO' => '15', 'TIPO' => 'A/T', 'TELAS' => '6PR', 'I_C' => '109', 'I_V' => 'S', 'FAB' => '', 'C_C_IVA' => 26000, 'C_NETO' => '21848.7394957983', 'PCP' => '20%', 'PPP' => '10%', 'PPS' => '15%', 'PL' => '20%', 'FLETE' => 1000, 'C_P' => 32200, 'P_DIST' => 29600, 'MBV' => 30900, 'PRECIO_LISTA' => 32200, 'PROVEEDOR' => 'PROVEE 26', 'STOCK_R' => '#N/A', 'STOCK_O' => '#REF!', 'V_TR' => '#N/A', 'V_TO' => '#REF!', 'TOTALES' => '#N/A'],
            [
                'CODIGO' => 'NEUDURA0195', 'MARCA' => 'DURABLE', 'MODELO' => 'REBOK M/T', 'ANCHO' => 31.0, 'PERFIL' => '05/10/2024',
                'E' => 'R', 'ARO' => '15', 'TIPO' => 'M/T', 'TELAS' => '6PR', 'I_C' => '109', 'I_V' => 'Q', 'FAB' => '',
                'C_C_IVA' => 27000, 'C_NETO' => '22689.0756302521', 'PCP' => '20%', 'PPP' => '10%', 'PPS' => '15%',
                'PL' => '20%', 'FLETE' => 1000, 'C_P' => 33400, 'P_DIST' => 30700, 'MBV' => 32100, 'PRECIO_LISTA' => 33400,
                'PROVEEDOR' => 'PROVEE 27', 'STOCK_R' => '#N/A', 'STOCK_O' => '#REF!', 'V_TR' => '#N/A', 'V_TO' => '#REF!',
                'TOTALES' => '#N/A'
            ],
            [
                'CODIGO' => 'NEULAKE0001', 'MARCA' => 'LAKESEA', 'MODELO' => 'MUDSTER M/T', 'ANCHO' => 31.0, 'PERFIL' => '05/10/2024',
                'E' => 'R', 'ARO' => '15', 'TIPO' => 'M/T', 'TELAS' => '6PR', 'I_C' => '109', 'I_V' => 'Q', 'FAB' => '',
                'C_C_IVA' => 28000, 'C_NETO' => '23529.4117647059', 'PCP' => '20%', 'PPP' => '10%', 'PPS' => '15%',
                'PL' => '20%', 'FLETE' => 1000, 'C_P' => 34600, 'P_DIST' => 31800, 'MBV' => 33200, 'PRECIO_LISTA' => 34600,
                'PROVEEDOR' => 'PROVEE 28', 'STOCK_R' => '#N/A', 'STOCK_O' => '#REF!', 'V_TR' => '#N/A', 'V_TO' => '#REF!',
                'TOTALES' => '#N/A'
            ],
            [
                'CODIGO' => 'NEULANV00177', 'MARCA' => 'LANVIGATOR', 'MODELO' => 'CATCHFORS A/T', 'ANCHO' => 31.0, 'PERFIL' => '05/10/2024',
                'E' => 'R', 'ARO' => '15', 'TIPO' => 'A/T', 'TELAS' => '6PR', 'I_C' => '109', 'I_V' => 'S', 'FAB' => '',
                'C_C_IVA' => 29000, 'C_NETO' => '24369.7478991597', 'PCP' => '20%', 'PPP' => '10%', 'PPS' => '15%',
                'PL' => '20%', 'FLETE' => 1000, 'C_P' => 35800, 'P_DIST' => 32900, 'MBV' => 34400, 'PRECIO_LISTA' => 35800,
                'PROVEEDOR' => 'PROVEE 29', 'STOCK_R' => '#N/A', 'STOCK_O' => '#REF!', 'V_TR' => '#N/A', 'V_TO' => '#REF!',
                'TOTALES' => '#N/A'
            ]
        ]);
    }
}
