


<?php
print 'Hej '.$argv[1].'! Gud vad trevligt att du är här!'. "\n";
require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('Laboration 1');
$log->pushHandler(new StreamHandler('greetings.log', Logger::INFO));
$log->info($argv[1]);
$name = $_GET['name']


<!DOCTYPE html>
<html>
<head>
<title>Testing, testing</title>
</head>
<body>
<?php
echo "Hello, " . $name;
?>
</body>
</html>
