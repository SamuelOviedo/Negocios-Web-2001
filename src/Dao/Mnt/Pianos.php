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

    public static function getById(int $invPrdId)
    {
        $sqlstr = "SELECT * from `productos` where invPrdId=:invPrdId;";
        $sqlParams = array("invPrdId" => $invPrdId);
        return self::obtenerUnRegistro($sqlstr, $sqlParams);
    }

    public static function insert(
        $invPrdBrCod,
        $invPrdCodInt,
        $invPrdDsc,
        $invPrdTip,
        $invPrdEst,
        $invPrdPadre,
        $invPrdFactor,
        $invPrdVnd
    ) {
        $sqlstr = "INSERT INTO `productos`
(`invPrdBrCod`, `invPrdCodInt`,
`invPrdDsc`, `invPrdTip`, `invPrdEst`,
`invPrdPadre`, `invPrdFactor`, `invPrdVnd`)
VALUES
(:invPrdBrCod, :invPrdCodInt,
:invPrdDsc, :invPrdTip, :invPrdEst,
:invPrdPadre, :invPrdFactor, :invPrdVnd);
";
        $sqlParams = [
            "invPrdBrCod" => $invPrdBrCod ,
            "invPrdCodInt" => $invPrdCodInt ,
            "invPrdDsc" => $invPrdDsc ,
            "invPrdTip" => $invPrdTip ,
            "invPrdEst" => $invPrdEst ,
            "invPrdPadre" => $invPrdPadre ,
            "invPrdFactor" =>  $invPrdFactor ,
            "invPrdVnd" => $invPrdVnd
        ];
        return self::executeNonQuery($sqlstr, $sqlParams);
    }

    public static function update(
        $invPrdBrCod,
        $invPrdCodInt,
        $invPrdDsc,
        $invPrdTip,
        $invPrdEst,
        $invPrdPadre,
        $invPrdFactor,
        $invPrdVnd,
        $invPrdId
    ) {
        $sqlstr = "UPDATE `productos` set
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