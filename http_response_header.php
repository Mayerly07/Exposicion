<?php
//$ http_response_header
function get_contents() {
    file_get_contents("http://example.com");
    var_dump($http_response_header);
  }
  file_get_contents("http://example.com");
  get_contents();

  var_dump($http_response_header);