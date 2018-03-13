<?php

require "vendor/autoload.php";

use Auth0\SDK\Auth0;

$auth0 = new Auth0([
  'domain' => 'eas-test.auth0.com',
  'client_id' => 'MpCoImj9azpIKU2259fFXAXXcY1xJRYp',
  'client_secret' => 'CtSyWxuT8P6KOj2RTQu1ZLNvN1HmiZKrDfE4bboLKBSfgZQbT6B41aEu3Qxt',
  'redirect_uri' => 'http://sso-app1/callback',
  'audience' => 'https://eas-test.auth0.com/userinfo',
  'scope' => 'openid profile',
  'persist_id_token' => true,
  'persist_access_token' => true,
  'persist_refresh_token' => true,
]);