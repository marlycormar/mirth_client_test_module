<?php

require_once \ExternalModules\ExternalModules::getProjectHeaderPath();

$client_module = \ExternalModules\ExternalModules::getModuleInstance('redcap_mirth_client', 'v1.0');
$test_module = new MirthClientTestModule\ExternalModule\ExternalModule($_GET['pid']);

$base_url = $test_module->getProjectSetting('end-point-url');
$client = $client_module->getClient($base_url);

?>

<form method="POST">
  <div class="form-group">
    <label for="extension">base url extension</label>
    <input type="text" class="form-control" id="extension" aria-describedby="extensionHelp" placeholder="extension that will be appended to the base url, ex. /api">
    <small id="extensionHelp" class="form-text text-muted">e.g. if base_url is 'google.com/' and extension is '/api' then the request will be sent to 'google.com/api'</small>
  </div>
  <div class="form-group">
    <label for="method">http method</label>
    <input type="text" class="form-control" id="method" placeholder="http method, ex. GET">
  </div>
  <div class="form-check">
    <label for="JSON_payload">optional JSON payload</label>
    <textarea class="form-control" id="JSON_payload"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
