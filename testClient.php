<?php
require_once \ExternalModules\ExternalModules::getProjectHeaderPath();

$client_module = \ExternalModules\ExternalModules::getModuleInstance('redcap_mirth_client', 'v1.0');

if(!empty($_POST['method']) && !empty($_POST['endpoint-id']) ) {
    $client = $client_module->getClient($_POST['endpoint-id']);
    $client->request($_POST['method'], $_POST['extension'], $_POST['json']);
}

?>

<form method="POST" >
  <div class="form-group">
    <label for="base-url">endpoint id (required)</label>
    <input type="text" name="endpoint-id" class="form-control" id="method" placeholder="endpoint-id, mirth_connect">
  </div>
  <div class="form-group">
    <label for="method">http method (required)</label>
    <input type="text" name="method" class="form-control" id="method" placeholder="http method, ex. GET">
  </div>
  <div class="form-group">
    <label for="extension">base url extension (optional)</label>
    <input type="text" name="extension" class="form-control" id="extension" aria-describedby="extensionHelp" placeholder="extension that will be appended to the base url, ex. /channels">
    <small id="extensionHelp" class="form-text text-muted">e.g. if base_url is 'google.com/' and extension is '/api' then the request will be sent to 'google.com/api'</small>
  </div>
  <div class="form-check">
    <label for="JSON_payload">JSON payload (optional)</label>
    <textarea name="json" class="form-control" id="JSON_payload"></textarea>
  </div>
  <input type="submit" class="btn btn-primary" value="Submit"></input>
</form>
