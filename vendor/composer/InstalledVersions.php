<?php











namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;






class InstalledVersions
{
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => 'dev-develop',
    'version' => 'dev-develop',
    'aliases' => 
    array (
    ),
    'reference' => '66e797027788466ccf0199f1accb3846f8a179cb',
    'name' => '__root__',
  ),
  'versions' => 
  array (
    '__root__' => 
    array (
      'pretty_version' => 'dev-develop',
      'version' => 'dev-develop',
      'aliases' => 
      array (
      ),
      'reference' => '66e797027788466ccf0199f1accb3846f8a179cb',
    ),
    'doctrine/annotations' => 
    array (
      'pretty_version' => '1.13.2',
      'version' => '1.13.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '5b668aef16090008790395c02c893b1ba13f7e08',
    ),
    'doctrine/cache' => 
    array (
      'pretty_version' => '2.1.1',
      'version' => '2.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '331b4d5dbaeab3827976273e9356b3b453c300ce',
    ),
    'doctrine/collections' => 
    array (
      'pretty_version' => '1.6.8',
      'version' => '1.6.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '1958a744696c6bb3bb0d28db2611dc11610e78af',
    ),
    'doctrine/common' => 
    array (
      'pretty_version' => '3.2.2',
      'version' => '3.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '295082d3750987065912816a9d536c2df735f637',
    ),
    'doctrine/dbal' => 
    array (
      'pretty_version' => '3.3.4',
      'version' => '3.3.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '83f779beaea1893c0bece093ab2104c6d15a7f26',
    ),
    'doctrine/deprecations' => 
    array (
      'pretty_version' => 'v0.5.3',
      'version' => '0.5.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '9504165960a1f83cc1480e2be1dd0a0478561314',
    ),
    'doctrine/doctrine-bundle' => 
    array (
      'pretty_version' => '2.5.7',
      'version' => '2.5.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '1e0d1d7a5982eeebc37dcb4d77bb1a5c5961d96d',
    ),
    'doctrine/doctrine-migrations-bundle' => 
    array (
      'pretty_version' => '3.2.2',
      'version' => '3.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '3393f411ba25ade21969c33f2053220044854d01',
    ),
    'doctrine/event-manager' => 
    array (
      'pretty_version' => '1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '41370af6a30faa9dc0368c4a6814d596e81aba7f',
    ),
    'doctrine/inflector' => 
    array (
      'pretty_version' => '2.0.4',
      'version' => '2.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '8b7ff3e4b7de6b2c84da85637b59fd2880ecaa89',
    ),
    'doctrine/instantiator' => 
    array (
      'pretty_version' => '1.4.1',
      'version' => '1.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '10dcfce151b967d20fde1b34ae6640712c3891bc',
    ),
    'doctrine/lexer' => 
    array (
      'pretty_version' => '1.2.3',
      'version' => '1.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c268e882d4dbdd85e36e4ad69e02dc284f89d229',
    ),
    'doctrine/migrations' => 
    array (
      'pretty_version' => '3.4.1',
      'version' => '3.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e7df670aa9565b435ffec636cebdb4d0a1987f10',
    ),
    'doctrine/orm' => 
    array (
      'pretty_version' => '2.11.2',
      'version' => '2.11.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '9c351e044478135aec1755e2c0c0493a4b6309db',
    ),
    'doctrine/persistence' => 
    array (
      'pretty_version' => '2.4.1',
      'version' => '2.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '092a52b71410ac1795287bb5135704ef07d18dd0',
    ),
    'doctrine/sql-formatter' => 
    array (
      'pretty_version' => '1.1.2',
      'version' => '1.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '20c39c2de286a9d3262cc8ed282a4ae60e265894',
    ),
    'egulias/email-validator' => 
    array (
      'pretty_version' => '3.1.2',
      'version' => '3.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ee0db30118f661fb166bcffbf5d82032df484697',
    ),
    'friendsofphp/proxy-manager-lts' => 
    array (
      'pretty_version' => 'v1.0.7',
      'version' => '1.0.7.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c828ced1f932094ab79e4120a106a666565e4d9c',
    ),
    'guzzlehttp/guzzle' => 
    array (
      'pretty_version' => '7.4.2',
      'version' => '7.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ac1ec1cd9b5624694c3a40be801d94137afb12b4',
    ),
    'guzzlehttp/promises' => 
    array (
      'pretty_version' => '1.5.1',
      'version' => '1.5.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fe752aedc9fd8fcca3fe7ad05d419d32998a06da',
    ),
    'guzzlehttp/psr7' => 
    array (
      'pretty_version' => '2.2.1',
      'version' => '2.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c94a94f120803a18554c1805ef2e539f8285f9a2',
    ),
    'jetbrains/phpstorm-attributes' => 
    array (
      'pretty_version' => '1.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a7a83ae5df4dd3c0875484483de19de8edf60a9f',
    ),
    'laminas/laminas-code' => 
    array (
      'pretty_version' => '4.5.1',
      'version' => '4.5.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '6fd96d4d913571a2cd056a27b123fa28cb90ac4e',
    ),
    'monolog/monolog' => 
    array (
      'pretty_version' => '2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd7fd7450628561ba697b7097d86db72662f54aef',
    ),
    'nikic/php-parser' => 
    array (
      'pretty_version' => 'v4.13.2',
      'version' => '4.13.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '210577fe3cf7badcc5814d99455df46564f3c077',
    ),
    'ocramius/proxy-manager' => 
    array (
      'replaced' => 
      array (
        0 => '^2.1',
      ),
    ),
    'php-http/async-client-implementation' => 
    array (
      'provided' => 
      array (
        0 => '*',
      ),
    ),
    'php-http/client-implementation' => 
    array (
      'provided' => 
      array (
        0 => '*',
      ),
    ),
    'phpdocumentor/reflection-common' => 
    array (
      'pretty_version' => '2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
    ),
    'phpdocumentor/reflection-docblock' => 
    array (
      'pretty_version' => '5.3.0',
      'version' => '5.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '622548b623e81ca6d78b721c5e029f4ce664f170',
    ),
    'phpdocumentor/type-resolver' => 
    array (
      'pretty_version' => '1.6.1',
      'version' => '1.6.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '77a32518733312af16a44300404e945338981de3',
    ),
    'phpstan/phpdoc-parser' => 
    array (
      'pretty_version' => '1.4.1',
      'version' => '1.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '05333065c88f9518e08b094bdd10a4a9e538b2d4',
    ),
    'psr/cache' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '213f9dbc5b9bfbc4f8db86d2838dc968752ce13b',
    ),
    'psr/cache-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0',
      ),
    ),
    'psr/container' => 
    array (
      'pretty_version' => '1.1.2',
      'version' => '1.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '513e0666f7216c7459170d56df27dfcefe1689ea',
    ),
    'psr/container-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/event-dispatcher' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
    ),
    'psr/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-client' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
    ),
    'psr/http-client-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-factory' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
    ),
    'psr/http-factory-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-message' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f6561bf28d520154e4b0ec72be95418abe6d9363',
    ),
    'psr/http-message-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/link' => 
    array (
      'pretty_version' => '1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '846c25f58a1f02b93a00f2404e3626b6bf9b7807',
    ),
    'psr/link-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/log' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ef29f6d262798707a9edd554e2b82517ef3a9376',
    ),
    'psr/log-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0.0 || 2.0.0 || 3.0.0',
        1 => '1.0|2.0',
      ),
    ),
    'psr/simple-cache-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0',
      ),
    ),
    'ralouphie/getallheaders' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '120b605dfeb996808c31b6477290a714d356e822',
    ),
    'roave/security-advisories' => 
    array (
      'pretty_version' => 'dev-latest',
      'version' => 'dev-latest',
      'aliases' => 
      array (
        0 => '9999999-dev',
      ),
      'reference' => '4b07ae1c8cf8264073a0e561b9e833fc2a3759ea',
    ),
    'sensio/framework-extra-bundle' => 
    array (
      'pretty_version' => 'v6.2.6',
      'version' => '6.2.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '6bd976c99ef3f78e31c9490a10ba6dd8901076eb',
    ),
    'symfony/amqp-messenger' => 
    array (
      'pretty_version' => 'v5.4.5',
      'version' => '5.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '4175a0a98507e7ec575dca9b36e6c0a5a072d3fd',
    ),
    'symfony/asset' => 
    array (
      'pretty_version' => 'v5.4.3',
      'version' => '5.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '156e45cba14f9be3fe8b987e86f482a76aa078f3',
    ),
    'symfony/browser-kit' => 
    array (
      'pretty_version' => 'v6.0.3',
      'version' => '6.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '0ec66df981406fd2c9e41acbb526249bd18a0123',
    ),
    'symfony/cache' => 
    array (
      'pretty_version' => 'v5.4.6',
      'version' => '5.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c0718d0e01ac14251a45cc9c8b93716ec41ae64b',
    ),
    'symfony/cache-contracts' => 
    array (
      'pretty_version' => 'v2.5.0',
      'version' => '2.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ac2e168102a2e06a2624f0379bde94cd5854ced2',
    ),
    'symfony/cache-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0',
      ),
    ),
    'symfony/config' => 
    array (
      'pretty_version' => 'v5.4.3',
      'version' => '5.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd65e1bd990c740e31feb07d2b0927b8d4df9956f',
    ),
    'symfony/console' => 
    array (
      'pretty_version' => 'v5.4.5',
      'version' => '5.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd8111acc99876953f52fe16d4c50eb60940d49ad',
    ),
    'symfony/css-selector' => 
    array (
      'pretty_version' => 'v5.4.3',
      'version' => '5.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b0a190285cd95cb019237851205b8140ef6e368e',
    ),
    'symfony/dependency-injection' => 
    array (
      'pretty_version' => 'v5.4.6',
      'version' => '5.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '0828fa3e6e436243dbb3dc85abe6b698b3876b89',
    ),
    'symfony/deprecation-contracts' => 
    array (
      'pretty_version' => 'v3.0.0',
      'version' => '3.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c726b64c1ccfe2896cb7df2e1331c357ad1c8ced',
    ),
    'symfony/doctrine-bridge' => 
    array (
      'pretty_version' => 'v5.4.6',
      'version' => '5.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ca55e1f888b7e5b358736bb6c8e33482939993cc',
    ),
    'symfony/doctrine-messenger' => 
    array (
      'pretty_version' => 'v5.4.3',
      'version' => '5.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '335428f424807178c57b89fd2bed714fba4bf4af',
    ),
    'symfony/dom-crawler' => 
    array (
      'pretty_version' => 'v5.4.6',
      'version' => '5.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c0bda97480d96337bd3866026159a8b358665457',
    ),
    'symfony/dotenv' => 
    array (
      'pretty_version' => 'v5.4.5',
      'version' => '5.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '83a2310904a4f5d4f42526227b5a578ac82232a9',
    ),
    'symfony/error-handler' => 
    array (
      'pretty_version' => 'v5.4.3',
      'version' => '5.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c4ffc2cd919950d13c8c9ce32a70c70214c3ffc5',
    ),
    'symfony/event-dispatcher' => 
    array (
      'pretty_version' => 'v5.4.3',
      'version' => '5.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dec8a9f58d20df252b9cd89f1c6c1530f747685d',
    ),
    'symfony/event-dispatcher-contracts' => 
    array (
      'pretty_version' => 'v3.0.0',
      'version' => '3.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'aa5422287b75594b90ee9cd807caf8f0df491385',
    ),
    'symfony/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '2.0',
      ),
    ),
    'symfony/expression-language' => 
    array (
      'pretty_version' => 'v5.4.3',
      'version' => '5.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c68c6d1a308f6e2a1382bdb3a317959e1ee9aa08',
    ),
    'symfony/filesystem' => 
    array (
      'pretty_version' => 'v5.4.6',
      'version' => '5.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd53a45039974952af7f7ebc461ccdd4295e29440',
    ),
    'symfony/finder' => 
    array (
      'pretty_version' => 'v5.4.3',
      'version' => '5.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '231313534dded84c7ecaa79d14bc5da4ccb69b7d',
    ),
    'symfony/flex' => 
    array (
      'pretty_version' => 'v1.18.5',
      'version' => '1.18.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '10e438f53a972439675dc720706f0cd5c0ed94f1',
    ),
    'symfony/form' => 
    array (
      'pretty_version' => 'v5.4.5',
      'version' => '5.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '18f4f8209d2db06fc3cf5ba3b2eb8e4706b34aac',
    ),
    'symfony/framework-bundle' => 
    array (
      'pretty_version' => 'v5.4.6',
      'version' => '5.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '76ea755f30924924ea37a28e098df61679efcb63',
    ),
    'symfony/http-client' => 
    array (
      'pretty_version' => 'v5.4.5',
      'version' => '5.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fab84798694e45b4571d305125215699eb2b1f73',
    ),
    'symfony/http-client-contracts' => 
    array (
      'pretty_version' => 'v2.5.0',
      'version' => '2.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ec82e57b5b714dbb69300d348bd840b345e24166',
    ),
    'symfony/http-client-implementation' => 
    array (
      'provided' => 
      array (
        0 => '2.4',
      ),
    ),
    'symfony/http-foundation' => 
    array (
      'pretty_version' => 'v5.4.6',
      'version' => '5.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '34e89bc147633c0f9dd6caaaf56da3b806a21465',
    ),
    'symfony/http-kernel' => 
    array (
      'pretty_version' => 'v5.4.6',
      'version' => '5.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd41f29ae9af1b5f40c7ebcddf09082953229411d',
    ),
    'symfony/intl' => 
    array (
      'pretty_version' => 'v5.4.5',
      'version' => '5.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '47a1413da15ff840d7c419fa704d32caba3276ac',
    ),
    'symfony/mailer' => 
    array (
      'pretty_version' => 'v5.4.5',
      'version' => '5.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f6e927ec95c957131e6b2c78790e1a6d4c576447',
    ),
    'symfony/maker-bundle' => 
    array (
      'pretty_version' => 'v1.38.0',
      'version' => '1.38.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '143024ab0e426285d3d9b7f6a3ce51e12a9d8ec5',
    ),
    'symfony/messenger' => 
    array (
      'pretty_version' => 'v5.4.3',
      'version' => '5.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '4319c25b76573cff46f112ee8cc83fffa4b97579',
    ),
    'symfony/mime' => 
    array (
      'pretty_version' => 'v5.4.3',
      'version' => '5.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e1503cfb5c9a225350f549d3bb99296f4abfb80f',
    ),
    'symfony/monolog-bridge' => 
    array (
      'pretty_version' => 'v5.4.3',
      'version' => '5.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '4b56e17c443e7092895477f047f2a70f324f984c',
    ),
    'symfony/monolog-bundle' => 
    array (
      'pretty_version' => 'v3.7.1',
      'version' => '3.7.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fde12fc628162787a4e53877abadc30047fd868b',
    ),
    'symfony/notifier' => 
    array (
      'pretty_version' => 'v5.4.6',
      'version' => '5.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cf926e6ffc3d3c4aba412f722dd61faf39944eaa',
    ),
    'symfony/options-resolver' => 
    array (
      'pretty_version' => 'v5.4.3',
      'version' => '5.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cc1147cb11af1b43f503ac18f31aa3bec213aba8',
    ),
    'symfony/password-hasher' => 
    array (
      'pretty_version' => 'v5.4.3',
      'version' => '5.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b5ed59c4536d8386cd37bb86df2b7bd5fbbd46d4',
    ),
    'symfony/polyfill-ctype' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'symfony/polyfill-iconv' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'symfony/polyfill-intl-grapheme' => 
    array (
      'pretty_version' => 'v1.25.0',
      'version' => '1.25.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '81b86b50cf841a64252b439e738e97f4a34e2783',
    ),
    'symfony/polyfill-intl-icu' => 
    array (
      'pretty_version' => 'v1.25.0',
      'version' => '1.25.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c023a439b8551e320cc3c8433b198e408a623af1',
    ),
    'symfony/polyfill-intl-idn' => 
    array (
      'pretty_version' => 'v1.25.0',
      'version' => '1.25.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '749045c69efb97c70d25d7463abba812e91f3a44',
    ),
    'symfony/polyfill-intl-normalizer' => 
    array (
      'pretty_version' => 'v1.25.0',
      'version' => '1.25.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8590a5f561694770bdcd3f9b5c69dde6945028e8',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.25.0',
      'version' => '1.25.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '0abb51d2f102e00a4eefcf46ba7fec406d245825',
    ),
    'symfony/polyfill-php72' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'symfony/polyfill-php73' => 
    array (
      'pretty_version' => 'v1.25.0',
      'version' => '1.25.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cc5db0e22b3cb4111010e48785a97f670b350ca5',
    ),
    'symfony/polyfill-php80' => 
    array (
      'pretty_version' => 'v1.25.0',
      'version' => '1.25.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '4407588e0d3f1f52efb65fbe92babe41f37fe50c',
    ),
    'symfony/polyfill-php81' => 
    array (
      'pretty_version' => 'v1.25.0',
      'version' => '1.25.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5de4ba2d41b15f9bd0e19b2ab9674135813ec98f',
    ),
    'symfony/process' => 
    array (
      'pretty_version' => 'v5.4.5',
      'version' => '5.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '95440409896f90a5f85db07a32b517ecec17fa4c',
    ),
    'symfony/property-access' => 
    array (
      'pretty_version' => 'v5.4.5',
      'version' => '5.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '95534d912f61117d3bce2d4456419ee2ee548d7a',
    ),
    'symfony/property-info' => 
    array (
      'pretty_version' => 'v5.4.3',
      'version' => '5.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bcc2b6904cbcf16b2e5d618da16117cd8e132f9a',
    ),
    'symfony/proxy-manager-bridge' => 
    array (
      'pretty_version' => 'v5.4.6',
      'version' => '5.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e6936de1cc8f4e6e3b2264aef186ca21695aee8e',
    ),
    'symfony/redis-messenger' => 
    array (
      'pretty_version' => 'v5.4.6',
      'version' => '5.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '6b14778e0a6295af023fec637c7b38f918c1a08d',
    ),
    'symfony/routing' => 
    array (
      'pretty_version' => 'v5.4.3',
      'version' => '5.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '44b29c7a94e867ccde1da604792f11a469958981',
    ),
    'symfony/runtime' => 
    array (
      'pretty_version' => 'v5.4.5',
      'version' => '5.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '06fdd940ebf240ed7d9c9832cd97bf3133847316',
    ),
    'symfony/security-bundle' => 
    array (
      'pretty_version' => 'v5.4.5',
      'version' => '5.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd6ae2f605fa8e4e0860c1a6574271af2bb4ba16c',
    ),
    'symfony/security-core' => 
    array (
      'pretty_version' => 'v5.4.5',
      'version' => '5.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '11d815ccbff929899a4ec545f9f85185071abd12',
    ),
    'symfony/security-csrf' => 
    array (
      'pretty_version' => 'v5.4.3',
      'version' => '5.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '57c1c252ca756289c2b61327e08fb10be3936956',
    ),
    'symfony/security-guard' => 
    array (
      'pretty_version' => 'v5.4.3',
      'version' => '5.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '3d68d9f8e162f6655eb0a0237b9f333a82a19da9',
    ),
    'symfony/security-http' => 
    array (
      'pretty_version' => 'v5.4.5',
      'version' => '5.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '53d572f06fc438faae3713cc97d186d941919748',
    ),
    'symfony/serializer' => 
    array (
      'pretty_version' => 'v5.4.6',
      'version' => '5.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '851007ff0781d06d1bf9890069ab19ac1610a027',
    ),
    'symfony/service-contracts' => 
    array (
      'pretty_version' => 'v2.4.1',
      'version' => '2.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd664541b99d6fb0247ec5ff32e87238582236204',
    ),
    'symfony/service-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0',
      ),
    ),
    'symfony/stopwatch' => 
    array (
      'pretty_version' => 'v5.4.5',
      'version' => '5.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '4d04b5c24f3c9a1a168a131f6cbe297155bc0d30',
    ),
    'symfony/string' => 
    array (
      'pretty_version' => 'v5.4.3',
      'version' => '5.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '92043b7d8383e48104e411bc9434b260dbeb5a10',
    ),
    'symfony/translation' => 
    array (
      'pretty_version' => 'v5.4.6',
      'version' => '5.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a7ca9fdfffb0174209440c2ffa1dee228e15d95b',
    ),
    'symfony/translation-contracts' => 
    array (
      'pretty_version' => 'v2.5.0',
      'version' => '2.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd28150f0f44ce854e942b671fc2620a98aae1b1e',
    ),
    'symfony/translation-implementation' => 
    array (
      'provided' => 
      array (
        0 => '2.3',
      ),
    ),
    'symfony/twig-bridge' => 
    array (
      'pretty_version' => 'v5.4.5',
      'version' => '5.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '648c8694a9470ae4aaf64cbce1b640f5941fd7c9',
    ),
    'symfony/twig-bundle' => 
    array (
      'pretty_version' => 'v5.4.3',
      'version' => '5.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '45ae3ee8155f93042a1033b166a7a3ed57b96a92',
    ),
    'symfony/validator' => 
    array (
      'pretty_version' => 'v5.4.6',
      'version' => '5.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ab461eab209e3be062ba9c609d37b37e8364dbe4',
    ),
    'symfony/var-dumper' => 
    array (
      'pretty_version' => 'v5.4.6',
      'version' => '5.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '294e9da6e2e0dd404e983daa5aa74253d92c05d0',
    ),
    'symfony/var-exporter' => 
    array (
      'pretty_version' => 'v5.4.6',
      'version' => '5.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '49e2355fe6f59ea30c18ebb68edf13b7e20582e5',
    ),
    'symfony/web-link' => 
    array (
      'pretty_version' => 'v5.4.3',
      'version' => '5.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '8b9b073390359549fec5f5d797f23bbe9e2997a5',
    ),
    'symfony/web-profiler-bundle' => 
    array (
      'pretty_version' => 'v5.4.6',
      'version' => '5.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '1497b1d22c2807a77563439f8ec489407a989d59',
    ),
    'symfony/webapp-meta' => 
    array (
      'pretty_version' => 'v1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'df062f539ed5203b8ba1e5cdd9b1745afa983d69',
    ),
    'symfony/webpack-encore-bundle' => 
    array (
      'pretty_version' => 'v1.14.0',
      'version' => '1.14.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1729c314574f32e49f9660a0cee870f7e603864f',
    ),
    'symfony/yaml' => 
    array (
      'pretty_version' => 'v5.4.3',
      'version' => '5.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e80f87d2c9495966768310fc531b487ce64237a2',
    ),
    'twig/extra-bundle' => 
    array (
      'pretty_version' => 'v3.3.8',
      'version' => '3.3.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '2e58256b0e9fe52f30149347c0547e4633304765',
    ),
    'twig/twig' => 
    array (
      'pretty_version' => 'v3.3.9',
      'version' => '3.3.9.0',
      'aliases' => 
      array (
      ),
      'reference' => '6ff9b0e440fa66f97f207e181c41340ddfa5683d',
    ),
    'webmozart/assert' => 
    array (
      'pretty_version' => '1.10.0',
      'version' => '1.10.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6964c76c7804814a842473e0c8fd15bab0f18e25',
    ),
  ),
);
private static $canGetVendors;
private static $installedByVendor = array();







public static function getInstalledPackages()
{
$packages = array();
foreach (self::getInstalled() as $installed) {
$packages[] = array_keys($installed['versions']);
}


if (1 === \count($packages)) {
return $packages[0];
}

return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
}









public static function isInstalled($packageName)
{
foreach (self::getInstalled() as $installed) {
if (isset($installed['versions'][$packageName])) {
return true;
}
}

return false;
}














public static function satisfies(VersionParser $parser, $packageName, $constraint)
{
$constraint = $parser->parseConstraints($constraint);
$provided = $parser->parseConstraints(self::getVersionRanges($packageName));

return $provided->matches($constraint);
}










public static function getVersionRanges($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

$ranges = array();
if (isset($installed['versions'][$packageName]['pretty_version'])) {
$ranges[] = $installed['versions'][$packageName]['pretty_version'];
}
if (array_key_exists('aliases', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
}
if (array_key_exists('replaced', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
}
if (array_key_exists('provided', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
}

return implode(' || ', $ranges);
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['version'])) {
return null;
}

return $installed['versions'][$packageName]['version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getPrettyVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['pretty_version'])) {
return null;
}

return $installed['versions'][$packageName]['pretty_version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getReference($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['reference'])) {
return null;
}

return $installed['versions'][$packageName]['reference'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getRootPackage()
{
$installed = self::getInstalled();

return $installed[0]['root'];
}







public static function getRawData()
{
return self::$installed;
}



















public static function reload($data)
{
self::$installed = $data;
self::$installedByVendor = array();
}




private static function getInstalled()
{
if (null === self::$canGetVendors) {
self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
}

$installed = array();

if (self::$canGetVendors) {

 foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
if (isset(self::$installedByVendor[$vendorDir])) {
$installed[] = self::$installedByVendor[$vendorDir];
} elseif (is_file($vendorDir.'/composer/installed.php')) {
$installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
}
}
}

$installed[] = self::$installed;

return $installed;
}
}
