<?php
    /**
     * Created by PhpStorm.
     * User: skhanker
     * Date: 15/07/2015
     * Time: 5:49 PM
     */

    namespace UBC\LSIT\Resources\Metadata\Schemas\OC\Properties;

    use UBC\LSIT\Resources\Metadata\Schemas\OC\Property;

    class IdentifierFile extends Property
    {
        private $uriPart = 'identifierFile';//http://purl.org/dc/terms/#uriPart

        private $namePart = 'identifierFile';//Term Name: #name

        /**
         * @param string $value
         * @param string $label
         * @param array  $attrs
         */
        public function __construct ($value, $label = 'File UUID', array $attrs = [])
        {
            #    value
            #  , uri (part put in the uri)
            #  , name (element name in the spec)
            #  , label
            parent::__construct ($value, $this->uriPart, $this->namePart, $label);

            $d = [];
            $d [] = $this->getDescription ();
            $d [] = 'Local Field';
            $d [] = 'Refers to the individual files within an AIP and generated by Archivematica. This serves as a link between CONTENTdm and Archivematica.';

            $this->setDescription (implode ('; ', $d));

            $this->setAttributes ($attrs);
        }
    }
