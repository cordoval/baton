<?php
namespace Baton;

use Composer\Package\BasePackage;

class JoomlaInstaller extends BaseInstaller
{

    protected $locations = array(
        'component'    => 'components/{name}/',
        'module'       => 'modules/{name}/',
        'template'     => 'templates/{name}/',
        'plugin'       => 'plugins/{name}/',
        'library'      => 'libraries/{name}/',
    );
    protected $default = 'plugin';

    // TODO: Add inflector for mod_ and com_ names

}