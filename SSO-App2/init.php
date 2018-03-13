<?php

require "vendor/autoload.php";

use Auth0\SDK\Auth0;

$auth0 = new Auth0([
  'domain' => 'eas-test.auth0.com',
  'client_id' => 'xXdd77BzxKCzqQ84EfA1eg9vTs1KLMsX',
  'client_secret' => '8RzlsNpaXmLG8qP8KMBUPqZh4EtzOHM2UeSXgQEfZjVvDkOVi4C618r6rGkMiG1o',
  'redirect_uri' => 'http://sso-app2/callback',
  'audience' => 'https://eas-test.auth0.com/userinfo',
  'scope' => 'openid profile',
  'persist_id_token' => true,
  'persist_access_token' => true,
  'persist_refresh_token' => true,
]);