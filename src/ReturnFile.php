<?php
namespace Leandrofreires\RetornoBradesco;
use Exception;

class ReturnFile {

    private $fileDir ;

    private $header ;

    private $trailler;

    private $record = [];

    /**
     * @return mixed
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @param mixed $header
     * @throws Exception
     */
    public function setHeader($header)
    {
        $this->header = new Header($header);
    }

    /**
     * @return mixed
     */
    public function getTrailler()
    {
        return $this->trailler;
    }

    /**
     * @param $trailler
     * @throws Exception
     */
    public function setTrailler($trailler)
    {
        $this->trailler = new Trailler($trailler);
    }

    /**
     * @return mixed
     */
    public function getFileDir()
    {
        return $this->fileDir;
    }


    /**
     * @param mixed $fileDir
     */
    public function setFileDir($fileDir)
    {
        $this->fileDir = $fileDir;
    }

    /**
     * @return mixed
     */
    public function getRecord()
    {
        return $this->record;
    }

    /**
     * @param $record
     * @throws Exception
     */
    public function setRecord($record)
    {
        $this->record[] = new Record($record);
    }

    /**
     * File constructor.
     * @param null $fileDir
     * @throws Exception
     */
    public function __construct($fileDir = null)
    {
        if ((is_null($fileDir)) || (!file_exists($fileDir)))
            throw new Exception('Necessario passar arquivo para a classe ou arquivo nao existe!');

        $this->setFileDir($fileDir);

        $arquivo = File($this->getFileDir(),FILE_SKIP_EMPTY_LINES | FILE_TEXT);

        $this->setHeader($arquivo[0]);

        $this->setTrailler($arquivo[count($arquivo)-1]);

        unset($arquivo[count($arquivo)-1]);//remove trailler

        unset($arquivo[0]);//remove header

        foreach ($arquivo as $record):
            $this->setRecord($record);
        endforeach;
    }
}