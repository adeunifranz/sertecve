<?php

use yii\db\Migration;

/**
 * Class m181128_142622_tablas
 */
class m181128_142622_tablas extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        echo "creando tablas ... \n";
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_spanish_ci ENGINE=InnoDB';
        }        
            $this->createTable('tblcliente', [
                'id_cli' => $this->primaryKey(),            //CODIGO
                'cidcli' => $this->string()->notNull(),     //CI
                'nomcli' => $this->string()->notNull(),     //NOMBRE
                'apecli' => $this->string()->notNull(),     //APELLIDO
                'telcli' => $this->integer()->notNull(),    //TELEFONO
                'dircli' => $this->text()->notNull(),       //DIRECCION
                'emacli' => $this->string()->notNull(),     //EMAIL
                ], $tableOptions);
            $this->createTable('tblvehiculo', [
                'id_veh' => $this->primaryKey(),            //CODIGO
                'plaveh' => $this->string()->notNull(),     //PLACA
                'marveh' => $this->string()->notNull(),     //MARCA
                'tipveh' => $this->string()->notNull(),     //TIPO
                'modveh' => $this->integer()->notNull(),    //MODELO
                'chaveh' => $this->string()->notNull(),     //CHASIS
                'colveh' => $this->string()->notNull(),     //COLOR
                'pueveh' => $this->integer()->notNull(),    //PUERTAS
                'traveh' => $this->string()->notNull(),     //TRANSMISION
                'proveh' => $this->integer()->notNull(),    //PROPIETARIO
                ], $tableOptions);
            $this->createTable('tblservicio', [
                'id_ser' => $this->primaryKey(),            //CODIGO
                'desser' => $this->text()->notNull(),       //DESCRIPCION
                'preser' => $this->integer()->notNull(),    //PRECIO
                ], $tableOptions);
            $this->createTable('tblcita', [
                'id_cit' => $this->primaryKey(),            //CODIGO
                'feccit' => $this->date()->notNull(),       //FECHA DE SOLICITUD
                'sercit' => $this->integer()->notNull(),    //SERVICIO
                'vehcit' => $this->integer()->notNull(),    //VEHICULO
                'obscit' => $this->text()->notNull(),       //OBSERVACIONES
                ], $tableOptions);            
            $this->createTable('tblhistorial', [
                'id_his' => $this->primaryKey(),            //CODIGO
                'clihis' => $this->integer()->notNull(),    //CLIENTE
                'vehhis' => $this->integer()->notNull(),    //VEHICULO
                'serhis' => $this->integer()->notNull(),    //SERVICIO
                'obshis' => $this->text()->notNull(),       //OBSERVACIONES
                ], $tableOptions);
            $this->createTable('tblrepuesto', [
                'id_rep' => $this->primaryKey(),            //CODIGO
                'nomrep' => $this->string()->notNull(),     //NOMBRE                
                'desrep' => $this->text()->notNull(),       //DESCRIPCION
                'entrep' => $this->date()->notNull(),       //FECHA DE ENTRADA
                'canrep' => $this->integer()->notNull(),    //CANTIDAD
                'prerep' => $this->integer()->notNull(),    //PRECIO                
                ], $tableOptions);
            $this->createTable('tblventa', [
                'id_ven' => $this->primaryKey(),            //CODIGO
                'repven' => $this->integer()->notNull(),    //REPUESTO
                'fecven' => $this->date()->notNull(),       //FECHA
                'canven' => $this->integer()->notNull(),    //CANTIDAD
                ], $tableOptions);
            $this->createTable('tbltrabajo', [
                'id_tra' => $this->primaryKey(),            //CODIGO
                'vehtra' => $this->integer()->notNull(),    //VEHICULO
                'esttra' => $this->string()->notNull(),     //ESTADO DEL TRABAJO
                'initra' => $this->date()->notNull(),       //INICIO
                'fintra' => $this->date()->notNull(),       //FIN 
                'restra' => $this->text()->notNull(),       //RESULTADO
                ], $tableOptions);
            $this->createTable('tblpersonal', [
                'id_per' => $this->primaryKey(),            //CODIGO
                'nomper' => $this->string()->notNull(),     //NOMBRE
                'apeper' => $this->string()->notNull(),     //APELLIDO
                'telper' => $this->string()->notNull(),     //TELEFONO
                'emaper' => $this->string()->notNull(),     //EMAIL
                'dirper' => $this->text()->notNull(),       //DIRECCION
                'carper' => $this->string()->notNull(),     //CARGO
                'fecper' => $this->date()->notNull(),       //FECHA DE CONTRATO
                ], $tableOptions);
            $this->createTable('tblfactura', [
                'id_fac' => $this->primaryKey(),            //CODIGO
                'nomfac' => $this->string()->notNull(),     //NOMBRE O RAZON SOCIAL
                'nitfac' => $this->string()->notNull(),     //NIT O CARNET
                'fecfac' => $this->date()->notNull(),       //FECHA
                'detfac' => $this->integer()->notNull(),    //DETALLE
                ], $tableOptions);            
            $this->createTable('tblrepuestosu', [
                'id_reu' => $this->primaryKey(),            //CODIGO
                'repreu' => $this->integer()->notNull(),    //REPUESTO UTILIZADO
                'canreu' => $this->integer()->notNull(),    //CANTIDAD
                'fecreu' => $this->date()->notNull(),       //FECHA
                'trareu' => $this->integer()->notNull(),    //COD DE ESTADO DE REPARACION
                ], $tableOptions);
            $this->createTable('tblserviciou', [
                'id_seu' => $this->primaryKey(),            //CODIGO
                'serseu' => $this->integer()->notNull(),    //SERVICIO UTILIZADO
                'fecseu' => $this->date()->notNull(),       //FECHA
                'traseu' => $this->integer()->notNull(),    //COD DE ESTADO DE REPARACION
                ], $tableOptions);
    }
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // echo "m181128_142622_tablas cannot be reverted.\n";

        // return false;
        $this->dropTable('tblcliente');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181128_142622_tablas cannot be reverted.\n";

        return false;
    }
    */
}
