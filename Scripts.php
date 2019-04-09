<?php

namespace jakubciszak\mgcodestandards;

use Composer\Installer\PackageEvent as Event;
use Symfony\Component\Filesystem\Filesystem;

/**
 *
 **/
class Scripts
{
    public static function pathes(Event $event)
    {
        // wet get ALL installed packages
        $packages = $event->getComposer()->getRepositoryManager()
            ->getLocalRepository()->getPackages();
        print_r ($event->getArguments());
        $installationManager = $event->getComposer()->getInstallationManager();
        foreach ($packages as $package) {
            $installPath = $installationManager->getInstallPath($package);
            print $package->getName() . PHP_EOL;
            print $installPath . PHP_EOL . ' === ' . PHP_EOL;
        }

    }

}