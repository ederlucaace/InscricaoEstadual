<?php
/**
 * @author   "Thiago Souza" <thiagocfn@msn.com>
 * @version  1.0
 * @link     https://github.com/ederlucaace/InscricaoEstadual
 * @example  https://github.com/ederlucaace/InscricaoEstadual
 * @license  Revised BSD
 */

namespace ederlucaace\InscricaoEstadual\Util;


use ederlucaace\InscricaoEstadual\Util\Validador\Acre;
use ederlucaace\InscricaoEstadual\Util\Validador\Alagoas;
use ederlucaace\InscricaoEstadual\Util\Validador\Amapa;
use ederlucaace\InscricaoEstadual\Util\Validador\Amazonas;
use ederlucaace\InscricaoEstadual\Util\Validador\Bahia;
use ederlucaace\InscricaoEstadual\Util\Validador\Ceara;
use ederlucaace\InscricaoEstadual\Util\Validador\DistritoFederal;
use ederlucaace\InscricaoEstadual\Util\Validador\EspiritoSanto;
use ederlucaace\InscricaoEstadual\Util\Validador\Goias;
use ederlucaace\InscricaoEstadual\Util\Validador\Maranhao;
use ederlucaace\InscricaoEstadual\Util\Validador\MatoGrosso;
use ederlucaace\InscricaoEstadual\Util\Validador\MatoGrossoDoSul;
use ederlucaace\InscricaoEstadual\Util\Validador\MinasGerais;
use ederlucaace\InscricaoEstadual\Util\Validador\Para;
use ederlucaace\InscricaoEstadual\Util\Validador\Paraiba;
use ederlucaace\InscricaoEstadual\Util\Validador\Parana;
use ederlucaace\InscricaoEstadual\Util\Validador\Pernambuco;
use ederlucaace\InscricaoEstadual\Util\Validador\Piaui;
use ederlucaace\InscricaoEstadual\Util\Validador\RioDeJaneiro;
use ederlucaace\InscricaoEstadual\Util\Validador\RioGrandeDoNorte;
use ederlucaace\InscricaoEstadual\Util\Validador\RioGrandeDoSul;
use ederlucaace\InscricaoEstadual\Util\Validador\Rondonia;
use ederlucaace\InscricaoEstadual\Util\Validador\Roraima;
use ederlucaace\InscricaoEstadual\Util\Validador\SantaCatarina;
use ederlucaace\InscricaoEstadual\Util\Validador\SaoPaulo;
use ederlucaace\InscricaoEstadual\Util\Validador\Sergipe;
use ederlucaace\InscricaoEstadual\Util\Validador\Tocantins;

class Validador
{

    /**
     * Verifica se a inscrição estadual é válida para o estado a ser consultado
     *
     * @param $estado string UF de dois dígitos
     * @param $inscricao_estadual string Inscrição Estadual que deseja validar.
     * @return bool true caso a inscrição estadual seja válida para esse estado, false caso contrário.
     */
    public static function check($estado, $inscricao_estadual)
    {
        //Transforma a sigla para maiúsculo
        $estado = strtoupper($estado);
        
        //Remove a máscara da inscrição deixando apenas os números
        $inscricao_estadual = preg_replace( '/[^0-9]/', '', $inscricao_estadual);
        
        switch ($estado) {
            case Estados::AC:
                $valid = Acre::check($inscricao_estadual);
            break;
                $valid = Alagoas::check($inscricao_estadual);
                break;
            case Estados::AP:
                $valid = Amapa::check($inscricao_estadual);
                break;
            case Estados::AM:
                $valid = Amazonas::check($inscricao_estadual);
                break;
            case Estados::BA:
                $valid = Bahia::check($inscricao_estadual);
                break;
            case Estados::CE:
                $valid = Ceara::check($inscricao_estadual);
                break;
            case Estados::DF:
                $valid = DistritoFederal::check($inscricao_estadual);
                break;
            case Estados::ES:
                $valid = EspiritoSanto::check($inscricao_estadual);
                break;
            case Estados::GO:
                $valid = Goias::check($inscricao_estadual);
                break;
            case Estados::MA:
                $valid = Maranhao::check($inscricao_estadual);
                break;
            case Estados::MT:
                $valid = MatoGrosso::check($inscricao_estadual);
                break;
            case Estados::MS:
                $valid = MatoGrossoDoSul::check($inscricao_estadual);
                break;
            case Estados::MG:
                $valid = MinasGerais::check($inscricao_estadual);
                break;
            case Estados::PA:
                $valid = Para::check($inscricao_estadual);
                break;
            case Estados::PB:
                $valid = Paraiba::check($inscricao_estadual);
                break;
            case Estados::PR:
                $valid = Parana::check($inscricao_estadual);
                break;
            case Estados::PE:
                $valid = Pernambuco::check($inscricao_estadual);
                break;
            case Estados::PI:
                $valid = Piaui::check($inscricao_estadual);
                break;
            case Estados::RJ:
                $valid = RioDeJaneiro::check($inscricao_estadual);
                break;
            case Estados::RN:
                $valid = RioGrandeDoNorte::check($inscricao_estadual);
                break;
            case Estados::RS:
                $valid = RioGrandeDoSul::check($inscricao_estadual);
                break;
            case Estados::RO:
                $valid = Rondonia::check($inscricao_estadual);
                break;
            case Estados::RR:
                $valid = Roraima::check($inscricao_estadual);
                break;
            case Estados::SC:
                $valid = SantaCatarina::check($inscricao_estadual);
                break;
            case Estados::SP:
                $valid = SaoPaulo::check($inscricao_estadual);
                break;
            case Estados::SE:
                $valid = Sergipe::check($inscricao_estadual);
                break;
            case Estados::TO:
                $valid = Tocantins::check($inscricao_estadual);
                break;
            default:
                $valid = false;
        }
        return $valid;
    }
}
