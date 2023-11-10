<?php

namespace PHP_DCAT_AP\DCAT;

use PHP_DCAT_AP\Attribute\URI;

/**
 * A media type, e.g. the format of a computer file.
 */
#[URI('http://purl.org/dc/terms/FileFormat')]
class FileFormat extends Resource
{
    /**********************************************************************************************
     * NO MANDATORY PROPERTIES
     *********************************************************************************************/

    /**********************************************************************************************
     * NO RECOMMENDED PROPERTIES
     *********************************************************************************************/

    /**********************************************************************************************
     * NO OPTIONAL PROPERTIES
     *********************************************************************************************/

    /**********************************************************************************************
     * STATIC CONSTRUCTORS
     *********************************************************************************************/
    
    /**
     * @return FileFormat The EU IMMC File Type entry for JSON
     */
    public static function JSON(): FileFormat
    {
        return new self(uri: 'http://publications.europa.eu/resource/authority/file-type/JSON');
    }

    /**
     * @return FileFormat The EU IMMC File type entry for RDF Turtle
     */
    public static function RDF_TURTLE(): FileFormat
    {
        return new self(uri: 'http://publications.europa.eu/resource/authority/file-type/RDF_TURTLE');
    }
    
    /**
     * @return FileFormat The EU IMMC File type entry for RDF XML
     */
    public static function RDF_XML(): FileFormat
    {
        return new self(uri: 'http://publications.europa.eu/resource/authority/file-type/RDF_XML');
    }
    
    /**
     * @return FileFormat The EU IMMC File type entry for XML Schema
     */
    public static function SCHEMA_XML(): FileFormat
    {
        return new self(uri: 'http://publications.europa.eu/resource/authority/file-type/SCHEMA_XML');
    }
    
    /**
     * @return FileFormat The EU IMMC File type entry for spreadsheet XLSX
     */
    public static function XLSX(): FileFormat
    {
        return new self(uri: 'http://publications.europa.eu/resource/authority/file-type/XLSX');
    }
    
    /**
     * @return FileFormat The EU IMMC File type entry for XML
     */
    public static function XML(): FileFormat
    {
        return new self(uri: 'http://publications.europa.eu/resource/authority/file-type/XML');
    }
    
    /**
     * @return FileFormat The EU IMMC File type entry for YAML
     */
    public static function YAML(): FileFormat
    {
        return new self(uri: 'http://publications.europa.eu/resource/authority/file-type/YAML');
    }
}
