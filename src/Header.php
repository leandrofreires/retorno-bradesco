<?php
namespace Leandrofreires\RetornoBradesco;

use Exception;
class Header {

    private $idRegistro; //Identificação do Registro

    private $idArquivo; //Identificação do Arquivo Retorno

    private $codEmpresa; //Código da Empresa

    private $dataGravacao; //Data da Gravação do Arquivo

    private $numeroAvisoBancario; //No Aviso Bancário

    private $dataCredito; //Data do Crédito
    /**
     * @return mixed
     */
    public function getIdRegistro()
    {
        return $this->idRegistro;
    }

    /**
     * @param mixed $idRegistro
     */
    public function setIdRegistro($idRegistro)
    {
        $this->idRegistro = $idRegistro;
    }

    /**
     * @return mixed
     */
    public function getIdArquivo()
    {
        return $this->idArquivo;
    }

    /**
     * @param mixed $idArquivo
     */
    public function setIdArquivo($idArquivo)
    {
        $this->idArquivo = $idArquivo;
    }

    /**
     * @return mixed
     */
    public function getCodEmpresa()
    {
        return $this->codEmpresa;
    }

    /**
     * @param mixed $codEmpresa
     */
    public function setCodEmpresa($codEmpresa)
    {
        $this->codEmpresa = $codEmpresa;
    }

    /**
     * @return mixed
     */
    public function getDataGravacao()
    {
        return $this->dataGravacao;
    }

    /**
     * @param mixed $dataGravacao
     */
    public function setDataGravacao($dataGravacao)
    {
        $this->dataGravacao = $dataGravacao;
    }

    /**
     * @return mixed
     */
    public function getNumeroAvisoBancario()
    {
        return $this->numeroAvisoBancario;
    }

    /**
     * @param mixed $numeroAvisoBancario
     */
    public function setNumeroAvisoBancario($numeroAvisoBancario)
    {
        $this->numeroAvisoBancario = $numeroAvisoBancario;
    }

    /**
     * @return mixed
     */
    public function getDataCredito()
    {
        return $this->dataCredito;
    }

    /**
     * @param mixed $dataCredito
     */
    public function setDataCredito($dataCredito)
    {
        $this->dataCredito = $dataCredito;
    }

    public function __construct($header)
    {
        if (strlen($header) !== 402 || (substr($header,2,7) !== "RETORNO"))
            throw new Exception('Arquivo de retorno possui um header fora dos padroes! Varificar Aruivo!');
        //print_r("Identificação do Registro: ".substr($header,0,1).PHP_EOL);
        $this->setIdRegistro(substr($header,0,1));

        //print_r("Identificação do Arquivo Retorno: ".substr($header,1,1).PHP_EOL);
        $this->setIdArquivo(substr($header,1,1));

        //print_r("Literal Retorno: ".substr($header,2,7).PHP_EOL);

        //print_r("Código do Serviço: ".substr($header,9,2).PHP_EOL);

        //print_r("Literal Serviço: ".substr($header,11,15).PHP_EOL);

        //print_r("Código da Empresa: ".substr($header,26,20).PHP_EOL);
        $this->setCodEmpresa(substr($header,26,20));

        //print_r("Nome da Empresa por Extenso: ".substr($header,46,30).PHP_EOL);

        //print_r("No do Bradesco na Câmara Compensação: ".substr($header,76,3).PHP_EOL);

        //print_r("Nome do Banco por Extenso: ".substr($header,79,15).PHP_EOL);

        //print_r("Data da Gravação do Arquivo: ".substr($header,94,6).PHP_EOL);
        $this->setDataGravacao(substr($header,94,6));

        //print_r("Densidade de Gravação: ".substr($header,100,8).PHP_EOL);

        //print_r("No Aviso Bancário: ".substr($header,108,5).PHP_EOL);
        $this->setNumeroAvisoBancario(substr($header,108,5));

        //print_r("Brancos: ".substr($header,113,266).PHP_EOL);

        //print_r("Data do Crédito: ".substr($header,379,6).PHP_EOL);
        $this->setDataCredito(substr($header,379,6));

        //print_r("Brancos: ".substr($header,385,9).PHP_EOL);

        //print_r("No Seqüencial de registro: ".substr($header,394,6).PHP_EOL);

    }

}
