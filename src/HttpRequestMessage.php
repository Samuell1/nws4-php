<?php

namespace NineDigit\NWS4;

final class HttpRequestMessage {
  public string $method;
  public string $url;
  public string $body = '';
  public array $headers = array();

  public function __construct(string $method, string $url, array $headers = array(), string $body = '') {
    $this->method = $method;
    $this->url = $url;
    $this->headers = $headers;
    $this->body = $body;
  }
}

?>