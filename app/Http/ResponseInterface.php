<?php

namespace App\Http;

/**
 * Interface ResponseInterface
 */
interface ResponseInterface
{
    /**
     * @param mixed $content
     *
     * @return ResponseInterface
     */
    public function setJsonContent($content): ResponseInterface;

    /**
     * @param string $content
     *
     * @return ResponseInterface
     */
    public function setContent(string $content): ResponseInterface;

    /**
     * @param string $location
     * @param int $statusCode
     *
     * @return ResponseInterface
     */
    public function redirect(string $location, $statusCode = 302): ResponseInterface;

    /**
     * @param int $code
     * @param string|null $message
     *
     * @return ResponseInterface
     */
    public function setStatusCode(int $code, string $message = null): ResponseInterface;

    /**
     * @param string $contentType
     * @param string|null $charset
     *
     * @return ResponseInterface
     */
    public function setContentType(string $contentType, string $charset = null): ResponseInterface;

    /**
     * @param string $name
     * @param mixed $value
     *
     * @return ResponseInterface
     */
    public function setHeader(string $name, $value = null): ResponseInterface;
}
