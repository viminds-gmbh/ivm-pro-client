<?php

namespace Qbus\IvmProClient\Generator;

use Exception;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpFile;
use Nette\PhpGenerator\PsrPrinter;

use function array_filter;
use function array_keys;
use function ctype_digit;
use function curl_close;
use function curl_errno;
use function curl_error;
use function curl_exec;
use function curl_getinfo;
use function curl_init;
use function curl_setopt;
use function dirname;
use function file_put_contents;
use function is_int;
use function json_decode;

class UnitGenerator
{
    private $subdomain;
    private $id;

    public function __construct($subdomain, $id)
    {
        $this->subdomain = $subdomain;
        $this->id = $id;
    }

    public function generateUnit()
    {
        $phpFile = new PhpFile();
        $phpFile->addNamespace('Qbus\\IvmProClient\\Model');

        $class = new ClassType('Unit');

        $constructor = $class->addMethod('__construct');
        $constructor->addParameter('properties')
                    ->setType('array');
        $constructor->setBody(
            'foreach ($properties as $property => $value) {' . "\n" .
            '    if (property_exists($this, $property) === false) {' . "\n" .
            '        trigger_error(\'Cannot set unknown property \' . $property, E_USER_WARNING);' . "\n" .
            '        continue;' . "\n" .
            '    }' . "\n\n" .
            '    $this->$property = $value;' . "\n" .
            '}'
        );

        $properties = $this->getProperties();

        foreach ($properties as $property) {
            $class->addProperty($property)
                  ->setProtected();
            $class->addMethod('get' . ucfirst($property))
                  ->setBody('return $this->' . $property . ';');
        }

        $filepath = dirname(__DIR__) . '/Model/Unit.php';
        $printer = new PsrPrinter();
        $phpFileString = $printer->printFile($phpFile);
        $classString = $printer->printClass($class);

        file_put_contents($filepath, $phpFileString . "\n" . $classString);
    }

    protected function getProperties()
    {
        $jsonString = $this->getResponse();

        $jsonArr = json_decode($jsonString, true);

        if (!is_array($jsonArr)) {
            throw new Exception('Server response could not be decoded');
        }

        return array_keys(array_filter(
            $jsonArr,
            function ($v, $k) {
                return !is_int($k) && !ctype_digit($k);
            },
            ARRAY_FILTER_USE_BOTH
        ));
    }

    protected function getResponse()
    {
        $url = 'https://'.$this->subdomain.'.ivm-professional.de/modules/json/json_details.php';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'flat_id=' . $this->id);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            $error = curl_error($ch);
            curl_close($ch);
            throw new Exception($error);
        }

        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if ($status !== 200) {
            curl_close($ch);
            throw new Exception('Server returned HTTP status code ' . $status . ' for URL ' . $url);
        }

        curl_close($ch);

        return $response;
    }
}
