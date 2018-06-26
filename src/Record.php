<?php
namespace Leandrofreires\RetornoBradesco;
use Exception;
class Record {

    private $idRegistro;

    private $tipoInscricaoEmpresa;

    private $numeroInscricaoEmpresa;

    private $identificaoEmpresaNoBanco;

    private $numeroControleParticipante;

    private $identificacaoTituloNoBanco;

    private $indicadorRateioCredito;

    private $pagamentoParcial;

    private $carteira;

    private $identificacaoOcorrencia;

    private $dataOcorrenciaNoBanco;

    private $numeroDocumento;

    private $identificacaoDoTituloNoBanco2;

    private $dataVencimentoTitulo;

    private $valorTitulo;

    private $bancoCobrador;

    private $agenciaCobradora;

    private $despesasDeCobranca;

    private $outrasDespesasCustaProtesto;

    private $jurosOperacaoEmAtraso;

    private $iof;

    private $abatimentoConcedido;

    private $descontoConcedido;

    private $valorPago;

    private $jurosMora;

    private $outrosCreditos;

    private $motivoCodOcorrencia;

    private $dataCredito;

    private $origemPagamento;

    private $chequeBradesco;

    private $motivosDasRegeicoes;

    private $numeroCartorio;

    private $numeroProtocolo;

    private $numeroSequencialRegistro;


    /**
     * Record constructor.
     * @param $record
     * @throws Exception
     */
    public function __construct($record)
    {
        if (strlen($record)!== 402)
            throw new Exception('Arquivo de Retorno invalido');
        $this->idRegistro = substr($record,0,1);

        $this->tipoInscricaoEmpresa = substr($record,1,2);

        $this->numeroInscricaoEmpresa = substr($record,3,14);

        $this->identificaoEmpresaNoBanco = substr($record,20,17);

        $this->numeroControleParticipante = substr($record,37,25);

        $this->identificacaoTituloNoBanco = substr($record,70,12);

        $this->indicadorRateioCredito = substr($record,104,1);

        $this->pagamentoParcial = substr($record,105,2);

        $this->carteira = substr($record,107,1);

        $this->identificacaoOcorrencia = substr($record,108,2);

        $this->dataOcorrenciaNoBanco = substr($record,110,6);

        $this->numeroDocumento = substr($record,116,10);

        $this->identificacaoDoTituloNoBanco2 = substr($record,126,20);

        $this->dataVencimentoTitulo = substr($record,146,6);

        $this->valorTitulo = substr($record,152,13);

        $this->bancoCobrador = substr($record,165,3);

        $this->agenciaCobradora = substr($record,168,5);

        $this->despesasDeCobranca = substr($record, 175,13);

        $this->outrasDespesasCustaProtesto = substr($record,188,13);

        $this->jurosOperacaoEmAtraso = substr($record,201,13);

        $this->iof = substr($record,214,13);

        $this->abatimentoConcedido = substr($record,227,13);

        $this->descontoConcedido = substr($record,240,13);

        $this->valorPago = substr($record,253,13);

        $this->jurosMora = substr($record,266,13);

        $this->outrosCreditos = substr($record,279,13);

        $this->motivoCodOcorrencia = substr($record, 294,1);

        $this->dataCredito = substr($record,295,6);

        $this->origemPagamento = substr($record,301,3);

        $this->chequeBradesco = substr($record,314,4);

        $this->motivosDasRegeicoes = substr($record,318,10);

        $this->numeroCartorio = substr($record,368,2);

        $this->numeroProtocolo = substr($record,370,10);

        $this->numeroSequencialRegistro = substr($record,394,6);

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
    public function getTipoInscricaoEmpresa()
    {
        return $this->tipoInscricaoEmpresa;
    }

    /**
     * @return bool|string
     */
    public function getNumeroInscricaoEmpresa()
    {
        return $this->numeroInscricaoEmpresa;
    }

    /**
     * @return bool|string
     */
    public function getIdentificaoEmpresaNoBanco()
    {
        return $this->identificaoEmpresaNoBanco;
    }

    /**
     * @return bool|string
     */
    public function getNumeroControleParticipante()
    {
        return $this->numeroControleParticipante;
    }

    /**
     * @return bool|string
     */
    public function getIdentificacaoTituloNoBanco()
    {
        return $this->identificacaoTituloNoBanco;
    }

    /**
     * @return bool|string
     */
    public function getIndicadorRateioCredito()
    {
        return $this->indicadorRateioCredito;
    }

    /**
     * @return bool|string
     */
    public function getPagamentoParcial()
    {
        return $this->pagamentoParcial;
    }

    /**
     * @return bool|string
     */
    public function getCarteira()
    {
        return $this->carteira;
    }

    /**
     * @return bool|string
     */
    public function getIdentificacaoOcorrencia()
    {
        return $this->identificacaoOcorrencia;
    }

    /**
     * @return bool|string
     */
    public function getDataOcorrenciaNoBanco()
    {
        return $this->formataData($this->dataOcorrenciaNoBanco);
    }

    /**
     * @return bool|string
     */
    public function getNumeroDocumento()
    {
        return $this->numeroDocumento;
    }

    /**
     * @return bool|string
     */
    public function getIdentificacaoDoTituloNoBanco2()
    {
        return $this->identificacaoDoTituloNoBanco2;
    }

    /**
     * @return bool|string
     */
    public function getDataVencimentoTitulo()
    {
        print_r($this->dataVencimentoTitulo);exit;
        return $this->formataData($this->dataVencimentoTitulo);
    }

    /**
     * @return bool|string
     */
    public function getValorTitulo()
    {
        return $this->formataNumero($this->valorTitulo);
    }

    /**
     * @return bool|string
     */
    public function getBancoCobrador()
    {
        return $this->bancoCobrador;
    }

    /**
     * @return bool|string
     */
    public function getAgenciaCobradora()
    {
        return $this->agenciaCobradora;
    }

    /**
     * @return bool|string
     */
    public function getDespesasDeCobranca()
    {
        return $this->despesasDeCobranca;
    }

    /**
     * @return bool|string
     */
    public function getOutrasDespesasCustaProtesto()
    {
        return $this->outrasDespesasCustaProtesto;
    }

    /**
     * @return bool|string
     */
    public function getJurosOperacaoEmAtraso()
    {
        return $this->jurosOperacaoEmAtraso;
    }

    /**
     * @return bool|string
     */
    public function getIof()
    {
        return $this->iof;
    }

    /**
     * @return bool|string
     */
    public function getAbatimentoConcedido()
    {
        return $this->abatimentoConcedido;
    }

    /**
     * @return bool|string
     */
    public function getDescontoConcedido()
    {
        return $this->descontoConcedido;
    }

    /**
     * @return bool|string
     */
    public function getValorPago()
    {
        return $this->formataNumero($this->valorPago);
    }

    /**
     * @return bool|string
     */
    public function getJurosMora()
    {
        return $this->jurosMora;
    }

    /**
     * @return bool|string
     */
    public function getOutrosCreditos()
    {
        return $this->outrosCreditos;
    }

    /**
     * @return bool|string
     */
    public function getMotivoCodOcorrencia()
    {
        return $this->motivoCodOcorrencia;
    }

    /**
     * @return bool|string
     */
    public function getDataCredito()
    {
        return $this->formataData($this->dataCredito);
    }

    /**
     * @return bool|string
     */
    public function getOrigemPagamento()
    {
        return $this->origemPagamento;
    }

    /**
     * @return bool|string
     */
    public function getChequeBradesco()
    {
        return $this->chequeBradesco;
    }

    /**
     * @return bool|string
     */
    public function getMotivosDasRegeicoes()
    {
        return $this->motivosDasRegeicoes;
    }

    /**
     * @return bool|string
     */
    public function getNumeroCartorio()
    {
        return $this->numeroCartorio;
    }

    /**
     * @return bool|string
     */
    public function getNumeroProtocolo()
    {
        return $this->numeroProtocolo;
    }

    /**
     * @return bool|string
     */
    public function getNumeroSequencialRegistro()
    {
        return $this->numeroSequencialRegistro;
    }

    function formataData($data) {
        $data =  substr($data, 0, 2) . "/" .substr($data, 2, 2) . "/".  substr($data, 4, 2);
        if ($data == '00/00/00')
            return $data;
        return date_create_from_format("d/m/y", $data);
    }
    function formataNumero($valor) {
        $valor = substr($valor,0,strlen($valor)-2).'.'.substr($valor,strlen($valor)-2,2);
        return number_format($valor,2);
    }
}