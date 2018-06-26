<?php
namespace Leandrofreires\RetornoBradesco;
use Exception;

class Trailler {

    private $idRegistro; //Identificação do Registro

    private $idRetorno; //Identificação do Retorno

    private $tipoRegistro; //Identificação Tipo de Registro

    private $codBanco; //Código do Banco

    private $quantidadeTituloemCobranca; //Quantidade de Títulos em Cobrança

    private $valorTotalCobranca; //Valor Total em Cobrança

    private $numeroAvisoBancario; //No do Aviso Bancário

    private $quantidadeRegistrosOcorrencia02; //Quantidade de Registros- Ocorrência 02 – Confirmação de Entradas

    private $valordosRegistrosOcorrencia02; //Valor dos Registros – Ocorrência 02 - Confirmação de Entradas

    private $quantidadeRegistrosOcorrencia06; //Quantidade dos Registros - Ocorrência 06 – Liquidação

    private $valordosRegistrosOcorrencia06; //Valor dos Registros–Ocorrência 06 – Liquidação

    private $quantidadeRegistrosOcorrencia09; //Quantidade dos Registros - Ocorrência 09 e 10-Títulos baixados

    private $valordosRegistrosOcorrencia09; //Valor dos Registros – Ocorrência 09 e 10 - Títulos baixados

    private $quantidadeRegistrosOcorrencia13; //Quantidade de registros - ocorrência 13 - Abatimento Cancelado

    private $valordosRegistrosOcorrencia13; //Valor dos Registros – Ocorrência 13 - Abatimento Cancelado

    private $quantidadeRegistrosOcorrencia14; //Quantidade dos Registros - Ocorrência 14 – Vencimento Alterado

    private $valordosRegistrosOcorrencia14; //Valor dos Registros – Ocorrência 14 - Vencimento Alterado

    private $quantidadeRegistrosOcorrencia12; //Quantidade dos Registros- Ocorrência 12 – Abatimento Concedido

    private $valordosRegistrosOcorrencia12; //Valor dos Registros – Ocorrência 12 - Abatimento Concedido

    private $quantidadeRegistrosOcorrencia19; //Quantidade dos Registros- Ocorrência 19-Confirmação da Instrução Protesto

    private $valordosRegistrosOcorrencia19; //Valor dos Registros – Ocorrência 19 - Confirmação da Instrução de Protesto

    private $valorRateios; //Valor Total dos Rateios Efetuados

    private $quantidadeRateios; //Quantidade Total dos Rateios Efetuados

    private $numeroSequencialRegistro; //Número Seqüencial do Registro

    /**
     * Trailler constructor.
     * @param $trailler
     * @throws Exception
     */
    public function __construct($trailler)
    {
        if (strlen($trailler) !== 402)
            throw new Exception('Trailer do arquivo de retorno e incopativel verifique o arquivo de retorno');
        $this->idRegistro = substr($trailler,0,1);
        $this->idRetorno = substr($trailler, 1,1);
        $this->tipoRegistro = substr($trailler,2,2);
        $this->codBanco = substr($trailler,4,3);
        $this->quantidadeTituloemCobranca = substr($trailler,17,8);
        $this->valorTotalCobranca = substr($trailler,25,14);
        $this->numeroAvisoBancario = substr($trailler,39,8);
        $this->quantidadeRegistrosOcorrencia02 = substr($trailler,57,5);
        $this->valordosRegistrosOcorrencia02 = substr($trailler,62,12);
        $this->valordosRegistrosOcorrencia06 = substr($trailler,74,12);
        $this->quantidadeRegistrosOcorrencia06 = substr($trailler,86,5);
        $this->quantidadeRegistrosOcorrencia09 = substr($trailler,103,5);
        $this->valordosRegistrosOcorrencia09 = substr($trailler,108,12);
        $this->quantidadeRegistrosOcorrencia13 = substr($trailler,120,5);
        $this->valordosRegistrosOcorrencia13 = substr($trailler,125,12);
        $this->quantidadeRegistrosOcorrencia14 = substr($trailler,137,5);
        $this->valordosRegistrosOcorrencia14 = substr($trailler,142,12);
        $this->quantidadeRegistrosOcorrencia12 = substr($trailler,154,5);
        $this->valordosRegistrosOcorrencia12 = substr($trailler,159,12);
        $this->quantidadeRegistrosOcorrencia19 = substr($trailler,171,5);
        $this->valordosRegistrosOcorrencia19 = substr($trailler,176,12);
        $this->valorRateios = substr($trailler,362,15);
        $this->quantidadeRateios = substr($trailler,377,8);
        $this->numeroSequencialRegistro = substr($trailler,394,6);
    }

    /**
     * @return bool|string
     */
    public function getIdRegistro()
    {
        return $this->idRegistro;
    }

    /**
     * @return bool|string
     */
    public function getIdRetorno()
    {
        return $this->idRetorno;
    }

    /**
     * @return bool|string
     */
    public function getTipoRegistro()
    {
        return $this->tipoRegistro;
    }

    /**
     * @return bool|string
     */
    public function getCodBanco()
    {
        return $this->codBanco;
    }

    /**
     * @return bool|string
     */
    public function getQuantidadeTituloemCobranca()
    {
        return $this->quantidadeTituloemCobranca;
    }

    /**
     * @return bool|string
     */
    public function getValorTotalCobranca()
    {
        return $this->valorTotalCobranca;
    }

    /**
     * @return bool|string
     */
    public function getNumeroAvisoBancario()
    {
        return $this->numeroAvisoBancario;
    }

    /**
     * @return bool|string
     */
    public function getQuantidadeRegistrosOcorrencia02()
    {
        return $this->quantidadeRegistrosOcorrencia02;
    }

    /**
     * @return bool|string
     */
    public function getValordosRegistrosOcorrencia02()
    {
        return $this->valordosRegistrosOcorrencia02;
    }

    /**
     * @return bool|string
     */
    public function getQuantidadeRegistrosOcorrencia06()
    {
        return $this->quantidadeRegistrosOcorrencia06;
    }

    /**
     * @return bool|string
     */
    public function getValordosRegistrosOcorrencia06()
    {
        return $this->valordosRegistrosOcorrencia06;
    }

    /**
     * @return bool|string
     */
    public function getQuantidadeRegistrosOcorrencia09()
    {
        return $this->quantidadeRegistrosOcorrencia09;
    }

    /**
     * @return bool|string
     */
    public function getValordosRegistrosOcorrencia09()
    {
        return $this->valordosRegistrosOcorrencia09;
    }

    /**
     * @return bool|string
     */
    public function getQuantidadeRegistrosOcorrencia13()
    {
        return $this->quantidadeRegistrosOcorrencia13;
    }

    /**
     * @return bool|string
     */
    public function getValordosRegistrosOcorrencia13()
    {
        return $this->valordosRegistrosOcorrencia13;
    }

    /**
     * @return bool|string
     */
    public function getQuantidadeRegistrosOcorrencia14()
    {
        return $this->quantidadeRegistrosOcorrencia14;
    }

    /**
     * @return bool|string
     */
    public function getValordosRegistrosOcorrencia14()
    {
        return $this->valordosRegistrosOcorrencia14;
    }

    /**
     * @return bool|string
     */
    public function getQuantidadeRegistrosOcorrencia12()
    {
        return $this->quantidadeRegistrosOcorrencia12;
    }

    /**
     * @return bool|string
     */
    public function getValordosRegistrosOcorrencia12()
    {
        return $this->valordosRegistrosOcorrencia12;
    }

    /**
     * @return bool|string
     */
    public function getQuantidadeRegistrosOcorrencia19()
    {
        return $this->quantidadeRegistrosOcorrencia19;
    }

    /**
     * @return bool|string
     */
    public function getValordosRegistrosOcorrencia19()
    {
        return $this->valordosRegistrosOcorrencia19;
    }

    /**
     * @return bool|string
     */
    public function getValorRateios()
    {
        return $this->valorRateios;
    }

    /**
     * @return bool|string
     */
    public function getQuantidadeRateios()
    {
        return $this->quantidadeRateios;
    }

    /**
     * @return bool|string
     */
    public function getNumeroSequencialRegistro()
    {
        return $this->numeroSequencialRegistro;
    }

}