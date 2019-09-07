<?php

namespace OpenEMR\Composer\ModuleInstallerPlugin;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class CustomModuleInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        return 'interface' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'custom_modules' 
		. DIRECTORY_SEPARATOR  . $package->getPrettyName();
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'openemr-module' === $packageType;
    }
}
