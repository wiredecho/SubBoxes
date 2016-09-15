<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_eiDXRjLI5h5AAAa66Ih1pNnf ",
  "publishable_key" => "pk_test_xYMza0OevOfEB7TfM8hgk8y2"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>