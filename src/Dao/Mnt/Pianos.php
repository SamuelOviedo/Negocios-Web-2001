<?php
namespace Dao\Mnt;

use Dao\Table;

class Pianos extends Table
{
    public static function getAll()
    {
        $sqlstr = "Select * from pianos;";
        return self::obtenerRegistros($sqlstr, array());
    }

    public static function getById(int $pianoid)
    {
        $sqlstr = "SELECT * from `pianos` where pianoid=:pianoid;";
        $sqlParams = array("pianoid" => $pianoid);
        return self::obtenerUnRegistro($sqlstr, $sqlParams);
    }

    public static function insert(
        $pianodsc,
        $pianobio,
        $pianosales,
        $pianoimguri,
        $pianoimgthb,
        $pianoprice,
        $pianoest
    ) {
        $sqlstr = "INSERT INTO `nw202202`.`pianos` 
        (`pianodsc`, `pianobio`, `pianosales`, 
        `pianoimguri`, `pianoimgthb`, `pianoprice`, 
        `pianoest`) 
        VALUES 
        (:pianodsc, :pianobio, :pianosales,
        :pianoimguri, :pianoimgthb, :pianoprice, 
        :pianoest)";
        $sqlParams = [
            "pianodsc" => $pianodsc ,
            "pianobio" => $pianobio ,
            "pianosales" => $pianosales ,
            "pianoimguri" => $pianoimguri ,
            "pianoimgthb" => $pianoimgthb ,
            "pianoprice" => $pianoprice ,
            "pianoest" =>  $pianoest
        ];
        return self::executeNonQuery($sqlstr, $sqlParams);
    }

    public static function update(
        $pianodsc,
        $pianobio,
        $pianosales,
        $pianoimguri,
        $pianoimgthb,
        $pianoprice,
        $pianoest
    ) {
        $sqlstr = "UPDATE `pianos` set
`invPrdBrCod`=:invPrdBrCod, `invPrdCodInt`=:invPrdCodInt,
`invPrdDsc`=:invPrdDsc, `invPrdTip`=:invPrdTip, `invPrdEst`=:invPrdEst,
`invPrdPadre`=:invPrdPadre, `invPrdFactor`=:invPrdFactor, `invPrdVnd`=:invPrdVnd
where `invPrdId` = :invPrdId;";
        $sqlParams = array(
            "invPrdBrCod" => $invPrdBrCod,
            "invPrdCodInt" => $invPrdCodInt,
            "invPrdDsc" => $invPrdDsc,
            "invPrdTip" => $invPrdTip,
            "invPrdEst" => $invPrdEst,
            "invPrdPadre" => $invPrdPadre,
            "invPrdFactor" => $invPrdFactor,
            "invPrdVnd" => $invPrdVnd,
            "invPrdId" => $invPrdId
        );
        return self::executeNonQuery($sqlstr, $sqlParams);
    }

    public static function delete($invPrdId)
    {
        $sqlstr = "DELETE from `productos` where invPrdId = :invPrdId;";
        $sqlParams = array(
            "invPrdId" => $invPrdId
        );
        return self::executeNonQuery($sqlstr, $sqlParams);
    }

}