<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 17.02.17
 * Time: 3:46
 */

namespace User0dev\UrlShortener\Storage;


abstract class Queries
{
    const CREATE_TABLE = "CREATE TABLE IF NOT EXISTS urls (id INT(11) NOT NULL AUTO_INCREMENT, long_url VARCHAR(512) NOT NULL, PRIMARY KEY (id))";
    const INSERT_URL = "INSERT INTO urls (short_url, long_url) VALUES (:short_url, :long_url)";
    const GET_LONG_URL = "SELECT long_url FROM urls WHERE short_url = :short_url";
}